<?php

require('connect.php');

$name=$_POST['name'];
$email=$_POST['email'];
$sex=$_POST['sex'];
$interest=$_POST['interest'];

$sql="INSERT INTO test_table(name,email,sex,interest) VALUES('".$name."', '".$email."','".$sex."', '".$interest."')";

$rs =$conn->query($sql);

if($rs){
	echo"data saved successfully!";

}
else{
	 echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>

<form action="" method="POST">
Name:<input type="text" name="name"><br><br>
Email:<input type="text" name="email"><br><br>
sex:<input type="text" name="sex"><br><br>
interest:<input type="text" name="interest"><br><br>
<input type="submit" value="submit">