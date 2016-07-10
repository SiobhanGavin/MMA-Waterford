<?php $page = 'bookings'; ?>

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

    <title>MAA Waterford-bookings</title>
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
			<img src="Images/21.jpg" class="img-responsive center-block" alt="logo">
		</div>   
		<div class="jumbotron">
			<div class="container">
				<div class="row" >
					<div class="col-sm-8" >
					<?php
		if(isset($_SESSION['myusername'])){
		//connect to DB
		include 'connect.php';
		//find out the first name of the current user
		$sql = "SELECT FirstName FROM members WHERE
		Username='$_SESSION[myusername]'";
		$result = $conn->query($sql);
		$row = $result->fetch_assoc();
		//display the user's first name
		echo ("Welcome, " . $row['FirstName'] . ". ");
		echo ("Here are your current bookings: <br><br>");
		 //save current username into currentUser variable
$currentUser=$_SESSION['myusername'];
//Use the username to find out the userID of the current user
$sql = "SELECT user_id FROM members WHERE Username='$currentUser'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
//save the userID in the userID variable
$userID=($row['user_id']);
//get and display bookings - joins bookings, user and class tables
//where the user ID matches the current user
$sql = "SELECT bookings.booking_id AS booking_id,
members.FirstName AS firstname, members.LastName AS lastname,
classes.class_id AS class_id, classes.Day AS day,
classes.Time AS time, classes.Class AS class, classes.Coach AS coach
FROM bookings
LEFT JOIN classes ON bookings.class_id=classes.class_id
LEFT JOIN members ON bookings.user_id=members.user_id
WHERE members.user_id='$userID'
ORDER BY bookings.booking_id";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
//display the bookings in a table
echo
"<table class='table table-striped'>
<thead>
 <tr>
<th>Booking ID</th>
<th>Name</th>
<th>Day</th>
<th>Time</th>
<th>Class</th>
<th>Coach</th>
 </tr>
</thead>
<tbody>";
while($row = $result->fetch_assoc())
{
echo "<tr>";
echo "<td>" . $row['booking_id'] . "</td>";
echo "<td>" . $row['firstname'] . " " . $row['lastname'] . "</td>";
echo "<td>" . $row['day'] . "</td>";
echo "<td>" . $row['time'] . "</td>";
echo "<td>" . $row['class'] . "</td>";
echo "<td>" . $row['coach'] . "</td>";

//form with edit button
echo ("<td>
<form method='post' action='editbooking.php'>
<button type='submit' class='btn btn-xs btn-warning'
name='booking_id' value='" . $row['booking_id'] . "'>
Edit</button> </form> </td>");

//form with delete button
echo ("<td>
<form method='post' action='deletebooking.php'>
<button type='submit' class='btn btn-xs btn-danger'
name='booking_id' value='" . $row['booking_id'] . "'>
Delete</button> </form> </td>");
echo "</tr>";
}

echo
"</tbody>
</table>
";
}
echo
"<br>
<a href='addbooking.php'>
<button type='button' class='btn btn-success'>
Create New Booking</button>
</a>
";
//this curly bracket closes the initial if(isset()) statement
}
else{
echo ("You must <a href='login.php'>log in</a> before you can book.");
}
?> 
		  
        </div>
	 <div class="col-sm-4">
							<h2>Get Connected</h2>
							<a href="#"><i class="fa fa-facebook-square fa-3x"></i></a>
							<a href="#"><i class="fa fa-twitter-square fa-3x"></i></a>
							<a href="#"><i class="fa fa-pinterest-square fa-3x"></i></a>
							<a href="#"><i class="fa fa-instagram fa-3x"></i></a>
							</br>
							<h2>Address:</h2>
							<p>Unit 50</br>Waterford Business Park</br>Cork Road</br>Waterford</p>
							<h2>Contact:</h2>
							<p>Tel: 051 354 687</p>
							<p>Email: <a href="mailto:mmaw@gmail.com">mmaw@gmail.com</a><p>
							</br>
							<script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script><div style='overflow:hidden;height:300px;width:400px;'><div id='gmap_canvas' style='height:300px;width:400px;'></div><div><small><a href="http://embedgooglemaps.com">									embed google map							</a></small></div><div><small><a href="http://freedirectorysubmissionsites.com">directory submission sites</a></small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div><script type='text/javascript'>function init_map(){var myOptions = {zoom:10,center:new google.maps.LatLng(52.2444438,-7.15667289999999),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(52.2444438,-7.15667289999999)});infowindow = new google.maps.InfoWindow({content:'<strong>MMA Waterford</strong><br>unit 50 waterford business park cork road waterford ireland<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>

						</div>
	
				</div>
			</div>
		</div>
	</div>
<!-- /container -->
	<div class="navbar navbar-inverse navbar-fixed-bottom" role="navigation"
		<div class="container">
			<div class="navbar-text pull-left">
				<p>Contact: 051 354 687</p>
				<p>Email: <a href="mailto:mmaw@gmail.com">mmaw@gmail.com</a>
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
