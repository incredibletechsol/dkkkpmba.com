<script type="text/javascript">

	function setColor(el, bg) 
		{
		  if (el.style) el.style.backgroundColor = bg;
		}
		
	function checkInputDoc(form) 
		{
			  var bgBad = "#FF9999";
			  var bgGood = "#66FFCC";
			  var valid = true;
			  var errmsg="";
			  
			  /* Description  validation */ 		  
			 if (form.description.value == "") {
				error_description.innerHTML ="<img src='images/delete.gif' border='0'>&nbsp;&nbsp;Please enter Description";
				setTimeout(function () {error_description.innerHTML =""}, 10000);
				valid = false;
			  } else {
				error_description.innerHTML ="";
				setColor(form.description, bgGood);
			  }
			  
			  /* Document  validation */ 		  
			 if (form.doc.value == "") {
				error_doc.innerHTML ="<img src='images/delete.gif' border='0'>&nbsp;&nbsp;Please select document to upload";
				setTimeout(function () {error_doc.innerHTML =""}, 10000);
				valid = false;
			  } else {
				error_doc.innerHTML ="";
				setColor(form.doc, bgGood);
			  }
						  		 
			return valid;
		}
	
	function saveDocuments()
		{
		var b=new Boolean();	
		b=checkInputDoc(document.adddocuments);
		
		if (!b) 
			{
			ERROR2.innerHTML ="<h4><img src='images/cross.png' border='0'>&nbsp;&nbsp;Error : Please correct the fields and try submitting again</h4>";
			setTimeout(function () {ERROR2.innerHTML =""}, 12000);
			}
		else
			{
			document.adddocuments.action="documentactions.php?msg=save";
			document.adddocuments.submit();			
			}
		}
</script>
<nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
	<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		
	</div>
	<div style="color: white;padding: 15px 50px 5px 50px;float: center;font-size: 30px;"> Maharashtra Institute Of Management&nbsp;</div>
</nav>   
<nav class="navbar-default navbar-side" role="navigation">
	<div class="sidebar-collapse">
		<ul class="nav" id="main-menu">
			<?php
			$username=$_SESSION['username'];
			if($username=="mimadmin")
			{
			?>
			<li><a href="faculty.php"><i class="fa fa-dashboard fa-3x"></i> Faculty</a></li>
			<li><a  href="news.php"><i class="fa fa-desktop fa-3x"></i> News</a></li>
			<li><a  href="gallery.php"><i class="fa fa-qrcode fa-3x"></i> Gallery</a></li>
			<li><a  href="alumini.php"><i class="fa fa-square-o fa-3x"></i>Alumini</a></li>
			<li><a href="#"  data-toggle="modal" data-target="#myModal2"><i class="fa fa-sitemap fa-3x"></i>Student Section<span class="fa arrow"></span></a>
				<ul class="nav nav-second-level">
					<li><a href="generaldownloads.php">General Downloads</a></li>
					<li><a href="prevquestionpapers.php">Previous Question Papers</a></li>
					<li><a href="midtermquestionpapers.php">Mid Term Question Papers</a></li>
					<li><a href="internalquestionpapers.php">Internal Question Papers</a></li>
					<li><a href="ppts.php">Powerpoint Presentations</a></li>
					<li><a href="notes.php">Notes</a></li>
					<li><a href="assignments.php">Assignments</a></li>
				</ul>
			</li>
				<li><a  href="logout.php"><i class="fa fa-edit fa-3x"></i> Logout</a></li>	
			<?php
			}
			if($username=="student")
			{
			?>
			<li><a href="#"><i class="fa fa-sitemap fa-3x"></i>Student Section<span class="fa arrow"></span></a>
				<ul class="nav nav-second-level">
					<li><a href="generaldownloads.php">General Downloads</a></li>
					<li><a href="prevquestionpapers.php">Previous Question Papers</a></li>
					<li><a href="midtermquestionpapers.php">Mid Term Question Papers</a></li>
					<li><a href="internalquestionpapers.php">Internal Question Papers</a></li>
					<li><a href="ppts.php">Powerpoint Presentations</a></li>
					<li><a href="notes.php">Notes</a></li>
					<li><a href="assignments.php">Assignments</a></li>
				</ul>
			</li>
			<?php
			}
			?>
		
		</ul>
   </div>
</nav> 

<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id="myModalLabel">Upload New Documents</h4>
			</div>
			<div class="modal-body">
			<DIV id="ERROR2" style="color:red;font-weight:bold;"></DIV>
				<form name="adddocuments" enctype="multipart/form-data" method="post">
			
				<table border=0 style="padding-bottom: 20px;" cellpadding="5" border="0" cellspacing="0" width="80%" height="210">
					   <tr>
							<td height="41" width="312"><b>*Category</b></td>
							<td height="41"><b>:</b></td>
							<td height="41" width="755">
							<select class="form-control" name="category">
								<option id="General" value="General">General</option>
								<option id="Previous Question Papers" value="Previous Question Papers">Previous Question Papers</option>
								<option id="Mid Term Question Papers" value="Mid Term Question Papers">Mid Term Question Papers</option>
								<option id="Internal Question Papers" value="Internal Question Papers">Internal Question Papers</option>
								<option id="Powerpoint Presentations" value="Powerpoint Presentations">Powerpoint Presentations</option>
								<option id="Notes" value="Notes">Notes</option>
								<option id="Assignments" value="Assignments">Assignments</option>
							</select>
							</td>		
						</tr>
						<tr>
							<td height="41" width="312"><b>*Description</b></td>
							<td height="41"><b>:</b></td>
							<td height="41" width="755"><DIV id="error_description" style="color:red;"></DIV><input name="description" type="text" class="form-control" id="description"  onkeydown= "return isAlpha(event.keyCode);" /></td>
						</tr>
																							
						<tr>
							<td width="312"><b>*Document</b></td>
							<td><b>:</b></td>
							<td width="755"><DIV id="error_doc" style="color:red;"><br></DIV><input name="doc" type="file" id="doc"/></td>
						</tr>	
					</table>
			
				</form>	
			</div>
			<div class="modal-footer">
				<a href="#" class="btn btn-default" data-dismiss="modal">Close</a>
				<a href="#" class="btn btn-primary"  onClick="saveDocuments();">Save</a>
			</div>
		</div>
	</div>
</div>