<?php require('php/logic_index.php'); ?>

@extends('_master')
	@section('title')
		Developer's BFF
	@stop

@section('head')
@stop

@section('content')

{{ Form::open(array('url' => '/listusers', 'method' => 'GET')) }}
{{ Form::label('query','Search') }}
{{ Form::text('query'); }}
{{ Form::submit('Search'); }}

@{{
<div id="wrapper" class="container">
 <form method="POST" action="index.blade.php">
    <div class="center">
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
             <h2 class="header">Random User Generator</h2>
             
             <!-- <form action="demo_form.asp"> -->
             <form class="formcell">
                 <input type="radio" name="sex" value="female"/>Female
                 <br />
                 <!-- <label for="female">Female</label><br> -->
                 
                 <input type="radio" name="sex" value="male"/>Male
                 <br />
                 <!-- <label for="male">Male</label><br> -->
                 
                 <input type="radio" name="sex" value="both" checked="checked"/>Both
                 <br />
                 <!-- <label for="both">Both</label><br>	 -->
             </form> 
             <form class="formcell">
                Number of users to generate (1-100 by 10s):
                <select name="num_of_users" id="num_users">
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
         <h2 class="header">Lorem Ipsum Text Generator</h2>
         <form class="formcell">
             Number of words to generate (1-100 by 10s):
             <select name="num_of_words" id="num_words">
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
 <input type="submit" name="submit" value="Submit" id="submit" />
</div>
</form>
</div>
}}
{{ Form::close() }}
@stop