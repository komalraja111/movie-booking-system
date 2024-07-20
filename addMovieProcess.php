<?php
    require('db_config.php'); // require_once
    date_default_timezone_set('Asia/Karachi');

    session_start();
    $movie_name = $_POST['movie_name'];
    $movie_trailer = $_POST['movie_trailer'];
    $description = $_POST['description'];
    $release_date = $_POST['release_date'];
    /* $poster = $_POST ['poster']; */
    $added_by = $_SESSION['user']['id'];
    $created_at = date('Y-m-d h:i:s');
    $temp_name  = $_FILES['poster']['tmp_name'];
    $fileName = $_FILES['poster']['name'];
    $poster_image = "image/".$fileName;
    if(move_uploaded_file($temp_name,$poster_image))
    $query = "INSERT INTO `movies` (`movie_name`,`movie_trailer`,`description`,`poster`,`release_date`, `created_at`,`added_by`) VALUES ('".$movie_name."', '".$movie_trailer."', '".$description."', '".$poster_image."','".$release_date."', '".$created_at."', '".$added_by."')";

    $result  = mysqli_query($connection,$query);
    if($result){
        header('location:viewMovies.php?msg=Added successfully done!..');
    }else{
        header('location:addMovies.php?msg=Added failed..');
    }