
<?php



?>
<html>  
    <head>  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
		
<style>
 



.text-center {
  text-align: center;
}

* {box-sizing: border-box;}

.header {
  overflow: hidden;
  background-color: #f1f1f1;
  padding: 20px 10px;

}

 .wrap {
  display: flex;
  align-items: center;
  justify-content: center;
}

.button {
  width: 140px;
  height: 45px;
  font-family: 'Roboto', sans-serif;
  font-size: 11px;
  text-transform: uppercase;
  letter-spacing: 2.5px;
  font-weight: 800;
  color: #000;
  background-color: #fff;
  border: none;
  border-radius: 45px;
  box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.1);
  transition: all 0.3s ease 0s;
  cursor: pointer;
  outline: none;
  }

.button:hover {
  background-color: #32CD30;
  box-shadow: 0px 15px 20px rgba(153, 221, 255, 0.4);
  color: #fff;
  transform: translateY(-7px);
}

.button2 {
  width: 140px;
  height: 45px;
  font-family: 'Roboto', sans-serif;
  font-size: 11px;
  text-transform: uppercase;
  letter-spacing: 2.5px;
  font-weight: 800;
  color: #000;
  background-color: #fff;
  border: none;
  border-radius: 45px;
  box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.1);
  transition: all 0.3s ease 0s;
  cursor: pointer;
  outline: none;
  }

.button2:hover {
  background-color: #ff4500 ;
  box-shadow: 0px 15px 20px rgba(153, 221, 255, 0.4);
  color: #fff;
  transform: translateY(-7px);
}


</style>
 </head>
 <body style="background-color:AliceBlue;">

 	    <div class="header">
  <h1 align="center"style="color:#003060;">    Control Panel For Robot Base  </h1>
  <div class="header-right">
  </div>
  </div>

  <form method="post" >

 	<div class="wrap" style="  height: 30%;">
      <input class="button" type="submit" name="Forward" value="Forward">
    </div>


    <div class="wrap" style="  height: 0%;">
      <input class="button2" type="submit" name="Stop" value="Stop"  >
    </div>


    <div class="wrap" style="margin-Right: 450px; height: 0%;">
      <input class="button" type="submit" name="Left" value="Left">
    </div>


    <div class="wrap" style="margin-Left: 450px;height: 0%;">
      <input class="button" type="submit" name="Right" value="Right">
    </div>

 	<div class="wrap" style="  height: 30%;">
      <input class="button" type="submit" name="Backward" value="Backward">
    </div>


   </form>
 </body>  
</html> 


<?php
error_reporting(0);
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "robots_database";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST['Forward'])){

$sql = "UPDATE movement SET movement_direction ='Forward' WHERE id=1";
($conn->query($sql) === TRUE) ;
}


if(isset($_POST['Stop'])){
$sql = "UPDATE movement SET movement_direction='Stop' WHERE id=1";
($conn->query($sql) === TRUE) ;

}

if(isset($_POST['Left'])){
$sql = "UPDATE movement SET movement_direction='Left' WHERE id=1";
($conn->query($sql) === TRUE) ;

}

if(isset($_POST['Right'])){
$sql = "UPDATE movement SET movement_direction='Right' WHERE id=1";
($conn->query($sql) === TRUE) ;

}


if(isset($_POST['Backward'])){
$sql = "UPDATE movement SET movement_direction='Backward' WHERE id=1";
($conn->query($sql) === TRUE) ;

}
$conn->close();

?>