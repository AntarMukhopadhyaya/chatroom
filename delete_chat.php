<?php

//These script will delete all chats in the room


//Connection to database
include 'config.php';

// Fetching data from rooms.php

$roomname = $_REQUEST['roomname'];
// Running query to delete the chats 
$sql = "DELETE FROM msgs WHERE  room='$roomname'";
// If query is sucessful
if(mysqli_query($conn,$sql)){
    $message = 'All chats are deleted sucessfully';
    echo '<script language="javascript">';
    echo 'alert("' . $message . '");';
    echo 'window.location="http://localhost/chatroom/rooms.php?roomname='.$roomname.'";';
    echo '</script>';
}
// if the query  is not sucessfully

else{
    $message = 'Something went wrong ';
    echo '<script language="javascript">';
    echo 'alert("' . $message . '");';
    echo 'window.location="http://localhost/chatroom/rooms.php?roomname="'. $roomname .'";';
    echo '</script>';
}




?>