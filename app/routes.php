<?php

require_once dirname(dirname(__FILE__)).'/vendor/autoload.php';
use RandomUser\Generator;
use RandomUser\User;

// Landing page
Route::get('/', function() {
	return View::make('index');
});

// Redirect to one of two routes, depending on whether user requested Random User Generator
// or Lorem Ipsum Text Generator
Route::get('/list', function() {
	$user_submit = Input::get('user_submit');
	$text_submit = Input::get('text_submit');
	
	if ($user_submit == 'Submit') {
		$gender = Input::get('gender');
		$num_of_users = Input::get('num_of_users');
	    return Redirect::route('listusers', array('num_of_users' => $num_of_users, 'gender' => $gender));
   }
   else if ($text_submit == 'Submit') {
   		//return "I made it into list text_submit";
       	// return "In list route: Text_submit was clicked." . "<br/>";
   		$num_paragraphs = Input::get('num_paragraphs');
        return Redirect::route('listtext', array('num_paragraphs' => $num_paragraphs));
   }
   else {
   	   return "In list route: Neither submit seen as being clicked." . "<br/>";
   }
});


// List the number of Lorem Ipsum paragraphs specified by the user. Default is one.
Route::get('/listtext', ['as' => 'listtext', function() {

	$num_paragraphs = Input::get('num_paragraphs');

	// The following code makes use of the Badcow Lorem Ipsum Generator with copyright as:
	// Copyright (c) 2009, Mathew Tinsley (tinsley@tinsology.net) All rights reserved.
	// This was pulled down from Packagist, at https://packagist.org/packages/badcow/lorem-ipsum.
	$generator = new Badcow\LoremIpsum\Generator();
	$paragraphs = $generator->getParagraphs($num_paragraphs);
	return implode('<p>', $paragraphs);
}]);


Route::get('/listusers', ['as' => 'listusers', function() {
		
	$gender = Input::get('gender');
	$num_of_users = Input::get('num_of_users');
	
	// The Random User Generator API being used is documented at and obtained from:
	// http://www.philipwhitt.com/blog/2014/09/php-random-user-generator/40
	// and is further documented at http://randomuser.me/documentation.html.
	// Creative Commons license: http://creativecommons.org/licenses/by-nc-sa/2.0/deed.en
	// No Random User Generator API code was modified.
	//$gen = new \RandomUser\Generator();
	$gen = new Generator();

	$user = $gen->getUsers($num_of_users);
    
	if ($gender == 'both')
	{
    	$user = $gen->getUsers($num_of_users);
    }	
	elseif ($gender == 'female') 
	{
		$user = $gen->getFemales($num_of_users);
	}	
	else
	{
		$user = $gen->getMales($num_of_users);
	}
    
    return  Paste\Pre::render($user);

}]);