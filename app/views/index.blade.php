@extends('_master')
	@section('title')
		Developer's BFF
	@stop

@section('head')
@stop

@section('content')

	<div id="wrapper" class="container">

        <div class="center">
          
       		<!-- The BFF necklace portion of the logo image was taken off of this site,
		    https://www.flickr.com/photos/8488532@N08/4356077535/in/photolist-c6RhvA-7iTdLf-7yVNh2-b8pDgc-b8pymP-eeDUdG-bM4isH-5Bbeqv-6Jv8AC-9PwLBF-7z6AFb-7CW366-oudNJW-9JVuR2-fsBfi5-augdHp-sxxxB-eeau37-6nG8L9-76ZBQk
			and was posted by someone with the user ID of Texasbubba and was entitled "Bff."
			It has Creative Commons licensing.  No other identifying information was provided. -->
			<a href='/'><img id='my_logo' class='logo' src='images/dev_bff_logo_big.png' alt='Developer&#39;s BFF logo'></a>
			<br> 
            <p>
				Welcome to Developer's BFF.  This application provides a few of the web 
				development tools that I've found helpful, including a random number 
				generator and a lorem ipsum text generator.  I hope you find them helpful 
				too!<br>   
				<a href='https://github.com/RASmith1/developersbff'>You can view on this application's code on Github</a> 
			</p>
			<br>
		
        </div>
        
        <div class="linkscontainer">
        	<div class="row">
        		<div class="headercell">
        			<h2>Random User Generator</h2>
        			
        			<!-- <form action="demo_form.asp"> -->
        			<form class="formcell">
        			    <input type="radio" name="sex" id="female" value="female">
        				<label for="female">Female</label><br>
                        
        				<input type="radio" name="sex" id="male" value="male">
        				<label for="male">Male</label><br>
        			
        				<input type="radio" name="sex" id="both" value="both">
        				<label for="both">Both</label><br>	
        			</form> 
        			<form class="formcell">
        				Number of users to generate (1-100 by 10s):
        				<select name="num_of_users" id="num_users">
        					<option class="diffcolor" value="None" disabled="disabled">None</option>
        					<option class="diffcolor" value="10" selected='selected'>10</option>
        					<option class="diffcolor" value="20">20</option>
        					<option class="diffcolor" value="30">30</option>
        					<option class="diffcolor" value="40">40</option>
        					<option class="diffcolor" value="50">50</option>
        					<option class="diffcolor" value="60">60</option>
        					<option class="diffcolor" value="70">70</option>
        					<option class="diffcolor" value="80">80</option>
        					<option class="diffcolor" value="90">90</option>
        					<option class="diffcolor" value="100">100</option>
        				</select>
        				<input type="submit" name="users_submit" value="Submit" id="submit" />
        				<!-- <button type="button">Submit</button>  -->
        				<br><br>
        			</form>
        		</div>
                <div class="descriptioncell">
                    <p>This Random User Generator will generate the number of users that
                		you specify, according to the gender that you specify.  It returns
                		a list that can be copied and pasted into your own application.</p>
                </div>
            </div>

            <div class="row">
        		<div class="headercell">
        			<h2>Lorem Ipsum Text Generator</h2>
        			
        			<!-- <form action="demo_form.asp"> -->
        			<form class="formcell">
        			    Number of words to generate (1-100 by 10s):
        				<select name="num_of_ words" id="num_words">
        					<option class="diffcolor" value="None" disabled="disabled">None</option>
        					<option class="diffcolor" value="10">10</option>
        					<option class="diffcolor" value="20">20</option>
        					<option class="diffcolor" value="30">30</option>
        					<option class="diffcolor" value="40" selected='selected'>40</option>
        					<option class="diffcolor" value="50">50</option>
        					<option class="diffcolor" value="60">60</option>
        					<option class="diffcolor" value="70">70</option>
        					<option class="diffcolor" value="80">80</option>
        					<option class="diffcolor" value="90">90</option>
        					<option class="diffcolor" value="100">100</option>
        				</select>
                        <input type="submit" name="words_submit" value="Submit" id="submit" />
        				<!-- <button type="button">Submit</button>  -->
        				<br><br>
        			</form> 
        		</div>
                <div class="descriptioncell">
                    <p>This Lorem Ipsum Text Generator will generate pseudo-Latin text 
                       for you, which can be copied and pasted in order to populate web 
                       sites during development.  It returns one paragraph containing 
                       the generated ipsum lorem text containing the number of words 
                       specified.</p>
                </div>
            </div>
        </div>
@stop