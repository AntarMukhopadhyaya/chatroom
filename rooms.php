<?php
// These script handles rooms and chats
$roomname = $_GET['roomname'];

//Connection to database
include 'config.php';

//Selecting all data from rooms table
$sql = "SELECT * FROM `rooms` WHERE roomname = '$roomname'";
//Running Sql Query
$result = mysqli_query($conn, $sql);
//Checking if the Query is Sucessful
if ($result) {
    if (mysqli_num_rows($result) == 0) {
        $message = 'These room does not exist Try Creating New one  ';
        echo '<script language="javascript">';
        echo 'alert("' . $message . '");';
        echo 'window.location="http://localhost/chatroom/";';
        echo '</script>';
    }
}
// If Query is not Sucessful
else {
    echo "Error" . mysqli_error($conn);
}


?>
<!DOCTYPE html>
<html>

<head>
    <!-- These Site  is made By Antar Mukhopadhyaya -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <link href="/docs/4.4/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        /* CSS for The Room */
        body {
            margin: 0 auto;
            max-width: 800px;
            padding: 0 20px;
        }

        .container {
            border: 2px solid #dedede;
            background-color: #f1f1f1;
            border-radius: 5px;
            padding: 10px;
            margin: 10px 0;
        }

        .darker {
            border-color: #ccc;
            background-color: #ddd;
        }

        .container::after {
            content: "";
            clear: both;
            display: table;
        }

        .container img {
            float: left;
            max-width: 60px;
            width: 100%;
            margin-right: 20px;
            border-radius: 50%;
        }

        .container img.right {
            float: right;
            margin-left: 20px;
            margin-right: 0;
        }

        .time-right {
            float: right;
            color: #aaa;
        }

        .time-left {
            float: left;
            color: #999;
        }

        .anyClass {
            height: 350px;
            overflow: scroll;
            /* display: flex;
            flex-direction: column-reverse; */
        }

        .search-box {
            width: 500px;
            float: right;
        }
    </style>
</head>

<body>
    <nav class="site-header sticky-top py-1">
        <div class="container d-flex flex-column flex-md-row justify-content-between">
            <a class="py-2" aria-label="Chatrooms">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="d-block mx-auto" role="img" viewBox="0 0 24 24" focusable="false">
                    <title>Rooms: <?php echo $roomname ?></title>
                    <circle cx="12" cy="12" r="10" />
                    <path d="M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83m13.79-4l-5.74 9.94" />
                </svg>
            </a>
            <a class="py-2 d-none d-md-inline-block" href="index.php">Home</a>
            <a class="py-2 d-none d-md-inline-block" href="contact.php">Contact</a>

        </div>
    </nav>


    <h2>Chatroom - <?php echo $roomname; ?> </h2>
    <div class="dropdown">
        <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Options
            <span class="caret"></span></button>
        <ul class="dropdown-menu">
            <li><a href="delete.php?roomname=<?php echo $roomname ?>">Exit Room</a></li>
            <li><a href="delete_chat.php?roomname=<?php echo $roomname ?>">Delete Chats</a></li>
            <li><a href="image_upload.php?roomname=<?php echo $roomname ?>">Upload</a></li>
            <a href="load.img.php?roomname=<?php echo $roomname ?>">Trial</a>

        </ul>
    </div>
    <!-- Alert  -->
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Disclaimer:</strong> Please click Exit room to delete the room after the conversation overs.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>



    <div class="anyClass">


    </div>

    <input type="text" class="form-control" required="" name="usermsg" id="usermsg" placeholder="Enter message "><br>
    <button id="submitmsg" style="font-size:24px"><i class="fa fa-send-o"></i></button>




</body>
<script type="text/javascript">
    // Jquery Here

    //Fetching data using jquery in 1 seconds
    setInterval(runFunction, 1000);

    function runFunction() {
        $.post("load_msg.php", {
                room: '<?php echo $roomname ?>'
            },
            function(data, status) {
                document.getElementsByClassName('anyClass')[0].innerHTML = data;
            }
        )

    }


    // Deleting rooms after 30 minutes
    setInterval(delete_all, 1800000)

    function delete_all() {
        $.post("delete.php", {
                roomname: '<?php echo $roomname ?>'
            },
            function(data, staus) {
                alert('Your session expired')
                window.location = "http://localhost/chatroom/index.php";
            })
    }



    //Hiiting enter to submit form

    var input = document.getElementById("usermsg");
    input.addEventListener("keyup", function(event) {
        // Number 13 is the "Enter" key on the keyboard
        if (event.keyCode === 13) {
            // Cancel the default action, if needed
            event.preventDefault();
            // Trigger the button element with a click
            document.getElementById("submitmsg").click();
        }
    });

    // When user click submit buttons

    $("#submitmsg").click(function() {
        var clientmsg = $("#usermsg").val();
        $.post("post-msg.php", {
                text: clientmsg,
                room: '<?php echo $roomname ?>',
                ip: '<?php echo $_SERVER['REMOTE_ADDR'] ?>'
            },
            function(data, status) {
                document.getElementsByClassName('anyClass')[0].innerHTML = data;
                $('#usermsg').val("");
                return false;

            });
    });
</script>
<hr>
<center>
    <footer class="footer-copyright text-center special-color-dark py-3">
        <div class="inner">
            <p><a href="" target="_blank">Your Site</a>, by <a href="/about.php" target="_blank">@Your Name</a>.</p>
        </div>
    </footer>
</center>


</html>