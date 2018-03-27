<?php

class UsersController extends \BaseController {

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
        $users = User::orderBy('id', 'asc')->take(2)->get();


        return View::make('users.index ')->with('users', $users);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
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
		$user = User::whereUsername($username)->first();

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