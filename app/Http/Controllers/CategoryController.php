<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Request;
use Auth;

use App\Category;

class CategoryController extends Controller {

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
	 * Display a listing of the category
	 */
	public function getIndex()
	{
		$categories = Category::get();
		
		return view('admin/category/listCategory',array('user'=>$this->username, 'nav_category'=>'', 'categories'=>$categories));
	}
	
	/**
	 * Save a new category
	 */
	public function postSave()
	{
		$label = Request::input('category');
		
		$category = new Category;
		$category->label = $label;
		$category->save();
		
		return redirect('category/index')->with('success', true);
	}
	
	/**
	 * Display single category
	 */
	public function getEdit($id)
	{
		$category = Category::find($id);
		
		return view('admin/category/editCategory',array('user'=>$this->username, 'nav_category'=>'', 'category'=>$category));
	}
	
	/**
	 * Update category
	 */
	public function postEdit()
	{
		$id = Request::input('id');
		$label = Request::input('category');
		
		$category = Category::find($id);
		$category->label = $label;
		$category->save();
		
		return redirect('category/index')->with('update', true);
	}
	
	/**
	 * Delete Permanent post by id
	 */
	public function getDelete($id)
	{
		$category = Category::find($id);
		$category->delete();
		
		return redirect('category/index')->with('delete', true);
	}
}
