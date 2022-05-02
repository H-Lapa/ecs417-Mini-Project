<?php

//checks the form has been submitted
if (isset($_POST['newPost'])) {
    //get valeus submitted through form
    $title = $_POST['Blog-Title'];
    $desc = $_POST['Description'];
    require 'dbh.php';

    //if the values empty it returns back to the page
    if (empty($title) || empty($desc)) {
        header("Location: ./new-blog.php");
        exit();
    }
    else {
        //inserts new info to the database and redirects to the blog page
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