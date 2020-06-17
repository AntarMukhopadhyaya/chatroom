<?php 
// These will handle Contact Submition

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $country = $_POST['country'];
    $msg = $_POST['msg'];
    if(!empty($name) || !empty($email)  || !empty($country)){
        //Connection to Database
        include 'config.php';
        //Inserting values in Database
        $sql = "INSERT INTO `contact` ( `email`, `name`, `country`, `date`, `message`) VALUES ( '$email', '$name', '$country', current_timestamp(), '$msg');";
        $result = mysqli_query($conn,$sql);
        //Error Handling
        if(!$result){
            

        
            $message = 'Message not send';
            echo '<script language="javascript">';
            echo 'alert("' . $message . '");';
            echo 'window.location="http://localhost/chatroom/contact.php";';
            echo '</script>';
        }
        //Message Sucessful
        else{
            $message = 'Message sent Sucessful thanks ' . $name . 'for feedback';
            echo '<script language="javascript">';
            echo 'alert("' . $message . '");';
            echo 'window.location="http://localhost/chatroom/contact.php";';
            echo '</script>';

        }
        
    }
    //Error handling 
    else{
        $message = 'Something went wrong please try again ';
        echo '<script language="javascript">';
        echo 'alert("' . $message . '");';
        echo 'window.location="http://localhost/chatroom/contact.php";';
        echo '</script>';

    }

}
//Error Handling
else{
    $message = 'Something went wrong please try again ';
    echo '<script language="javascript">';
    echo 'alert("' . $message . '");';
    echo 'window.location="http://localhost/chatroom/contact.php";';
    echo '</script>';
}






?>