<?php

//Assign database connection info to variables
$db_host = "localhost";
$db_username = "id3227097_tony";
$db_pass = "swordy1";
$db_name = "id3227097_weddingdatabase";

//Assign first and last name to variables
$fname = $_POST['First_Name'];
$lname = $_POST['Last_Name'];

//Connect to database
$con = mysqli_connect($db_host, $db_username, $db_pass, $db_name);
if(!$con) {
    echo 'Something went wrong. You are not connected to the database.';
} 

//Check if rsvp exists
$check=mysqli_query($con, "SELECT * FROM rsvp WHERE first_name='$fname' and last_name='$lname'");
$checkrows=mysqli_num_rows($check);
if($checkrows > 0) {
    echo "An RSVP for $fname $lname has already been submitted.";
} else {
    $sql = "INSERT INTO rsvp (first_name, last_name) VALUES ('$fname', '$lname')";
    $query = mysqli_query($con,$sql);
    if($query) {
        echo "Thank you. Your RSVP has been submitted for $fname $lname";
    }
}

$con -> close();

?>