<?php

class PagesController extends BaseController {
    
    public function home() {
        return View::make('home');
    }

    public function about() {
        $about_title = 'About Us';
	    return View::make('about')->with('about_title', $about_title);
    }

    public function blog(){
        $blog_title = 'My Awsome Bloge';
        $blog_desc = 'This is my first blog page';
        return View::make('blog')
	    	->with('blog_title',$blog_title)
    		->with('blog_desc', $blog_desc);
    }

    public function users() {
        $users = User::all();

        return View::make('users')->with('users', $users);
    }

}


?>