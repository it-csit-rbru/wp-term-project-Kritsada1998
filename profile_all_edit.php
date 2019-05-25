<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>KPOP PROFILE_ALL-EDIT</title>
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
                    <h4>แก้ไขข้อมูลข้อมูลกลุ่มศิลปิน</h4>
                    <?php
                    include 'connectdb.php';
                    if(isset($_GET['submit'])){
                        $profile_code     = $_GET['profile_code'];
                        $profile_gn       = $_GET['profile_gn'];
                        $profile_gf       = $_GET['profile_gf'];
                        $debut            = $_GET['debut'];
                        $member           = $_GET['member'];
                        $leader           = $_GET['leader'];
                        $profile_ga       = $_GET['profile_ga'];
                        $profile_gt       = $_GET['profile_gt'];
                        $sql        = "update profile set profile_gn='$profile_gn',profile_gf='$profile_gf',debut='$debut',member='$member',leader='$leader',profile_ga='$profile_ga',profile_gt='$profile_gt'  
                                        where profile_code='$profile_code'";
                        mysqli_query($conn,$sql);
                        mysqli_close($conn);
                        echo "เปลี่ยนข้อมูลกลุ่มศิลปิน $profile_gn เรียบร้อยแล้ว<br>";
                        echo '<a href="profile_all_list.php">แสดงข้อมูลกลุ่มศิลปินทั้งหมด</a>';
                    }else{
                        $profile_code = $_REQUEST['profile_code'];
                        $sql =  "SELECT * FROM profile_all where profile_code='$profile_code'";
                        $result = mysqli_query($conn,$sql);
                        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                        $fprofile_code     = $row['profile_code'];
                        $fprofile_gn       = $row['name_en'];
                        $fprofile_gf       = $row['fandom_name'];
                        $fdebut            = $row['debut'];
                        $fmember           = $row['member'];
                        $fleader           = $row['leader'];
                        $fprofile_ga       = $row['agency_name'];
                        $fprofile_gt       = $row['type_name'];
                        mysqli_free_result($result);
                        mysqli_close($conn);
                        
                    ?>
                    <form class="form-horizontal" role="form" name="profile_all_edit" action="<?php echo $_SERVER['PHP_SELF'];?>">
                        
                    <div class="form-group">
                            <input type="hidden" name="profile_code" id="profile_code" value="<?php echo "$profile_code";?>">
                            <label for="profile_gn" class="col-md-2 col-lg-2 control-label">ชื่อกลุ่มศิลปิน</label>
                            <div class="col-md-10 col-lg-10">
                                <select name="profile_gn" id="profile_gn" class="form-control">
                                <?php
                                    include 'connectdb.php';
                                    $sql2 = "select * from profile_all where profile_code='$profile_code'";
                                    $result2 = mysqli_query($conn,$sql2);
                                    $row2 = mysqli_fetch_array($result2,MYSQLI_ASSOC);
                                    $fprofile_code     = $row2['profile_code'];
                                    $fprofile_gn       = $row2['name_en'];
                                    $ffandom_name      = $row2['fandom_name'];
                                    $fdebut            = $row2['debut'];
                                    $fmember           = $row2['member'];
                                    $fleader           = $row2['leader'];
                                    $fagency_name      = $row2['agency_name'];
                                    $ftype_name        = $row2['type_name'];
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
                            <input type="hidden" name="profile_code" id="profile_code" value="<?php echo "$profile_code";?>">
                            <label for="profile_gf" class="col-md-2 col-lg-2 control-label">ชื่อแฟนด้อม</label>
                            <div class="col-md-10 col-lg-10">
                                <select name="profile_gf" id="profile_gf" class="form-control">
                                <?php
                                    include 'connectdb.php';
                                    $sql2 = "select * from profile_all where profile_code='$profile_code'";
                                    $result2 = mysqli_query($conn,$sql2);
                                    $row2 = mysqli_fetch_array($result2,MYSQLI_ASSOC);
                                    $fprofile_code     = $row2['profile_code'];
                                    $fname_en          = $row2['name_en'];
                                    $ffandom_name      = $row2['fandom_name'];
                                    $fdebut            = $row2['debut'];
                                    $fmember           = $row2['member'];
                                    $fleader           = $row2['leader'];
                                    $fagency_name      = $row2['agency_name'];
                                    $ftype_name        = $row2['type_name'];
                                    
                                    $sql =  "SELECT * FROM fandom order by fandom_code";
                                    $result = mysqli_query($conn,$sql);
                                    while (($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) != NULL) {
                                        echo '<option value=';
                                        echo '"' . $row['fandom_code'].'"';
                                        if($row['fandom_code']==$ffandom_name){
                                            echo ' selected="selected" ';
                                        }
                                        echo ">";
                                        echo $row['fandom_name'];
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
                            <label for="member" class="col-md-2 col-lg-2 control-label">จำนวนสมาชิก</label>
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
                            <input type="hidden" name="profile_code" id="profile_code" value="<?php echo "$profile_code";?>">
                            <label for="profile_ga" class="col-md-2 col-lg-2 control-label">ต้นสังกัด</label>
                            <div class="col-md-10 col-lg-10">
                                <select name="profile_ga" id="profile_ga" class="form-control">
                                <?php
                                    include 'connectdb.php';
                                    $sql2 = "select * from profile_all where profile_code='$profile_code'";
                                    $result2 = mysqli_query($conn,$sql2);
                                    $row2 = mysqli_fetch_array($result2,MYSQLI_ASSOC);
                                    $fprofile_code     = $row2['profile_code'];
                                    $fname_en          = $row2['name_en'];
                                    $ffandom_name      = $row2['fandom_name'];
                                    $fdebut            = $row2['debut'];
                                    $fmember           = $row2['member'];
                                    $fleader           = $row2['leader'];
                                    $fagency_name      = $row2['agency_name'];
                                    $ftype_name        = $row2['type_name'];
                                    
                                    $sql =  "SELECT * FROM agency order by agency_code";
                                    $result = mysqli_query($conn,$sql);
                                    while (($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) != NULL) {
                                        echo '<option value=';
                                        echo '"' . $row['agency_code'].'"';
                                        if($row['agency_code']==$fagency_name){
                                            echo ' selected="selected" ';
                                        }
                                        echo ">";
                                        echo $row['agency_name'];
                                        echo '</option>';
                                    }
                                    mysqli_free_result($result);
                                    mysqli_close($conn);
                                ?>
                                </select>
                           </div>    
                        </div>

                        <div class="form-group">
                            <input type="hidden" name="profile_code" id="profile_code" value="<?php echo "$profile_code";?>">
                            <label for="profile_gt" class="col-md-2 col-lg-2 control-label">ประเภท</label>
                            <div class="col-md-10 col-lg-10">
                                <select name="profile_gt" id="profile_gt" class="form-control">
                                <?php
                                    include 'connectdb.php';
                                    $sql2 = "select * from profile_all where profile_code='$profile_code'";
                                    $result2 = mysqli_query($conn,$sql2);
                                    $row2 = mysqli_fetch_array($result2,MYSQLI_ASSOC);
                                    $fprofile_code     = $row2['profile_code'];
                                    $fname_en          = $row2['name_en'];
                                    $ffandom_name      = $row2['fandom_name'];
                                    $fdebut            = $row2['debut'];
                                    $fmember           = $row2['member'];
                                    $fleader           = $row2['leader'];
                                    $fagency_name      = $row2['agency_name'];
                                    $ftype_name        = $row2['type_name'];
                                    
                                    $sql =  "SELECT * FROM type order by type_code";
                                    $result = mysqli_query($conn,$sql);
                                    while (($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) != NULL) {
                                        echo '<option value=';
                                        echo '"' . $row['type_code'].'"';
                                        if($row['type_code']==$ftype_name){
                                            echo ' selected="selected" ';
                                        }
                                        echo ">";
                                        echo $row['type_name'];
                                        echo '</option>';
                                    }
                                    mysqli_free_result($result);
                                    mysqli_close($conn);
                                ?>
                                </select>
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