<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>KPOP FANDOM-EDIT</title>
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
                    <h4>แก้ไขข้อมูลแฟนด้อม</h4>
                    <?php
                    include 'connectdb.php';
                    if(isset($_GET['submit'])){
                        $fandom_code     = $_GET['fandom_code'];
                        $fandom_name     = $_GET['fandom_name'];
                        $fandom_gn       = $_GET['fandom_gn'];
                        $sql        = "update fandom set fandom_name='$fandom_name',fandom_gn='$fandom_gn' 
                                       where fandom_code='$fandom_code'";
                        mysqli_query($conn,$sql);
                        mysqli_close($conn);
                        echo "เปลี่ยนชื่อแฟนด้อม $fandom_name เรียบร้อยแล้ว<br>";
                        echo '<a href="fandom_list.php">แสดงรายชื่อแฟนด้อมทั้งหมด</a>';
                    }else{
                        $fandom_code = $_REQUEST['fandom_code'];
                        $sql =  "SELECT * FROM fandom where fandom_code='$fandom_code'";
                        $result = mysqli_query($conn,$sql);
                        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                        $ffandom_name = $row['fandom_name'];
                        mysqli_free_result($result);
                        mysqli_close($conn);
                        
                    ?>









                    <form class="form-horizontal" role="form" name="fandom_edit" action="<?php echo $_SERVER['PHP_SELF'];?>">
                        
                    <div class="form-group">
                            <input type="hidden" name="fandom_code" id="fandom_code" value="<?php echo "$fandom_code";?>">
                            
                            <label for="fandom_gn" class="col-md-2 col-lg-2 control-label">ชื่อกลุ่มศิลปิน</label>
                            <div class="col-md-10 col-lg-10">
                                <select name="fandom_gn" id="fandom_gn" class="form-control">
                                <?php
                                    include 'connectdb.php';
                                    $sql2 = "select * from fandom where fandom_code='$fandom_code'";
                                    $result2 = mysqli_query($conn,$sql2);
                                    $row2 = mysqli_fetch_array($result2,MYSQLI_ASSOC);
                                    $ffandom_name = $row2['fandom_name'];
                                    $ffandom_code = $row2['fandom_code'];
                                    $ffandom_gn = $row2['fandom_gn'];

                                    $sql =  "SELECT * FROM name order by name_code";
                                    $result = mysqli_query($conn,$sql);
                                    while (($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) != NULL) {
                                        echo '<option value=';
                                        echo '"' . $row['name_code'].'"';
                                        if($row['name_code']==$ffandom_gn){
                                            echo ' selected="selected" ';
                                        }
                                        echo ">";
                                        echo $row['name_en'];
                                        echo '</option>';
                                    }
                                    mysqli_free_result($result);
                                    mysqli_close($conn);
                                ?>
                                </select>
                           </div>    
                           </div>
                        <div class="form-group">
                            <label for="fandom_name" class="col-md-2 col-lg-2 control-label">ชื่่อแฟนด้อม</label>
                            <div class="col-md-10 col-lg-10">
                                <input type="text" name="fandom_name" id="fandom_name" class="form-control" 
                                       value="<?php echo $ffandom_name;?>">
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