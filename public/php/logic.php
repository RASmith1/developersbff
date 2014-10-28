<?php

// Dictionary source on my Windows 7 computer:
// I ssh'd to my local server and then ran
// sudo apt-get install wbritish
// cat /usr/share/dict/words > words.txt
$num_of_words = 0;
$symbol = '';
$specificnumber = -1;
$case_transformation = "";
$substitution = '';
$substitution_froms = array();
$substitution_tos = array();
$password = '';

// There's no need to have an else for the case where nothing
// is selected, because this was implemented with a select list
// with an element selected by default. 
if (isset($_POST['num_words'])) {
    $num_of_words = $_POST['num_words'];
} 

/*if (isset($_POST['symbol'])) {
    $symbol = $_POST['symbol'];
    // echo "Symbol is " . $symbol . "<br/>";
} 

if (isset($_POST['specificnumber'])) {
    $specificnumber = $_POST['specificnumber'];
    // echo "Specific number is " . $specificnumber . "<br/>";
} 

if (isset($_POST['case_transform'])) {
    $case_transformation = $_POST['case_transform'];
    // echo "Case transformation is " . $case_transformation . "<br/>";
} 
*/
// file function below turns any file into an array
if ($words = file('words.txt')) {
    // echo 'Count: ' . count($words) . '<br />';

    // Create an empty array
    $selected_words = [];

    // Grab the number of words that the user requested.
    // Get them randomly from the dictionary.
    for ($i = 0; $i < $num_of_words; $i++)
    {
        // generate random number from 0 to dictionary size
        $max = count($words) - 1;
        $rand = rand(0, $max);
        
        $word = $words[$rand];
        
        // This will push the item in the second parameter onto the array named
        // in the first parameter
        array_push($selected_words, trim($word));
    }
    
    switch ($case_transformation) {
        case 'NONE':
            // /echo "NONE is the value of the case transformation.<br/>";
            break;
        case 'UPPER':
            // echo "UPPER is the value of the case transformation.<br/>";
            // loop through selected words and change the whole word to uppercase
            foreach ($selected_words as $index => $word) {
                $selected_words[$index] = strtoupper($selected_words[$index]);
                // echo "Selected_words ".$selected_words[$index] . '<br />';
            }
            break;
         case 'LOWER':
            // echo "LOWER is the value of the case transformation.<br/>";
            // loop through selected words and change the whole word to lowercase
            foreach ($selected_words as $index => $word) {
                $selected_words[$index] = strtolower($selected_words[$index]);
                // echo "Selected_words ".$selected_words[$index] . '<br />';
            }
            break;
        case 'CAPITAL':
            // echo "CAPITAL is the value of the case transformation.<br/>";
            // loop through selected words and change the first letter to uppercase
            foreach ($selected_words as $index => $word) {
                $selected_words[$index] = ucfirst($selected_words[$index]);
                // echo "Selected_words ".$selected_words[$index] . '<br />';
            }
            break;
        case 'ALTERNATE':
            // echo "ALTERNATE is the value of the case transformation.<br/>";
            // loop through selected words and change the even words to all UPPERCASE
            $counter = 1;
            foreach ($selected_words as $index => $word) {
                if (($counter % 2) == 0) {
                    // echo "Inside foreach - Selected_words ".$selected_words[$index] . '<br />';
                    $selected_words[$index] = strtoupper($selected_words[$index]);
                }
                $counter++;
                // echo "Selected_words ".$selected_words[$index] . '<br />';
            }
            break;
    }
    
    if (($symbol != '') && ($symbol != "None")) {
        // insert the symbol requested by the user into the first word in password
        // and then break out of loop.  Ugly but effective.  If "None" was selected,
        // don't try to set it as the symbol.
        foreach ($selected_words as $index => $word) {
            $selected_words[$index] = $selected_words[$index] . $symbol;
            break;
        }
    }

    if (($specificnumber != -1) && ($specificnumber != "None")) {
         // insert the number requested by the user into the first word in password
        // and then break out of loop.  Ugly but effective.  If "None" was selected,
        // don't try to set it as the number.
        foreach ($selected_words as $index => $word) {
            $selected_words[$index] = $selected_words[$index] . $specificnumber;
            break;
        }
    }
    
    $password = implode('-', $selected_words);
    
}