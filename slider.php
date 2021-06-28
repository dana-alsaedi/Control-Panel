<?php
$minimum_range1 = 0;
$minimum_range2 = 0;
$minimum_range3 = 0;
$minimum_range4 = 0;
$minimum_range5 = 0;
$run_status = 0;


?>



<html>  
    <head>  

		<link rel="stylesheet" href="https://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
		
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

.switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
}

.switch input { 
  opacity: 0;
  width: 0;
  height: 0;
}

.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #FF4500;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #32CD30;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}



.wrap {
  height: 10%;
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
  background-color: #A2DCE7;
  box-shadow: 0px 15px 20px rgba(153, 221, 255, 0.4);
  color: #fff;
  transform: translateY(-7px);
}

</style>

<body style="background-color:AliceBlue;">

  <div class="header">

  <h1 align="center"style="color:#003060;">    Control Panel For Robot Arm  </h1>

  <div class="header-right">
</div>

  </div>

  </div>
  <div class="container">  
      <br />
		  <br />

			<div class="container-fluid">
				  <form method="post" >

                  <div class="col-md-1"style="margin-left: 170px;">
                  <label for="volume" style="color:#003060;"><h4><b>Base: </b></h4></label>
				</div>
			  	<div  class="col-md-6" style="padding-top:15px" >
					<div id="slider_range1"></div>
				</div>
				 <div class="col-md-1" style="margin-left: 7px;">
					<input type="text" name="minimum_range1" id="minimum_range1" class="form-control" value="<?php echo $minimum_range1; ?>" />
				</div>
			</div>
			<br />
			<br /> 

			<div class="container-fluid">
				<div class="col-md-1"style="margin-left: 170px;">
                <label for="volume" style="color:#003060;"><h4><b>Shoulder:   </b></h4></label>
				</div>
				<div  class="col-md-6" style="padding-top:15px" >
					<div id="slider_range2"></div>
				</div>

				<div class="col-md-1" style="margin-left: 7px;">
					<input type="text" name="minimum_range2" id="minimum_range2" class="form-control" value="<?php echo $minimum_range2; ?>" />
				</div>
			</div>
			<br />
			<br />

			<div class="container-fluid">
				<div class="col-md-1" style="margin-left: 170px;">
                <label for="volume" style="color:#003060;"><h4><b>Elbow:</b></h4></label>
				</div>
				<div  class="col-md-6" style="padding-top:15px" >
					<div id="slider_range3"></div>
				</div>
				<div class="col-md-1" style="margin-left: 7px;">
					<input type="text" name="minimum_range3" id="minimum_range3" class="form-control" value="<?php echo $minimum_range3; ?>" />
				</div>


			</div>
			<br />
			<br />

			<div class="container-fluid">
				<div class="col-md-1"style="margin-left: 170px;">
                <label for="volume" style="color:#003060;"><h4><b>Wrist:</b></h4></label>
				</div>
					<div  class="col-md-6" style="padding-top:15px" >
					<div id="slider_range4"></div>
				</div>

				<div class="col-md-1" style="margin-left: 7px;">
					<input type="text" name="minimum_range4" id="minimum_range4" class="form-control" value="<?php echo $minimum_range4; ?>" />
				</div>

			</div>
			<br />
			<br />


			<div class="container-fluid">

				<div class="col-md-1" style="margin-left: 170px;">
                <label for="volume" style="color:#003060;"><h4><b>Gripper:</b></h4></label>
				</div>

				<div  class="col-md-6" style="padding-top:15px" >
					<div id="slider_range5"></div>
				</div>

				<div class="col-md-1" style="margin-left: 7px;">
					<input type="text" name="minimum_range5" id="minimum_range5" class="form-control" value="<?php echo $minimum_range5; ?>" />
				</div>


			</div>
			<br />
			<br />
<div class="text-center">

<!-- Rectangular switch -->
<label class="switch">
  <input type="checkbox" name="switch">
  <div class="slider round"></div>
</label>



 




<div class="wrap">
    <input class="button" type="submit" name="submit_2" value="update status">

</div>


<div class="wrap">
    <input class="button" type="submit" name="submit_range" value="save ">

</div>





     </form>
</div>

    </body>  
</html>  
<script>  
$(document).ready(function(){  
    
	$( "#slider_range1" ).slider({
		min: 0,
		max: 180,
		values: [ <?php echo $minimum_range1; ?>  ],
		slide:function(event, ui){
			$("#minimum_range1").val(ui.values[0]);
		}
	});
	

		$( "#slider_range2" ).slider({
		min: 0,
		max: 180,
		values: [ <?php echo $minimum_range2; ?>  ],
		slide:function(event, ui){
			$("#minimum_range2").val(ui.values[0]);
		}
	});
	
			$( "#slider_range3" ).slider({
		min: 0,
		max: 180,
		values: [ <?php echo $minimum_range3; ?>  ],
		slide:function(event, ui){
			$("#minimum_range3").val(ui.values[0]);
		}
	});
	

			$( "#slider_range4" ).slider({
		min: 0,
		max: 180,
		values: [ <?php echo $minimum_range4; ?>  ],
		slide:function(event, ui){
			$("#minimum_range4").val(ui.values[0]);
		}
	});


			$( "#slider_range5" ).slider({
		min: 0,
		max: 180,
		values: [ <?php echo $minimum_range5; ?>  ],
		slide:function(event, ui){
			$("#minimum_range5").val(ui.values[0]);
		}
	});

});  



</script>


<?php
error_reporting(0);
if(isset($_POST['submit_range']))
{

  $base=$_POST['minimum_range1'];
  $shoulder=$_POST['minimum_range2'];
  $elbow=$_POST['minimum_range3'];
  $wrist=$_POST['minimum_range4'];
  $gripper=$_POST['minimum_range5'];




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



$sql = "INSERT into robot_arm(base,shoulder,elbow,wrist,gripper) values ('$base','$shoulder','$elbow','$wrist','$gripper')";




($conn->query($sql) === TRUE) ;


$conn->close();
}


if (isset($_POST['switch'])) {
$run_status = 1;
}else{
   $run_status = 0;
 
}

if(isset($_POST['submit_2']))
{

 


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


 if ($run_status==1) {
$sql = "UPDATE run_status SET status='1' WHERE id=1";
    } else {
$sql = "UPDATE run_status SET status='0' WHERE id=1";


    }

($conn->query($sql) === TRUE) ;

$conn->close();
}
?>