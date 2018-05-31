<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name'
    ];

    public function jobs() {
        return $this->hasMany('App\Job', 'category_id', 'id');
    }

    public $timestamps = false;
}
