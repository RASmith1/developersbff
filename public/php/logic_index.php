<?php

$user_gender = '';
$number_of_users = 0;
$number_of_words = 0;


// There's no need to have an else for the case where nothing
// is selected, because this was implemented with a select list
// with an element selected by default. 
if (isset($_POST['sex'])) {
    $gender = $_POST['sex'];
    echo "Gender is " . $gender . "<br/>";
} 

if (isset($_POST['num_of_users'])) {
    $number_of_users = $_POST['num_of_users'];
    echo "Number of users is " . $number_of_users . "<br/>";
} 

if (isset($_POST['num_of_words'])) {
    $number_of_words = $_POST['num_of_words'];
    echo "Number of words is " . $number_of_words . "<br/>";
}

if (($number_of_users != 0) && ($gender != ''))
{
    // Generate the list of randomly-generated users
    // according to the number of users and the gender requested.
    $gen = new \RandomUser\Generator();
    
    if ($gender == 'both')
    {
        $user = $gen->getUsers($number_of_users);
    }   
    elseif ($gender == 'female') 
    {
        $user = $gen->getFemales($number_of_users);
    }   
    else
    {
        $user = $gen->getMales($number_of_users);
    }

    //echo 'Number entered was ' . $number_of_users.' and gender was ' . $gender;
    //echo  Paste\Pre::render($user);
}