<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable =[
        'user_id','title'
    ];
    public function user(){
        return $this->belongsTo(User::class,'user_id','id');
    }
    public function tags(){
        return $this->belongsToMany(Post::class,'post_tag','post_id','tag_id')->withTimestamps()->withPivot('status');
        //return $this->belongsToMany(Post::class,'post_tag','post_id','tag_id')->withTimestamps();
    }
}
