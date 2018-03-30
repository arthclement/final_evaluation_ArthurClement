<?php

if($_SERVER['REQUEST_METHOD'] == 'POST') { //Checking if a POST request has been sent
    $make = $_POST['make'] ?? null; //Setting null as a default value
    $model = $_POST['model'] ?? null;
    $year = $_POST['year'] ?? null;
    $colour = $_POST['colour'] ?? null;

    $errors = [];
    
    if(strlen($make) < 3 || is_null($make)){ //Checking if make has a correct length
        $errors[] = 'The make is incorrect';
    }

    if(strlen($model) < 3 || is_null($model)){ //Checking if model has a correct length
        $errors[] = 'The model is incorrect';
    }

    if(
        strlen($year) != 4 || //Checking if string is 4 characters long
        is_null($year) ||
        !preg_match("#^[0-9]{4}$#", $year) //We use a regular expression to verify that we do have a sequence of 4 numbers - a year
        ){
        $errors[] = 'The year is incorrect';
    } else {
        $year = new DateTime($_POST['year']); //Setting $year as a Date object
    }

    if(strlen($colour) < 3 || is_null($colour)){ //Checking if colour has a correct length
        $errors[] = 'The colour is incorrect';
    }

    if(count($errors) == 0){
        echo 'Your car has been added to the database'; //Return success to AJAX call
    } else {
        echo "Error: " . implode(" ", $errors); //Return failure to AJAX call with errors
    }
} else {
    echo 'No POST request has been received'; //In case script is ran without a POST request
}

?>