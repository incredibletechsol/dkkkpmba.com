<script src="assets/js/jquery-1.10.2.js"></script>
<?php
include("conn.php");
include("sms.php");
include('MyLogPHP.class.php');
$log = new MyLogPHP('logs/logs.log');
?>
<style>
	
	.img-500
		{
		height : 100px;
		width  : 100px;
		}
		
		#mask {
		  position:absolute;
		  left:0;
		  top:0;
		  z-index:99998;
		  background-color: #4D4D4D;
		  display:none;
		}  
		
		#boxes .window
		{
		  position:absolute;
		  left:0;
		  top:0;
		  width:350px;
		  height:150px;
		  display:none;
		  z-index:99999;
		  padding:10px;
		  -moz-border-radius: 10px;
		  -webkit-border-radius: 10px;
		  border-radius: 10px;
		  border: 4px solid #333333;
		  
		  -moz-box-shadow:4px 4px 30px #130507;
			-webkit-box-shadow:4px 4px 30px #130507;
		  box-shadow:4px 4px 30px #130507;
			-moz-transition:top 800ms;
			-o-transition:top 800ms;
			-webkit-transition:top 800ms;
		  transition:top 800ms;
		  margin-left : 0px;
		}
		
		#boxes #dialog
		{
		  width:350px; 
		  height:150px;
		  padding:0px;
		  background-color: #FFFFFF;
		}	
		
	</style>
<!-- Insert Code -->	
<?php
	if(isset($_GET['msg']))
		{
			$param=$_GET['msg'];
			if($param == "save")
				{
				  if (isset($_FILES['photo']) && $_FILES['photo']['error'] === UPLOAD_ERR_OK)
					  {
						$type = $_POST['type'];
						
						$name = $_POST['name'];

						$designation  = $_POST['designation'];

						$qualification   = $_POST['qualification'];
						
						$experience = $_POST['experience'];
						
						// get details of the uploaded file
						$fileTmpPath = $_FILES['photo']['tmp_name'];
						$fileName = $_FILES['photo']['name'];
						$fileSize = $_FILES['photo']['size'];
						$fileType = $_FILES['photo']['type'];
						$fileNameCmps = explode(".", $fileName);
						$fileExtension = strtolower(end($fileNameCmps));
						// sanitize file-name
						$newFileName = md5(time() . $fileName) . '.' . $fileExtension;
						// check if file has one of the following extensions
						$allowedfileExtensions = array('jpg', 'gif', 'png','JPG','GIF','PNG');
						if($fileSize > 500000) {
							$message = "Sorry, your file is too large";
							//break;
						}
						
						if (in_array($fileExtension, $allowedfileExtensions))
						{
						  // directory in which the uploaded file will be moved
							if($type == "Teaching")
								$target_path="../faculty/teaching/";
							else if($type == "Non-Teaching")
								$target_path="../faculty/nonteaching/";	
							else if($type == "Supporting")
								$target_path="../faculty/supporting/";
						  $dest_path = $target_path . $newFileName;
						  if(move_uploaded_file($fileTmpPath, $dest_path)) 
						  {
						   $faculty_insert = "INSERT INTO tbl_faculty(type,name,designation,qualification,experience,photo) values('$type','$name','$designation','$qualification','$experience','$newFileName')";
									
							$log->info("Inserting new Faculty Data :::".$faculty_insert);						 
						
							mysqli_query($conn,$faculty_insert) or die(mysql_error());
						
							$log->info("Faculty  Data inserted");
							
							$message="Faculty Saved Successfully";
						  }
						  else 
						  {
							$message = 'There was some error moving the file to upload directory. Please make sure the upload directory is writable by web server.';
						  }
						}
						else
						{
						  $message = 'Upload failed. Allowed file types: ' . implode(',', $allowedfileExtensions);
						}
					  }
					  else
					  {
						$message = 'There is some error in the file upload. Please check the following error.<br>';
						$message .= 'Error:' . $_FILES['uploadedFile']['error'];
					  }
				?>
				
				<script type="text/javascript">
				$(document).ready(function() {	
			
					var id = '#dialog';
				
					//Get the screen height and width
					var maskHeight = $(document).height();
					var maskWidth = $(window).width();
				
					//Set heigth and width to mask to fill up the whole screen
					$('#mask').css({'width':maskWidth,'height':maskHeight});
					
					//transition effect		
					$('#mask').fadeIn(800);	
					$('#mask').fadeTo("slow",0.8);	
				
					//Get the window height and width
					var winH = $(window).height();
					var winW = $(window).width();
						  
					//Set the popup window to center
					$(id).css('top',  winH/2-$(id).height()/2 -50);
					$(id).css('left', winW/2-$(id).width()/2);
				
					//transition effect
					$(id).fadeIn(500); 	
				
				//if close button is clicked
				$('.window .close').click(function (e) {
					//Cancel the link behavior
					e.preventDefault();
					
					$('#mask').hide();
					$('.window').hide();
				});		
				
				//if mask is clicked
				$('#mask').click(function () {
					$(this).preventDefault();
					$(this).hide();
					$('.window').hide();
				});		
				
			});
	
			</script>
		<div id="boxes">
				<div style="top:150px; left: 551.5px; display: none;" id="dialog" class="window">
					<div align="right" style="font-weight:bold; margin:5px 3px 0 0;">
					<?php
					echo "<a href='faculty.php'><img src='images/cross.png' width='16' style='border:none; cursor:pointer;' /></a>";
					?>
					</div>
					
					<div align="center" style="margin:5px 0 5px 0;">
					
						<?php 
						echo "<p align='center'><h4><img src='images/Correct.png'>&nbsp;&nbsp;".$message."</h4></p>"; 
						?>
					
					</div>
					
				</div>
			
				<!-- Mask to cover the whole screen -->
				<div style="width: 2000px; height: 2000px; display: none; opacity: 0.7;" id="mask"></div>
				</div>
				
				<?php
				}
		}
