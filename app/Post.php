<?php

namespace App;
use carbon\carbon;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $dates = ['published_at'];

    public function author()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function getImageUrlAttribute($value)
    {
        $imageUrl   =   "";

        if( ! is_null($this->image))
        {
            $imagePath  =   public_path(). "/img/". $this->image;
            if(file_exists($imagePath)) $imageUrl = asset("img/". $this->image);
        }

        return $imageUrl;
    }

    public function getImageThumbUrlAttribute($value)
    {
        $imageUrl   =   "";

        if( ! is_null($this->image))
        {
            $ext        =   substr(strrchr($this->image, '.'), 1);
            $thumbnail  =   str_replace(".{$ext}", "_thumb.{$ext}", $this->image);
            $imagePath  =   public_path(). "/img/". $thumbnail;
            if(file_exists($imagePath)) $imageUrl = asset("img/". $thumbnail);
        }

        return $imageUrl;
    }

    public function getDateAttribute($value)
    {
        return $this->published_at->diffForHumans();
    }

    public function scopeLatestFirst($query)
    {
        return $query->orderBy('created_at','desc');
    }

    public function scopePopular($query)
    {
        return $query->orderBy('view_count','desc');
    }

    public function scopePublished($query)
    {
        return $query->where("published_at", "<=", Carbon::now());
    }
}
