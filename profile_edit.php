<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>KPOP PROFILE-EDIT</title>
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
                    <h4>แก้ไขข้อมูลโปรไฟล์</h4>
                    <?php
                    $profile_code = $_REQUEST['profile_code'];
                    if(isset($_GET['submit'])){
                        $profile_code     = $_GET['profile_code'];
                        $profile_gn       = $_GET['profile_gn'];
                        $debut            = $_GET['debut'];
                        $member           = $_GET['member'];
                        $leader           = $_GET['leader'];
                        $favorite_song    = $_GET['favorie_song'];
                        $sql        = "update profile set profile_gn='$profile_gn',debut='$debut',member='$member',leader='$leader' where profile_code='$profile_code'";

                    include 'connectdb.php';
                    
                        mysqli_query($conn,$sql);
                        mysqli_close($conn);
                        echo "เปลี่ยนชื่อโปรไฟล์ $profile_gn เรียบร้อยแล้ว<br>";
                        echo '<a href="profile_list.php">แสดงรายชื่อโปรไฟล์ทั้งหมด</a>';
                    }else{
                        
                        
                    ?>
                    <form class="form-horizontal" role="form" name="profile_edit" action="<?php echo $_SERVER['PHP_SELF'];?>">
                        <div class="form-group">
                            <input type="hidden" name="name_code" id="name_code" value="<?php echo "$name_code";?>">
                            
                            <label for="profile_gn" class="col-md-2 col-lg-2 control-label">ชื่อกลุ่มศิลปิน</label>
                            <div class="col-md-10 col-lg-10">
                                <select name="profile_gn" id="profile_gn" class="form-control">
                                <?php
                                    include 'connectdb.php';
                                    $sql2 = "select * from profile where profile_code='$profile_code'";
                                    $result2 = mysqli_query($conn,$sql2);
                                    $row2 = mysqli_fetch_array($result2,MYSQLI_ASSOC);
                                    $fprofile_code     = $_GET['profile_code'];
                                    $fprofile_gn       = $_GET['profile_gn'];
                                    $fdebut            = $_GET['debut'];
                                    $fmember           = $_GET['member'];
                                    $fleader           = $_GET['leader'];
                                    $ffavorite_song    = $_GET['favorie_song'];

                                    $sql =  "SELECT * FROM name order by name_code";
                                    $result = mysqli_query($conn,$sql);
                                    while (($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) != NULL) {
                                        echo '<option value=';
                                        echo '"' . $row['name_code'].'"';
                                        if($row['name_code']==$fprofile_gn){
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
                            <label for="debut" class="col-md-2 col-lg-2 control-label">เดบิวต์</label>
                            <div class="col-md-10 col-lg-10">
                            <input type="text" name="debut" id="debut" class="form-control" 
                                       value="<?php echo $fdebut;?>">
                            </div>    
                        </div>

                        <div class="form-group">
                            <label for="member" class="col-md-2 col-lg-2 control-label">สมาชิก</label>
                            <div class="col-md-10 col-lg-10">
                            <input type="text" name="member" id="member" class="form-control" 
                                       value="<?php echo $fmember;?>">
                            </div>    
                        </div>

                        <div class="form-group">
                            <label for="leader" class="col-md-2 col-lg-2 control-label">ลีดเดอร์</label>
                            <div class="col-md-10 col-lg-10">
                            <input type="text" name="leader" id="leader" class="form-control" 
                                       value="<?php echo $fleader;?>">
                            </div>    
                        </div>

                        <div class="form-group">
                            <label for="favorite_song" class="col-md-2 col-lg-2 control-label">เพลงที่ชอบ</label>
                            <div class="col-md-10 col-lg-10">
                            <input type="text" name="favorite_song" id="favorite_song" class="form-control" 
                                       value="<?php echo $ffavorite_song;?>">
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