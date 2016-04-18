	<?php
	//Including the soap library file
	require_once 'lib/nusoap.php'; 

	//Creating a soap client object
	$client = new nusoap_client("http://52.38.240.173/tracklathonwebservice/service.php?wsdl");
	
	echo "<center><h1>Calling the functions Registered in the Web Service</h1></center>";
	echo "<center><h2>Tracklathon</h2></center>";
	
	echo "<br/><br/><b>Registration</b><br/>";
	$res1=$client->call('registration',array("Dilip","Kumar","dilipkumar4813@gmail.com","test","123456789"));
	print_r ($res1);
	
	echo "<br/><br/><b>Check if user exists</b><br/>";
	$res1=$client->call('checkUserExists',array("dilipkumar4813@gmail.com"));
	print_r ($res1);

	echo "<br/><br/><b>Get profile webservice</b><br/>";
	$res1=$client->call('getProfile',array("dilipkumar4813@gmail.com"));
	print_r ($res1);

	echo "<br/><br/><b>User authentication webservice</b><br/>";
	$res1=$client->call('userAuthentication',array("dilipkumar4813@gmail.com","test"));
	print_r ($res1);

	echo "<br/><br/><b>Update profile webservice</b><br/>";
	$res1=$client->call('updateProfile',array("0","Dilip","kumar","dilipkumar4813@gmail.com","9739388304","test"));
	print_r ($res1);

	echo "<br/><br/><b>Set location webservice</b><br/>";
	$res1=$client->call('setLocation',array("0","13.5","17.2"));
	print_r ($res1);

	echo "<br/><br/><b>Get location webservice</b><br/>";
	$res1=$client->call('getLocation',array("0"));
	print_r ($res1);

	echo "<br/><br/><b>Share Location</b><br/>";
	$res1=$client->call('shareLocation',array("1","2"));
	print_r ($res1);

	//$res1=$client->call('shareLocation',array("0","1"));
	//print_r ($res1);

	echo "<br/><br/><b>Get Location Users</b><br/>";
	$res1=$client->call('getLocationUsers',array("0"));
	print_r ($res1);

	echo "<br/><br/><b>Remove Share Location</b><br/>";
	$res1=$client->call('removeShareLocation',array("1","2"));
	print_r ($res1);

	echo "<br/><br/><b>Get your location viewers</b><br/>";
	$res1=$client->call('getYourLocationViewer',array("1"));
	print_r ($res1);

	echo "<br/><br/><b>Create plan/event webservice</b><br/>";
	$res1=$client->call('createPlan',array("1","Antharagange","Boot camp at 5 o clock","500Rs","1.dilip,2.testo","Antharagange","13.05","17.5","24/04/2016","14:30"));
	print_r ($res1);

	echo "<br/><br/><b>Edit plan/event webservice</b><br/>";
	$res1=$client->call('editPlan',array("1","1","Antharagange","Boot camp at 5 o clock","500Rs","1.dilip,2.testo","Antharagange","13.05","17.5","24/04/2016","14:30"));
	print_r ($res1);
?>