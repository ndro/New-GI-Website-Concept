<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model {

    protected $table = 'event';

    protected $fillable = ['*'];

    protected $date = ['publish_date', 'start_datetime', 'end_datetime'];

    /**
     * Get user from certain event
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function get_user() {
        return $this->belongsTo('App\User', 'user_id');
    }

    /**
     * Get category of event
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function get_category() {
        return $this->belongsTo('App\Category', 'category_id');
    }
}
