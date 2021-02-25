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
   <body id="shop" class="shop_page">
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
      <section class="innerpage_banner">
         <div class="container">
            <div class="row">
               <div class="col-sm-12">
                  <div class="full">
                     <div class="page_title">
                        <div class="full heading_s1">
                           <h2><span>Agregar Artista</span></h2>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- end inner page -->
      <!-- section -->
      <section class="layout_padding section padding_bottom_0">
         <div class="container">
           <div class="row">
               <div class="col-md-12">
                  <div class="contact_section margin_top_30">
                     <div class="row">
                        <div class="col-md-6"> 
                            <div class="gold_con">
                               <!-- <img src="images/gold_c.png" alt="#" /> -->
                            </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form_cont">
                           <form action="keys/agregar-artistas.php" method="POST" enctype="multipart/form-data" class="form-horizontal">
                                <!-- nombre -->
                                <div class="form-group">
                                    <div class="col-sm-12 box-ag">
                                        <div class="col-sm-12 email-box">
                                            <input type="file" class="form-control" id="foto" name="foto"
                                            accept="image/*" required>
                                        </div>
                                        <div class="col-sm-12 email-box">
                                            <input type="text" class="form-control" id="nombre" name="nombre"
                                                placeholder="Nombre" required>
                                        </div>
                                        <br>
                                        

                                        <div class="col-sm-12">
                                            <select class="form-control" id="genero" name="genero" required>
                                                <option selected>Genero</option>
                                                <option value="Merengue Clasico">Merengue Clasico</option>
                                                <option value="Merengue Tipico">Merengue Tipico</option>
                                                <option value="Merengue de Calle">Merengue de Calle</option>
                                            </select>
                                        </div>

                                        

                                        <div class="col-sm-12">
                                            <textarea class="form-control" placeholder="Descripcion" name="descripcion" id="descripcion" cols="30" rows="10"></textarea>
                    
                                        </div>
                                    </div>
                                    <br>

                                    <!-- boton sign up -->
                                    <div class="form-group">
                                        <div class="col-sm-offset">
                                            <a href="perfil-screen.html"><button type="submit"
                                                    class=" col-sm-12">
                                                    Guardar
                                                </button></a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- end section -->
      <!-- footer -->
      
      <!-- end footer -->
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
