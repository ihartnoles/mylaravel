<?php

class Post extends Eloquent {
	
	protected $fillable = array('body');

	public function user()
	{
		return $this->belongsTo('User');
	}

	/** 
	* Ardent validation rules
	*/
	public static $rules = array(
		'body'  => 'text',
		'user_id' => 'factory|User'
	);

	/**
	 * Factory
	 */
	public static $factory = array(
	  'body'  => 'text',
	  'user_id' => 'factory|User'
	);
}
