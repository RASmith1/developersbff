<?php require('php/logic_listusers.php'); ?>

@extends('_master')
	@section('title')
		Random User Generator
	@stop

@section('head')
@stop

@section('content')

	<h1>Randomly generated users</h1>

	<p>You requested the generation of {{{ $number_of_users }}} random users.</p>

	<div id="wrapper" class="container">
		<form method="POST" action="listusers.blade.php">
			<div>
				<h2>Please choose how you would like the list of users displayed.</h2>
				<div>
					<form class="formcell" "center">
						<input type="radio" name="format" id="formatted_array" value = "Formatted array">
						<label for="formatted_array">Formatted array</label><br>

						<input type="radio" name="format" id="unformatted_array" value="Unformatted array">
						<label for="unformatted_array">Unformatted array</label><br>
					</form> 
				</div>
				<input type="submit" name="submit" value="Submit" id="submit" />
			</div>
		</form>
	</div>
@stop