?>	
<!-- Delete Code -->
<?php
	if(isset($_GET['msg']))
		{
			$param=$_GET['msg'];
			if($param == "delete")
				{
				$id = $_GET['id'];
				$fetch_existing_photo_query="SELECT type,photo FROM tbl_faculty where id='$id'";
				$existing_photo_rs= mysqli_query($conn,$fetch_existing_photo_query);
				
				while($exiting_photo_row = mysqli_fetch_array($existing_photo_rs)) 
			     {
				    $type=$exiting_photo_row[0];
					if($type == "Teaching")
						$target_path="../faculty/teaching/";
					else if($type == "Non-Teaching")
						$target_path="../faculty/nonteaching/";
					else if($type == "Supporting")
						$target_path="../faculty/supporting/";		
			        $utemp=$target_path.$exiting_photo_row[1];
			        unlink($utemp);	
				}
				$faculty_delete = "delete from tbl_faculty where id='$id'";
				$log->info("Deleting Faculty Data :::".$faculty_delete);						 
				mysqli_query($conn,$faculty_delete) or die(mysql_error());
				$log->info("Faculty  Data Deleted");
				$message="DKKKPMBA.COM :: 1 Deleted Inserted";
				?>
				
				<script type="text/javascript">
				$(document).ready(function() {	
			
					var id = '#dialog';
				
					//Get the screen height and width
					var maskHeight = $(document).height();
					var maskWidth = $(window).width();
				
					//Set heigth and width to mask to fill up the whole screen
					$('#mask').css({'width':maskWidth,'height':maskHeight});
					
					//transition effect		
					$('#mask').fadeIn(800);	
					$('#mask').fadeTo("slow",0.8);	
				
					//Get the window height and width
					var winH = $(window).height();
					var winW = $(window).width();
						  
					//Set the popup window to center
					$(id).css('top',  winH/2-$(id).height()/2 -50);
					$(id).css('left', winW/2-$(id).width()/2);
				
					//transition effect
					$(id).fadeIn(500); 	
				
				//if close button is clicked
				$('.window .close').click(function (e) {
					//Cancel the link behavior
					e.preventDefault();
					
					$('#mask').hide();
					$('.window').hide();
				});		
				
				//if mask is clicked
				$('#mask').click(function () {
					$(this).preventDefault();
					$(this).hide();
					$('.window').hide();
				});		
				
			});
	
			</script>
		<div id="boxes">
				<div style="top:150px; left: 551.5px; display: none;" id="dialog" class="window">
					<div align="right" style="font-weight:bold; margin:5px 3px 0 0;">
					<?php
					echo "<a href='faculty.php'><img src='images/cross.png' width='16' style='border:none; cursor:pointer;' /></a>";
					?>
					</div>
					
					<div align="center" style="margin:5px 0 5px 0;">
					
						<?php 
						echo "<p align='center'><h4><img src='images/Correct.png'>&nbsp;&nbsp;Faculty Deleted Successfully.</h4></p>"; 
						?>
					
					</div>
					
				</div>
			
				<!-- Mask to cover the whole screen -->
				<div style="width: 2000px; height: 2000px; display: none; opacity: 0.7;" id="mask"></div>
				</div>
				
				<?php
				}
		}
