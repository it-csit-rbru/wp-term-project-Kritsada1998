<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>KPOP TYPE-EDIT</title>
        <!-- Bootstrap -->
        <link href="bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css">
        <link href="bootstrap/css/bootstrap-theme.css" rel="stylesheet" type="text/css">
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="bootstrap/js/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="bootstrap/js/bootstrap.min.js"></script>        
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="bootstrap/js/html5shiv.min.js"></script>
            <script src="bootstrap/js/respond.min.js"></script>
        <![endif]-->
    </head>
    <body background="img/BG.jpg">        
        <div class="container">
            <div class="row"> 
                <div class="jumbotron" style="background-image: url(img/Cover.jpg);">
                    <?php include 'topbanner.php';?>
                </div>
            </div>
            <div class="row">
                <?php include 'menu.php';?>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-3 col-lg-3">
                <p>ข้อมูลศิลปินกลุ่มเกาหลีที่ฉันชอบ</p>
                </div>  
                <div class="col-sm-12 col-md-9 col-lg-9">
                    <h4>แก้ไขข้อมูลประเภท</h4>
                    <?php
                    include 'connectdb.php';
                    if(isset($_GET['submit'])){
                        $type_code     = $_GET['type_code'];
                        $type_name   = $_GET['type_name'];
                        $sql        = "update type set type_name='$type_name' where type_code='$type_code'";
                        mysqli_query($conn,$sql);
                        mysqli_close($conn);
                        echo "เปลี่ยนประเภท $type_name เรียบร้อยแล้ว<br>";
                        echo '<a href="type_list.php">แสดงประเภททั้งหมด</a>';
                    }else{
                        $type_code = $_REQUEST['type_code'];
                        $sql =  "SELECT * FROM type where type_code='$type_code'";
                        $result = mysqli_query($conn,$sql);
                        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                        $ftype_name = $row['type_name'];
                        mysqli_free_result($result);
                        mysqli_close($conn);
                        
                    ?>
                    <form class="form-horizontal" role="form" name="type_edit" action="<?php echo $_SERVER['PHP_SELF'];?>">
                        <div class="form-group">
                            <input type="hidden" name="type_code" id="type_code" value="<?php echo "$type_code";?>">
                            
                        
                        <div class="form-group">
                            <label for="type_name" class="col-md-2 col-lg-2 control-label">ประเภท</label>
                            <div class="col-md-10 col-lg-10">
                                <input type="text" name="type_name" id="type_name" class="form-control" 
                                       value="<?php echo $ftype_name;?>">
                            </div>    
                        </div>    
                        
                        <div class="form-group">
                            <div class="col-md-10 col-lg-10">
                                <input type="submit" name="submit" value="ตกลง" class="btn btn-default">
                            </div>    
                        </div> 
                    </form>
                    <?php
                        }
                    ?>
                </div>    
            </div>
            <div class="row">
            <address>9022132 การเขียนโปรแกรมเว็บ (Web Programming) ทำการสอนโดย อาจารย์ นิทัศน์ นิลฉวี</address>
            </div>
        </div>    
    </body>
</html>