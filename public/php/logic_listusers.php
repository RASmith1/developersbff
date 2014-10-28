<?php

$format = '';

/*There's no need to have an else for the case where nothing
is selected, because this was implemented with a select list
with an element selected by default. */ 
if (isset($_POST['format'])) {
    $format = $_POST['format'];
    echo "Format is " . $format . "<br/>";
} 
    

if ($format == 'Formatted array') {
    // Display the list of randomly-generated users in a formatted 
    // way to the user.
    echo  Paste\Pre::render($user);
}    
else if ($format == 'Unformatted array') {
    echo $user;
}
else {
    echo 'Error occurred.  Value for format variable is ' . $format;
}