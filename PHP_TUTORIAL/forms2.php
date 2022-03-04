<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forms</title>
</head>
<body>
    <form action="welcome.php" method="post">
        <input type="text" name="fname" placeholder="FirstName" autocomplete="off">
        <br>
        <br>
        <input type="text" name="lname" placeholder="LastName" autocomplete="off">
        <br>
        <br>   
        <button tupe="submit">Submit</button>  
        <!--
            <?php
              if($_SERVER['REQUEST_METHOD']=="POST")
              $fname=$_POST['fname'];
              $lname=$_POST['lname'];
            ?>

-->   
    </form>
</body>
</html>