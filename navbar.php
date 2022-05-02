<?php
	session_start(); //since navbar is on all pages it starts a session as needed
?>

<nav>
    <ul>
        <li><a href="index.php">Hugo</a></li>
        <li><a href="Projects.php">Projects</a></li>
        <li><a href="blog.php">Blog</a> </li>
        <li><a href="email.php">Contact</a></li>
        <?php
        // this is an if statement questioning whether someone has already logged in
          if (isset($_SESSION['username'])) {
            echo '<li><a href="logout.php">Logout</a></li>';
            //if they are logged in they show the account icon with the link to the account page
          }
          else {
            echo '<li><a href="Login.php">Login</a></li>';
            //if they are not logged in they will get a sign in icon and it will be linked too the sign up page
          }
          
        ?>

    </ul>
</nav>