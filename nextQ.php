<?php


$data = $_REQUEST["no"];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "questions_task";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM question_table WHERE QNo =".$data;      //sql statement
$result = $conn->query($sql);                                 //sending querry

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {                              //creating input for each row
  	echo "Que".$row["QNo"].": ".$row["Que"]."<br>";
  	echo '<input type="radio" name ="'.$row["QNo"].'"value ="'.$row["OP1"].'" onclick=clickedval(1)>'.$row["OP1"]."<br>";
  	echo '<input type="radio" name ="'.$row["QNo"].'"value ="'.$row["OP2"].'" onclick=clickedval(2)>'.$row["OP2"]."<br>";
  	echo '<input type="radio" name ="'.$row["QNo"].'"value ="'.$row["OP3"].'" onclick=clickedval(3)>'.$row["OP3"]."<br>";
  	echo '<input type="radio" name ="'.$row["QNo"].'"value ="'.$row["OP4"].'" onclick=clickedval(4)>'.$row["OP4"]."<br>";
  }
}
else {
  echo ""; 
}
$conn->close();

?>
