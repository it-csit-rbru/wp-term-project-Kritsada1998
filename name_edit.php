<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>KPOP NAME-EDIT</title>
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
                    <h4>แก้ไขข้อมูลชื่อกลุ่มศิลปิน</h4>
                    <?php
                    include 'connectdb.php';
                    if(isset($_GET['submit'])){
                        $name_code     = $_GET['name_code'];
                        $name_en   = $_GET['name_en'];
                        $name_th   = $_GET['name_th'];
                        $name_ko   = $_GET['name_ko'];
                        $sql        = "update name set name_en='$name_en',name_th='$name_th',name_ko='$name_ko' where name_code='$name_code'";
                        mysqli_query($conn,$sql);
                        mysqli_close($conn);
                        echo "เปลี่ยนชื่อกลุ่มศิลปิน $name_en เรียบร้อยแล้ว<br>";
                        echo '<a href="name_list.php">แสดงชื่อกลุ่มศิลปินทั้งหมด</a>';
                    }else{
                        $name_code = $_REQUEST['name_code'];
                        $sql =  "SELECT * FROM name where name_code='$name_code'";
                        $result = mysqli_query($conn,$sql);
                        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                        $fname_en = $row['name_en'];
                        $fname_th = $row['name_th'];
                        $fname_ko = $row['name_ko'];
                        mysqli_free_result($result);
                        mysqli_close($conn);
                        
                    ?>
                    <form class="form-horizontal" role="form" name="name_edit" action="<?php echo $_SERVER['PHP_SELF'];?>">
                        <div class="form-group">
                            <input type="hidden" name="name_code" id="name_code" value="<?php echo "$name_code";?>">
                            
                        
                        <div class="form-group">
                            <label for="name_en" class="col-md-2 col-lg-2 control-label">ชื่อกลุ่มศิลปิน(อังกฤษ)</label>
                            <div class="col-md-10 col-lg-10">
                                <input type="text" name="name_en" id="name_en" class="form-control" 
                                       value="<?php echo $fname_en;?>">
                            </div>    
                        </div>  
                        
                        <div class="form-group">
                            <label for="name_th" class="col-md-2 col-lg-2 control-label">ชื่อกลุ่มศิลปิน(ไทย)</label>
                            <div class="col-md-10 col-lg-10">
                                <input type="text" name="name_th" id="name_th" class="form-control" 
                                       value="<?php echo $fname_th;?>">
                            </div>    
                        </div>  

                        <div class="form-group">
                            <label for="name_ko" class="col-md-2 col-lg-2 control-label">ชื่อกลุ่มศิลปิน(เกาหลี)</label>
                            <div class="col-md-10 col-lg-10">
                                <input type="text" name="name_ko" id="name_ko" class="form-control" 
                                       value="<?php echo $fname_ko;?>">
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