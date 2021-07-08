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
	
	<script type="text/javascript">

	function setColor(el, bg) 
		{
		  if (el.style) el.style.backgroundColor = bg;
		}
		
	function checkInput(form) 
		{
		  var bgBad = "#FF9999";
		  var bgGood = "#66FFCC";
		  var valid = true;
		  var errmsg="";
		  
		 /* Name Validation */ 		  
		 if (form.alumininame.value == "") {
			error_alumininame.innerHTML ="<img src='images/delete.gif' border='0'>&nbsp;&nbsp;Please enter Your Name";
			setTimeout(function () {error_alumininame.innerHTML =""}, 10000);
			valid = false;
		  } else {
			error_alumininame.innerHTML ="";
			setColor(form.alumininame, bgGood);
		  }
		
		  
		  /* Year Of Passing validation */ 		  
		 if (form.aluminiyearofpassing.value == "") {
			error_aluminiyearofpassing.innerHTML ="<img src='images/delete.gif' border='0'>&nbsp;&nbsp;Please enter Your Year Of Passing";
			setTimeout(function () {error_aluminiyearofpassing.innerHTML =""}, 10000);
			valid = false;
		  } else {
			error_aluminiyearofpassing.innerHTML ="";
			setColor(form.aluminiyearofpassing, bgGood);
		  }
		  
		  /* Where you are Currently Working validation */ 		  
		 if (form.aluminicurrentlyworkingin.value == "") {
			error_aluminicurrentlyworkingin.innerHTML ="<img src='images/delete.gif' border='0'>&nbsp;&nbsp;Please enter where you are Currently Working";
			setTimeout(function () {error_aluminicurrentlyworkingin.innerHTML =""}, 10000);
			valid = false;
		  } else {
			error_aluminicurrentlyworkingin.innerHTML ="";
			setColor(form.aluminicurrentlyworkingin, bgGood);
		  }
		  
		   /* Mobile No validation */ 		  
		 if (form.aluminimobileno.value == "") {
			error_aluminimobileno.innerHTML ="<img src='images/delete.gif' border='0'>&nbsp;&nbsp;Please enter your Mobile No";
			setTimeout(function () {error_aluminimobileno.innerHTML =""}, 10000);
			valid = false;
		  } else {
			error_aluminimobileno.innerHTML ="";
			setColor(form.aluminimobileno, bgGood);
		  }
		  
		  /* Email Id validation */ 		  
		 if (form.aluminiemailId.value == "" ) {
			error_aluminiemailId.innerHTML ="<img src='images/delete.gif' border='0'>&nbsp;&nbsp;Please enter your Email Address";
			setTimeout(function () {error_aluminiemailId.innerHTML =""}, 10000);
			valid = false;
		  } else {
			error_aluminiemailId.innerHTML ="";
			setColor(form.aluminiemailId, bgGood);
		  } 
				  
		if (document.addalumini.aluminiemailId.value != " ")
		{
			var checkOK="ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789-@._";
			var checkStr = document.addalumini.aluminiemailId.value;
			var allValid = 'true';
			for (i = 0;  i < checkStr.length+1;  i++)
			{
	
			ch = checkStr.charAt(i);
				for (j = 0;  j < checkOK.length+1;  j++)
				{
					if (ch == checkOK.charAt(j))
					break;
					if (j == checkOK.length)
					{
						allValid = 'false';
						break;
					}
				}
			}
		}
	
		if(document.addalumini.aluminiemailId.value != "")
		{
			var val=document.addalumini.aluminiemailId.value ;
			var pass1=val.indexOf('@',0);
			if(pass1==-1)
			{
				error_aluminiemailId.innerHTML ="<img src='images/delete.gif' border='0'>&nbsp;&nbsp;Please enter valid Email Address";
				setTimeout(function () {error_aluminiemailId.innerHTML =""}, 10000);
				document.addalumini.aluminiemailId.value="";
				document.addalumini.aluminiemailId.focus();
				return false;
			}
		}

		if(document.addalumini.aluminiemailId.value != "")
		{
			var val=document.addalumini.aluminiemailId.value ;
			var pass2=val.indexOf('.',0);
			if(pass2==-1)
			{
				error_aluminiemailId.innerHTML ="<img src='images/delete.gif' border='0'>&nbsp;&nbsp;Please enter valid Email Address";
				setTimeout(function () {error_aluminiemailId.innerHTML =""}, 10000);
				document.addalumini.aluminiemailId.value="";
				document.addalumini.aluminiemailId.focus();
				return false;
			}
			if((pass2 - pass1)== 1)
			{
				error_aluminiemailId.innerHTML ="<img src='images/delete.gif' border='0'>&nbsp;&nbsp;Please enter valid Email Address";
				setTimeout(function () {error_aluminiemailId.innerHTML =""}, 10000);
				document.addalumini.aluminiemailId.value="";
				document.addalumini.aluminiemailId.focus();
				return false;
			}
		}

		if (!allValid)
		{
			error_emailId.innerHTML ="<img src='images/delete.gif' border='0'>&nbsp;&nbsp;Please enter valid Email Address";
			setTimeout(function () {error_aluminiemailId.innerHTML =""}, 10000);
			document.addalumini.aluminiemailId.focus();
			return false;
		}
					  
		return valid;
		}
		
		
	function isNumberKey(evt)
       {
		  var chCode = (evt.which) ? evt.which : event.keyCode
		  if (chCode != 46 && chCode > 31 
			&& (chCode < 48 || chCode > 57))
			 return false;
		  else
		  return true;
       }
		       
    function isAlpha(keyCode)
       {
         return ((keyCode >= 65 && keyCode <= 90) || keyCode == 8 || keyCode == 32 || keyCode == 9 || keyCode == 46)
       }
	   
	function save()
		{
		var b=new Boolean();	
		b=checkInput(document.addalumini);
		if (!b) 
			{
			ERROR.innerHTML ="<h4><img src='images/cross.png' border='0'>&nbsp;&nbsp;Error : Please correct the fields and try submitting again</h4>";
			setTimeout(function () {ERROR.innerHTML =""}, 12000);
			}
		else
			{
			document.addalumini.action="enquiry.php?msg=succalumini";
			document.addalumini.submit();			
			}
		}   
	</script>

  </head>
  <body>
  <?php include('nav.php');  ?>	
 <!-- Page breadcrumb -->
 <section id="mu-page-breadcrumb">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <div class="mu-page-breadcrumb-area">
           <h2>Alumini</h2>
           <ol class="breadcrumb">
            <li><a href="#">Home</a></li>            
            <li class="active">Alumini</li>
          </ol>
         </div>
       </div>
     </div>
   </div>
 </section>
 <!-- End breadcrumb --> <?php include('tabslide.php'); ?>
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
					<DIV id="ERROR" style="color:red;font-weight:bold;"></DIV>
						<form name="addalumini" method="post">
							<input type="hidden" name="action" value="alumini">
							<table border=0 style="padding-bottom: 20px;" cellpadding="5" border="0" cellspacing="0" width="80%" height="210">
								<tr>
									<td height="49" width="312"><b>*Name</b></td>
									<td height="49"><b>:</b></td>
										<td height="49" width="755">
										<DIV id="error_alumininame" style="color:red;"></DIV><br>
										<input name="alumininame" type="text" class="form-control" id="alumininame">
										</td>
									<td width="0" valign="top" height="49"></td>		
								</tr>
						
																
								<tr>
									<td height="41" width="312"><b>*Year Of Passing</b></td>
									<td height="41"><b>:</b></td>
										<td height="41" width="755">
										<DIV id="error_aluminiyearofpassing" style="color:red;"></DIV><br>
										<input name="aluminiyearofpassing" type="text"  class="form-control" id="aluminiyearofpassing" maxlength="4"/>
										</td>
									<td width="0" valign="top" height="41"></td>		
								</tr>
								
								<tr>
									<td height="41" width="312"><b>*Currently Working In</b></td>
									<td height="41"><b>:</b></td>
										<td height="41" width="755">
										<DIV id="error_aluminicurrentlyworkingin" style="color:red;"></DIV><br>
										<input type="text" size="12" id="aluminicurrentlyworkingin" class="form-control" style="width:150px;" name="aluminicurrentlyworkingin"/></td>
									<td width="0" valign="top" height="41"></td>		
								</tr>
								
								<tr>
									<td height="49" width="312"><b>*Mobile No</b></td>
									<td height="49"><b>:</b></td>
										<td height="49" width="755">
										<DIV id="error_aluminimobileno" style="color:red;"></DIV><br>
										<input name="aluminimobileno" type="text" class="form-control" id="aluminimobileno" />
										</td>
									<td width="0" valign="top" height="49"></td>		
								</tr>
								
								<tr>
									<td height="49" width="312"><b>*Email Address</b></td>
									<td height="49"><b>:</b></td>
									<td height="49" width="755">
									<DIV id="error_aluminiemailId" style="color:red;"></DIV><br>
									<input name="aluminiemailId" type="text" class="form-control" id="aluminiemailId" />
									</td>
									<td width="0" valign="top" height="49"></td>		
								</tr>
							
								<tr>
									<td width="312"></td>
									<td></td>
									<td width="755"><br><br><a href="#" class="btn btn-primary"  onClick="save();">Submit</a></td>
									<td width="0" valign="top"></td>		
								</tr>	
							</table>
						</form>	
                  </div>
                </div>
                <!-- end course content container -->
               </div>
              <div class="col-md-3">
                <!-- start sidebar -->
                <aside class="mu-sidebar">
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