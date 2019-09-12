<!DOCTYPE html>
<html>

<head>
    <?php require('config.inc.php')?>
    <?php session_start();
      if(empty($_SESSION['ses_user'])){
        header("Location: index.php");
        exit;
      }
    ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="admin.css">
</head>

<body>
        <?php
        $conn = new mysqli($dbserver, $dbuser, $dbpass,$dbname);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        mysqli_query($conn,"SET NAME utf8");
        ?>
            <div class="container-fluid" height="500px">
                <div class="row">
                    <div class="col-md-3">

                        <div class="menu col-md-12" style="height:800px;width:100%">
                            <a href="index.html">
                                <div class="" style="background: rgb(238, 238, 238);height:20%">
                                    <br>


                                    <h1 class="display-4">Admin</h1>

                                    <p class="display-7">Control Panel</h1>


                                </div>
                            </a>
                            <div class="btn-group-vertical" style="width: 100%;margin:0 0;" role="group" aria-label="Button group with nested dropdown">
                                <div class="btn-group dropright" role="group">
                                    <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        รายการสินค้า 
                        </button>
                                    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                        <a class="dropdown-item" href="#">เพิ่มสินค้า</a>
                                        <a class="dropdown-item" href="#">ลบสินค้า</a>
                                        <a class="dropdown-item" href="#">แก้ไขสินค้า</a>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-secondary">ตรวจสอบการชำระเงิน <span class="badge badge-primary">1</span></button>
                                <button type="button" class="btn btn-secondary">ข้อความ <span class="badge badge-primary">4</span></button>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-9">
                                     <?php
                                     $id = $_REQUEST["id"];
                                $sql = "DELETE FROM product WHERE pro_id=$id";
                                $result = mysqli_query($conn,$sql);
                                if(mysqli_query($conn,$sql)){
                                        echo '<div class="alert alert-success" role="alert">
                                        ลบสำเร็จ!
                                    </div>';
                                    $url = $_SERVER['HTTP_REFERER']; // right back to the referrer page from where you came.
                                    echo '<meta http-equiv="refresh" content="2;URL=' . $url . '">';
                                    
                                }else{
                                    echo 'ERROR: $sql'.mysqli_error($conn);
                                }
                                ?>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>