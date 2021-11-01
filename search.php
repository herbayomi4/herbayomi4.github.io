<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>cancer_immunotherapy_about</title>

	<link href="fonts.css" rel="stylesheet">
	<link href="css/index.css" rel="stylesheet">
	<link href="css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body style="background:#d5d5d5;">
	<header>
	<nav class="navbar navbar-static-top navbar-inverse">
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
	  <a class="navbar-brand" href="home.php"><img src="images/download.jpg" style="height:35px; width:70px; margin-top:none;"></a> 
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="home.php">Cancer</a></li>
		<li><a href="immunotherapy.html">Immunotherapy</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="contact.html">Contact</a></li>
            <li><a href="news.html">News & Updates</a></li>
      </ul>
	  <form class="navbar-form navbar-right" method="get" action="search.php" name="searchform" onsubmit="return validateSearch()">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search" name="search">
        </div>
        <input type="submit" class="btn btn-default" value="Go">
      </form>
		</div>
		</div>
	</nav>
  </header>
  <main class="container-fluid"><div class="row">
	<div class="col-md-9 col-xs-12">
		<div class="alert alert-info">
<?php
		$user = "root";  
		$password = "";  
		$host = "localhost";  
		$dbase = "newsletter";  
		$table = "search";
		
		$search=$_GET['search'];
		$min_length=4;
		
		// Connection to DBase  
	mysql_connect($host, $user, $password) or die("Error connecting to database: ".mysql_error());
    
     
    mysql_select_db($dbase) or die(mysql_error());		
		if(strlen($search)>=$min_length){
		$search=htmlspecialchars($search);
		$search=mysql_real_escape_string($search);//prevents use of SQL injection
		$raw_results = mysql_query("SELECT * FROM $table
            WHERE (`title` LIKE '%".$search."%') OR (`text` LIKE '%".$search."%')") or die(mysql_error());
			if(mysql_num_rows($raw_results) > 0){ // if one or more rows are returned do following
             
				while($results = mysql_fetch_array($raw_results)){
					$x=array("Cancer","Symptoms","Causes","Diagnosis","Treatments","Immunotherapy","News and Updates");

						if($results['title']==$x[0]){
							echo '<p class="text text-justify alert alert-success">'.'Result(s) of your search <b>('.$search.')</b> can be found in <a href="home.php">What is Cancer</a></p>';
						}
						else if($results['title']==$x[1]){
							echo '<p class="text text-justify alert alert-success">'.'Result(s) of your search <b>('.$search.')</b> can be found in <a href="symptoms.php">Symptoms of Cancer</a></p>';
						}
						else if($results['title']==$x[2]){
							echo '<p class="text text-justify alert alert-success">'.'Result(s) of your search <b>('.$search.')</b> can be found in <a href="causes.php">Causes of Cancer</a></p>';
						}
						else if($results['title']==$x[3]){
							echo '<p class="text text-justify alert alert-success">'.'Result(s) of your search <b>('.$search.')</b> can be found in <a href="diagnosis.php">Diagnosis of Cancer</a></p>';								
						}
						else if($results['title']==$x[4]){
							echo '<p class="text text-justify alert alert-success">'.'Result(s) of your search <b>('.$search.')</b> can be found in <a href="treatments.php">Treatments of Cancer</a></p>';
						}
						else if($results['title']==$x[5]){
							echo '<p class="text text-justify alert alert-success">'.'Result(s) of your search <b>('.$search.')</b> can be found in <a href="immunotherapy.html">Immunotherapy</a></p>';
						}
						else if($results['title']==$x[6]){
							echo '<p class="text text-justify alert alert-success">'.'Result(s) of your search <b>('.$search.')</b> can be found in <a href="news.html">News and Updates</a></p>';
						}
				}
			}else{
				echo'<p class="text text-justify alert alert-danger">No Result Found!</p>';
			}	
		}else{
				echo'<p class="text text-justify alert alert-warning">Minimum length of character allowed for search is '.$min_length.'</p>';
		}
		
		
?>
	</div></div>
	<div class="col-md-3 col-xs-12">
			<div class="thumbnail">
				<h3>Join our community</h3>
				<div class="thumbnail">
				<p class="alert alert-info" role="alert">Have you read through our informative articles and you loved it? </p>
				<p class="text-justify">You can join our community and receive free emails on news, reviews 
				from World important cancer conferences and relevant updates on cancer treatments and research.</p> <p>Please fill the form below to join our community</p></div> 
				<p class="alert alert-danger" role="alert">NB: Our members will automatically receive our newsletters!</p>
				<form name="community" method="post" action="our_community.php" onsubmit="return validateForm()" >
					<input type="text" class="form-control" placeholder="First Name" name="first_name">
					<input type="text" class="form-control" placeholder="Last Name" name="last_name" >
					<input type="email" class="form-control" placeholder="Email" name="email" >
					<input type="submit" name="submit" value="Sign up">
				</form>
				
			</div>
	</div> 
	</div></main>
<footer class="site-footer">
		<div class="container"> 
		<p>For further enquries Please contact us via adeyemioluwaseun47@gmail.com</p>
			<div class="bottom-footer">
			<div class="row"><div class="col-md-7">
				<ul class="footer-nav">
						<li><a href="home.php">Cancer</a></li>
						<li><a href="immunotherapy.html">Immunotherapy</a></li>
						<li><a href="about.html">About</a></li>
						<li><a href="contact.html">Contact</a></li>
						<li><a href="news.html">News & Updates</a></li>
				</ul><p>This site was designed and built by AOSweb (+2349034582835, +234811467502)</p></div>
				<div class="col-md-5"><p>© Copyright Cancer_Immunnotherapy Tutors 2017.</p></div></div>
		
			</div></div>
		</footer>
  
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
		<script type="text/javascript">
	setInterval(imgChange, 1500);
		var imgs=["images/1.jpg", "images/2.jpg"];
		var i=0;

    	function imgChange() {
		var img=document.getElementById('img1');
		i++
		if(i>=imgs.length){
			i=0;
		}
		img.src=imgs[i];
}
		function validateForm() {
    var x = document.forms["community"]["first_name"].value;
	var y = document.forms["community"]["last_name"].value;
	var z = document.forms["community"]["email"].value;
    if ((x == null || x == "")&&(y == null || y == "")&&(z == null || z == "")) {
        return false;
    }
}

    </script>
	
	
  </body>
</html>