<?php

namespace Conner\Likeable;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Like extends Model
{
	protected $table = 'likeable_likes';
	public $timestamps = true;
	protected $fillable = ['likeable_id', 'likeable_type', 'user_id'];

	public function likeable()
	{
		return $this->morphTo();
	}
}