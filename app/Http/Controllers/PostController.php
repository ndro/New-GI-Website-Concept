<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Request;
use Auth;

use App\Post;
use App\Category;

class PostController extends Controller {

	protected $username;
	
	public function __construct()
	{
		$this->middleware('auth');
		if(Auth::user())
		{
			$this->username = Auth::user()->name;
		}
	}
	
	/**
	 * Display a listing of all post
	 */
	public function getIndex()
	{
		$post = Post::with('get_category')->where('is_published', '=', 0)->get();
		
		return view('admin/post/listPost',array('user'=>$this->username, 'nav_post'=>'', 'nav_list_post'=>'', 'posts'=>$post));
	}
	
	/**
	 * Display a listing of published post
	 */
	public function getPublishedPost()
	{
		$post = Post::with('get_category')->where('is_published', '=', 1)->get();
		
		return view('admin/post/publishedPost',array('user'=>$this->username, 'nav_post'=>'', 'nav_pub_post'=>'', 'posts'=>$post));
	}
	
	/**
	 * Display a listing of deleted post
	 */
	public function getDeletedPost()
	{
		$post = Post::onlyTrashed()->get();
		
		return view('admin/post/deletedPost',array('user'=>$this->username, 'nav_post'=>'', 'nav_del_post'=>'', 'posts'=>$post));
	}
	
	/**
	 * Form to create new post
	 */
	public function getCreatePost()
	{
		$categories = Category::get();
		
		return view('admin/post/newPost',array('user'=>$this->username, 'nav_new_post'=>'', 'categories'=>$categories));
	}
	
	/**
	 * Save a new post
	 */
	public function postSave()
	{
		$title = Request::input('title');
		$short_desc = Request::input('short_desc');
		$long_desc = Request::input('content');
		
		if(Request::input('category') !== null)
		{
			$category_id = Request::input('category');
		}
		else 
		{
			$category_id = null;
		}
		
		$post = new Post;
		$post->user_id = Auth::user()->id;
		$post->category_id = $category_id;
		$post->title = $title;
		$post->short_desc = $short_desc;
		$post->long_desc = $long_desc;
		$post->save();
		
		return redirect('post/create-post')->with('success', true);
	}
	
	/**
	 * Display single post
	 */
	public function getDetail($id, $page)
	{
		$post = Post::with('get_category')->find($id);
		
		if($page == 'unpublished')
		{
			return view('admin/post/detailPost',array('user'=>$this->username, 'nav_post'=>'', 'nav_list_post'=>'', 'post'=>$post, 'page'=>$page));
		}
		elseif($page == 'published')
		{
			return view('admin/post/detailPost',array('user'=>$this->username, 'nav_post'=>'', 'nav_pub_post'=>'', 'post'=>$post, 'page'=>$page));
		}
	}

	/**
	 * Get single post by id
	 */
	public function getEdit($id, $page)
	{
		$post = Post::find($id);
		$categories = Category::get();
		
		return view('admin/post/editPost',array('user'=>$this->username, 'nav_new_post'=>'', 'categories'=>$categories, 'post'=>$post, 'page'=>$page));
	}
	
	/**
	 * Update post
	 */
	public function postEdit()
	{
		$id = Request::input('id');
		$page = Request::input('page');
		$title = Request::input('title');
		$short_desc = Request::input('short_desc');
		$long_desc = Request::input('content');
		
		if(Request::input('category') !== null)
		{
			$category_id = Request::input('category');
		}
		else 
		{
			$category_id = null;
		}
		
		$post = Post::find($id);
		$post->user_id = Auth::user()->id;
		$post->category_id = $category_id;
		$post->title = $title;
		$post->short_desc = $short_desc;
		$post->long_desc = $long_desc;
		$post->save();
		
		if($page == 'unpublished')
		{
			return redirect('post/index')->with('update', true);
		}
		elseif($page == 'published')
		{
			return redirect('post/published-post')->with('update', true);
		}
	}
	
	/**
	 * Soft Delete post by id
	 */
	public function getSoftDelete($id, $page)
	{
		$post = Post::find($id);
		$post->is_published = 0;
		$post->save();
		$post->delete();
		
		if($page == 'unpublished')
		{
			return redirect('post/index')->with('delete', true);
		}
		elseif($page == 'published')
		{
			return redirect('post/published-post')->with('delete', true);
		}
	}
	
	/**
	 * Delete Permanent post by id
	 */
	public function getDelete($id)
	{
		$post = Post::withTrashed()->find($id);
		$post->forceDelete();
		
		return redirect('post/deleted-post')->with('delete', true);
	}
	
	/**
	 * Restored post from trash
	 */
	public function getRestore($id)
	{
		$post = Post::withTrashed()->find($id);
		$post->restore();
		
		return redirect('post/deleted-post')->with('restore', true);
	}
	
	/**
	 * Publish post
	 */
	public function getPublish($id)
	{
		$post = Post::find($id);
		$post->publish_date = date('Y-m-d');
		$post->is_published = 1;
		$post->save();
		
		return redirect('post/detail/'.$id.'/published')->with('success', true);
	}
	
	/**
	 * Unpublish post
	 */
	public function getUnpublish($id)
	{
		$post = Post::find($id);
		$post->publish_date = null;
		$post->is_published = 0;
		$post->save();
		
		return redirect('post/detail/'.$id.'/unpublished')->with('success', true);
	}
}
