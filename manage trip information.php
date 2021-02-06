<?php
include_once("dbconnect.php");
//$r_as =$_GET['r_as'];
//$name =$_GET['name'];

if (isset($_GET['gender'])) {
  $gender = $_GET['gender'];
  $time = $_GET['time'];
  $inasis= $_GET['inasis'];
  $place_to_go = $_GET['place_to_go'];
 

  try {
    $sql = "INSERT INTO trip(gender, time, inasis, place_to_go)
    VALUES ('$gender', '$time', '$inasis', '$place_to_go')";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "<script> alert('Insert Success')</script>";
    echo "<script> window.location.replace('mainpage.php?') </script>;";

  } catch(PDOException $e) {
    echo "<script> alert('Insert Error')</script>";
    //echo "<script> window.location.replace('register.html') </script>;";
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="styles.css">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<p><h1 align="center"></h1></p>
<body>

  <form action="manage trip information.php" method="get" onsubmit="return confirm('Insert new info?')";>
    <div class="content" align="center">
      <h1>Manage Trip Information</h1>

    
      <label for="gender"><b>Gender:</b></label>
    <select name="gender" id="gender" required>
      <option value=""></option>
        <option value="Male">Male</option>
        <option value="Female">Female</option>
      </select>
      <br>
      <br>
    <label for="time "><b>Time:</b></label>
    <input type="time" id="time" name="time" required>
      </select>
      <br>
      <br>
    <label for="inasis"><b>From Where:</b></label>
    <select name="inasis" id="inasis" required>
      <option value=""></option>
      <option value="Changlun">Changlun</option>
      <option value="SOIS">SOIS</option>
      <option value="Chancellery">Chancellery</option>
      <option value="Library">Library</option>
      <option value="DKG 1,2,3,4,5,6">DKG 1,2,3,4,5,6</option>
      <option value="Route A">Route A</option>
      <option value="Route B">Route B</option>
      <option value="Route C">Route C</option>
      <option value="Route D">Route D</option>
      <option value="DMAS/DTSO">DMAS/DTSO</option>
      <option value="Sport Centre">Sport Centre</option>
        </select>
        <br>
        <br>
    <label for="place_to_go"><b>Place To Go:</b></label>
    <select name="place_to_go" id="place_to_go" required>
      <option value=""></option>
        <option value="Changlun">Changlun</option>
        <option value="SOIS">SOIS</option>
        <option value="Chancellery">Chancellery</option>
        <option value="Library">Library</option>
        <option value="DKG 1,2,3,4,5,6">DKG 1,2,3,4,5,6</option>
        <option value="Route A">Route A</option>
        <option value="Route B">Route B</option>
        <option value="Route C">Route C</option>
        <option value="Route D">Route D</option>
        <option value="DMAS/DTSO">DMAS/DTSO</option>
        <option value="Sport Centre">Sport Centre</option>
      </select>
      <br>
      <br>

      <input type="submit" value="Submit"><br><br>
      <a href="mainpage.php">Cancel</a>
    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
</body>
</html>