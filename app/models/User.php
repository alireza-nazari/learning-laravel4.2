<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	public $timestamps = false;

	public $fillable = ['username', 'email', 'gender'];

	public static $rules = [
				'username' => 'required',
				'email' => 'required|email|unique:users',
				'gender' => 'required'
	];

	public $errors;
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

	public function isValid(){
		$validation = Validator::make($this->attributes, static::$rules);

		if ($validation->passes()) return true;
		
		// fetch messages
		// after use __CONSTRACT we remove make function public and remove static 
		// so we need to remove static::$error 
		// static::$errors = $validation->messages();
		$this->errors = $validation->messages(); 
		// just like this line and dont forget make $error property to public
		
		return false;
	}



}
