<?php

use Illuminate\Database\Eloquent\Model as Model;

class Album extends Model {

	protected $fillable = [ "name", "releaseYear", "coverPhoto", "recordLabel" ];
	public $timestamps = false;

	protected $id;
	protected $name;
	protected $releaseYear;
	protected $coverPhoto;
	protected $recordLabel;

	public function artist() {
		return $this->belongsTo(Artist::class);
	}
}
