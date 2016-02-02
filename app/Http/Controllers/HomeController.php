<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Post;
use App\Category;

use Illuminate\Http\Request;

class HomeController extends Controller {

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		//$this->middleware('guest');
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function getIndex()
	{
		$post = Post::with('get_category')->where('is_published', '=', 1)->get();
		
		return view('home',array('posts'=>$post));
	}

	/**
		* Show all posts
	*/	
	public function getPosts()
	{
		return view('news');
	}

	/**
		* Show all events
	*/	
	public function getEvents()
	{
		return view('events');
	}

	/**
	 * Display the specified news.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function getShow($id)
	{
		//
	}

	public function getPublishedPost()
	{
		$post = Post::with('get_category')->where('is_published', '=', 1)->get();
		
		return view('home',array('posts'=>$post));
	}

}
