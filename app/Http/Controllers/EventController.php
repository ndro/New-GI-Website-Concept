<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Request;
use Auth;

use App\Event;
use App\Category;

class EventController extends Controller {

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
	 * Display a listing of all event
	 */
	public function getIndex()
	{
		$events = Event::with('get_category')->where('is_published', '=', 0)->get();
		
		return view('admin/event/listEvent',array('user'=>$this->username, 'nav_event'=>'', 'nav_list_event'=>'', 'events'=>$events));
	}
	
	/**
	 * Display a listing of published post
	 */
	public function getPublishedEvent()
	{
		$events = Event::with('get_category')->where('is_published', '=', 1)->get();
		
		return view('admin/event/publishedEvent',array('user'=>$this->username, 'nav_event'=>'', 'nav_pub_event'=>'', 'events'=>$events));
	}
	
	/**
	 * Form to create new event
	 */
	public function getCreateEvent()
	{
		$categories = Category::get();
		
		return view('admin/event/newEvent',array('user'=>$this->username, 'nav_event'=>'', 'nav_new_event'=>'', 'categories'=>$categories));
	}
	
	/**
	 * Save a new event
	 */
	public function postSave()
	{
		$title = Request::input('title');
		$location = Request::input('location');
		$short_desc = Request::input('short_desc');
		$guest = Request::input('guest');
		$long_desc = Request::input('content');
		
		// Start Datetime & End Datetime
		$get_datetime = explode("-", Request::input('date_event'));
		
		// start_datetime
		$v_start = explode(" ", $get_datetime[0]);
		$v_start[0] = str_replace('/', '-', $v_start[0]);	// from yyyy/mm/dd to yyyy-mm-dd
		
		$start_datetime = $v_start[0].' '.$v_start[1];
		
		// end_datetime
		$v_end = explode(" ", $get_datetime[1]);
		$v_end[1] = str_replace('/', '-', $v_end[1]);	// from yyyy/mm/dd to yyyy-mm-dd
		
		$end_datetime = $v_end[1].' '.$v_end[2];
		
		
		// category
		if(Request::input('category') !== null)
		{
			$category_id = Request::input('category');
		}
		else 
		{
			$category_id = null;
		}
		
		$event = new Event;
		$event->user_id = Auth::user()->id;
		$event->category_id = $category_id;
		$event->title = $title;
		$event->location = $location;
		$event->short_desc = $short_desc;
		$event->guest = $guest;
		$event->start_datetime = $start_datetime;
		$event->end_datetime = $end_datetime;
		$event->long_desc = $long_desc;
		$event->save();	
		
		return redirect('event/create-event')->with('success', true);
	}
	
	/**
	 * Display single event
	 */
	public function getDetail($id, $page)
	{
		$event = Event::with('get_category')->find($id);
		
		if($page == 'unpublished')
		{
			return view('admin/event/detailEvent',array('user'=>$this->username, 'nav_event'=>'', 'nav_list_event'=>'', 'event'=>$event, 'page'=>$page));
		}
		elseif($page == 'published')
		{
			return view('admin/event/detailEvent',array('user'=>$this->username, 'nav_event'=>'', 'nav_pub_event'=>'', 'event'=>$event, 'page'=>$page));
		}
	}
	
	/**
	 * Get single event by id
	 */
	public function getEdit($id, $page)
	{
		$event = Event::find($id);
		$categories = Category::get();
		
		return view('admin/event/editEvent',array('user'=>$this->username, 'nav_new_post'=>'', 'categories'=>$categories, 'event'=>$event, 'page'=>$page));
	}
	
	/**
	 * Delete Permanent event by id
	 */
	public function getDelete($id, $page)
	{
		$event = Event::find($id);
		$event->delete();
		
		if($page == 'unpublished')
		{
			return redirect('event/index')->with('delete', true);
		}
		elseif($page == 'published')
		{
			return redirect('event/published-event')->with('delete', true);
		}
	}
	
	/**
	 * Restored event from trash
	 */
	public function getPublish($id)
	{
		$event = Event::find($id);
		$event->publish_date = date('Y-m-d');
		$event->is_published = 1;
		$event->save();
		
		return redirect('event/detail/'.$id.'/published')->with('success', true);
	}
	
	/**
	 * Restored event from trash
	 */
	public function getUnpublish($id)
	{
		$event = Event::find($id);
		$event->publish_date = null;
		$event->is_published = 0;
		$event->save();
		
		return redirect('event/detail/'.$id.'/unpublished')->with('success', true);
	}

	public function getCalendar()
	{
		$events = Event::with('get_category')->where('is_published', '=', 1)->get();
		
		return view('admin/event/calendar',array('user'=>$this->username, 'nav_event'=>'', 'nav_pub_event'=>'', 'events'=>$events));
	}

}
