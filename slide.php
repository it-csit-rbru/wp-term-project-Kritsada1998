<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>SlideShow GOT7</title>
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
    <body  >        
 
            
            <div class="row">
               

        
          <div class="w3-content w3-section" style="max-width:400px">
            <img class="mySlides" src="img/GOT1.jpg" style="width:340%">
            <img class="mySlides" src="img/GOT2.jpg" style="width:340%">
            <img class="mySlides" src="img/GOT3.jpg" style="width:340%">
            <img class="mySlides" src="img/GOT4.jpg" style="width:340%">
            <img class="mySlides" src="img/GOT5.jpg" style="width:340%">
            <img class="mySlides" src="img/SL/bg-02.jpg" style="width:340%">
            <img class="mySlides" src="img/SL/bg-04.jpg" style="width:340%">
            <img class="mySlides" src="img/SL/bg-07.jpg" style="width:340%">
            <img class="mySlides" src="img/SL/bg-08.jpg" style="width:340%">
            <img class="mySlides" src="img/SL/bg-10.jpg" style="width:340%">
            <img class="mySlides" src="img/SL/bg-12.jpg" style="width:340%">
            <img class="mySlides" src="img/SL/bg-14.jpg" style="width:340%">
            <img class="mySlides" src="img/SL/bg-15.jpg" style="width:340%">
            <img class="mySlides" src="img/SL/bg-16.jpg" style="width:340%">
            <img class="mySlides" src="img/SL/bg-18.jpg" style="width:340%">
            <img class="mySlides" src="img/SL/bg-19.jpg" style="width:340%">
            <img class="mySlides" src="img/SL/bg-29.jpg" style="width:340%">
            <img class="mySlides" src="img/SL/bg-38.jpg" style="width:340%">
            <img class="mySlides" src="img/SL/bg-43.jpg" style="width:340%">
            <img class="mySlides" src="img/SL/bg-44.jpg" style="width:340%">
            <img class="mySlides" src="img/SL/bg-46.jpg" style="width:340%">
            <img class="mySlides" src="img/SL/bg-48.jpg" style="width:340%">
            <img class="mySlides" src="img/SL/bg-51.jpg" style="width:340%">
            <img class="mySlides" src="img/SL/bg-52.jpg" style="width:340%">
            <img class="mySlides" src="img/SL/bg-53.jpg" style="width:340%">
            <img class="mySlides" src="img/SL/bg-58.jpg" style="width:340%">
            <img class="mySlides" src="img/SL/bg-59.jpg" style="width:340%">
            <img class="mySlides" src="img/SL/bg-60.jpg" style="width:340%">
            <img class="mySlides" src="img/SL/bg-66.jpg" style="width:340%">
            <img class="mySlides" src="img/SL/bg-67.jpg" style="width:340%">
            <img class="mySlides" src="img/SL/bg-70.jpg" style="width:340%">
            <img class="mySlides" src="img/SL/bg-71.jpg" style="width:340%">
            <img class="mySlides" src="img/SL/bg-73.jpg" style="width:340%">
            <img class="mySlides" src="img/SL/bg-74.jpg" style="width:340%">
            <img class="mySlides" src="img/SL/bg-75.jpg" style="width:340%">
            <img class="mySlides" src="img/SL/bg-76.jpg" style="width:340%">
            <img class="mySlides" src="img/SL/bg-77.jpg" style="width:340%">
            <img class="mySlides" src="img/SL/bg-80.jpg" style="width:340%">
            <img class="mySlides" src="img/SL/bg-81.jpg" style="width:340%">
            <img class="mySlides" src="img/SL/bg-82.jpg" style="width:340%">
          </div>
        
          
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
            setTimeout(carousel, 7000); // Change image every  7 seconds
          }
          </script>
    
        </div>
        <div id = "Music">
            <audio hidden controls autoplay loop >
                <source src = "img/GOT7MIRACLE.mp3" type = "audio/mp3"  >
            </audio>
    </body>
</html>