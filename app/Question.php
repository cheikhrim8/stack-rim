<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Question extends Model
{

    protected $guarded = [];

    public function setTitleAttribute($value){
        $this->attributes['title'] = $value;
        $this->attributes['slug'] = Str::slug($value, '-');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

   /* public function getAttributeValue($key)
    {
        $this->attributes['slug'] = $key;
    }*/

    public function user(){
        return $this->belongsTo(User::class);
    }
}
