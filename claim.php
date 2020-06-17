<?php
// Checking Room Name .
$name = $_POST['room'];

if (isset($_POST['submit'])) {
    //Checking wheter the room name is smaller or greater than 2 , 20 respectively.

    if (strlen($name) > 20 || strlen($name) < 2) {
        $message = 'Please enter a name between 20 or 2 character';
        echo '<script language="javascript">';
        echo 'alert("' . $message . '");';
        echo 'window.location="http://localhost/chatroom";';
        echo '</script>';
    }
    //Checking wheter the room name is someting other than alpha numeric.
    else if (!ctype_alnum($name)) {
        $message = 'Please use alphabets and numbers as room names';
        echo '<script language="javascript">';
        echo 'alert("' . $message . '");';
        echo 'window.location="http://localhost/chatroom";';
        echo '</script>';
    } else {
        // Connection to Database 
        include 'config.php';
    }
} else {
    $message = 'Something went wrong please try again';
    echo '<script language="javascript">';
    echo 'alert("' . $message . '");';
    echo 'window.location="http://localhost/chatroom";';
    echo '</script>';
}
$sql = "SELECT * FROM `rooms` WHERE roomname = '$name'";

$result = mysqli_query($conn, $sql);

if ($result) {
    if (mysqli_num_rows($result) > 0) {
        $message = 'These room exist ';
        echo '<script language="javascript">';
        echo 'alert("' . $message . '");';
        echo 'window.location="http://localhost/chatroom";';
        echo '</script>';
    } else {
        $sql = "INSERT INTO `rooms` ( `roomname`, `stime`) VALUES ( '$name', current_timestamp()); ";
        if (mysqli_query($conn, $sql)) {
            $message = 'Your room is ready join now';
            echo '<script language="javascript">';
            echo 'alert("' . $message . '");';
            echo 'window.location="http://localhost/chatroom/rooms.php?roomname='.$name.'";';
            
            echo '</script>';
        }
        else {
            $message = 'Something went wrong please try again';
            echo '<script language="javascript">';
            echo 'alert("' . $message . '");';
            echo 'window.location="http://localhost/chatroom";';
            echo '</script>';
        }
    }
} else {
    die('Error' . mysqli_connect_error($conn));
}

?>
