<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>KPOP AGENCY</title>
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
    <body background="img/BG.jpg" >        
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
                    <h2>ต้นสังกัด</h2>
                    <a href="agency_add.php" class="btn btn-link">เพิ่มต้นสังกัด</a>
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>รหัส</th>
                                <th colspan="2">ต้นสังกัด</th>
                            </tr>                
                        </thead>
                        <tbody>
                            <?php
                                include 'connectdb.php';
                                $sql =  'SELECT * FROM agency order by agency_code';
                                $result = mysqli_query($conn,$sql);
                                while (($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) != NULL) {
                                    echo '<tr>';
                                    echo '<td>' . $row['agency_code'] . '</td>';
                                    echo '<td>' . $row['agency_name'] . '</td>';
                                    echo '<td>';
                            ?>
                                <a href="agency_edit.php?agency_code=<?php echo $row['agency_code'];?>" class="btn btn-warning">แก้ไข</a>
                                <a href="JavaScript:if(confirm('ยืนยันการลบ')==true){window.location='agency_delete.php?agency_code=<?php echo $row["agency_code"];?>'}" class="btn btn-danger">ลบ</a>
                            <?php
                                    echo '</td>';
                                    echo '</tr>';
                                }
                                mysqli_free_result($result);
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