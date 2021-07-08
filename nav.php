<script src="assets/js/jquery.min.js" type="text/javascript"></script>
<?php include('theme.php'); ?>
  <!--START SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#">
      <i class="fa fa-angle-up"></i>      
    </a>
  <!-- END SCROLL TOP BUTTON -->

  <!-- Start header  -->
  <header id="mu-header">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <div class="mu-header-area">
            <div class="row">
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                <div class="mu-header-top-left">
                  <div class="mu-top-email">
                    <i class="fa fa-envelope"></i>
                    <span>enquiry@dkkkpmba.com</span>
                  </div>
                  <div class="mu-top-phone">
                    <i class="fa fa-phone"></i>
                    <span>02118-254820</span>
                  </div>
                </div>
              </div>
			
			<!--
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                <div class="mu-header-top-right">
                  <nav>
                    <ul class="mu-top-social-nav">
                      <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                      <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                      <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                      <li><a href="#"><span class="fa fa-linkedin"></span></a></li>
                      <li><a href="#"><span class="fa fa-youtube"></span></a></li>
                    </ul>
                  </nav>
                </div>
              </div>
			-->
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
<!-- End header  -->
  <!-- Start menu -->
  <section id="mu-menu">
    <nav class="navbar navbar-default" role="navigation">  
      <div class="container">
        <div class="navbar-header">
          <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php"><img src="assets/img/logo.png" border="0"></a>
		 <br><br><br><br><br><br>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul id="top-menu" class="nav navbar-nav navbar-right main-nav">
		  <?php
		  $pageName = basename($_SERVER['PHP_SELF']);
			if($pageName == "index.php")
				{
				echo "<li class='active'><a href='index.php'>Home</a></li>";           
				echo "<li class='dropdown'>";
				  echo "<a href='#' class='dropdown-toggle' data-toggle='dropdown'>About Us <span class='fa fa-angle-down'></span></a>";
				  echo "<ul class='dropdown-menu' role='menu'>";
					echo "<li><a href='intro.php'><img src='assets/img/arrow.png' border='0'>Institute at a Glance</a></li>";               
					echo "<li><a href='aboutdkkkp.php'><img src='assets/img/arrow.png' border='0'>About DKKKP</a></li>";
					echo "<li><a href='presidentsmessage.php'><img src='assets/img/arrow.png' border='0'>Presidents Message</a></li>";	
					echo "<li><a href='secretarysmessage.php'><img src='assets/img/arrow.png' border='0'>Secretary Message</a></li>";
					echo "<li><a href='ceosmessage.php'><img src='assets/img/arrow.png' border='0'>CEO Message</a></li>";
					echo "<li><a href='directorsmessage.php'><img src='assets/img/arrow.png' border='0'>Directors Message</a></li>";	
					echo "<li><a href='qualitypolicy.php'><img src='assets/img/arrow.png' border='0'>Quality Policy</a></li>";
					echo "<li><a href='missionandvision.php'><img src='assets/img/arrow.png' border='0'>Mission and Vision</a></li>";
				echo "</ul>";
				echo "</li>";    
				echo "<li><a href='mandatory.php'>Mandatory Disclosure</a></li>";
				echo "<li class='dropdown'>";
				  echo "<a href='#' class='dropdown-toggle' data-toggle='dropdown'>Faculty <span class='fa fa-angle-down'></span></a>";
				  echo "<ul class='dropdown-menu' role='menu'>";
					echo "<li><a href='teaching.php'><img src='assets/img/arrow.png' border='0'>Teaching</a></li>";                
					echo "<li><a href='nonteaching.php'><img src='assets/img/arrow.png' border='0'>Non Teaching</a></li>";
					echo "<li><a href='supporting.php'><img src='assets/img/arrow.png' border='0'>Supporting</a></li>";			
					echo "<li><a href='visitingfaculty.php'><img src='assets/img/arrow.png' border='0'>Visiting Faculty</a></li>";
					echo "<li><a href='teachingmethod.php'><img src='assets/img/arrow.png' border='0'>Teaching Methodology</a></li>";	
					echo "<li><a href='career.php'><img src='assets/img/arrow.png' border='0'>Current Opportunities</a></li>";	
				echo "</ul>";
				echo "</li>"; 
				echo "<li class='dropdown'>";
				  echo "<a href='#' class='dropdown-toggle' data-toggle='dropdown'>Admissions<span class='fa fa-angle-down'></span></a>";
				  echo "<ul class='dropdown-menu' role='menu'>";
					echo "<li><a href='admissionprocedure.php'><img src='assets/img/arrow.png' border='0'>Admission Procedure</a></li>";                
					echo "<li><a href='documentsrequired.php'><img src='assets/img/arrow.png' border='0'>Documents Required</a></li>";
					echo "<li><a href='intake.php'><img src='assets/img/arrow.png' border='0'>Intake Capacity</a></li>";
					echo "<li><a href='brochure.php'><img src='assets/img/arrow.png' border='0'>Brochure</a></li>";
					echo "<li><a href='http://collegecirculars.unipune.ac.in/sites/documents/Syllabus%202016/MBA_NEW_Syllabus_2016-17-17-6-16.pdf' target='_blank'><img src='assets/img/arrow.png' border='0'>Syllabus </a></li>";					
				  echo "</ul>";
				echo "</li>"; 	
				echo "<li class='dropdown'>";
				  echo "<a href='#' class='dropdown-toggle' data-toggle='dropdown'>Placement <span class='fa fa-angle-down'></span></a>";
					echo "<ul class='dropdown-menu' role='menu'>";
						echo "<li><a href='placementoverview.php'><img src='assets/img/arrow.png' border='0'>Overview</a></li>";                
						echo "<li><a href='recruiters.php'><img src='assets/img/arrow.png' border='0'>Our Recruiters</a></li>"; 
					echo "</ul>";
				echo "</li>";
				echo "<li class='dropdown'>";
				echo "<a href='#' class='dropdown-toggle' data-toggle='dropdown'>Student Corner <span class='fa fa-angle-down'></span></a>";
				    echo "<ul class='dropdown-menu' role='menu'>";
				    echo "<li><a href='fees.php'><img src='assets/img/arrow.png' border='0'>Fee Structure</a></li>";     
				        echo "<li><a href='ControlPanel/studentsection.php' target='_blank'><img src='assets/img/arrow.png' border='0'>Downloads</a></li>";
					echo "</ul>";
				echo "</li>";
				echo "<li><a href='alumini.php'>Alumini</a></li>";
				echo "<li class='dropdown'>";
					echo "<a href='#' class='dropdown-toggle' data-toggle='dropdown'>Facilities <span class='fa fa-angle-down'></span></a>";
					echo "<ul class='dropdown-menu' role='menu'>";
						echo "<li><a href='computerlab.php'><img src='assets/img/arrow.png' border='0'>Computer Lab</a></li>";                
						echo "<li><a href='library.php'><img src='assets/img/arrow.png' border='0'>Library</a></li>"; 
						echo "<li><a href='boyshostel.php'><img src='assets/img/arrow.png' border='0'>Boys Hostel</a></li>"; 
						echo "<li><a href='guesthouse.php'><img src='assets/img/arrow.png' border='0'>Guest House</a></li>"; 
						echo "<li><a href='transport.php'><img src='assets/img/arrow.png' border='0'>Transport</a></li>"; 
						echo "<li><a href='canteen.php'><img src='assets/img/arrow.png' border='0'>Mess and Canteen</a></li>"; 
					echo "</ul>";
				echo "</li>";
				echo "<li><a href='gallery.php'>Photo Gallery</a></li>";
				echo "<li><a href='contactus.php'>Contact Us</a></li>";
				}
			if($pageName == "intro.php" || $pageName == "aboutdkkkp.php" || $pageName == "presidentsmessage.php" || $pageName == "secretarysmessage.php" || $pageName == "ceosmessage.php" || $pageName == "directorsmessage.php" || $pageName == "qualitypolicy.php" || $pageName == "missionandvision.php")
				{
				echo "<li><a href='index.php'>Home</a></li>";           
				echo "<li class='dropdown active'>";
				  echo "<a href='#' class='dropdown-toggle' data-toggle='dropdown'>About Us <span class='fa fa-angle-down'></span></a>";
				  echo "<ul class='dropdown-menu' role='menu'>";
					echo "<li><a href='intro.php'><img src='assets/img/arrow.png' border='0'>Institute at a Glance</a></li>";               
					echo "<li><a href='aboutdkkkp.php'><img src='assets/img/arrow.png' border='0'>About DKKKP</a></li>";
					echo "<li><a href='presidentsmessage.php'><img src='assets/img/arrow.png' border='0'>Presidents Message</a></li>";	
					echo "<li><a href='secretarysmessage.php'><img src='assets/img/arrow.png' border='0'>Secretary Message</a></li>";
					echo "<li><a href='ceosmessage.php'><img src='assets/img/arrow.png' border='0'>CEO Message</a></li>";
					echo "<li><a href='directorsmessage.php'><img src='assets/img/arrow.png' border='0'>Directors Message</a></li>";	
					echo "<li><a href='qualitypolicy.php'><img src='assets/img/arrow.png' border='0'>Quality Policy</a></li>";
					echo "<li><a href='missionandvision.php'><img src='assets/img/arrow.png' border='0'>Mission and Vision</a></li>";
				echo "</ul>";
				echo "</li>";    
				echo "<li><a href='mandatory.php'>Mandatory Disclosure</a></li>";
				echo "<li class='dropdown'>";
				  echo "<a href='#' class='dropdown-toggle' data-toggle='dropdown'>Faculty <span class='fa fa-angle-down'></span></a>";
				  echo "<ul class='dropdown-menu' role='menu'>";
					echo "<li><a href='teaching.php'><img src='assets/img/arrow.png' border='0'>Teaching</a></li>";                
					echo "<li><a href='nonteaching.php'><img src='assets/img/arrow.png' border='0'>Non Teaching</a></li>";
					echo "<li><a href='supporting.php'><img src='assets/img/arrow.png' border='0'>Supporting</a></li>";			
					echo "<li><a href='visitingfaculty.php'><img src='assets/img/arrow.png' border='0'>Visiting Faculty</a></li>";
					echo "<li><a href='teachingmethod.php'><img src='assets/img/arrow.png' border='0'>Teaching Methodology</a></li>";	
					echo "<li><a href='career.php'><img src='assets/img/arrow.png' border='0'>Current Opportunities</a></li>";	
				echo "</ul>";
				echo "</li>"; 
				echo "<li class='dropdown'>";
				  echo "<a href='#' class='dropdown-toggle' data-toggle='dropdown'>Admissions<span class='fa fa-angle-down'></span></a>";
				  echo "<ul class='dropdown-menu' role='menu'>";
					echo "<li><a href='admissionprocedure.php'><img src='assets/img/arrow.png' border='0'>Admission Procedure</a></li>";                
					echo "<li><a href='documentsrequired.php'><img src='assets/img/arrow.png' border='0'>Documents Required</a></li>";
					echo "<li><a href='intake.php'><img src='assets/img/arrow.png' border='0'>Intake Capacity</a></li>";
					echo "<li><a href='brochure.php'><img src='assets/img/arrow.png' border='0'>Brochure</a></li>";
					echo "<li><a href='http://collegecirculars.unipune.ac.in/sites/documents/Syllabus%202016/MBA_NEW_Syllabus_2016-17-17-6-16.pdf' target='_blank'><img src='assets/img/arrow.png' border='0'>Syllabus </a></li>";					
				  echo "</ul>";
				echo "</li>"; 	
				echo "<li class='dropdown'>";
				  echo "<a href='#' class='dropdown-toggle' data-toggle='dropdown'>Placement <span class='fa fa-angle-down'></span></a>";
					echo "<ul class='dropdown-menu' role='menu'>";
						echo "<li><a href='placementoverview.php'><img src='assets/img/arrow.png' border='0'>Overview</a></li>";                
						echo "<li><a href='recruiters.php'><img src='assets/img/arrow.png' border='0'>Our Recruiters</a></li>"; 
					echo "</ul>";
				echo "</li>";
				echo "<li class='dropdown'>";
				echo "<a href='#' class='dropdown-toggle' data-toggle='dropdown'>Student Corner <span class='fa fa-angle-down'></span></a>";
				    echo "<ul class='dropdown-menu' role='menu'>";
				    echo "<li><a href='fees.php'><img src='assets/img/arrow.png' border='0'>Fee Structure</a></li>";     
				        echo "<li><a href='ControlPanel/studentsection.php' target='_blank'><img src='assets/img/arrow.png' border='0'>Downloads</a></li>";
					echo "</ul>";
				echo "</li>";
				echo "<li><a href='alumini.php'>Alumini</a></li>";
				echo "<li class='dropdown'>";
					echo "<a href='#' class='dropdown-toggle' data-toggle='dropdown'>Facilities <span class='fa fa-angle-down'></span></a>";
					echo "<ul class='dropdown-menu' role='menu'>";
						echo "<li><a href='computerlab.php'><img src='assets/img/arrow.png' border='0'>Computer Lab</a></li>";                
						echo "<li><a href='library.php'><img src='assets/img/arrow.png' border='0'>Library</a></li>"; 
						echo "<li><a href='boyshostel.php'><img src='assets/img/arrow.png' border='0'>Boys Hostel</a></li>"; 
						echo "<li><a href='guesthouse.php'><img src='assets/img/arrow.png' border='0'>Guest House</a></li>"; 
						echo "<li><a href='transport.php'><img src='assets/img/arrow.png' border='0'>Transport</a></li>"; 
						echo "<li><a href='canteen.php'><img src='assets/img/arrow.png' border='0'>Mess and Canteen</a></li>"; 
					echo "</ul>";
				echo "</li>";
				echo "<li><a href='gallery.php'>Photo Gallery</a></li>";
				echo "<li><a href='contactus.php'>Contact Us</a></li>";
				}
			if($pageName == "mandatory.php")
				{
				echo "<li><a href='index.php'>Home</a></li>";           
				echo "<li class='dropdown'>";
				  echo "<a href='#' class='dropdown-toggle' data-toggle='dropdown'>About Us <span class='fa fa-angle-down'></span></a>";
				  echo "<ul class='dropdown-menu' role='menu'>";
					echo "<li><a href='intro.php'><img src='assets/img/arrow.png' border='0'>Institute at a Glance</a></li>";               
					echo "<li><a href='aboutdkkkp.php'><img src='assets/img/arrow.png' border='0'>About DKKKP</a></li>";
					echo "<li><a href='presidentsmessage.php'><img src='assets/img/arrow.png' border='0'>Presidents Message</a></li>";	
					echo "<li><a href='secretarysmessage.php'><img src='assets/img/arrow.png' border='0'>Secretary Message</a></li>";
					echo "<li><a href='ceosmessage.php'><img src='assets/img/arrow.png' border='0'>CEO Message</a></li>";
					echo "<li><a href='directorsmessage.php'><img src='assets/img/arrow.png' border='0'>Directors Message</a></li>";	
					echo "<li><a href='qualitypolicy.php'><img src='assets/img/arrow.png' border='0'>Quality Policy</a></li>";
					echo "<li><a href='missionandvision.php'><img src='assets/img/arrow.png' border='0'>Mission and Vision</a></li>";
				echo "</ul>";
				echo "</li>";    
				echo "<li class='active'><a href='mandatory.php'>Mandatory Disclosure</a></li>";
				echo "<li class='dropdown'>";
				  echo "<a href='#' class='dropdown-toggle' data-toggle='dropdown'>Faculty <span class='fa fa-angle-down'></span></a>";
				  echo "<ul class='dropdown-menu' role='menu'>";
					echo "<li><a href='teaching.php'><img src='assets/img/arrow.png' border='0'>Teaching</a></li>";                
					echo "<li><a href='nonteaching.php'><img src='assets/img/arrow.png' border='0'>Non Teaching</a></li>";
					echo "<li><a href='supporting.php'><img src='assets/img/arrow.png' border='0'>Supporting</a></li>";			
					echo "<li><a href='visitingfaculty.php'><img src='assets/img/arrow.png' border='0'>Visiting Faculty</a></li>";
					echo "<li><a href='teachingmethod.php'><img src='assets/img/arrow.png' border='0'>Teaching Methodology</a></li>";	
					echo "<li><a href='career.php'><img src='assets/img/arrow.png' border='0'>Current Opportunities</a></li>";	
				echo "</ul>";
				echo "</li>"; 
				echo "<li class='dropdown'>";
				  echo "<a href='#' class='dropdown-toggle' data-toggle='dropdown'>Admissions<span class='fa fa-angle-down'></span></a>";
				  echo "<ul class='dropdown-menu' role='menu'>";
					echo "<li><a href='admissionprocedure.php'><img src='assets/img/arrow.png' border='0'>Admission Procedure</a></li>";                
					echo "<li><a href='documentsrequired.php'><img src='assets/img/arrow.png' border='0'>Documents Required</a></li>";
					echo "<li><a href='intake.php'><img src='assets/img/arrow.png' border='0'>Intake Capacity</a></li>";
					echo "<li><a href='brochure.php'><img src='assets/img/arrow.png' border='0'>Brochure</a></li>";
					echo "<li><a href='http://collegecirculars.unipune.ac.in/sites/documents/Syllabus%202016/MBA_NEW_Syllabus_2016-17-17-6-16.pdf' target='_blank'><img src='assets/img/arrow.png' border='0'>Syllabus </a></li>";					
				  echo "</ul>";
				echo "</li>"; 	
				echo "<li class='dropdown'>";
				  echo "<a href='#' class='dropdown-toggle' data-toggle='dropdown'>Placement <span class='fa fa-angle-down'></span></a>";
					echo "<ul class='dropdown-menu' role='menu'>";
						echo "<li><a href='placementoverview.php'><img src='assets/img/arrow.png' border='0'>Overview</a></li>";                
						echo "<li><a href='recruiters.php'><img src='assets/img/arrow.png' border='0'>Our Recruiters</a></li>"; 
					echo "</ul>";
				echo "</li>";
				echo "<li class='dropdown'>";
				echo "<a href='#' class='dropdown-toggle' data-toggle='dropdown'>Student Corner <span class='fa fa-angle-down'></span></a>";
				    echo "<ul class='dropdown-menu' role='menu'>";
				    echo "<li><a href='fees.php'><img src='assets/img/arrow.png' border='0'>Fee Structure</a></li>";     
				        echo "<li><a href='ControlPanel/studentsection.php' target='_blank'><img src='assets/img/arrow.png' border='0'>Downloads</a></li>";
					echo "</ul>";
				echo "</li>";
				echo "<li><a href='alumini.php'>Alumini</a></li>";
				echo "<li class='dropdown'>";
					echo "<a href='#' class='dropdown-toggle' data-toggle='dropdown'>Facilities <span class='fa fa-angle-down'></span></a>";
					echo "<ul class='dropdown-menu' role='menu'>";
						echo "<li><a href='computerlab.php'><img src='assets/img/arrow.png' border='0'>Computer Lab</a></li>";                
						echo "<li><a href='library.php'><img src='assets/img/arrow.png' border='0'>Library</a></li>"; 
						echo "<li><a href='boyshostel.php'><img src='assets/img/arrow.png' border='0'>Boys Hostel</a></li>"; 
						echo "<li><a href='guesthouse.php'><img src='assets/img/arrow.png' border='0'>Guest House</a></li>"; 
						echo "<li><a href='transport.php'><img src='assets/img/arrow.png' border='0'>Transport</a></li>"; 
						echo "<li><a href='canteen.php'><img src='assets/img/arrow.png' border='0'>Mess and Canteen</a></li>"; 
					echo "</ul>";
				echo "</li>";
				echo "<li><a href='gallery.php'>Photo Gallery</a></li>";
				echo "<li><a href='contactus.php'>Contact Us</a></li>";
				}	
			if($pageName == "teachingmethod.php" || $pageName == "teaching.php" || $pageName == "nonteaching.php" || $pageName == "supporting.php" || $pageName == "visitingfaculty.php" || $pageName == "career.php")
				{
				echo "<li><a href='index.php'>Home</a></li>";           
				echo "<li class='dropdown'>";
				  echo "<a href='#' class='dropdown-toggle' data-toggle='dropdown'>About Us <span class='fa fa-angle-down'></span></a>";
				  echo "<ul class='dropdown-menu' role='menu'>";
					echo "<li><a href='intro.php'><img src='assets/img/arrow.png' border='0'>Institute at a Glance</a></li>";               
					echo "<li><a href='aboutdkkkp.php'><img src='assets/img/arrow.png' border='0'>About DKKKP</a></li>";
					echo "<li><a href='presidentsmessage.php'><img src='assets/img/arrow.png' border='0'>Presidents Message</a></li>";
					echo "<li><a href='secretarysmessage.php'><img src='assets/img/arrow.png' border='0'>Secretary Message</a></li>";
					echo "<li><a href='ceosmessage.php'><img src='assets/img/arrow.png' border='0'>CEO Message</a></li>";					
					echo "<li><a href='directorsmessage.php'><img src='assets/img/arrow.png' border='0'>Directors Message</a></li>";	
					echo "<li><a href='qualitypolicy.php'><img src='assets/img/arrow.png' border='0'>Quality Policy</a></li>";
					echo "<li><a href='missionandvision.php'><img src='assets/img/arrow.png' border='0'>Mission and Vision</a></li>";
					echo "</ul>";
				echo "</li>";    
				echo "<li><a href='mandatory.php'>Mandatory Disclosure</a></li>";
				echo "<li class='dropdown active'>";
				  echo "<a href='#' class='dropdown-toggle' data-toggle='dropdown'>Faculty <span class='fa fa-angle-down'></span></a>";
				  echo "<ul class='dropdown-menu' role='menu'>";
					echo "<li><a href='teaching.php'><img src='assets/img/arrow.png' border='0'>Teaching</a></li>";                
					echo "<li><a href='nonteaching.php'><img src='assets/img/arrow.png' border='0'>Non Teaching</a></li>";
					echo "<li><a href='supporting.php'><img src='assets/img/arrow.png' border='0'>Supporting</a></li>";			
					echo "<li><a href='visitingfaculty.php'><img src='assets/img/arrow.png' border='0'>Visiting Faculty</a></li>";
					echo "<li><a href='teachingmethod.php'><img src='assets/img/arrow.png' border='0'>Teaching Methodology</a></li>";	
					echo "<li><a href='career.php'><img src='assets/img/arrow.png' border='0'>Current Opportunities</a></li>";	
				echo "</ul>";
				echo "</li>"; 
				echo "<li class='dropdown'>";
				  echo "<a href='#' class='dropdown-toggle' data-toggle='dropdown'>Admissions<span class='fa fa-angle-down'></span></a>";
				  echo "<ul class='dropdown-menu' role='menu'>";
					echo "<li><a href='admissionprocedure.php'><img src='assets/img/arrow.png' border='0'>Admission Procedure</a></li>";                
					echo "<li><a href='documentsrequired.php'><img src='assets/img/arrow.png' border='0'>Documents Required</a></li>";
					echo "<li><a href='intake.php'><img src='assets/img/arrow.png' border='0'>Intake Capacity</a></li>";
					echo "<li><a href='brochure.php'><img src='assets/img/arrow.png' border='0'>Brochure</a></li>";
					echo "<li><a href='http://collegecirculars.unipune.ac.in/sites/documents/Syllabus%202016/MBA_NEW_Syllabus_2016-17-17-6-16.pdf' target='_blank'><img src='assets/img/arrow.png' border='0'>Syllabus </a></li>";					
				  echo "</ul>";
				echo "</li>"; 	
				echo "<li class='dropdown'>";
				  echo "<a href='#' class='dropdown-toggle' data-toggle='dropdown'>Placement <span class='fa fa-angle-down'></span></a>";
					echo "<ul class='dropdown-menu' role='menu'>";
						echo "<li><a href='placementoverview.php'><img src='assets/img/arrow.png' border='0'>Overview</a></li>";                
						echo "<li><a href='recruiters.php'><img src='assets/img/arrow.png' border='0'>Our Recruiters</a></li>"; 
					echo "</ul>";
				echo "</li>";
				echo "<li class='dropdown'>";
				echo "<a href='#' class='dropdown-toggle' data-toggle='dropdown'>Student Corner <span class='fa fa-angle-down'></span></a>";
				    echo "<ul class='dropdown-menu' role='menu'>";
				    echo "<li><a href='fees.php'><img src='assets/img/arrow.png' border='0'>Fee Structure</a></li>";     
				        echo "<li><a href='ControlPanel/studentsection.php' target='_blank'><img src='assets/img/arrow.png' border='0'>Downloads</a></li>";
					echo "</ul>";
				echo "</li>";
				echo "<li><a href='alumini.php'>Alumini</a></li>";
				echo "<li class='dropdown'>";
					echo "<a href='#' class='dropdown-toggle' data-toggle='dropdown'>Facilities <span class='fa fa-angle-down'></span></a>";
					echo "<ul class='dropdown-menu' role='menu'>";
						echo "<li><a href='computerlab.php'><img src='assets/img/arrow.png' border='0'>Computer Lab</a></li>";                
						echo "<li><a href='library.php'><img src='assets/img/arrow.png' border='0'>Library</a></li>"; 
						echo "<li><a href='boyshostel.php'><img src='assets/img/arrow.png' border='0'>Boys Hostel</a></li>"; 
						echo "<li><a href='guesthouse.php'><img src='assets/img/arrow.png' border='0'>Guest House</a></li>"; 
						echo "<li><a href='transport.php'><img src='assets/img/arrow.png' border='0'>Transport</a></li>"; 
						echo "<li><a href='canteen.php'><img src='assets/img/arrow.png' border='0'>Mess and Canteen</a></li>"; 
					echo "</ul>";
				echo "</li>";
				echo "<li><a href='gallery.php'>Photo Gallery</a></li>";
				echo "<li><a href='contactus.php'>Contact Us</a></li>";
				}
			if($pageName == "admissionprocedure.php" || $pageName == "documentsrequired.php" || $pageName == "brochure.php" || $pageName == "eligibility.php" || $pageName == "intake.php")
				{
				echo "<li><a href='index.php'>Home</a></li>";           
				echo "<li class='dropdown'>";
				  echo "<a href='#' class='dropdown-toggle' data-toggle='dropdown'>About Us <span class='fa fa-angle-down'></span></a>";
				  echo "<ul class='dropdown-menu' role='menu'>";
					echo "<li><a href='intro.php'><img src='assets/img/arrow.png' border='0'>Institute at a Glance</a></li>";               
					echo "<li><a href='aboutdkkkp.php'><img src='assets/img/arrow.png' border='0'>About DKKKP</a></li>";
					echo "<li><a href='presidentsmessage.php'><img src='assets/img/arrow.png' border='0'>Presidents Message</a></li>";
					echo "<li><a href='secretarysmessage.php'><img src='assets/img/arrow.png' border='0'>Secretary Message</a></li>";
					echo "<li><a href='ceosmessage.php'><img src='assets/img/arrow.png' border='0'>CEO Message</a></li>";	
					echo "<li><a href='directorsmessage.php'><img src='assets/img/arrow.png' border='0'>Directors Message</a></li>";	
					echo "<li><a href='qualitypolicy.php'><img src='assets/img/arrow.png' border='0'>Quality Policy</a></li>";
					echo "<li><a href='missionandvision.php'><img src='assets/img/arrow.png' border='0'>Mission and Vision</a></li>";
				echo "</ul>";
				echo "</li>";    
				echo "<li><a href='mandatory.php'>Mandatory Disclosure</a></li>";
				echo "<li class='dropdown'>";
				  echo "<a href='#' class='dropdown-toggle' data-toggle='dropdown'>Faculty <span class='fa fa-angle-down'></span></a>";
				  echo "<ul class='dropdown-menu' role='menu'>";
					echo "<li><a href='teaching.php'><img src='assets/img/arrow.png' border='0'>Teaching</a></li>";                
					echo "<li><a href='nonteaching.php'><img src='assets/img/arrow.png' border='0'>Non Teaching</a></li>";
					echo "<li><a href='supporting.php'><img src='assets/img/arrow.png' border='0'>Supporting</a></li>";			
					echo "<li><a href='visitingfaculty.php'><img src='assets/img/arrow.png' border='0'>Visiting Faculty</a></li>";
					echo "<li><a href='teachingmethod.php'><img src='assets/img/arrow.png' border='0'>Teaching Methodology</a></li>";	
					echo "<li><a href='career.php'><img src='assets/img/arrow.png' border='0'>Current Opportunities</a></li>";	
				echo "</ul>";
				echo "</li>"; 
				echo "<li class='dropdown active'>";
				  echo "<a href='#' class='dropdown-toggle' data-toggle='dropdown'>Admissions<span class='fa fa-angle-down'></span></a>";
				  echo "<ul class='dropdown-menu' role='menu'>";
					echo "<li><a href='admissionprocedure.php'><img src='assets/img/arrow.png' border='0'>Admission Procedure</a></li>";                
					echo "<li><a href='documentsrequired.php'><img src='assets/img/arrow.png' border='0'>Documents Required</a></li>";
					echo "<li><a href='intake.php'><img src='assets/img/arrow.png' border='0'>Intake Capacity</a></li>";
					echo "<li><a href='brochure.php'><img src='assets/img/arrow.png' border='0'>Brochure</a></li>";
					echo "<li><a href='http://collegecirculars.unipune.ac.in/sites/documents/Syllabus%202016/MBA_NEW_Syllabus_2016-17-17-6-16.pdf' target='_blank'><img src='assets/img/arrow.png' border='0'>Syllabus </a></li>";					
				  echo "</ul>";
				echo "</li>"; 	
				echo "<li class='dropdown'>";
				  echo "<a href='#' class='dropdown-toggle' data-toggle='dropdown'>Placement <span class='fa fa-angle-down'></span></a>";
					echo "<ul class='dropdown-menu' role='menu'>";
						echo "<li><a href='placementoverview.php'><img src='assets/img/arrow.png' border='0'>Overview</a></li>";                
						echo "<li><a href='recruiters.php'><img src='assets/img/arrow.png' border='0'>Our Recruiters</a></li>"; 
					echo "</ul>";
				echo "</li>";
					echo "<li class='dropdown'>";
				echo "<a href='#' class='dropdown-toggle' data-toggle='dropdown'>Student Corner <span class='fa fa-angle-down'></span></a>";
				    echo "<ul class='dropdown-menu' role='menu'>";
				    echo "<li><a href='fees.php'><img src='assets/img/arrow.png' border='0'>Fee Structure</a></li>";     
				        echo "<li><a href='ControlPanel/studentsection.php' target='_blank'><img src='assets/img/arrow.png' border='0'>Downloads</a></li>";
					echo "</ul>";
				echo "</li>";
				echo "<li><a href='alumini.php'>Alumini</a></li>";
				echo "<li class='dropdown'>";
					echo "<a href='#' class='dropdown-toggle' data-toggle='dropdown'>Facilities <span class='fa fa-angle-down'></span></a>";
					echo "<ul class='dropdown-menu' role='menu'>";
						echo "<li><a href='computerlab.php'><img src='assets/img/arrow.png' border='0'>Computer Lab</a></li>";                
						echo "<li><a href='library.php'><img src='assets/img/arrow.png' border='0'>Library</a></li>"; 
						echo "<li><a href='boyshostel.php'><img src='assets/img/arrow.png' border='0'>Boys Hostel</a></li>"; 
						echo "<li><a href='guesthouse.php'><img src='assets/img/arrow.png' border='0'>Guest House</a></li>"; 
						echo "<li><a href='transport.php'><img src='assets/img/arrow.png' border='0'>Transport</a></li>"; 
						echo "<li><a href='canteen.php'><img src='assets/img/arrow.png' border='0'>Mess and Canteen</a></li>"; 
					echo "</ul>";
				echo "</li>";
				echo "<li><a href='gallery.php'>Photo Gallery</a></li>";
				echo "<li><a href='contactus.php'>Contact Us</a></li>";
				}	
			if($pageName == "placementoverview.php" || $pageName == "recruiters.php" )
				{
				echo "<li><a href='index.php'>Home</a></li>";           
				echo "<li class='dropdown'>";
				  echo "<a href='#' class='dropdown-toggle' data-toggle='dropdown'>About Us <span class='fa fa-angle-down'></span></a>";
				  echo "<ul class='dropdown-menu' role='menu'>";
					echo "<li><a href='intro.php'><img src='assets/img/arrow.png' border='0'>Institute at a Glance</a></li>";               
					echo "<li><a href='aboutdkkkp.php'><img src='assets/img/arrow.png' border='0'>About DKKKP</a></li>";
					echo "<li><a href='presidentsmessage.php'><img src='assets/img/arrow.png' border='0'>Presidents Message</a></li>";	
					echo "<li><a href='secretarysmessage.php'><img src='assets/img/arrow.png' border='0'>Secretary Message</a></li>";
					echo "<li><a href='ceosmessage.php'><img src='assets/img/arrow.png' border='0'>CEO Message</a></li>";
					echo "<li><a href='directorsmessage.php'><img src='assets/img/arrow.png' border='0'>Directors Message</a></li>";	
					echo "<li><a href='qualitypolicy.php'><img src='assets/img/arrow.png' border='0'>Quality Policy</a></li>";
					echo "<li><a href='missionandvision.php'><img src='assets/img/arrow.png' border='0'>Mission and Vision</a></li>";
				echo "</ul>";
				echo "</li>";    
				echo "<li><a href='mandatory.php'>Mandatory Disclosure</a></li>";
				echo "<li class='dropdown'>";
				  echo "<a href='#' class='dropdown-toggle' data-toggle='dropdown'>Faculty <span class='fa fa-angle-down'></span></a>";
				  echo "<ul class='dropdown-menu' role='menu'>";
					echo "<li><a href='teaching.php'><img src='assets/img/arrow.png' border='0'>Teaching</a></li>";                
					echo "<li><a href='nonteaching.php'><img src='assets/img/arrow.png' border='0'>Non Teaching</a></li>";
					echo "<li><a href='supporting.php'><img src='assets/img/arrow.png' border='0'>Supporting</a></li>";			
					echo "<li><a href='visitingfaculty.php'><img src='assets/img/arrow.png' border='0'>Visiting Faculty</a></li>";
					echo "<li><a href='teachingmethod.php'><img src='assets/img/arrow.png' border='0'>Teaching Methodology</a></li>";	
					echo "<li><a href='career.php'><img src='assets/img/arrow.png' border='0'>Current Opportunities</a></li>";	
				echo "</ul>";
				echo "</li>"; 
				echo "<li class='dropdown'>";
				  echo "<a href='#' class='dropdown-toggle' data-toggle='dropdown'>Admissions<span class='fa fa-angle-down'></span></a>";
				  echo "<ul class='dropdown-menu' role='menu'>";
					echo "<li><a href='admissionprocedure.php'><img src='assets/img/arrow.png' border='0'>Admission Procedure</a></li>";                
					echo "<li><a href='documentsrequired.php'><img src='assets/img/arrow.png' border='0'>Documents Required</a></li>";
					echo "<li><a href='intake.php'><img src='assets/img/arrow.png' border='0'>Intake Capacity</a></li>";
					echo "<li><a href='brochure.php'><img src='assets/img/arrow.png' border='0'>Brochure</a></li>";
					echo "<li><a href='http://collegecirculars.unipune.ac.in/sites/documents/Syllabus%202016/MBA_NEW_Syllabus_2016-17-17-6-16.pdf' target='_blank'><img src='assets/img/arrow.png' border='0'>Syllabus </a></li>";					
				  echo "</ul>";
				echo "</li>"; 	
				echo "<li class='dropdown active'>";
				  echo "<a href='#' class='dropdown-toggle' data-toggle='dropdown'>Placement <span class='fa fa-angle-down'></span></a>";
					echo "<ul class='dropdown-menu' role='menu'>";
						echo "<li><a href='placementoverview.php'><img src='assets/img/arrow.png' border='0'>Overview</a></li>";                
						echo "<li><a href='recruiters.php'><img src='assets/img/arrow.png' border='0'>Our Recruiters</a></li>"; 
					echo "</ul>";
				echo "</li>";
				echo "<li class='dropdown'>";
				echo "<a href='#' class='dropdown-toggle' data-toggle='dropdown'>Student Corner <span class='fa fa-angle-down'></span></a>";
				    echo "<ul class='dropdown-menu' role='menu'>";
				    echo "<li><a href='fees.php'><img src='assets/img/arrow.png' border='0'>Fee Structure</a></li>";     
				        echo "<li><a href='ControlPanel/studentsection.php' target='_blank'><img src='assets/img/arrow.png' border='0'>Downloads</a></li>";
					echo "</ul>";
				echo "</li>";
				echo "<li><a href='alumini.php'>Alumini</a></li>";
				echo "<li class='dropdown'>";
					echo "<a href='#' class='dropdown-toggle' data-toggle='dropdown'>Facilities <span class='fa fa-angle-down'></span></a>";
					echo "<ul class='dropdown-menu' role='menu'>";
						echo "<li><a href='computerlab.php'><img src='assets/img/arrow.png' border='0'>Computer Lab</a></li>";                
						echo "<li><a href='library.php'><img src='assets/img/arrow.png' border='0'>Library</a></li>"; 
						echo "<li><a href='boyshostel.php'><img src='assets/img/arrow.png' border='0'>Boys Hostel</a></li>"; 
						echo "<li><a href='guesthouse.php'><img src='assets/img/arrow.png' border='0'>Guest House</a></li>"; 
						echo "<li><a href='transport.php'><img src='assets/img/arrow.png' border='0'>Transport</a></li>"; 
						echo "<li><a href='canteen.php'><img src='assets/img/arrow.png' border='0'>Mess and Canteen</a></li>"; 
					echo "</ul>";
				echo "</li>";
				echo "<li><a href='gallery.php'>Photo Gallery</a></li>";
				echo "<li><a href='contactus.php'>Contact Us</a></li>";
				}	
			if($pageName == "alumini.php" )
				{
				echo "<li><a href='index.php'>Home</a></li>";           
				echo "<li class='dropdown'>";
				  echo "<a href='#' class='dropdown-toggle' data-toggle='dropdown'>About Us <span class='fa fa-angle-down'></span></a>";
				  echo "<ul class='dropdown-menu' role='menu'>";
					echo "<li><a href='intro.php'><img src='assets/img/arrow.png' border='0'>Institute at a Glance</a></li>";               
					echo "<li><a href='aboutdkkkp.php'><img src='assets/img/arrow.png' border='0'>About DKKKP</a></li>";
					echo "<li><a href='presidentsmessage.php'><img src='assets/img/arrow.png' border='0'>Presidents Message</a></li>";	
					echo "<li><a href='secretarysmessage.php'><img src='assets/img/arrow.png' border='0'>Secretary Message</a></li>";
					echo "<li><a href='ceosmessage.php'><img src='assets/img/arrow.png' border='0'>CEO Message</a></li>";
					echo "<li><a href='directorsmessage.php'><img src='assets/img/arrow.png' border='0'>Directors Message</a></li>";	
					echo "<li><a href='qualitypolicy.php'><img src='assets/img/arrow.png' border='0'>Quality Policy</a></li>";
					echo "<li><a href='missionandvision.php'><img src='assets/img/arrow.png' border='0'>Mission and Vision</a></li>";
				echo "</ul>";
				echo "</li>";    
				echo "<li><a href='mandatory.php'>Mandatory Disclosure</a></li>";
				echo "<li class='dropdown'>";
				  echo "<a href='#' class='dropdown-toggle' data-toggle='dropdown'>Faculty <span class='fa fa-angle-down'></span></a>";
				  echo "<ul class='dropdown-menu' role='menu'>";
					echo "<li><a href='teaching.php'><img src='assets/img/arrow.png' border='0'>Teaching</a></li>";                
					echo "<li><a href='nonteaching.php'><img src='assets/img/arrow.png' border='0'>Non Teaching</a></li>";
					echo "<li><a href='supporting.php'><img src='assets/img/arrow.png' border='0'>Supporting</a></li>";			
					echo "<li><a href='visitingfaculty.php'><img src='assets/img/arrow.png' border='0'>Visiting Faculty</a></li>";
					echo "<li><a href='teachingmethod.php'><img src='assets/img/arrow.png' border='0'>Teaching Methodology</a></li>";	
					echo "<li><a href='career.php'><img src='assets/img/arrow.png' border='0'>Current Opportunities</a></li>";	
				echo "</ul>";
				echo "</li>"; 
				echo "<li class='dropdown'>";
				  echo "<a href='#' class='dropdown-toggle' data-toggle='dropdown'>Admissions<span class='fa fa-angle-down'></span></a>";
				  echo "<ul class='dropdown-menu' role='menu'>";
					echo "<li><a href='admissionprocedure.php'><img src='assets/img/arrow.png' border='0'>Admission Procedure</a></li>";                
					echo "<li><a href='documentsrequired.php'><img src='assets/img/arrow.png' border='0'>Documents Required</a></li>";
					echo "<li><a href='intake.php'><img src='assets/img/arrow.png' border='0'>Intake Capacity</a></li>";
					echo "<li><a href='brochure.php'><img src='assets/img/arrow.png' border='0'>Brochure</a></li>";
					echo "<li><a href='http://collegecirculars.unipune.ac.in/sites/documents/Syllabus%202016/MBA_NEW_Syllabus_2016-17-17-6-16.pdf' target='_blank'><img src='assets/img/arrow.png' border='0'>Syllabus </a></li>";					
				  echo "</ul>";
				echo "</li>"; 	
				echo "<li class='dropdown'>";
				  echo "<a href='#' class='dropdown-toggle' data-toggle='dropdown'>Placement <span class='fa fa-angle-down'></span></a>";
					echo "<ul class='dropdown-menu' role='menu'>";
						echo "<li><a href='placementoverview.php'><img src='assets/img/arrow.png' border='0'>Overview</a></li>";                
						echo "<li><a href='recruiters.php'><img src='assets/img/arrow.png' border='0'>Our Recruiters</a></li>"; 
					echo "</ul>";
				echo "</li>";
				echo "<li class='dropdown'>";
				echo "<a href='#' class='dropdown-toggle' data-toggle='dropdown'>Student Corner <span class='fa fa-angle-down'></span></a>";
				    echo "<ul class='dropdown-menu' role='menu'>";
				    echo "<li><a href='fees.php'><img src='assets/img/arrow.png' border='0'>Fee Structure</a></li>";     
				        echo "<li><a href='ControlPanel/studentsection.php' target='_blank'><img src='assets/img/arrow.png' border='0'>Downloads</a></li>";
					echo "</ul>";
				echo "</li>";
				echo "<li class='active'><a href='alumini.php'>Alumini</a></li>";
				echo "<li class='dropdown'>";
					echo "<a href='#' class='dropdown-toggle' data-toggle='dropdown'>Facilities <span class='fa fa-angle-down'></span></a>";
					echo "<ul class='dropdown-menu' role='menu'>";
						echo "<li><a href='computerlab.php'><img src='assets/img/arrow.png' border='0'>Computer Lab</a></li>";                
						echo "<li><a href='library.php'><img src='assets/img/arrow.png' border='0'>Library</a></li>"; 
						echo "<li><a href='boyshostel.php'><img src='assets/img/arrow.png' border='0'>Boys Hostel</a></li>"; 
						echo "<li><a href='guesthouse.php'><img src='assets/img/arrow.png' border='0'>Guest House</a></li>"; 
						echo "<li><a href='transport.php'><img src='assets/img/arrow.png' border='0'>Transport</a></li>"; 
						echo "<li><a href='canteen.php'><img src='assets/img/arrow.png' border='0'>Mess and Canteen</a></li>"; 
					echo "</ul>";
				echo "</li>";
				echo "<li><a href='gallery.php'>Photo Gallery</a></li>";
				echo "<li><a href='contactus.php'>Contact Us</a></li>";
				}	
			if($pageName == "computerlab.php" || $pageName == "boyshostel.php" || $pageName == "library.php" || $pageName == "guesthouse.php" || $pageName == "transport.php" || $pageName == "canteen.php")
				{
				echo "<li><a href='index.php'>Home</a></li>";           
				echo "<li class='dropdown'>";
				  echo "<a href='#' class='dropdown-toggle' data-toggle='dropdown'>About Us <span class='fa fa-angle-down'></span></a>";
				  echo "<ul class='dropdown-menu' role='menu'>";
					echo "<li><a href='intro.php'><img src='assets/img/arrow.png' border='0'>Institute at a Glance</a></li>";               
					echo "<li><a href='aboutdkkkp.php'><img src='assets/img/arrow.png' border='0'>About DKKKP</a></li>";
					echo "<li><a href='presidentsmessage.php'><img src='assets/img/arrow.png' border='0'>Presidents Message</a></li>";
					echo "<li><a href='secretarysmessage.php'><img src='assets/img/arrow.png' border='0'>Secretary Message</a></li>";
					echo "<li><a href='ceosmessage.php'><img src='assets/img/arrow.png' border='0'>CEO Message</a></li>";					
					echo "<li><a href='directorsmessage.php'><img src='assets/img/arrow.png' border='0'>Directors Message</a></li>";	
					echo "<li><a href='qualitypolicy.php'><img src='assets/img/arrow.png' border='0'>Quality Policy</a></li>";
					echo "<li><a href='missionandvision.php'><img src='assets/img/arrow.png' border='0'>Mission and Vision</a></li>";
				echo "</ul>";
				echo "</li>";    
				echo "<li><a href='mandatory.php'>Mandatory Disclosure</a></li>";
				echo "<li class='dropdown'>";
				  echo "<a href='#' class='dropdown-toggle' data-toggle='dropdown'>Faculty <span class='fa fa-angle-down'></span></a>";
				  echo "<ul class='dropdown-menu' role='menu'>";
					echo "<li><a href='teaching.php'><img src='assets/img/arrow.png' border='0'>Teaching</a></li>";                
					echo "<li><a href='nonteaching.php'><img src='assets/img/arrow.png' border='0'>Non Teaching</a></li>";
					echo "<li><a href='supporting.php'><img src='assets/img/arrow.png' border='0'>Supporting</a></li>";			
					echo "<li><a href='visitingfaculty.php'><img src='assets/img/arrow.png' border='0'>Visiting Faculty</a></li>";
					echo "<li><a href='teachingmethod.php'><img src='assets/img/arrow.png' border='0'>Teaching Methodology</a></li>";	
					echo "<li><a href='career.php'><img src='assets/img/arrow.png' border='0'>Current Opportunities</a></li>";	
				echo "</ul>";
				echo "</li>"; 
				echo "<li class='dropdown'>";
				  echo "<a href='#' class='dropdown-toggle' data-toggle='dropdown'>Admissions<span class='fa fa-angle-down'></span></a>";
				  echo "<ul class='dropdown-menu' role='menu'>";
					echo "<li><a href='admissionprocedure.php'><img src='assets/img/arrow.png' border='0'>Admission Procedure</a></li>";                
					echo "<li><a href='documentsrequired.php'><img src='assets/img/arrow.png' border='0'>Documents Required</a></li>";
					echo "<li><a href='intake.php'><img src='assets/img/arrow.png' border='0'>Intake Capacity</a></li>";
					echo "<li><a href='brochure.php'><img src='assets/img/arrow.png' border='0'>Brochure</a></li>";
					echo "<li><a href='http://collegecirculars.unipune.ac.in/sites/documents/Syllabus%202016/MBA_NEW_Syllabus_2016-17-17-6-16.pdf' target='_blank'><img src='assets/img/arrow.png' border='0'>Syllabus </a></li>";					
				  echo "</ul>";
				echo "</li>"; 	
				echo "<li class='dropdown'>";
				  echo "<a href='#' class='dropdown-toggle' data-toggle='dropdown'>Placement <span class='fa fa-angle-down'></span></a>";
					echo "<ul class='dropdown-menu' role='menu'>";
						echo "<li><a href='placementoverview.php'><img src='assets/img/arrow.png' border='0'>Overview</a></li>";                
						echo "<li><a href='recruiters.php'><img src='assets/img/arrow.png' border='0'>Our Recruiters</a></li>"; 
					echo "</ul>";
				echo "</li>";
				echo "<li class='dropdown'>";
				echo "<a href='#' class='dropdown-toggle' data-toggle='dropdown'>Student Corner <span class='fa fa-angle-down'></span></a>";
				    echo "<ul class='dropdown-menu' role='menu'>";
				    echo "<li><a href='fees.php'><img src='assets/img/arrow.png' border='0'>Fee Structure</a></li>";     
				        echo "<li><a href='ControlPanel/studentsection.php' target='_blank'><img src='assets/img/arrow.png' border='0'>Downloads</a></li>";
					echo "</ul>";
				echo "</li>";
				echo "<li><a href='alumini.php'>Alumini</a></li>";
				echo "<li class='dropdown active'>";
					echo "<a href='#' class='dropdown-toggle' data-toggle='dropdown'>Facilities <span class='fa fa-angle-down'></span></a>";
					echo "<ul class='dropdown-menu' role='menu'>";
						echo "<li><a href='computerlab.php'><img src='assets/img/arrow.png' border='0'>Computer Lab</a></li>";                
						echo "<li><a href='library.php'><img src='assets/img/arrow.png' border='0'>Library</a></li>"; 
						echo "<li><a href='boyshostel.php'><img src='assets/img/arrow.png' border='0'>Boys Hostel</a></li>"; 
						echo "<li><a href='guesthouse.php'><img src='assets/img/arrow.png' border='0'>Guest House</a></li>"; 
						echo "<li><a href='transport.php'><img src='assets/img/arrow.png' border='0'>Transport</a></li>"; 
						echo "<li><a href='canteen.php'><img src='assets/img/arrow.png' border='0'>Mess and Canteen</a></li>"; 
					echo "</ul>";
				echo "</li>";
				echo "<li><a href='gallery.php'>Photo Gallery</a></li>";
				echo "<li><a href='contactus.php'>Contact Us</a></li>";
				}		
			if($pageName == "gallery.php" )
				{
				echo "<li><a href='index.php'>Home</a></li>";           
				echo "<li class='dropdown'>";
				  echo "<a href='#' class='dropdown-toggle' data-toggle='dropdown'>About Us <span class='fa fa-angle-down'></span></a>";
				  echo "<ul class='dropdown-menu' role='menu'>";
					echo "<li><a href='intro.php'><img src='assets/img/arrow.png' border='0'>Institute at a Glance</a></li>";               
					echo "<li><a href='aboutdkkkp.php'><img src='assets/img/arrow.png' border='0'>About DKKKP</a></li>";
					echo "<li><a href='presidentsmessage.php'><img src='assets/img/arrow.png' border='0'>Presidents Message</a></li>";	
					echo "<li><a href='secretarysmessage.php'><img src='assets/img/arrow.png' border='0'>Secretary Message</a></li>";
					echo "<li><a href='ceosmessage.php'><img src='assets/img/arrow.png' border='0'>CEO Message</a></li>";
					echo "<li><a href='directorsmessage.php'><img src='assets/img/arrow.png' border='0'>Directors Message</a></li>";	
					echo "<li><a href='qualitypolicy.php'><img src='assets/img/arrow.png' border='0'>Quality Policy</a></li>";
					echo "<li><a href='missionandvision.php'><img src='assets/img/arrow.png' border='0'>Mission and Vision</a></li>";
				echo "</ul>";
				echo "</li>";    
				echo "<li><a href='mandatory.php'>Mandatory Disclosure</a></li>";
				echo "<li class='dropdown'>";
				  echo "<a href='#' class='dropdown-toggle' data-toggle='dropdown'>Faculty <span class='fa fa-angle-down'></span></a>";
				  echo "<ul class='dropdown-menu' role='menu'>";
					echo "<li><a href='teaching.php'><img src='assets/img/arrow.png' border='0'>Teaching</a></li>";                
					echo "<li><a href='nonteaching.php'><img src='assets/img/arrow.png' border='0'>Non Teaching</a></li>";
					echo "<li><a href='supporting.php'><img src='assets/img/arrow.png' border='0'>Supporting</a></li>";			
					echo "<li><a href='visitingfaculty.php'><img src='assets/img/arrow.png' border='0'>Visiting Faculty</a></li>";
					echo "<li><a href='teachingmethod.php'><img src='assets/img/arrow.png' border='0'>Teaching Methodology</a></li>";	
					echo "<li><a href='career.php'><img src='assets/img/arrow.png' border='0'>Current Opportunities</a></li>";	
				echo "</ul>";
				echo "</li>"; 
				echo "<li class='dropdown'>";
				  echo "<a href='#' class='dropdown-toggle' data-toggle='dropdown'>Admissions<span class='fa fa-angle-down'></span></a>";
				  echo "<ul class='dropdown-menu' role='menu'>";
					echo "<li><a href='admissionprocedure.php'><img src='assets/img/arrow.png' border='0'>Admission Procedure</a></li>";                
					echo "<li><a href='documentsrequired.php'><img src='assets/img/arrow.png' border='0'>Documents Required</a></li>";
					echo "<li><a href='intake.php'><img src='assets/img/arrow.png' border='0'>Intake Capacity</a></li>";
					echo "<li><a href='brochure.php'><img src='assets/img/arrow.png' border='0'>Brochure</a></li>";
					echo "<li><a href='http://collegecirculars.unipune.ac.in/sites/documents/Syllabus%202016/MBA_NEW_Syllabus_2016-17-17-6-16.pdf' target='_blank'><img src='assets/img/arrow.png' border='0'>Syllabus </a></li>";					
				  echo "</ul>";
				echo "</li>"; 	
				echo "<li class='dropdown'>";
				  echo "<a href='#' class='dropdown-toggle' data-toggle='dropdown'>Placement <span class='fa fa-angle-down'></span></a>";
					echo "<ul class='dropdown-menu' role='menu'>";
						echo "<li><a href='placementoverview.php'><img src='assets/img/arrow.png' border='0'>Overview</a></li>";                
						echo "<li><a href='recruiters.php'><img src='assets/img/arrow.png' border='0'>Our Recruiters</a></li>"; 
					echo "</ul>";
				echo "</li>";
				echo "<li class='dropdown'>";
				echo "<a href='#' class='dropdown-toggle' data-toggle='dropdown'>Student Corner <span class='fa fa-angle-down'></span></a>";
				    echo "<ul class='dropdown-menu' role='menu'>";
				    echo "<li><a href='fees.php'><img src='assets/img/arrow.png' border='0'>Fee Structure</a></li>";     
				        echo "<li><a href='ControlPanel/studentsection.php' target='_blank'><img src='assets/img/arrow.png' border='0'>Downloads</a></li>";
					echo "</ul>";
				echo "</li>";
				echo "<li><a href='alumini.php'>Alumini</a></li>";
				echo "<li class='dropdown'>";
					echo "<a href='#' class='dropdown-toggle' data-toggle='dropdown'>Facilities <span class='fa fa-angle-down'></span></a>";
					echo "<ul class='dropdown-menu' role='menu'>";
						echo "<li><a href='computerlab.php'><img src='assets/img/arrow.png' border='0'>Computer Lab</a></li>";                
						echo "<li><a href='library.php'><img src='assets/img/arrow.png' border='0'>Library</a></li>"; 
						echo "<li><a href='boyshostel.php'><img src='assets/img/arrow.png' border='0'>Boys Hostel</a></li>"; 
						echo "<li><a href='guesthouse.php'><img src='assets/img/arrow.png' border='0'>Guest House</a></li>"; 
						echo "<li><a href='transport.php'><img src='assets/img/arrow.png' border='0'>Transport</a></li>"; 
						echo "<li><a href='canteen.php'><img src='assets/img/arrow.png' border='0'>Mess and Canteen</a></li>"; 
					echo "</ul>";
				echo "</li>";
				echo "<li class='active'><a href='gallery.php'>Photo Gallery</a></li>";
				echo "<li><a href='contactus.php'>Contact Us</a></li>";
				}			
			if($pageName == "contactus.php" )
				{
				echo "<li><a href='index.php'>Home</a></li>";           
				echo "<li class='dropdown'>";
				  echo "<a href='#' class='dropdown-toggle' data-toggle='dropdown'>About Us <span class='fa fa-angle-down'></span></a>";
				  echo "<ul class='dropdown-menu' role='menu'>";
					echo "<li><a href='intro.php'><img src='assets/img/arrow.png' border='0'>Institute at a Glance</a></li>";               
					echo "<li><a href='aboutdkkkp.php'><img src='assets/img/arrow.png' border='0'>About DKKKP</a></li>";
					echo "<li><a href='presidentsmessage.php'><img src='assets/img/arrow.png' border='0'>Presidents Message</a></li>";
					echo "<li><a href='secretarysmessage.php'><img src='assets/img/arrow.png' border='0'>Secretary Message</a></li>";
					echo "<li><a href='ceosmessage.php'><img src='assets/img/arrow.png' border='0'>CEO Message</a></li>";					
					echo "<li><a href='directorsmessage.php'><img src='assets/img/arrow.png' border='0'>Directors Message</a></li>";	
					echo "<li><a href='qualitypolicy.php'><img src='assets/img/arrow.png' border='0'>Quality Policy</a></li>";
					echo "<li><a href='missionandvision.php'><img src='assets/img/arrow.png' border='0'>Mission and Vision</a></li>";
				echo "</ul>";
				echo "</li>";    
				echo "<li><a href='mandatory.php'>Mandatory Disclosure</a></li>";
				echo "<li class='dropdown'>";
				  echo "<a href='#' class='dropdown-toggle' data-toggle='dropdown'>Faculty <span class='fa fa-angle-down'></span></a>";
				  echo "<ul class='dropdown-menu' role='menu'>";
					echo "<li><a href='teaching.php'><img src='assets/img/arrow.png' border='0'>Teaching</a></li>";                
					echo "<li><a href='nonteaching.php'><img src='assets/img/arrow.png' border='0'>Non Teaching</a></li>";
					echo "<li><a href='supporting.php'><img src='assets/img/arrow.png' border='0'>Supporting</a></li>";			
					echo "<li><a href='visitingfaculty.php'><img src='assets/img/arrow.png' border='0'>Visiting Faculty</a></li>";
					echo "<li><a href='teachingmethod.php'><img src='assets/img/arrow.png' border='0'>Teaching Methodology</a></li>";	
					echo "<li><a href='career.php'><img src='assets/img/arrow.png' border='0'>Current Opportunities</a></li>";	
				echo "</ul>";
				echo "</li>"; 
				echo "<li class='dropdown'>";
				  echo "<a href='#' class='dropdown-toggle' data-toggle='dropdown'>Admissions<span class='fa fa-angle-down'></span></a>";
				  echo "<ul class='dropdown-menu' role='menu'>";
					echo "<li><a href='admissionprocedure.php'><img src='assets/img/arrow.png' border='0'>Admission Procedure</a></li>";                
					echo "<li><a href='documentsrequired.php'><img src='assets/img/arrow.png' border='0'>Documents Required</a></li>";
					echo "<li><a href='intake.php'><img src='assets/img/arrow.png' border='0'>Intake Capacity</a></li>";
					echo "<li><a href='brochure.php'><img src='assets/img/arrow.png' border='0'>Brochure</a></li>";
					echo "<li><a href='http://collegecirculars.unipune.ac.in/sites/documents/Syllabus%202016/MBA_NEW_Syllabus_2016-17-17-6-16.pdf' target='_blank'><img src='assets/img/arrow.png' border='0'>Syllabus </a></li>";					
				  echo "</ul>";
				echo "</li>"; 	
				echo "<li class='dropdown'>";
				  echo "<a href='#' class='dropdown-toggle' data-toggle='dropdown'>Placement <span class='fa fa-angle-down'></span></a>";
					echo "<ul class='dropdown-menu' role='menu'>";
						echo "<li><a href='placementoverview.php'><img src='assets/img/arrow.png' border='0'>Overview</a></li>";                
						echo "<li><a href='recruiters.php'><img src='assets/img/arrow.png' border='0'>Our Recruiters</a></li>"; 
					echo "</ul>";
				echo "</li>";
				echo "<li class='dropdown'>";
				echo "<a href='#' class='dropdown-toggle' data-toggle='dropdown'>Student Corner <span class='fa fa-angle-down'></span></a>";
				    echo "<ul class='dropdown-menu' role='menu'>";
				    echo "<li><a href='fees.php'><img src='assets/img/arrow.png' border='0'>Fee Structure</a></li>";     
				        echo "<li><a href='ControlPanel/studentsection.php' target='_blank'><img src='assets/img/arrow.png' border='0'>Downloads</a></li>";
					echo "</ul>";
				echo "</li>";
				echo "<li><a href='alumini.php'>Alumini</a></li>";
				echo "<li class='dropdown'>";
					echo "<a href='#' class='dropdown-toggle' data-toggle='dropdown'>Facilities <span class='fa fa-angle-down'></span></a>";
					echo "<ul class='dropdown-menu' role='menu'>";
						echo "<li><a href='computerlab.php'><img src='assets/img/arrow.png' border='0'>Computer Lab</a></li>";                
						echo "<li><a href='library.php'><img src='assets/img/arrow.png' border='0'>Library</a></li>"; 
						echo "<li><a href='boyshostel.php'><img src='assets/img/arrow.png' border='0'>Boys Hostel</a></li>"; 
						echo "<li><a href='guesthouse.php'><img src='assets/img/arrow.png' border='0'>Guest House</a></li>"; 
						echo "<li><a href='transport.php'><img src='assets/img/arrow.png' border='0'>Transport</a></li>"; 
						echo "<li><a href='canteen.php'><img src='assets/img/arrow.png' border='0'>Mess and Canteen</a></li>"; 
					echo "</ul>";
				echo "</li>";
				echo "<li><a href='gallery.php'>Photo Gallery</a></li>";
				echo "<li class='active'><a href='contactus.php'>Contact Us</a></li>";
				}		
			if($pageName == "allnews.php" )
				{
				echo "<li><a href='index.php'>Home</a></li>";           
				echo "<li class='dropdown'>";
				  echo "<a href='#' class='dropdown-toggle' data-toggle='dropdown'>About Us <span class='fa fa-angle-down'></span></a>";
				  echo "<ul class='dropdown-menu' role='menu'>";
					echo "<li><a href='intro.php'><img src='assets/img/arrow.png' border='0'>Institute at a Glance</a></li>";               
					echo "<li><a href='aboutdkkkp.php'><img src='assets/img/arrow.png' border='0'>About DKKKP</a></li>";
					echo "<li><a href='presidentsmessage.php'><img src='assets/img/arrow.png' border='0'>Presidents Message</a></li>";	
					echo "<li><a href='secretarysmessage.php'><img src='assets/img/arrow.png' border='0'>Secretary Message</a></li>";
					echo "<li><a href='ceosmessage.php'><img src='assets/img/arrow.png' border='0'>CEO Message</a></li>";
					echo "<li><a href='directorsmessage.php'><img src='assets/img/arrow.png' border='0'>Directors Message</a></li>";	
					echo "<li><a href='qualitypolicy.php'><img src='assets/img/arrow.png' border='0'>Quality Policy</a></li>";
					echo "<li><a href='missionandvision.php'><img src='assets/img/arrow.png' border='0'>Mission and Vision</a></li>";
				echo "</ul>";
				echo "</li>";    
				echo "<li><a href='mandatory.php'>Mandatory Disclosure</a></li>";
				echo "<li class='dropdown'>";
				  echo "<a href='#' class='dropdown-toggle' data-toggle='dropdown'>Faculty <span class='fa fa-angle-down'></span></a>";
				  echo "<ul class='dropdown-menu' role='menu'>";
					echo "<li><a href='teaching.php'><img src='assets/img/arrow.png' border='0'>Teaching</a></li>";                
					echo "<li><a href='nonteaching.php'><img src='assets/img/arrow.png' border='0'>Non Teaching</a></li>";
					echo "<li><a href='supporting.php'><img src='assets/img/arrow.png' border='0'>Supporting</a></li>";			
					echo "<li><a href='visitingfaculty.php'><img src='assets/img/arrow.png' border='0'>Visiting Faculty</a></li>";
					echo "<li><a href='teachingmethod.php'><img src='assets/img/arrow.png' border='0'>Teaching Methodology</a></li>";	
					echo "<li><a href='career.php'><img src='assets/img/arrow.png' border='0'>Current Opportunities</a></li>";	
				echo "</ul>";
				echo "</li>"; 
				echo "<li class='dropdown'>";
				  echo "<a href='#' class='dropdown-toggle' data-toggle='dropdown'>Admissions<span class='fa fa-angle-down'></span></a>";
				  echo "<ul class='dropdown-menu' role='menu'>";
					echo "<li><a href='admissionprocedure.php'><img src='assets/img/arrow.png' border='0'>Admission Procedure</a></li>";                
					echo "<li><a href='documentsrequired.php'><img src='assets/img/arrow.png' border='0'>Documents Required</a></li>";
					echo "<li><a href='intake.php'><img src='assets/img/arrow.png' border='0'>Intake Capacity</a></li>";
					echo "<li><a href='brochure.php'><img src='assets/img/arrow.png' border='0'>Brochure</a></li>";
					echo "<li><a href='http://collegecirculars.unipune.ac.in/sites/documents/Syllabus%202016/MBA_NEW_Syllabus_2016-17-17-6-16.pdf' target='_blank'><img src='assets/img/arrow.png' border='0'>Syllabus </a></li>";					
				  echo "</ul>";
				echo "</li>"; 	
				echo "<li class='dropdown'>";
				  echo "<a href='#' class='dropdown-toggle' data-toggle='dropdown'>Placement <span class='fa fa-angle-down'></span></a>";
					echo "<ul class='dropdown-menu' role='menu'>";
						echo "<li><a href='placementoverview.php'><img src='assets/img/arrow.png' border='0'>Overview</a></li>";                
						echo "<li><a href='recruiters.php'><img src='assets/img/arrow.png' border='0'>Our Recruiters</a></li>"; 
					echo "</ul>";
				echo "</li>";
				echo "<li class='dropdown'>";
				echo "<a href='#' class='dropdown-toggle' data-toggle='dropdown'>Student Corner <span class='fa fa-angle-down'></span></a>";
				    echo "<ul class='dropdown-menu' role='menu'>";
				    echo "<li><a href='fees.php'><img src='assets/img/arrow.png' border='0'>Fee Structure</a></li>";     
				        echo "<li><a href='ControlPanel/studentsection.php' target='_blank'><img src='assets/img/arrow.png' border='0'>Downloads</a></li>";
					echo "</ul>";
				echo "</li>";
				echo "<li><a href='alumini.php'>Alumini</a></li>";
				echo "<li class='dropdown'>";
					echo "<a href='#' class='dropdown-toggle' data-toggle='dropdown'>Facilities <span class='fa fa-angle-down'></span></a>";
					echo "<ul class='dropdown-menu' role='menu'>";
						echo "<li><a href='computerlab.php'><img src='assets/img/arrow.png' border='0'>Computer Lab</a></li>";                
						echo "<li><a href='library.php'><img src='assets/img/arrow.png' border='0'>Library</a></li>"; 
						echo "<li><a href='boyshostel.php'><img src='assets/img/arrow.png' border='0'>Boys Hostel</a></li>"; 
						echo "<li><a href='guesthouse.php'><img src='assets/img/arrow.png' border='0'>Guest House</a></li>"; 
						echo "<li><a href='transport.php'><img src='assets/img/arrow.png' border='0'>Transport</a></li>"; 
						echo "<li><a href='canteen.php'><img src='assets/img/arrow.png' border='0'>Mess and Canteen</a></li>"; 
					echo "</ul>";
				echo "</li>";
				echo "<li><a href='gallery.php'>Photo Gallery</a></li>";
				echo "<li><a href='contactus.php'>Contact Us</a></li>";
				}		
			if($pageName == "fees.php" )
				{
				echo "<li><a href='index.php'>Home</a></li>";           
				echo "<li class='dropdown'>";
				  echo "<a href='#' class='dropdown-toggle' data-toggle='dropdown'>About Us <span class='fa fa-angle-down'></span></a>";
				  echo "<ul class='dropdown-menu' role='menu'>";
					echo "<li><a href='intro.php'><img src='assets/img/arrow.png' border='0'>Institute at a Glance</a></li>";               
					echo "<li><a href='aboutdkkkp.php'><img src='assets/img/arrow.png' border='0'>About DKKKP</a></li>";
					echo "<li><a href='presidentsmessage.php'><img src='assets/img/arrow.png' border='0'>Presidents Message</a></li>";	
					echo "<li><a href='secretarysmessage.php'><img src='assets/img/arrow.png' border='0'>Secretary Message</a></li>";
					echo "<li><a href='ceosmessage.php'><img src='assets/img/arrow.png' border='0'>CEO Message</a></li>";
					echo "<li><a href='directorsmessage.php'><img src='assets/img/arrow.png' border='0'>Directors Message</a></li>";	
					echo "<li><a href='qualitypolicy.php'><img src='assets/img/arrow.png' border='0'>Quality Policy</a></li>";
					echo "<li><a href='missionandvision.php'><img src='assets/img/arrow.png' border='0'>Mission and Vision</a></li>";
				echo "</ul>";
				echo "</li>";    
				echo "<li><a href='mandatory.php'>Mandatory Disclosure</a></li>";
				echo "<li class='dropdown'>";
				  echo "<a href='#' class='dropdown-toggle' data-toggle='dropdown'>Faculty <span class='fa fa-angle-down'></span></a>";
				  echo "<ul class='dropdown-menu' role='menu'>";
					echo "<li><a href='teaching.php'><img src='assets/img/arrow.png' border='0'>Teaching</a></li>";                
					echo "<li><a href='nonteaching.php'><img src='assets/img/arrow.png' border='0'>Non Teaching</a></li>";
					echo "<li><a href='supporting.php'><img src='assets/img/arrow.png' border='0'>Supporting</a></li>";			
					echo "<li><a href='visitingfaculty.php'><img src='assets/img/arrow.png' border='0'>Visiting Faculty</a></li>";
					echo "<li><a href='teachingmethod.php'><img src='assets/img/arrow.png' border='0'>Teaching Methodology</a></li>";	
					echo "<li><a href='career.php'><img src='assets/img/arrow.png' border='0'>Current Opportunities</a></li>";	
				echo "</ul>";
				echo "</li>"; 
				echo "<li class='dropdown'>";
				  echo "<a href='#' class='dropdown-toggle' data-toggle='dropdown'>Admissions<span class='fa fa-angle-down'></span></a>";
				  echo "<ul class='dropdown-menu' role='menu'>";
					echo "<li><a href='admissionprocedure.php'><img src='assets/img/arrow.png' border='0'>Admission Procedure</a></li>";                
					echo "<li><a href='documentsrequired.php'><img src='assets/img/arrow.png' border='0'>Documents Required</a></li>";
					echo "<li><a href='intake.php'><img src='assets/img/arrow.png' border='0'>Intake Capacity</a></li>";
					echo "<li><a href='brochure.php'><img src='assets/img/arrow.png' border='0'>Brochure</a></li>";
					echo "<li><a href='http://collegecirculars.unipune.ac.in/sites/documents/Syllabus%202016/MBA_NEW_Syllabus_2016-17-17-6-16.pdf' target='_blank'><img src='assets/img/arrow.png' border='0'>Syllabus </a></li>";					
				  echo "</ul>";
				echo "</li>"; 	
				echo "<li class='dropdown'>";
				  echo "<a href='#' class='dropdown-toggle' data-toggle='dropdown'>Placement <span class='fa fa-angle-down'></span></a>";
					echo "<ul class='dropdown-menu' role='menu'>";
						echo "<li><a href='placementoverview.php'><img src='assets/img/arrow.png' border='0'>Overview</a></li>";                
						echo "<li><a href='recruiters.php'><img src='assets/img/arrow.png' border='0'>Our Recruiters</a></li>"; 
					echo "</ul>";
				echo "</li>";
				echo "<li class='dropdown active'>";
				echo "<a href='#' class='dropdown-toggle' data-toggle='dropdown'>Student Corner <span class='fa fa-angle-down'></span></a>";
				    echo "<ul class='dropdown-menu' role='menu'>";
				    echo "<li><a href='fees.php'><img src='assets/img/arrow.png' border='0'>Fee Structure</a></li>";     
				        echo "<li><a href='ControlPanel/studentsection.php' target='_blank'><img src='assets/img/arrow.png' border='0'>Downloads</a></li>";
					echo "</ul>";
				echo "</li>";
				echo "<li><a href='alumini.php'>Alumini</a></li>";
				echo "<li class='dropdown'>";
					echo "<a href='#' class='dropdown-toggle' data-toggle='dropdown'>Facilities <span class='fa fa-angle-down'></span></a>";
					echo "<ul class='dropdown-menu' role='menu'>";
						echo "<li><a href='computerlab.php'><img src='assets/img/arrow.png' border='0'>Computer Lab</a></li>";                
						echo "<li><a href='library.php'><img src='assets/img/arrow.png' border='0'>Library</a></li>"; 
						echo "<li><a href='boyshostel.php'><img src='assets/img/arrow.png' border='0'>Boys Hostel</a></li>"; 
						echo "<li><a href='guesthouse.php'><img src='assets/img/arrow.png' border='0'>Guest House</a></li>"; 
						echo "<li><a href='transport.php'><img src='assets/img/arrow.png' border='0'>Transport</a></li>"; 
						echo "<li><a href='canteen.php'><img src='assets/img/arrow.png' border='0'>Mess and Canteen</a></li>"; 
					echo "</ul>";
				echo "</li>";
				echo "<li><a href='gallery.php'>Photo Gallery</a></li>";
				echo "<li><a href='contactus.php'>Contact Us</a></li>";
				}			
							
			?>
         </ul>                     
        </div><!--/.nav-collapse -->        
      </div>     
    </nav>
  </section>
  <!-- End menu -->