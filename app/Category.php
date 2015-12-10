<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model {

    protected $table = 'category';

    protected $fillable = ['*'];

    /**
     * Get post from certain category
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function get_post() {
        return $this->hasMany('App\Post');
    }

    /**
     * Get event from certain category
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function get_event() {
        return $this->hasMany('App\Event');
    }

}
