@extends('_master') 

@section('title') 
    Developer's BFF 
@stop 

@section('head') 
@stop 

@section('content')

<!-- This blade.php file makes use of the Blade-Form Helper syntax within a 
     framework of divs to aid in placement of the elements on the page. -->

{{ Form::open(array('url' => 'list', 'method' => 'GET')) }}
 
<div id="wrapper" class="container">
    <div class="center">
        <p>
            Welcome to Developer's BFF. This application provides a few of the 
            web development tools that I've found helpful.  I hope you find them 
            helpful too!  <a href='https://github.com/RASmith1/developersbff'>View code for this application on Github.</a> 
        </p>
        <br>
    </div>

    <div class="tablecontainer">
        <div class="row">
            <div class="selectionscell">
                <h2 class="header">Random User Generator</h2>
               <!--  {{ Form::label('gender', 'Gender of users to be generated') }}
                <br />{{ Form::radio('gender', 'female') }} Female
                <br />{{ Form::radio('gender', 'male') }} Male
                <br />{{ Form::radio('gender', 'both', true) }} Both -->
    
                <br />{{ Form::label('num_of_users_label', 'Number of users to generate (1-40 by 5s):') }} 
                      {{ Form::select('num_of_users', array( 
                            '5' => '5', 
                            '10' => '10', 
                            '15' => '15', 
                            '20' => '20', 
                            '25' => '25', 
                            '30' => '30', 
                            '35' => '35', 
                            '40' => '40' 
                        ), '5') }}
                <br>
                {{ Form::submit('Submit', array('name' => 'user_submit')) }}   
                {{ Form::reset('Reset') }}
                <br>
                <br>
            </div>

            <div class="summarycell">
                <p>This  <span class="emphasis">Faker random user generator</span> will generate the number 
                of users that you specify. It returns a list that can 
                be copied and pasted for your own use.  The Faker packages used to implement this
                random user generator were obtained from 
                <a href='https://github.com/fzaninotto/Faker'>Github - Faker.</a> 
                </p>
            </div>
        </div>
        <br />

        <div class="row">
            <div class="selectionscell">
                <h2 class="header">Lorem Ipsum Text Generator</h2>
                      <br />
                      {{ Form::label('num_paragraphs_label', 'Number of paragraphs to generate (1-10):') }} 
                      {{ Form::select('num_paragraphs', array( 
                            '1' => '1', 
                            '2' => '2', 
                            '3' => '3', 
                            '4' => '4', 
                            '5' => '5', 
                            '6' => '6', 
                            '7' => '7', 
                            '8' => '8', 
                            '9' => '9', 
                           '10' => '10' 
                         ), '1') }}
                <br>
                {{ Form::submit('Submit', array('name' => 'text_submit')) }}   
                {{ Form::reset('Reset') }}
                <br>
                <br>
            </div>
            <div class="summarycell">
                <p>This  <span class="emphasis">Lorem Ipsum Text Generator</span> will generate 
                pseudo-Latin text for you, which you can copy and paste in order to populate 
                web sites during development.  It returns the number of generated lorem ipsum
                paragraphs that you specify.  The packages used to implement this were obtained from 
                <a href='https://packagist.org/packages/badcow/lorem-ipsum'>Packagist - Badcow Lorem Ipsum Text Generator.</a> 
                </p>
            </div>
        </div>
        {{ Form::close() }} 
    </div>

    @stop