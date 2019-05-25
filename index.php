<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>KPOP</title>
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
                    <p>ประวัติ KPOP </p>
                </div>  
            </div>

            <div class="row">
                <div class="col-sm-12 col-md-3 col-lg-3">
                <img src="img/KCON.jpg" alt="KCON 2012" width="70%">    
                <p>กลุ่มไอดอลบนเวทีงาน <a href= "http://www.kconusa.com/about-us/kcon-2012/" target="_blank" >เคคอน 2012</a></p>
                </div>  
                <div class="col-sm-12 col-md-9 col-lg-9">
                <p>กลุ่มไอดอลเกาหลีใต้เริ่มต้นขึ้นหลังจากความสำเร็จของการเปิดตัว ซอแทจีแอนด์บอยส์ เมื่อปี ค.ศ. 1992 ซึ่งเป็นจุดเปลี่ยนประวัติศาสตร์ของเพลงเกาหลี <br> 
                   ปี ค.ศ. 2012 เป็นปีที่มีศิลปินเคป็อปหน้าใหม่มากที่สุด โดยมีบอยแบนด์ 33 กลุ่ม และเกิร์ลกรุป 38 กลุ่มที่เปิดตัวในปีนั้น</p>
                </div>    
            </div>
            
            <div class="row">
               <center><h3><B>GOT7</B></h3>
               <p style="text-indent: 18em;" >"Top 1  My Favorite KPOP Group Forver."</p>

        <a href = "slide.php" target = "_blank">
          <div class="w3-content w3-section" style="max-width:400px">
            <img class="mySlides" src="img/GOT1.jpg" style="width:92%">
            <img class="mySlides" src="img/GOT2.jpg" style="width:92%">
            <img class="mySlides" src="img/GOT3.jpg" style="width:92%">
            <img class="mySlides" src="img/GOT4.jpg" style="width:92%">
            <img class="mySlides" src="img/GOT5.jpg" style="width:92%">
          </div>
        </a>
          
          <script>
          var myIndex = 0;
          carousel();
          
          function carousel() {
            var i;
            var x = document.getElementsByClassName("mySlides");
            for (i = 0; i < x.length; i++) {
              x[i].style.display = "none";  
            }
            myIndex++;
            if (myIndex > x.length) {myIndex = 1}    
            x[myIndex-1].style.display = "block";  
            setTimeout(carousel, 2000); // Change image every  seconds
          }
          </script>
          
        <br>
        <p><B>ก็อตเซเวน</B> (อังกฤษ: GOT7; เกาหลี: 갓세븐) เป็นกลุ่มศิลปินดนตรีชายจากเกาหลีใต้ สังกัดค่าย <B>เจวายพีเอนเตอร์เทนเมนต์</B> ประกอบไปด้วยสมาชิกจำนวน 7 คน คือ<br>
             เจบี, มาร์ก, แจ็กสัน, จินย็อง, ย็องแจ, แบมแบม และยูกย็อม เปิดตัวครั้งแรกใน เดือนมกราคม พ.ศ. 2557 กับอีพีชื่อ ก็อตอิต ? ซึ่งขึ้นสูงสุดที่อันดับที่ 2 <br>
            บน กาออนอัลบั้มชาร์ต และอันดับที่ 1 บนชาร์ต บิลบอร์ด เวิลด์อัลบั้มชาร์ต กลุ่มได้รับความสนใจจากการแสดงบนเวทีของพวกเขา <br> 
            ซึ่งรวมถึงองค์ประกอบศิลปะการต่อสู้แบบทริกกิง (martial arts tricking) ที่ทำให้กลุ่มกลายเป็นที่รู้จัก <br></p>    
            <p align = "right">ติดตามGOT7 ได้ที่  YOUTUBE CHANNEL <a href = "https://www.youtube.com/channel/UC8HEl74jL3bLLwfDP1OALxw" target = "_blank">GOT7</a></p> <a href = "https://www.youtube.com/channel/UC8HEl74jL3bLLwfDP1OALxw" target = "_blank"><img src="img/GOTYOU.JPG" alt="GOT7 YOUTUBE CHANNEL" WIdth ="15%" align = "right"></a>
            
            </center>
                 
                
            </div>

            

            <div class="row">
                <address>9022132 การเขียนโปรแกรมเว็บ (Web Programming) ทำการสอนโดย อาจารย์ นิทัศน์ นิลฉวี</address>
            </div>
        </div>    
    </body>
</html>