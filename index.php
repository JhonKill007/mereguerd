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
   <body id="home_page" class="home_page">
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
      <!-- slider -->
      <section class="slider_section">
         <div class="container-fluid">
            <div class="row">
               <div id="main_slider" class="carousel slide carousel-fade" data-ride="carousel" data-interval="5000">
                  <div class="carousel-inner">
                     <div class="carousel-item slider_inner slider1 active">
                        <div class="container">
                           <div class="row">
                           </div>
                        </div>
                     </div>
                     <div class="carousel-item slider_inner slider2">
                        <div class="container">
                           <div class="row">
                              <div class="slider_coint_inner">
                                 <h3>Best<br><strong>New Collection</strong></h3>
                                 <h4 class="font_themecolor">Loxury Jewellery</h4>
                                 <p>Lorem ipsum dolor sit amet consec tetur adipiscing elit elit at felis<br>
                                    lacinia nec et est aptent taciti sociosqu ad litora torquent per conubia nostra</p>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="slider_bullets">
                        <ol class="carousel-indicators">
                           <li data-target="#main_slider" data-slide-to="0" class="active"><i class="fa fa-chevron-left"></i></li>
                           <li data-target="#main_slider" data-slide-to="1"><i class="fa fa-chevron-right"></i></li>
                        </ol>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- end slider -->

      <!-- about section -->
      <section class="layout_padding section padding_bottom_0">
         <div class="container">
            <div class="row">
               <div class="col-lg-12">
                  <div class="full heading_s1">
                     <h2>MERENGUE</h2>
                  </div>
                  <div class="full">
                  <p>El merengue es un género musical bailable originado en la República Dominicana a finales del siglo XIX. Es muy popular en todo el continente americano, donde es considerado, junto con la salsa, como uno de los grandes géneros musicales bailables que distinguen el género americano. </p>
                  </div>
               </div>
               <div class="col-md-12">
                  <div class="about_img margin_top_30  text_align_center">
                  <iframe width="560" height="315" src="https://www.youtube.com/embed/8PRbLeJ1yIM" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- end about section -->

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
                        $SELECT = "SELECT * FROM exponentes ORDER BY id_exponentes DESC LIMIT 3";
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

      <!-- section --> 
      <section class="layout_padding padding_bottom_0" style="background: #fff;">
         <div class="container">
            <div class="row">
               <div class="col-lg-12">
                  <div class="full heading_s1">
                     <h2>Gallery</h2>
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
                        $SELECT = "SELECT * FROM photo_gallery LIMIT 6";
                        $resultado = mysqli_query($conn,$SELECT);
                        if($resultado){
                        require("modulos/etiquetas-gallery.php");
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
     
      
      <!-- end section -->

     
      <?php
      require("footer.php");
      ?>
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
