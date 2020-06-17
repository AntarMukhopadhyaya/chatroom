<?php
$roomname = $_REQUEST['roomname'];

if (empty($roomname)) {
    header('location:index.php?auth=error');
}
if (isset($_POST['submit'])) {
    // $roomname = $_POST['room'];
   
    $image= $_FILES['image']['tmp_name'];
    $img = file_get_contents($image);

    include 'config.php';
    $sql = "INSERT INTO `images` (`room`, `image`) VALUES ('$roomname', ?);";
    $stmt = mysqli_prepare($conn,$sql);
    mysqli_stmt_bind_param($stmt, "s",$img);
    mysqli_stmt_execute($stmt);
    $check = mysqli_affected_rows($conn);
    if ($check == 1) {
        header('location:rooms.php?roomname='.$roomname);
        
    }else{
        die('Problem');

    
    }


}



?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload: <?php echo $roomname?></title>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

    <style>
        form{
            padding: 10% ;
        }
    </style>
</head>


<body>
    <center>
    <form action="" method="POST" enctype="multipart/form-data">
        <input type="file" name="image" id="input1" placeholder="Upload a file">
        <button type="submit" name="submit" id="uploadimg" class="btn btn-danger">Upload</button>

    </form>
    <a class="btn btn-danger "href="rooms.php?roomname=<?php echo $roomname ?>">Return Back </a>
    
    </center>

</body>
<script>
     $("#uploadimg").click(function() {
       
        $.post("upload_handler.php", {
                
                room: '<?php echo $roomname ?>',
              
            },
            function(data, status) {
              

            });
    });
</script>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" integrity="sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm" crossorigin="anonymous"></script>

</html>