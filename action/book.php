<?php
    include('db/db.php');
	$name = $_POST['name'];
	$email = $_POST['email'];
	$sub = $_POST['subject'];
	$enterDate = $_POST['enterdate'];
	$exitdate = $_POST['exitdate'];
	$guest = $_POST['guest'];
	$room = $_POST['room'];
	$information = $_POST['information'];
    
    $sql = "INSERT INTO customer (name,email,enterDate,exitDate,guests,rooms,sub,information)
VALUES ('".$name."','".$email."','".$enterDate."','".$exitdate."','".$guest."','".$room."','".$sub."','".$information."')";
    $result = $conn->query($sql);
    
    if($result){
		$t= 3;
        header('Location: http://localhost/final/contact2.php');
    }else{
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    
    //var_dump($result);
?>