<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title> <?php include('title.php');  ?>	</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">

    <!-- Font awesome -->
    <link href="assets/css/font-awesome.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">   
    <!-- Slick slider -->
    <link rel="stylesheet" type="text/css" href="assets/css/slick.css">          
    <!-- Fancybox slider -->
    <link rel="stylesheet" href="assets/css/jquery.fancybox.css" type="text/css" media="screen" /> 
    <!-- Theme color -->
    <!-- Main style sheet -->
    <link href="assets/css/style.css" rel="stylesheet">    

   
    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,400italic,300,300italic,500,700' rel='stylesheet' type='text/css'>
    

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>
  <body> 

  <?php include('nav.php');  ?>	
  <!-- Start Slider -->
  <section id="mu-slider">
    <!-- Start single slider item -->
    <div class="mu-slider-single">
      <div class="mu-slider-img">
        <figure>
          <img src="assets/img/slider/1.jpg" alt="img">
        </figure>
      </div>
      
    </div>
    <!-- Start single slider item -->
    <!-- Start single slider item -->
    <div class="mu-slider-single">
      <div class="mu-slider-img">
        <figure>
          <img src="assets/img/slider/2.jpg" alt="img">
        </figure>
      </div>
     
    </div>
    <!-- Start single slider item -->
    <!-- Start single slider item -->
    <div class="mu-slider-single">
      <div class="mu-slider-img">
        <figure>
          <img src="assets/img/slider/3.jpg" alt="img">
        </figure>
      </div>
      
    </div>
    <!-- Start single slider item -->    
  </section>
  <!-- End Slider --> <?php include('tabslide.php'); ?>


  <!-- Start about us -->
  <section id="mu-about-us">
    <div class="container">
       <div class="row">
              <div class="col-md-9">
                <!-- start course content container -->
                <div class="mu-course-container">
                  <div class="row">
						<p align="justify">	
							<h2>Welcome To Maharashtra Institute Of Management - Kalamb</h2>				
							In an increasingly competitive business environment - where national borders are of a less concen-it is clear that INDIA as a whole has a pressing need for sophisticated business leaders.
							These regional leaders must be wholly qualified to deal successfully with rapid and far-reaching changes,including the rapid development of information technology currently fueling global business.Maharahtra Institute Of Management develops business management post gradutes with the knowledge and analytical skills needed to take effective change of new economy.
						</p>
						<p align="justify">	 
							<b> Savitribai Phule Pune University's MBA</b> Program continues to be reckoned as the first accredited program in Western India and in the top rankings in the Maharashtra region.Teaching is by case-study,balanced with lectures,semninars and group work,all of which emphasize the application of theoretical training to the practical problems managers face today are are most likely to face in the future.
						</p>
						<p align="justify">	 
							Convinced that modern management education must take root in it's home soil,Maharashtra Institute Of Management provides management education that is both relevant and Indian.We cordially invite you to consider the Maharashtra Institute Of Management,MBA program with all it's resources,challenges and opportunities,to shape your future,with a ground success.
						</p>
						<b>"Students developement and bright future is our moto"</b>
			       </div>
                </div>
                <!-- end course content container -->
               </div>
              <div class="col-md-3">
                <!-- start sidebar -->
                <aside class="mu-sidebar">
				    <!-- start single sidebar -->
                  <div class="mu-single-sidebar">
						<p align="left"><img src="images/uttamraophadtare.jpg" width="250" height="300" border="0"></p>
						<p align="justify"><b>Shri. Uttam Phadtare.<br>
						President</b></p>
                  </div>
                  <!-- end single sidebar -->
                  <!-- start single sidebar -->
                  <div class="mu-single-sidebar">
                    <h3>News</h3>
                     <?php include('newsticker.php'); ?>
                  </div>
                  <!-- end single sidebar -->
				 
                </aside>
                <!-- / end sidebar -->
             </div>
			
           </div>
    </div>
  </section>
  <!-- End about us -->
  
 <?php include('footer.php');  ?> 
  
  <!-- jQuery library -->
 
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="assets/js/bootstrap.js"></script>   
  <!-- Slick slider -->
  <script type="text/javascript" src="assets/js/slick.js"></script>
  <!-- Counter -->
  <script type="text/javascript" src="assets/js/waypoints.js"></script>
  <script type="text/javascript" src="assets/js/jquery.counterup.js"></script>  
  <!-- Mixit slider -->
  <script type="text/javascript" src="assets/js/jquery.mixitup.js"></script>
  <!-- Add fancyBox -->        
  <script type="text/javascript" src="assets/js/jquery.fancybox.pack.js"></script>
  
  
  <!-- Custom js -->
  <script src="assets/js/custom.js"></script> 

  </body>
</html>