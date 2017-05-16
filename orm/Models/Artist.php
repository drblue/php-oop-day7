<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

class Artist extends Model {

	protected $fillable = [ "name" ];

	public function albums() {
		return $this->hasMany(Album::class);
	}

	public function setName($name) {
		$this->name = $name;
	}
}
