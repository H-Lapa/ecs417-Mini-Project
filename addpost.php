<?php


if (isset($_POST['newPost'])) {
    $title = $_POST['Blog-Title'];
    $desc = $_POST['Description'];
    require 'dbh.php';

    if (empty($title) || empty($desc)) {
        header("Location: ./new-blog.html");
        exit();
    }
    else {
        $insert = "INSERT INTO `posts` (`datetime`, `date`, `time`, `title`, `body`) VALUES (current_timestamp(), current_timestamp(), TIME(NOW()), '$title', '$desc')";
        if ($conn->query($insert) === TRUE) {
            echo "record inserted successfully";
        } else {
            echo "Error: " . $insert . "<br>" . $conn->error;
        }

    }

    
}


?>