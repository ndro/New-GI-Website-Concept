<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Request;
use Auth;
use Hash;

use app\User;

class AdminController extends Controller {
	
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
     * Responds to requests to GET /users
     */
    public function getIndex()
    {
        return view('admin/dashboard',array('user'=>$this->username, 'nav_dashboard'=>''));
    }

    /**
     * Display all user
     */
    public function getAll()
    {
        $users = User::get();
		
		return view('auth/list',array('user'=>$this->username, 'users'=>$users));
    }

    /**
     * Form to create new user
     */
    public function getCreateUser()
    {
		return view('admin/account/newUser',array('user'=>$this->username));
    }

    /**
     * Form to create new user
     */
    public function postSave()
    {
		$name = Request::input('name');
		$email = Request::input('email');
		$password = Hash::make(Request::input('password'));
		
		$user = new User;
		$user->name = $name;
		$user->email = $email;
		$user->password = $password;
		$user->save();
	
		return redirect('zero/all')->with('success', true);
    }

    /**
     * Form to edit user
     */
    public function getEdit($id)
    {
		$user = User::find($id);
		
		return view('admin/account/editUser',array('user'=>$this->username, 'd_user'=>$user));
    }
	
	/**
     * Update user
     */
	public function postEdit()
	{
		$id = Request::input('id');
		$name = Request::input('name');
		$email = Request::input('email');
		$password = Hash::make(Request::input('password'));
		
		$user = User::find($id);
		$user->name = $name;
		$user->email = $email;
		$user->password = $password;
		$user->save();
		
		return redirect('zero/all')->with('update', true);
	}
	
	/**
     * Delete data by id
     */
	public function getDelete($id)
	{
		$user = User::find($id);
		$user->delete();
		
		return redirect('zero/all')->with('delete', true);
	}

}