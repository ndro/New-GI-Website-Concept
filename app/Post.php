<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model {
	
	use SoftDeletes;

	protected $table = 'post';

    protected $fillable = ['*'];

    protected $date = ['publish_date'];

    /**
     * Get user from certain post
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function get_user() {
        return $this->belongsTo('App\User', 'user_id');
    }

    /**
     * Get category of post
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function get_category() {
        return $this->belongsTo('App\Category', 'category_id');
    }
}
