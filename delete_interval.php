<?php 
$roomname = $_POST['roomname'];

include "config.php";



$sql = "DELETE FROM rooms WHERE roomname='$roomname';";


$result3 = mysqli_query($conn,$sql);

if($result3){
    $sql1 = "DELETE FROM msgs WHERE  room='$roomname'";
    mysqli_query($conn,$sql1);
    $message = 'Room exited and deleted sucessfully ';
    echo '<script language="javascript">';
    echo 'alert("' . $message . '");';
    echo 'window.location="http://localhost/chatroom";';
    echo '</script>';
   

}
else{
    $message = 'Something went wrong';
    echo '<script language="javascript">';
    echo 'alert("' . $message . '");';
    echo 'window.location="http://localhost/chatroom";';
     echo '</script>';
}

mysqli_close($conn);