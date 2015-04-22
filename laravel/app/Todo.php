<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class todo extends Model {

	protected $fillable =[
	'todo',
	'status'
	];

	public function user(){
		return $this->belongsTo('app\User');
	}

    
}

