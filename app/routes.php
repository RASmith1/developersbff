<?php

// Homepage
Route::get('/', function() {
	return View::make('index');
});

// List the number of Lorem Ipsum paragraphs specified by the user. Default is one.
Route::get('/listtext/{paragraphs?}', function($paragraphs = '1') {
	//return 'Number of Lorem Ipsum paragraphs to display is '.$paragraphs;
	//return Apoutchika\
	//return p>lorem.$paragraphs;
	// Get the file
	//$ipsumtext = p{lorem}*$paragraphs;

	/*// Convert to an array
	$books = json_decode($books, true);

	// Return the file of books
	return  Paste\Pre::render($books);
	*/
	//return emmet('lorem1');
	

    //return emmet('ul > li*3') 
	//return (p>lorem)*4;
	//emmet('ul > li*3') => 
});

Route::get('/listusers/{number_of_users?}/{gender?}', function($number_of_users = '1', $gender='both') {
	//return View::make('listusers');
	/*$gen = new \RandomUser\Generator();
    $user = $gen->getUsers($number_of_users);


	return  Paste\Pre::render($user);*/
	// The Random User Generator API that is being used is documented
	// was obtained from: 
	// http://www.philipwhitt.com/blog/2014/09/php-random-user-generator/40
	// and is further documented at http://randomuser.me/documentation.html.
	// There license is a Creative Commons license:
	// http://creativecommons.org/licenses/by-nc-sa/2.0/deed.en
	// No Random User Generator API code was modified.
	$gen = new \RandomUser\Generator();
    
	if ($gender == both)
	{
    	$user = $gen->getUsers($number_of_users);
	}
	elseif ($gender == 'females') 
	{
		$user = $gen->getFemales($number_of_users);
	}	
	else
	{
		$user = $gen->getMales($number_of_users);
	}
	

	return $number_of_users;

	if($format == 'json') {
		return 'JSON Version';
	}
	elseif($format == 'pdf') {
		return 'PDF Version;';
	}
	else {
		return View::make('list')
		->with('name','Susan')
		->with('books', $books)
		->with('query', $query);
	}
   
  
});

// Display the form for the Lorem Ipsum text
Route::get('add', function() {

});

// Process the form for the Lorem Ipsum text
Route::post('add', function() {

});



Route::get('/data', function()
{
	// Get the file
	$books = File::get(app_path().'/database/books.json');

	// Convert to an array
	$books = json_decode($books, true);

	// Return the file of books
	return  Paste\Pre::render($books);

});
