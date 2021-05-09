<?php
setcookie("userName", "", time() - 86400);

?>

<body>
    <?php
    $title = "Logout";
    include('head.php');
?>
    <div class="container">
        <h1>You have been logged out</h1>
        <p>Your information has been erased from the server.</p>
        <p><a href="index.php">Log in again?</a></p>
    </div>
</body>

</html>