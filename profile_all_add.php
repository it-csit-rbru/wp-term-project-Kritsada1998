<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>KPOP PROFILE_ALL-ADD</title>
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
                <div class="jumbotron"style="background-image: url(img/Cover.jpg);">
                    <?php include 'topbanner.php';?>
                </div>
            </div>
            <div class="row">
                <?php include 'menu.php';?>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-3 col-lg-3">
                    <p>ข้อมูลศิลปินเกาหลีที่ฉันชอบ</p>
                </div>  
                <div class="col-sm-12 col-md-9 col-lg-9">
                    <h4>เพิ่มข้อมูลกลุ่มศิลปิน</h4>    
                <?php
                    if(isset($_GET['submit'])){  
                        $debut            = $_GET['debut'];
                        $member           = $_GET['member'];
                        $leader           = $_GET['leader'];
                        $favorite_song    = $_GET['favorite_song'];
                        $profile_gn       = $_GET['profile_gn'];
                        $profile_gf       = $_GET['profile_gf'];
                        $profile_ga       = $_GET['profile_ga'];
                        $profile_gt       = $_GET['profile_gt'];

                        $sql = "insert into profile  ";
                        $sql = "values (null,'$debut','$member','$leader','$favorite_song',$profile_gn','$profile_gf,'$profile_ga','$profile_gt')"; 
                        
                        include 'connectdb.php';
                        if (mysqli_query($conn,$sql)){
                                echo "เพิ่มข้อมูลกลุ่มศิลปินที่มีลีดเดอร์เป็น $leader  เรียบร้อยแล้ว<br>";
                            }else{
                                echo "เพิ่มข้อมูลกลุ่มศิลปินที่มีลีดเดอร์เป็น $leader  ผิดพลาด<br>";
                        }
                        mysqli_close($conn);
                        echo '<a href="profile_all_list.php">แสดงกลุ่มศิลปินทั้งหมด</a>';
                    }else{
                ?>
                    <form class="form-horizontal" role="form" name="profile_add" action="<?php echo $_SERVER['PHP_SELF']?>">
                    
                    <div class="form-group">
                    <label for="profile_gn" class="col-md-2 col-lg-2 control-label">ชื่อกลุ่มศิลปิน</label>
                            <div class="col-md-10 col-lg-10">
                                <select name="profile_gn" id="profile_gn" class="form-control">
                                <?php
                                    include 'connectdb.php';
                                    $sql =  "SELECT * FROM name order by name_code";
                                    $result = mysqli_query($conn,$sql);
                                    while (($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) != NULL) {
                                        echo '<option value=';
                                        echo '"' . $row['name_code'].'">';
                                        
                                        echo $row['name_en'];
                                        echo '</option>';
                                    }
                                    mysqli_free_result($result);
                                    echo '</table>';
                                    mysqli_close($conn);
                                ?>
                                </select>
                           </div>    
                        </div>

                        <div class="form-group">
                    <label for="profile_gf" class="col-md-2 col-lg-2 control-label">ชื่อแฟนด้อม</label>
                            <div class="col-md-10 col-lg-10">
                                <select name="profile_gf" id="profile_gf" class="form-control">
                                <?php
                                    include 'connectdb.php';
                                    $sql =  "SELECT * FROM fandom order by fandom_code";
                                    $result = mysqli_query($conn,$sql);
                                    while (($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) != NULL) {
                                        echo '<option value=';
                                        echo '"' . $row['fandom_code'].'">';
                                        echo $row['fandom_name'];
                                        echo '</option>';
                                    }
                                    mysqli_free_result($result);
                                    echo '</table>';
                                    mysqli_close($conn);
                                ?>
                                </select>
                           </div>    
                        </div>

                    <div class="form-group">
                            <label for="debut" class="col-md-2 col-lg-2 control-label">เดบิวต์</label>
                            <div class="col-md-10 col-lg-10">
                                <input type="text" name="debut" id="debut" class="form-control">
                            </div>    
                        </div>

                        <div class="form-group">
                            <label for="member" class="col-md-2 col-lg-2 control-label">สมาชิก</label>
                            <div class="col-md-10 col-lg-10">
                                <input type="text" name="member" id="member" class="form-control">
                            </div>    
                        </div>

                        <div class="form-group">
                            <label for="leader" class="col-md-2 col-lg-2 control-label">ลีดเดอร์</label>
                            <div class="col-md-10 col-lg-10">
                                <input type="text" name="leader" id="leader" class="form-control">
                            </div>    
                        </div>

                        <div class="form-group">
                            <label for="favorite_song" class="col-md-2 col-lg-2 control-label">เพลงที่ชอบ</label>
                            <div class="col-md-10 col-lg-10">
                                <input type="text" name="favorite_song" id="favorite_song" class="form-control">
                            </div>    
                        </div>

                        <div class="form-group">
                            <input type="hidden" name="profile_code" id="profile_code" value="<?php echo "$profile_code";?>">
                            <label for="profile_ga" class="col-md-2 col-lg-2 control-label">ต้นสังกัด</label>
                            <div class="col-md-10 col-lg-10">
                                <select name="profile_ga" id="profile_ga" class="form-control">
                                <?php
                                    include 'connectdb.php';
                                    
                                    $sql =  "SELECT * FROM agency order by agency_code";
                                    $result = mysqli_query($conn,$sql);
                                    while (($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) != NULL) {
                                        echo '<option value=';
                                        echo '"' . $row['agency_code'].'">';
                                        
                                        echo $row['agency_name'];
                                        echo '</option>';
                                    }
                                    mysqli_free_result($result);
                                    echo '</table>';
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
                                    
                                    $sql =  "SELECT * FROM type order by type_code";
                                    $result = mysqli_query($conn,$sql);
                                    while (($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) != NULL) {
                                        echo '<option value=';
                                        echo '"' . $row['type_code'].'">';
                                    
                                        echo $row['type_name'];
                                        echo '</option>';
                                    }
                                    mysqli_free_result($result);
                                    echo '</table>';
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