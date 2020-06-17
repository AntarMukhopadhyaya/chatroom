<?php 

// These script will load new messages

$room = $_POST['room'];
$current_date = date("h:i");

//Connection to database

include "config.php";

//Sql query 

$sql = "SELECT msg, stime, ip FROM msgs WHERE room='$room'";

$res = "";
//Running the query 
$result = mysqli_query($conn,$sql);


// If the query is sucessful
if($result){
if(mysqli_num_rows($result) > 0){
    //While loop for fetching the messages from database
    while ($row = mysqli_fetch_assoc($result)) {

       

        $res = $res . '<div class="container">';
        $res = $res . $row['ip'];
        $res = $res . "says <p>".$row['msg'];
        $res = $res . '</p> <span class="time-right">' .$row['stime'] . "</span></div>";
        
    }
}
// If the there  is no message
else{
    echo '
    
         <div class="container">

            <img src="images/a.jpeg" alt="Avatar" style="width:100%;">
            <p>The room gets deleted after 30 minutes please dont share any private information.</p>
            <span class="time-right">';echo $current_date;'</span>
        </div>';

}
}else{
    $message = 'Something went wrong ';
    echo '<script language="javascript">';
    echo 'alert("' . $message . '");';
    echo 'window.location="http://localhost/chatroom";';
    echo '</script>';
}


echo $res;


?>