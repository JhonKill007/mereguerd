<!DOCTYPE html>
<html lang="en">
   <!-- Basic -->
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <!-- Mobile Metas -->
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <!-- Site Metas -->
   <title>Loxury</title>
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">
   <!-- site icon -->
   <link rel="icon" href="images/fevicon.png" type="image/png" />
   <!-- Bootstrap core CSS -->
   <link href="css/bootstrap.css" rel="stylesheet">
   <!-- FontAwesome Icons core CSS -->
   <link href="css/font-awesome.min.css" rel="stylesheet">
   <!-- Custom animate styles for this template -->
   <link href="css/animate.css" rel="stylesheet">
   <!-- Custom styles for this template -->
   <link href="style.css" rel="stylesheet">
   <!-- Responsive styles for this template -->
   <link href="css/responsive.css" rel="stylesheet">
   <!-- Colors for this template -->
   <link href="css/colors.css" rel="stylesheet">
   <!-- light box gallery -->
   <link href="css/ekko-lightbox.css" rel="stylesheet">
   <!--[if lt IE 9]>
   <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
   <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
   <![endif]-->
   </head>
   <body id="about" class="about_page">
      <!-- loader -->
      <div id="preloader">
         <img class="preloader" src="images/logo.png" alt="#">
      </div>
      <!-- end loader -->
      <!-- header -->
      <header class="header">

         <?php
         require("nav.php");
         ?>
      </header>
      <!-- end header -->
      <!-- inner page -->
      <!-- <section class="innerpage_banner">
         <div class="container">
            <div class="row">
               <div class="col-sm-12">
                  <div class="full">
                     <div class="page_title">
                        <div class="full heading_s1">
                           <h2><span>About us</span></h2>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section> -->
      <!-- end inner page -->
      <!-- about section -->
      <section class="layout_padding section padding_bottom_0">
         <div class="container">
            <div class="row">
               <div class="col-lg-12">
                  <div class="full heading_s1">
                     <h2>Historia del Merengue</h2>
                  </div>
                  <!-- <div class="full">
                     <p class="large">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and</p>
                  </div> -->
               </div>
               <div class="col-md-12">
                  <div class="about_img margin_top_30  text_align_center">
                     <!-- <img src="images/video_img.jpg" alt="#" /> -->
                     <iframe width="560" height="315" src="https://www.youtube.com/embed/sxFFRxrZ7bk" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                  </div>
               </div>
            </div>
         </div>
      </section>

      
      <!-- section --> 
      <section class="layout_padding padding_bottom_0" style="background: #fff;">
         <div class="container">
            <div class="row">
               <div class="col-lg-12">
                  <div class="full heading_s1">
                     <h2>Principales Exponentes</h2>
                  </div>
                  <!-- <div class="full">
                     <p class="large">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and</p>
                  </div> -->
               </div>
            </div>
            <div class="row product_section">
            <?php
                    $host = "localhost";
                    $dbusername = "root";
                    $dbpassword =  "";
                    $dbname = "dbg34merengue8688";
                    $conn = new mysqli($host,$dbusername,$dbpassword,$dbname);
                    if($conn){
                        $SELECT = "SELECT * FROM exponentes WHERE genero='Merengue Clasico' ORDER BY id_exponentes DESC LIMIT 3";
                        $resultado = mysqli_query($conn,$SELECT);
                        if($resultado){
                        require("modulos/etiquetas.php");
                        }
                        else{
                            echo " se fue a la verga";
                        }
                    }
                    else{
                        echo "la coneccion fallo";
                    }
                  ?>
               
            </div>
          </div>
      </section>
      <!-- end section -->
      <?php
      require("footer.php");
      ?>
      <!-- end footer -->
      <!-- Core JavaScript
         ================================================== -->
      <script src="js/jquery.min.js"></script>
      <script src="js/tether.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="js/parallax.js"></script>
      <script src="js/animate.js"></script>
      <script src="js/ekko-lightbox.js"></script>
      <script src="js/custom.js"></script>
   </body>
</html>
