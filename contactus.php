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
	<script type="text/javascript" src="js/customalert.js"></script>
	<link rel="stylesheet" type="text/css" href="css/customalert.css" />
   
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
</div>
<?php
if(isset($_GET['msg']))
	{
		$param=$_GET['msg'];
		if($param=="succenquiry")
		 {
		 echo "<script>createCustomAlert('Thank You for Contacting Us..','','SUCCESS');</script>";
		 }
		if($param=="succalumini")
		 {
		 echo "<script>createCustomAlert('Thank You for Registering Us..','','SUCCESS');</script>";
		 }  
	}	 

?>	
  <?php include('nav.php');  ?>	
 <!-- Page breadcrumb -->
 <section id="mu-page-breadcrumb">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <div class="mu-page-breadcrumb-area">
           <h2>Contact Us</h2>
           <ol class="breadcrumb">
            <li><a href="#">Home</a></li>            
            <li class="active">Contact Us</li>
          </ol>
         </div>
       </div>
     </div>
   </div>
 </section>
 <!-- End breadcrumb -->
<?php include('tabslide.php'); ?>
 <!-- Start contact  -->
 <section id="mu-contact">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <div class="mu-contact-area">
		   <font face="calibri" size=3>
		      <h3>Maharashtra Institute Of Management</h3>
			  A/P-Kalamb-Walchandnagar<br>
			  Tal : Indapur Dist : Pune <br>Pin Code :413114,<br>
                          Email: mim.kalamb@dkkkpmba.com<br>
			  Office Phone : 02118-254820<br>
			  Latitude  : 18.028607884914152<br>
			  Longitude :74.76191997528076<br>
			  </font>	
          <!-- start contact content -->
          <div class="mu-contact-content">           
            <div class="row">
              <div class="col-md-6">
                <div class="mu-contact-left">
                  <form class="contactform" action="enquiry.php" method="post">    
					<input type="hidden" name="action" value="contactus">				  
                    <p class="comment-form-author">
                      <label for="author">Name <span class="required">*</span></label>
                      <input type="text" required="required" size="30" value="" name="author">
                    </p>
                    <p class="comment-form-email">
                      <label for="email">Email <span class="required">*</span></label>
                      <input type="email" required="required" aria-required="true" value="" name="email">
                    </p>
					<p class="comment-form-url">
                      <label for="mobile">Contact No<span class="required">*</span></label>
                      <input type="text" name="contact" aria-required="true">  
                    </p>
                    <p class="comment-form-url">
                      <label for="subject">Subject<span class="required">*</span></label>
                      <input type="text" name="subject" aria-required="true">  
                    </p>
                    <p class="comment-form-comment">
                      <label for="comment">Message<span class="required">*</span></label>
                      <textarea required="required" aria-required="true" rows="8" cols="45" name="comment"></textarea>
                    </p>                
                    <p class="form-submit">
                      <input type="submit" value="Send Message" class="mu-post-btn" name="submit">
                    </p>        
                  </form>
                </div>
              </div>
              <div class="col-md-6">
                <div class="mu-contact-right">
        
                <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyA9G59lf61IxMTCcf8ZVJYckht_JbDJmVo"></script>;<div style="overflow:hidden;height:500px;width:600px;"><div id="gmap_canvas" style="height:500px;width:600px;"><style>#gmap_canvas img{max-width:none!important;background:none!important}</style><a class="google-map-code" href="http://www.themecircle.net" id="get-map-data">wordpress themes</a></div></div><script type="text/javascript"> function init_map(){var myOptions = {zoom:14,center:new google.maps.LatLng(18.0269171,74.78768600000001),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(18.0269171, 74.78768600000001)});infowindow = new google.maps.InfoWindow({content:"<b>Maharashtra Institute Of Management</b><br/>Kalamb,Walchandnagar<br/>413114 Pune" });google.maps.event.addListener(marker, "click", function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
             
           
                </div>
              </div>
            </div>
          </div>
          <!-- end contact content -->
         </div>
       </div>
     </div>
   </div>
 </section>
 <!-- End contact  -->
 


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