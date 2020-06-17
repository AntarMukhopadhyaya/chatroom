<?php

$roomname = $_REQUEST['roomname'];
$res = "";

if(!empty($roomname)){
    $sql = "SELECT * FROM `image`WHERE room='$roomname'";
    include 'config.php';
    $result = mysqli_query($conn,$sql);
    if ($result) {
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $res = $res . '<div class="container">';
                $res = $res . $_SERVER['REMOTE_ADDR'];
                $res = $res . "says <p>".$row['image'];
                $res = $res . '</p> <span class="time-right">' .$row['uploaded_on'] . "</span></div>";
            }
            
        }
    }

}