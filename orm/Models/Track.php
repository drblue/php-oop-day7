<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

class Track extends Model {

	protected $fillable = [ "name", "url" ];
	public $timestamps = false;

	protected $id;
	protected $name;
	protected $url;

	public function artist() {
		return $this->belongsTo(Artist::class);
	}

	public function album() {
		return $this->belongsTo(Album::class);
	}
}
