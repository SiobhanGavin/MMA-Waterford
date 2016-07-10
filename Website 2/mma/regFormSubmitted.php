<?php $page = 'register'; ?>

<?php
session_start();
?>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
	
	<title>MMA Waterford - Registered</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap theme -->
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/theme.css" rel="stylesheet">
	
	<!-- Custom styles for form -->
    <link href="query-form.css" rel="stylesheet">

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
			<div class="container text-center">
			<div class="page-header">
						<h1>You are now registered</h1>
						</div>
				<div class="row" >
					<div class="col-sm-8" >
					
					<?php include 'connect.php';
		$sql= "INSERT INTO members (Username, FirstName, LastName, Email, P_Word)
		VALUES ('$_REQUEST[inputUsername]','$_REQUEST[inputFirstName]',
		'$_REQUEST[inputLastName]','$_REQUEST[inputEmail]',
		'$_REQUEST[inputPassword]')";
		
		if ($conn->query($sql) === TRUE) {
			echo "You can now <a href='login.php'>Log in</a>.";
		} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
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
	 
	</div>
	  
    </div>