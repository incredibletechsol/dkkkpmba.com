<?php
if(isset($_POST['action'])) 
{
    $action=$_POST['action'];
	include('conn.php');
	if($action=="enquiry")
	{
		$headers = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$name=$_POST['name'];
		$email=$_POST['email'];
		$mobno=$_POST['contact'];
		$message=$_POST['message'];
		
		$query="insert into tbl_enquiry(name,email,contact,message) values('$name','$email','$mobno','$message')";

		//mysqli_query($conn,$query)  or die('Not Executed');

	}
	if($action=="contactus")
	{
		$headers = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$name=$_POST['author'];
		$email=$_POST['email'];
		$mobno=$_POST['contact'];
		$subject=$_POST['subject'];
		$message=$_POST['comment'];
		
		$query="insert into tbl_contactus(name,email,contact,subject,message) values('$name','$email','$mobno','$subject','$message')";
		echo $query."<br>";
		mysqli_query($conn,$query)  or die('Not Executed');
		echo "<img src='images/tick.png'>";
		
			$mess="Hi ".$name.",<BR><BR>Thank you for contacting us , Our respective Team will  revert back to you soon.<BR><BR>Thanks & Regards <BR> Maharashtra Institute Of Management<BR><BR>"."<img src='http://dkkkpmba.com/testing/assets/img/logo.png'>"."<BR><BR>(This is auto generated mail please do not reply.)";
		$to="mim.kalamb@dkkkpmba.com";
		$msg="Enquiry Details:<BR>Name :".$name."<BR>Email : ".$email."<BR>Contact No:".$mobno."<BR>Enquiry:".$message."<BR><BR>Thanks & Regards <BR> Maharashtra Institute Of Management<BR><BR>"."<img src='http://dkkkpmba.com/testing/assets/img/logo.png'>"."<BR><BR>(This is auto generated mail please do not reply.)";
		$sub1="Contact by ".$name;
		$sub="Maharashtra Institute Of Management";
		echo "<script> window.location='contactus.php?msg=succenquiry'</script>";
	//	mail($email,$sub,$mess,$headers);
		$r="-f"."mim.kalamb@dkkkpmba.com";
		mail($to,$sub1,$msg,$headers,$r);
	}

	if($action=="alumini")
	{
		$headers = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$alumininame = $_POST['alumininame'];
		$aluminiyearofpassing = $_POST['aluminiyearofpassing'];
		$aluminicurrentlyworkingin = $_POST['aluminicurrentlyworkingin'];
		$aluminimobileno = $_POST['aluminimobileno'];
		$aluminiemailId = $_POST['aluminiemailId'];
		
		$query="insert into tbl_alumini(alumininame,aluminiyearofpassing,aluminicurrentlyworkingin,aluminimobileno,aluminiemailId) values('$alumininame','$aluminiyearofpassing','$aluminicurrentlyworkingin','$aluminimobileno','$aluminiemailId')";

		mysqli_query($conn,$query)  or die('Not Executed');

		echo "<script> window.location='contactus.php?msg=succalumini'</script>";

	}
}	

?>