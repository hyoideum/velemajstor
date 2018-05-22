<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $fillable = [
        'title', 'description', 'user_id', 'category_id', 'location_id'
    ];

    public function user() {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }

    public function category() {
        return $this->belongsTo('App\Category', 'category_id', 'id');
    }

    public function location() {
        return $this->belongsTo('App\Location', 'location_id', 'id');
    }
}
