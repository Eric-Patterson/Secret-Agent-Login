<body>
    <div class="container">
        <?php
    $title = "Secret Agent Login";
    include('head.php');
?>
        <?php
if(isset($_COOKIE['userName'])){
    //if they have some cookies give them the jar
    echo'
    <h1>Secret Agent Login</h1>
    <p>Agent, you are already logged in, please press the link below to view your mission.</p>
    <a href="secret.php">View your secret mission.</a>
    </div>';
}else{
    // login as normal no cookies for you
    echo'
    
    <h1>Secret Agent Login</h1>

    <form method="post" action="secret.php">
        <fieldset>
        <div id="firstForm">
            <label for="codeName">Codename: </label>
            <input type="text" id="codeName" name="codeName" size="15" placeholder="Enter Code Name">
        </div>
        <div id="secondForm">
            <label for="password">Password: </label>
            <input type="password" id="password" name="password" size="15" placeholder="Enter Password">
        </div>
        
            <input type="submit" id="login" name="login" value="Secure Login">
        </fieldset>
        
    </form>
   
    ';
}
?>
    </div>
</body>


</html>