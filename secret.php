<?php
    //set those cookies boy if they login
    if($_POST['codeName'] == "agent" && $_POST['password'] =="password123"){
        setcookie('userName', $_POST['codeName'], time() + 86400);

        
    $title = "Login Screen";
    include('head.php');
?>

<body>
    <div class="container">
        <?php

    // If agent can login
    echo '
<h1>Mission Details</h1>
    <p>Hey Agent. Welcome to the login page, here you will gather your info on how to become a master coder and mine Dogecoins.</p>
    <p><a href="logout.php">Logout</a></p>
    ';

    }else if(isset($_COOKIE['userName'])) {
    $title = "Login Screen";
    include('head.php');
    echo'
    <h1>Mission Details</h1>
    <p>Hey Agent. Welcome to the login page, here you will gather your info on how to become a master coder and mine Dogecoins. </p>
    <p><a href="logout.php">Logout</a></p>';
    }else {
    //bad cop no donut - buy /r/dogecoin
    $title = "Failed Login Attempt";
    include('head.php');
    echo
    '<div class="container">
    <h1>Not Authorized </h1>
    <p>You do not have the credentials to view this page</p>
    <p>Please <a href="index.php">login </a>with the appropriate credentials. </p>
    </div>
    ';
    }
    ?>
    </div>
</body>

</html>