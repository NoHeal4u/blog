<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{	
	protected $fillable = ['title','body','is_published']; //ukucali fillable niz da bi radio all controler, tj create metod
	public static function getPublished()
	{
		return self::where('is_published',true)->get();

	}
    //protected $table = 'posts'; - u slucaju da userem naming

    public function comments() {
    	return $this->hasMany('App\Comment');
    }

    public function user()
    {
    	return $this->belongsTo('App\User');
    }
}
