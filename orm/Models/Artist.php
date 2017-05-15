<?php

use Illuminate\Database\Eloquent\Model as Model;

class Artist extends Model {

	protected $fillable = [ "name" ];
	public $timestamps = false;

	protected $id;
	protected $name;

	public function albums() {
		return $this->hasMany(Album::class);
	}
}
