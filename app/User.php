<?php namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract {

	use Authenticatable, CanResetPassword;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['name', 'email', 'password'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = ['password', 'remember_token'];

	/**
	 * Get post from certain user
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\HasMany
	 */
	public function get_post() {
		return $this->hasMany('App\Post');
	}

	/**
	 * Get event from certain user
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\HasMany
	 */
	public function get_event() {
		return $this->hasMany('App\Event');
	}

}
