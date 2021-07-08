<?php include('logincommon.php'); ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> <?php include('title.php'); ?></title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
</head>
<body>
    <div id="wrapper">
        <?php include('nav.php'); ?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
             
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             <h3>Mid Term Question Papers</h3>
					    </div>
						<?php $flag=$_SESSION['flag']; ?>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
											<th>Description</th>
                                            <th>Download</th>
											<?php if($flag=="Y") { ?>
											<th>Delete</th>
											<?php } ?>
							            </tr>
                                    </thead>
                                    <tbody>
										<?php
										
										include('conn.php');
										$fetch_general_download="select * from tbl_documents where category='Mid Term Question Papers' order by docid desc";	
										
										$general_download_rs= mysqli_query($conn,$fetch_general_download);

										while($general_download_row = mysqli_fetch_array($general_download_rs)) 
											{
											$id=$general_download_row[0];
											$category=$general_download_row[1];
											if($category == "General")
												$target_path="studentsection/General/";
											else if($category == "Previous Question Papers")
												$target_path="studentsection/PreviousQuestionPapers/";	
											else if($category == "Mid Term Question Papers")
													$target_path="studentsection/MidTermQuestionPapers/";	
											else if($category == "Internals Question Papers")
													$target_path="studentsection/InternalQuestionPapers/";		
											else if($category == "Powerpoint Presentations")
													$target_path="studentsection/PowerpointPresentations/";
											else if($category == "Notes")
													$target_path="studentsection/Notes/";		
											else if($category == "Assignments")
													$target_path="studentsection/Assignments/";				
											echo "<tr>";
											echo "<td>".$general_download_row[2]."</td>";
											echo "<td align='center'><a href='$target_path/$general_download_row[3]' target='_blank'>Download</td>";
											if($flag == "Y") { 
												echo "<td><a href='documentactions.php?id=$id&msg=delete'><img src='images/cross.png'></a></td>";
											}
											echo "</tr>";
											} 
										?>
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>
                <!-- /. ROW  -->
            
        </div>
               
    </div>
             <!-- /. PAGE INNER  -->
            </div>
			
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id="myModalLabel">Add New Faculty</h4>
			</div>
			<div class="modal-body">
			<DIV id="ERROR" style="color:red;font-weight:bold;"></DIV>
				<form name="addfaculty" enctype="multipart/form-data" method="post">
				<table border=0 style="padding-bottom: 20px;" cellpadding="5" border="0" cellspacing="0" width="80%" height="210">
					   <tr>
							<td height="41" width="312"><b>*Type</b></td>
							<td height="41"><b>:</b></td>
							<td height="41" width="755">
							<select class="form-control" name="type">
								<option id="Teaching" value="Teaching">Teaching</option>
								<option id="Non-Teaching" value="Non-Teaching">Non-Teaching</option>
								<option id="Supporting" value="Supporting">Supporting</option>
							</select>
							</td>		
						</tr>
						<tr>
							<td height="49" width="312"><b>*Name</b></td>
							<td height="49"><b>:</b></td>
							<td height="49" width="755"><input name="name" type="text" class="form-control" id="txtName"  onkeydown= "return isAlpha(event.keyCode);" /><br><DIV id="error_name" style="color:red;"></DIV></td>
							<td width="0" valign="top" height="49"></td>		
						</tr>
														
						<tr>
							<td height="41" width="312"><b>*Designation</b></td>
							<td height="41"><b>:</b></td>
							<td height="41" width="755"><input name="designation" type="text"  class="form-control" id="txtDesignation"  onkeydown= "return isAlpha(event.keyCode);" /><br><DIV id="error_designation" style="color:red;"></DIV></td>
							<td width="0" valign="top" height="41"></td>		
						</tr>
						
						<tr>
							<td height="41" width="312"><b>*Qualification</b></td>
							<td height="41"><b>:</b></td>
							<td height="41" width="755"><input type="text" size="12" id="qualification" class="form-control" style="width:150px;" name="qualification"/><br><DIV id="error_qualification" style="color:red;" onkeyup="nospaces()"></DIV></td>
							<td width="0" valign="top" height="41"></td>		
						</tr>
						
						<tr>
							<td height="41" width="312"><b>*Years Of Experience</b></td>
							<td height="41"><b>:</b></td>
							<td height="41" width="755">
							<select class="form-control" name="experience">
								<option id="1" value="1">1</option>
								<option id="2" value="2">2</option>
								<option id="3" value="3">3</option>
								<option id="4" value="4">4</option>
								<option id="5" value="5">5</option>
								<option id="6" value="6">6</option>
								<option id="7" value="7">7</option>
								<option id="8" value="8">8</option>
								<option id="9" value="9">9</option>
								<option id="10" value="10">10</option>
								<option id="11" value="11">11</option>
								<option id="12" value="12">12</option>
								<option id="13" value="13">13</option>
								<option id="14" value="14">14</option>
								<option id="15" value="15">15</option>
								<option id="16" value="16">16</option>
								<option id="17" value="17">17</option>
								<option id="18" value="18">18</option>
								<option id="19" value="19">19</option>
								<option id="20" value="20">20</option>
							</select>
							</td>
							<td width="0" valign="top" height="41"></td>		
						</tr>
																		
						<tr>
							<td width="312"><b>*Photo</b></td>
							<td><b>:</b></td>
							<td width="755"><input name="photo" type="file" id="photo" onchange="return CheckPhotoExt();" /><br><DIV id="error_photo" style="color:red;"></DIV></td>
							<td width="0" valign="top"></td>		
						</tr>	
					</table>
					
				</form>	
			</div>
			<div class="modal-footer">
				<a href="#" class="btn btn-default" data-dismiss="modal">Close</a>
				<a href="#" class="btn btn-primary"  onClick="save();">Save</a>
			</div>
		</div>
	</div>
</div>

	
         <!-- /. PAGE WRAPPER  -->
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- DATA TABLE SCRIPTS -->
    <script src="assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
         <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>
