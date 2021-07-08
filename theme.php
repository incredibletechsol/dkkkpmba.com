<?php
date_default_timezone_set('Asia/Kolkata'); 
$currentDate=date('Y-m-d h:i:s');
$day = date("l");
if($day == "Monday")
	{
	echo "<link id='switcher' href='assets/css/theme-color/green-theme.css' rel='stylesheet'> ";
	}
else if($day == "Tuesday")
	{
	echo "<link id='switcher' href='assets/css/theme-color/orange-theme.css' rel='stylesheet'> ";
	}	
else if($day == "Wednesday")
	{
	echo "<link id='switcher' href='assets/css/theme-color/pink-theme.css' rel='stylesheet'> ";
	}	
else if($day == "Thursday")
	{
	echo "<link id='switcher' href='assets/css/theme-color/purple-theme.css' rel='stylesheet'> ";
	}
else if($day == "Friday")
	{
	echo "<link id='switcher' href='assets/css/theme-color/violet-theme.css' rel='stylesheet'> ";
	}
else if($day == "Saturday")
	{
	echo "<link id='switcher' href='assets/css/theme-color/red-theme.css' rel='stylesheet'> ";
	}
else if($day == "Sunday")
	{
	echo "<link id='switcher' href='assets/css/theme-color/default-theme.css' rel='stylesheet'> ";
	}				
else
	{
	echo "<link id='switcher' href='assets/css/theme-color/dark-red-theme.css' rel='stylesheet'> ";
	}
?>
