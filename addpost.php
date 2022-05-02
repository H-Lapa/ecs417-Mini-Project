<?php


if (isset($_POST['newPost'])) {
    $title = $_POST['Blog-Title'];
    $desc = $_POST['Description'];
    require 'dbh.php';

    if (empty($title) || empty($desc)) {
        header("Location: ./new-blog.php");
        exit();
    }
    else {
        $insert = "INSERT INTO `posts` (`datetime`, `date`, `time`, `title`, `body`) VALUES (current_timestamp(), current_timestamp(), TIME(NOW()), '$title', '$desc')";
        if ($conn->query($insert) === TRUE) {
            echo "record inserted successfully";
            header("Location: ./blog.php");
            exit();
        } else {
            echo "Error: " . $insert . "<br>" . $conn->error;
        }
        

    }

    
}


?>