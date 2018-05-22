<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $fillable = [
        'location_name'
    ];

    public function job_location() {
        return $this->hasMany('App\Job', 'location_id', 'id');
    }

    public $timestamps = false;
}
