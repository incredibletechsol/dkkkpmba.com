<?php
include('conn.php');
$mandatory_disclosure_query="select filename from tbl_documents where description='Mandatory Disclosure' ";	
$mandatory_disclosure_rs= mysqli_query($conn,$mandatory_disclosure_query);

while($mandatory_disclosure_row = mysqli_fetch_array($mandatory_disclosure_rs)) 
	{
	$filename=$mandatory_disclosure_row[0];
	echo "<iframe src='ControlPanel/studentsection/General/$filename' width='800' height='750'></iframe>";
	} 
?>