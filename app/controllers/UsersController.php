<?php

class UsersController extends \BaseController {

	protected $user;
	// User instens and requst Eloquent object $user to user automatic resolotion in laravel
	public function __construct(User $user){
		$this->user = $user;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		// $users = User::all();

        // $user = new User;
        // $user->username = 'Jenie Loardo';
        // $user->email = 'jenie@email.com';
        // $user->gender = 'Female';
        // $user->save();

        // User::create([
        //     'username' => 'Richard Weber',
        //     'email' => 'richard@email.com',
        //     'gender' => 'Male',
        // ]);

        // if (User::find(6)){
        //     $user = User::find(6);
        //     $user->username = 'Jacob Serdovwe';
        //     $user->save();
        // }else{
        //     echo 'there is no user name with ID 2 please select another IDs.';
        // }
        
        // if (User::find(7)){
        //     $user = User::find(7);
        //     $user->delete();
        // }else{
        //     echo 'Username with that ID is not in our database!';
        // }
        
        // $users = User::orderBy('id', 'des')->get();
		// $users = User::orderBy('id', 'asc')->get();
		
		// commented becouse of __CONSTRACT
        // $users = User::orderBy('id', 'asc')->take(20)->get();
		// $user = $this->user->all();
		// OR
		// USE __CONSTRACT
		$users = $this->user->orderBy('id', 'asc')->take(100)->get();
 
        return View::make('users.index ')->with('users', $users);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('users.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		// get input from other page
		// $data = [
		// 	'username' => Input::get('username'),
		// 	'email' => Input::get('email'),
		// 	'gender' => Input::get('gender')
		// ];
		
		// validation in User model with specific validate method 
		// $this->user->fill(Input::all());
		$input = Input::all();

		if ( ! $this->user->fill($input)->isValid()) {
			return Redirect::back()->withInput()->withErrors($this->user->errors); // (User::$errors);
		}

		// $validation = Validator::make(Input::all(), User::$rules);
		// validation in controller store method
		// if ($validation->fails()) {
		// 	return Redirect::back()->withInput()->withErrors($validation->messages()); 
		// }
		
		// 1 way to create user
		// $user = new User;
		// $user->username = Input::get('username');
		// $user->email = Input::get('email');
		// $user->gender = Input::get('gender');
		// $user->save();

		// 2 way to create user
		//$this->user->create($input);

		$this->user->sava();

		return Redirect::route('users.index');

	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($username)
	{
		// select * from users where username = USERNAME LIMIT 1
		// $user = User::whereUsername($username)->first();
		// USE __CONSTRACT
		$user = $this->user->whereUsername($username)->first();

        return View::make('users.show', ['user' => $user]);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}