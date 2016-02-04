<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Post;
use App\Category;
use App\Event;

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
		$event = Event::with('get_category')->where('is_published', '=', 1)->get();
		
		return view('home',array('posts'=>$post, 'events'=>$event));
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


	public function getNewsDetail($id)
	{
		$post = Post::find($id);
		return view('newsdetail', array('post'=>$post));
	}


	public function getEventDetail($id)
	{
		$event = Event::find($id);
		return view('eventdetail', array('event'=>$event));
	}


	public function getPublishedPost()
	{
		$post = Post::with('get_category')->where('is_published', '=', 1)->get();

		return view('news', array('posts'=>$post));
	}


	public function getPublishedEvent()
	{
		$event = Event::with('get_category')->where('is_published', '=', 1)->get();

		return view('events', array('events'=>$event));
	}
}
