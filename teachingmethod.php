<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title><?php include('title.php');  ?></title>

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
    <link id="switcher" href="assets/css/theme-color/default-theme.css" rel="stylesheet">  

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
 <!-- Page breadcrumb -->
 <section id="mu-page-breadcrumb">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <div class="mu-page-breadcrumb-area">
           <h2>Teaching Methodology</h2>
           <ol class="breadcrumb">
            <li><a href="#">Faculty</a></li>            
            <li class="active">Teaching Methodology</li>
          </ol>
         </div>
       </div>
     </div>
   </div>
 </section>
 <!-- End breadcrumb --><?php include('tabslide.php'); ?>
 <section id="mu-course-content">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <div class="mu-course-content-area">
            <div class="row">
              <div class="col-md-9">
                <!-- start course content container -->
                <div class="mu-course-container">
                   <div class="row">
						<p><strong>We at MIM believe that- " Learning is fun and should be enjoyed".</strong></p>
						<br/>The MIM group employs an advanced array of educational methods and follows a unique teaching methodology wherein mainstream teaching is supplemented with varied activities.<br/><br/>&#8226;  Seminars<br/><br/>&#8226;   Case studies<br/><br/>&#8226;   Workshops<br/><br/>&#8226;   Presentations<br/><br/>&#8226;   Interactive Business games<br/><br/>&#8226;   Co-curricular activities like Mindscape, INCON, etc<br/><br/>&#8226;   Extracurricular activities like insignia, Bizz, Dandiya Night<br/><br/>&#8226;   Team Building exercises<br/><br/>&#8226;   Industry Visit<br/><br/>&#8226;   Inter & Intra collegiate Competitions<br/><br/>&#8226;   Mentoring & Counselling<br/><br/>&#8226;   Industry interfacing through various activities like the Pune Expo, CMDA exhibition<br/><br/>&#8226;   Global Exposure by faculty from other countries.</p><br/><br/>
					</div>
                </div>
                <!-- end course content container -->
               </div>
              <div class="col-md-3">
               
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
       </div>
     </div>
   </div>
 </section>

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