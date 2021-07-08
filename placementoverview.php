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
    <!-- WARNING: Respond.js doesnt work if you view the page via file:// -->
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
           <h2>Placement Overview</h2>
           <ol class="breadcrumb">
            <li><a href="#">Placement</a></li>            
            <li class="active">Placement Overview</li>
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
						<h3>Placement Committee</h3>
						
						<table border="0" width="468" height="142">
							<tr>
								<td height="29" width="199">Mr.Mangesh Phadtare</td>
								<td height="29" width="84">C.E.O</td>
								<td height="29" width="139">9423571175</td>
							</tr>
						
							<tr>
								<td height="27" width="199">Dr.Jayant Shastri</td>
								<td height="27" width="84">T.P.O</td>
								<td height="27" width="139">8805552382</td>
							</tr>
							<tr>
								<td height="57" width="199">Prof.Vipul Nimbalkar</td>
								<td height="57" width="84">HOD</td>
								<td height="57" width="139">9689919495<br>9511713700</td>
							</tr>
						</table>
						<h3>Student Placement Committee Members</h3>
						<li>Yadav Shrikant Kisan</li>
						<li>Shaha Vardhaman Suparshwanath</li>
						<li>Dhumal Nikhil Lalaso</li>
						<li>Kothari Prasanna Mahavir</li>
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