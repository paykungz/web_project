<!DOCTYPE html>
<head>
    <?php session_start() ?>
</head>
<body>
    <?php echo '<h1>username: '.$_SESSION["user"].'</h1>';?>
    <a href="page1.php">Page1</a>
<?php 

?>
</body>