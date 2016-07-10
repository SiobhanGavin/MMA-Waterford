<?php 
if(isset($_SESSION['myusername'])){
	echo('
	<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="index.php">MMA Waterford</a>
		</div>
        <div id="navbar" class="navbar-collapse collapse">
			<ul class="nav navbar-nav">
			<li ');?><?php if ($page == "home") {echo('class="active"');} ?>
			<?php echo('><a href="Index.php">Home</a></li>
			<li ');?><?php if ($page == "about") {echo('class="active"');} ?>
			<?php echo('><a href="About.php">About</a></li>
			<li ');?><?php if ($page == "classes") {echo('class="active"');} ?>
			<?php echo('><a href="Classes.php">Classes</a></li>
			<li ');?><?php if ($page == "contact") {echo('class="active"');} ?>
			<?php echo('><a href="Contact.php">Contact</a></li>
			<li ');?><?php if ($page == "bookings") {echo('class="active"');} ?>
			<?php echo('><a href="Bookings.php">Bookings</a></li>
			<li ');?><?php if ($page == "logout") {echo('class="active"');} ?>
			<?php echo('><a href="logout.php">Log Out</a></li>	
			 </ul>
        </div><!--/.nav-collapse -->
		');
} 
else{
	echo('
	<!-- Fixed navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">MMA Waterford</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
		  	    <li ');?><?php if ($page == "home") {echo('class="active"');} ?>
			<?php echo('><a href="Index.php">Home</a></li>
			<li ');?><?php if ($page == "about") {echo('class="active"');} ?>
			<?php echo('><a href="About.php">About</a></li>
			<li ');?><?php if ($page == "classes") {echo('class="active"');} ?>
			<?php echo('><a href="Classes.php">Classes</a></li>
			<li ');?><?php if ($page == "contact") {echo('class="active"');} ?>
			<?php echo('><a href="Contact.php">Contact</a></li>
			<li ');?><?php if ($page == "bookings") {echo('class="active"');} ?>
			<?php echo('><a href="Bookings.php">Bookings</a></li>
			<li ');?><?php if ($page == "login") {echo('class="active"');} ?>
			<?php echo('><a href="login.php">Log In</a></li>
			<li ');?><?php if ($page == "register") {echo('class="active"');} ?>
			<?php echo('><a href="register.php">Register</a></li>
          </ul>
        </div><!--/.nav-collapse -->
		');
}

?>