<?php

    $fname=$_POST['fname'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];

?>

<html>
    <head>
    </head>
    <body>
        <div class="display">
            <h1>Welcome <?php echo $fname; ?></h1>
            <p> Your Email: <?php echo $email.'</br>'; ?>
                Your Phone number: <?php echo $phone.'</br>'; ?></p> 
        </div>
    </body>
</html>