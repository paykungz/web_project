<!DOCTYPE html>
<html>

<head>
<?php session_start();
      if(empty($_SESSION['ses_user'])){
        header("Location: index.php");
        exit;
      }
    ?>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="admin.css">
</head>

<body>
    <div class="container-fluid" height="500px">
        <div class="row">
            <div class="col-md-3">

                <div class="menu col-md-12" style="min-height: 100vh;width:100%;">
                    <a href="index.html">
                        <div class="" style="background: rgb(238, 238, 238);height:20%">
                            <br>


                            <h1 class="display-4">Admin</h1>

                            <p class="display-7">Control Panel</p>
                            <p ckass="display-7">Welcome: <?php echo $_SESSION['ses_user'] ?> </p>
                            </a>
                            <form action="endses.php" method="post">
                            <input type="submit" value="Logout">
                            </form>


                        </div>
                    
                    <div class="btn-group-vertical" style="width: 100%;margin:100px 0;" role="group" aria-label="Button group with nested dropdown">
                        <div class="btn-group dropright" role="group">
                            <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        รายการสินค้า 
                        </button>
                            <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                <a class="dropdown-item" href="addpd.html">เพิ่มสินค้า</a>
                                <a class="dropdown-item" href="delpd.php">ลบสินค้า</a>
                                <a class="dropdown-item" href="#">แก้ไขสินค้า</a>
                            </div>
                        </div>
                        <button type="button" class="btn btn-secondary">ตรวจสอบการชำระเงิน <span class="badge badge-primary">1</span></button>
                        <button type="button" class="btn btn-secondary">ข้อความ <span class="badge badge-primary">4</span></button>

                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="container" style="margin:20px 0">
                    <div class="row">
                        <div class="col-md-9">
                            <form>
                                <input type="text" id="search_word">
                                <button type="button" id="searchButton">Search</button>
                            </form>
                            <p id="myOutput">test</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/getjson.js">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>