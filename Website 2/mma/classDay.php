<?php $page = 'classes'; ?>

<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>MAA Waterford</title>
	<link rel="stylesheet" href="css/style.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap theme -->
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">
	<link href="style.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
  <body role="document">
<?php include 'nav.php'; ?>
	
      </div>
    </nav>
   
	<div class="panel panel-default">
		<div class="panel-body">
			<img src="Images/21.jpg" class="img-responsive center-block" alt="logo"></img></br></br>
			<img src="Images/32.jpg" class="img-responsive center-block" alt="Teach respect"></img>
				<div class="jumbotron">
			
				<div class="row" >
					<div class="col-sm-8" >
					<?php include 'connect.php';
					
					$sql = "SELECT Day, Class, Time, Coach FROM classes
					WHERE day='$_REQUEST[daySelect]'";
					$result = $conn->query($sql);
					
					if ($result->num_rows > 0) {
						echo 
						"<table class='table table-striped'>
						<thead>
						<tr>
							<th>Day</th>
							<th>Class</th>
							<th>Time</th>
							<th>Coach</th>
						</tr>
						</thead>";
						while($row = $result->fetch_assoc())
						{
							echo "<tr>";
							echo "<td>" . $row['Day'] . "</td>";
							echo "<td>" . $row['Class'] . "</td>";
							echo "<td>" . $row['Time'] . "</td>";
							echo "<td>" . $row['Coach'] . "</td>";
							echo "</tr>";
						}
						echo 
						"</tbody> 
					</table>";}
						
						else{
							echo "No classes found.";
						}
						$conn->close();
						?>
						
					
				</div>
				<div class="col-sm-4">
				
				<form action="classDay.php" name="daySelectFrom">
				<label>Select a day of the week to see classes for that day:</label>
				
				</br>
				<select name="daySelect">
				<option value="" selected>Select Day</option>
				<option value="Monday">Monday</option>
				<option value="Tuesday">Tuesday</option>
				<option value="Wednesday">Wednesday</option>
				<option value="Thursday">Thursday</option>
				<option value="Friday">Friday</option>
				<option value="Saturday">Saturday</option>
				</select>
				
				<br><br>
				
				<button class="btn btn-sm btn-primary"
				type="submit">Submit</button>
			
		</form>
	</div>
		</div>
	</div>
	  
<!-- /container -->
<div class="navbar navbar-inverse navbar-fixed-bottom" role="navigation"
		<div class="container">
		<div class="navbar-text pull-left">
			<p>Contact: 051 354 687</p>
			<p>Email: <a href="#">mmaw@gmail.com</a>
		</div>
		<div class="navbar-text pull-right">
		<a href="#"><i class="fa fa-facebook-square fa-3x"></i></a>
		<a href="#"><i class="fa fa-twitter-square fa-3x"></i></a>
		<a href="#"><i class="fa fa-pinterest-square fa-3x"></i></a>
		<a href="#"><i class="fa fa-instagram fa-3x"></i><a>
		</div>
	</div>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
	<script src="form.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>