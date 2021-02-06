<?php
include_once("dbconnect.php");
//$r_as =$_GET['r_as'];
//$name =$_GET['name'];

//delete operation
//if (isset($_COOKIE["timer"])){
    if (isset($_GET['operation'])) {
      $gender = $_GET['gender'];
      try {
        $sql = "DELETE FROM trip WHERE gender='$gender'";
        $conn->exec($sql);
        echo "<script> alert('Delete Success')</script>";
      } catch(PDOException $e) {
        echo "<script> alert('Delete Error')</script>";
      }
    }

try {
    $sql = "SELECT * FROM trip ORDER BY time ASC";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    
    // set the resulting array to associative
     $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
     $trip = $stmt->fetchAll();
    echo "<p><h1 align='center'>Your Current Trip Info</h1></p>";
    echo "<table border='1' align='center'>
    <tr>
        <th>Gender</th>
        <th>Time</th>
        <th>From Where</th>
        <th>Place To Go</th>
    </tr>";

    foreach($trip as $trip){
        echo "<tr>";
        echo "<td>".$trip['gender']."</td>";
        echo "<td>".$trip['time']."</td>";
        echo "<td>".$trip['inasis']."</td>";
        echo "<td>".$trip['place_to_go']."</td>";
        echo "<td><a href='mainpage.php?&gender=".$trip['gender']."&operation=del' onclick= 'return confirm(\"Delete. Are your sure?\");'>Delete</a><br>";
        echo "</tr>";

    }   
        echo "<table>";
        echo "<p align='center'><a href='manage trip information.php'>Insert new trip info</a></p>";
        //echo "<p align='center'><a href='manage feedback.php'>Manage Feedback</a></p>";
        //echo "<p align='center'><a href='profile.php?l_as=".$l_as."&name=".$name."'>Your Profile</a></p>";
        //echo "<p align='center'><a href='login.html'>Login</a></p>";
        echo "<p align='center'><a href='register.html'>Sign Out</a></p>";
 
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
//}else{
  //echo "<script> alert ('Timer expired!!!')</script>";
  //echo "<script> window.location.replace('login.html')</script>";
//}
  $conn = null;
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="styles.css">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
</head>

</html>