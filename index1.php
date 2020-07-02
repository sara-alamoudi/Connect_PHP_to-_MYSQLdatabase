<?php
// check connection 
/*if(! $conn){
  die('Could not connect connect: ') ;
}
 echo 'Successfully Connected' ;*/

#####################################################
if (isset($_POST['button1'])){
	echo '<span style="color: blue; font-size: 40px;">Left ';
	$dbhost = "localhost";	
    $dbUsername = "root";
    $dbPassword = "";
    $dbName = "controlpanel";
    $conn = mysqli_connect($dbhost,$dbUsername,$dbPassword,$dbName);
    $Leftward = $_POST["button1"];
    $sql = "INSERT INTO movement (Leftward) VALUES ('$Leftward')";
	}

#########################################################
if (isset($_POST['button2'])){
	echo '<span style="color: blue; font-size: 40px;">Forward ';
	$dbhost = "localhost";	
    $dbUsername = "root";
    $dbPassword = "";
    $dbName = "controlpanel";
    $conn = mysqli_connect($dbhost,$dbUsername,$dbPassword,$dbName);
    $Forward = $_POST["button2"];
    $sql = "INSERT INTO movement (Forward) VALUES ('$Forward')";
    }

##############################################################
if (isset($_POST['button3'])){
//	header("Location:index1.php");
    echo '<span style="color: blue; font-size: 40px;">Right ';
	$dbhost = "localhost";	
    $dbUsername = "root";
    $dbPassword = "";
    $dbName = "controlpanel";
    $conn = mysqli_connect($dbhost,$dbUsername,$dbPassword,$dbName);
	$Rightward= $_POST["button3"];
    $sql = "INSERT INTO movement (Rightward) VALUES ('$Rightward')";
	}

#####################################################	
if (isset($_POST['button4'])){
	echo '<span style="color: blue; font-size: 40px;">Backward ';
	$dbhost = "localhost";	
    $dbUsername = "root";
    $dbPassword = "";
    $dbName = "controlpanel";
    $conn = mysqli_connect($dbhost,$dbUsername,$dbPassword,$dbName);
	$Backward = $_POST["button4"];
    $sql = "INSERT INTO movement (Backward) VALUES ('$Backward')";
}

########################################################        
if (isset($_POST['button5'])){
	echo '<span style="color: red; font-size: 40px;">Stop ';
	$dbhost = "localhost";	
    $dbUsername = "root";
    $dbPassword = "";
    $dbName = "controlpanel";
    $conn = mysqli_connect($dbhost,$dbUsername,$dbPassword,$dbName);
	$Stop = $_POST["button5"];
    $sql = "INSERT INTO movement (Stop) VALUES ('$Stop')";}
####################################################
if (mysqli_query($conn, $sql)){
	echo "<br>";
    echo '<span style="color: black; font-size: 20px;">Data Inserted ';

}
else {
	echo "<br>";
	echo "Data Not Inserted";
}

mysqli_close($conn);
?>

<!DOCTYPE html>
 <html>
 <head>
  <meta charset="utf-8">
  <title>Robot Control Panel</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<form action="index1.php" method="POST"> 
  <br><input type = "button" name="Back" class="b6" value="BACK" onclick="history.back()"></br>
  <style type="text/css">
  	.b6{
  		background-color: #9E9E9E;
  		cursor: pointer;
  		font: 200 15px Georgia,serif; 
  	}
  </style>
</form>
</body>
</html>

