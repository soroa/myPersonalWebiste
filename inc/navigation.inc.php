
<?php 
 require ("./db_mng/db.php");
 $db = new db(); 
$conn =$db->connect($db->config);

$posts= $db->get('blog_posts', $conn, 3); 


?>


<nav class="navbar navbar-default">
		<div class="container-fluid">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand" id="logo" href="./home.view.php">AS</a>
		    </div>

		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      <ul class="nav navbar-nav navbar-center">

		      <li class="dropdown">
		          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">ABOUT ME <span class="caret"></span></a>
		          <ul class="dropdown-menu">
		            <li><a href="#">BIOGRAPHY</a></li>
		            <li><a href="./timeline.php">TIMELINE</a></li>
		            <li><a href="#">CV</a></li>
		            
		          </ul>
		        </li>
		        <li><a href="./blog.php">BLOG</a></li>
		        <li><a href="#">TRAVELS</a></li>
		        <li><a href="#">IMPOSSIBILE LIST</a></li>
		        <li><a href="#">CONTACT</a></li>
		   
		   
			      </ul>
			 </div><!-- /.navbar-collapse -->
	
	 </div><!-- /.container-fluid -->

</nav>