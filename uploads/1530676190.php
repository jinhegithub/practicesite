<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class chat extends Model
{
    protected $fillable =['data'];


     public function messages()
    {
        return $this->hasMany('App\messenger','chat_id');
    }

    public function users()
    {
        return $this->belongsToMany('App\User','chat_user');
    }



}
