<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>KPOP PROFILE-ALL</title>
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
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <h4>แสดงข้อมูลกลุ่มศิลปิน</h4>
                    <a href="profile_all_add.php" class="btn btn-link">เพิ่มข้อมูลกลุ่มศิลปิน</a>
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>รหัส</th>
                                    <th>ชื่อวง</th>
                                    <th >ชื่อแฟนด้อม</th>
                                    <th>เดบิวต์</th>
                                    <th >สมาชิก</th>
                                    <th>ลีดเดอร์</th>
                                    <th>เพลงที่ชอบ</th>
                                    <th>ต้นสังกัด</th>
                                    <th colspan="2" >ประเภท</th>
                                   
                                    
                                </tr>
                            </thead>
                            <tbody>
                    <?php
                        include 'connectdb.php';                        
                        $sql =  'SELECT * FROM profile_all order by profile_code';
                        $result = mysqli_query($conn,$sql);
                        while (($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) != NULL) {
                            echo '<tr>';
                            echo '<td>' . $row['profile_code'] . '</td>';
                            echo '<td>' . $row['name_en'] . '</td>';
                            echo '<td>'   . $row['fandom_name'] . '</td>' ; 
                            echo '<td>'   .$row['debut'].'</td>';
                            echo '<td>' . $row['member'] . '</td>';
                            echo '<td>' . $row['leader'] . '</td>';
                            echo '<td>' . $row['favorite_song'] . '</td>';
                            echo '<td>'   .$row['agency_name'].'</td>';
                            echo '<td>' . $row['type_name'] . '</td>';
                            echo '<td>';
                            ?>
                                <a href="profile_all_edit.php?profile_code=<?php echo $row['profile_code'];?>" class="btn btn-warning">แก้ไข</a>
                                <a href="JavaScript:if(confirm('ยืนยันการลบ')==true)
                                   {window.location='profile_all_delete.php?profile_code=<?php echo $row["profile_code"];?>'}" class="btn btn-danger">ลบ</a>
                            <?php
                                    echo '</td>';                            
                            echo '</tr>';
                        }
                        mysqli_free_result($result);
                        echo '</table>';
                        mysqli_close($conn);
                    ?>
                            </tbody>
                        </table>    
                </div>    
            </div>
            <div class="row">
            <address>9022132 การเขียนโปรแกรมเว็บ (Web Programming) ทำการสอนโดย อาจารย์ นิทัศน์ นิลฉวี</address>
            </div>
        </div>    
    </body>
</html>