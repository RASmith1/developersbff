<?php

//require_once base_path().'/vendor/autoload.php';
//require_once dirname(dirname(__FILE__)).'/vendor/autoload.php';
/*use RandomUser\Generator;
use RandomUser\User;*/

require_once base_path().'/vendor/fzaninotto/faker/src/autoload.php';

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
	
	// This is a different Random User Generator that I couldn't 
	// get to work on the server because of a fatal exception
	// on Fliglio.curl_init();
	//$gen = new \RandomUser\Generator();

	/*$gen = new \RandomUser\Generator();

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
	}*/
    
	// Faker is the name of the Random User Generator API being used.
	// It is documented at and obtained from:
	// https://packagist.org/packages/fzaninotto/faker
	// License is held by François Zaninotto and is listed at: 
	// https://github.com/fzaninotto/Faker/blob/master/LICENSE
	// use the factory to create a Faker\Generator instance
	$faker = Faker\Factory::create();

	$faker->addProvider(new \Faker\Provider\en_US\Person($faker));
    
	$users = array();

	for ($i=0; $i < $num_of_users; $i++) {
		$users [$i] = array();
		if ($gender == 'Female') {
        	$users [$i]['name'] = $faker->name('Female');
		}
		else if ($gender == 'Male') {
			$users [$i]['name'] = $faker->name('Male');
		}
		else {
			$users [$i]['name'] = $faker->name();
		}
		
        $users [$i]['email']         = $faker->email;
        $users [$i]['phoneNumber']   = $faker->phoneNumber;
        $users [$i]['streetAddress'] = $faker->streetAddress;
        $users [$i]['city']          = $faker->city;
        $users [$i]['state']         = $faker->state;
        $users [$i]['postcode']      = $faker->postcode;
	}
    
	// generate data by accessing properties
	//echo $faker->name;
  // 'Lucy Cechtelar';
	//echo $faker->address;
    
    return  Paste\Pre::render($users);

}]);