?>	
<!-- Update Code -->
<?php
	if(isset($_GET['msg']))
		{
			$param=$_GET['msg'];
			if($param == "update")
				{
				$type = $_POST['type1'];
				
				$name = $_POST['name1'];

				$designation  = $_POST['designation1'];

				$qualification   = $_POST['qualification1'];
				
				$experience = $_POST['experience1'];

				$id = $_POST['id'];
				$fileSize=$_FILES['photo1']['size'];
				if($fileSize <= 0) {
					$faculty_update = "UPDATE tbl_faculty SET type='$type',name='$name',designation='$designation',qualification='$qualification',experience='$experience' where id='$id'";
					$log->info("Updating Faculty Data  :::".$faculty_update);	
					mysqli_query($conn,$faculty_update) or die(mysql_error()); 
				}
				else {
						$fetch_existing_photo_query="SELECT type,photo FROM tbl_faculty where id='$id'";
						
						$existing_photo_rs= mysqli_query($conn,$fetch_existing_photo_query);

						while($exiting_photo_row = mysqli_fetch_array($existing_photo_rs)) 
						 {
							$type=$exiting_photo_row[0];
							if($type == "Teaching")
								$target_path="../faculty/teaching/";
							else if($type == "Non-Teaching")
								$target_path="../faculty/nonteaching/";
							else if($type == "Supporting")
								$target_path="../faculty/supporting/";		
							$utemp=$target_path.$exiting_photo_row[1];
							unlink($utemp);	
						}

						if($_FILES['photo1']['size'] > 0) 
								{
									$fileName = $_FILES['photo1']['name'];
									$tmpName  = $_FILES['photo1']['tmp_name'];
								}
							
						$ext=substr(strrchr($fileName,'.'),1);		
						$fileName =$name.".".$ext;		

						if($type == "Teaching")
								$target_path="../faculty/teaching/";
						else if($type == "Non-Teaching")
								$target_path="../faculty/nonteaching/";
						else if($type == "Supporting")
							$target_path="../faculty/supporting/";				
						$target_path=$target_path.basename($fileName);

						if(move_uploaded_file($_FILES['photo1']['tmp_name'],$target_path))
							{
							$faculty_update = "UPDATE tbl_faculty SET type='$type',name='$name',designation='$designation',qualification='$qualification',experience='$experience',photo='$fileName' where id='$id'";
							$log->info("Updating Faculty Data  :::".$faculty_update);	
							mysqli_query($conn,$faculty_update) or die(mysql_error()); 
							$message="DKKKPMBA.COM :: 1 Faulty Updated";
							}
					}
				?>
				
				<script type="text/javascript">
				$(document).ready(function() {	
			
					var id = '#dialog';
				
					//Get the screen height and width
					var maskHeight = $(document).height();
					var maskWidth = $(window).width();
				
					//Set heigth and width to mask to fill up the whole screen
					$('#mask').css({'width':maskWidth,'height':maskHeight});
					
					//transition effect		
					$('#mask').fadeIn(800);	
					$('#mask').fadeTo("slow",0.8);	
				
					//Get the window height and width
					var winH = $(window).height();
					var winW = $(window).width();
						  
					//Set the popup window to center
					$(id).css('top',  winH/2-$(id).height()/2 -50);
					$(id).css('left', winW/2-$(id).width()/2);
				
					//transition effect
					$(id).fadeIn(500); 	
				
				//if close button is clicked
				$('.window .close').click(function (e) {
					//Cancel the link behavior
					e.preventDefault();
					
					$('#mask').hide();
					$('.window').hide();
				});		
				
				//if mask is clicked
				$('#mask').click(function () {
					$(this).preventDefault();
					$(this).hide();
					$('.window').hide();
				});		
				
			});
	
			</script>
		<div id="boxes">
				<div style="top:150px; left: 551.5px; display: none;" id="dialog" class="window">
					<div align="right" style="font-weight:bold; margin:5px 3px 0 0;">
					<?php
					echo "<a href='faculty.php'><img src='images/cross.png' width='16' style='border:none; cursor:pointer;' /></a>";
					?>
					</div>
					
					<div align="center" style="margin:5px 0 5px 0;">
					
						<?php 
						echo "<p align='center'><h4><img src='images/Correct.png'>&nbsp;&nbsp;Faculty Updated Successfully.</h4></p>"; 
						?>
					
					</div>
					
				</div>
			
				<!-- Mask to cover the whole screen -->
				<div style="width: 2000px; height: 2000px; display: none; opacity: 0.7;" id="mask"></div>
				</div>
				
				<?php
				}
		}
?>				