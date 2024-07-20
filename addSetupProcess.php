<?php
    require('db_config.php'); // require_once
    date_default_timezone_set('Asia/Karachi');
    session_start();
    $movie_id = $_POST['movie_id'];
    $movie_theater_id = $_POST['movie_theater_id'];
    $time_slot = $_POST['time_slot'];
    $show_date = $_POST['show_date'];
    /* $poster = $_POST ['poster']; */
   /*  $added_by = $_SESSION['user']['id'];
    $created_at = date('Y-m-d h:i:s');
    $temp_name  = $_FILES['poster']['tmp_name'];
    $fileName = $_FILES['poster']['name'];
    $poster_image = "image/".$fileName; */
    //if(move_uploaded_file($temp_name,$poster_image))
    $query = "INSERT INTO `movies_setup` (`movie_id`,`movie_theater_id`,`time_slot`,`show_date`) VALUES ('".$movie_id."', '".$movie_theater_id."', '".$time_slot."','".$show_date."')";
    $result  = mysqli_query($connection,$query);
    if($result){
        header('location:viewSetup.php?msg=Added successfully done!..');
    }else{
        header('location:addSetup.php?msg=Added failed..');
    }