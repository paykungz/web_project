<?php
session_start();
?>
<!DOCTYPE html>
<head></head>
<body>
    this is page1
    <?php
    $_SESSION['user'] = "alex";
    $_SESSION['email'] = "asd@123.com";
    ?>
    <a href="page2.php" method="POST" name="name">Page2.php</a>
</body>