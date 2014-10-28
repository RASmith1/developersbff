@extends('_master')
	@section('title')
		Random User Generator
	@stop

@section('head')
@stop

@section('content')

	<h1>List of randomly generated users</h1>

	$gen = new \RandomUser\Generator();
    $user = $gen->getUsers($number_of_users);


	echo Paste\Pre::render($user);


   

@stop