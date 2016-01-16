<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Request;
use Auth;

use App\Post;
use App\Event;
use App\Category;

use DB;

class SearchController extends Controller {

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
	 * Display a listing of published post
	 */
	public function postSearch()
	{
		$keyword = Request::input('post-search');
		
		$search = DB::table('post')
                    ->where('title', 'like', '%'.$keyword.'%')
                    ->orwhere('short_desc', 'like', '%'.$keyword.'%')
                    ->orwhere('long_desc', 'like', '%'.$keyword.'%')
					->get();
		
		return view('admin/searchResult',array('user'=>$this->username, 'searchs'=>$search, 'keyword'=>$keyword));
	}

}
