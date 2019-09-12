<html>
<head>
<?php
    session_start();
?>
</head>
<body>
    <?php
    echo '<h1> Logging out </h1>';
    session_destroy();
    echo '<meta http-equiv="refresh" content="2;URL=index.php">';
    ?>
</body>
</html>