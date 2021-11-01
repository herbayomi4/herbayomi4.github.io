<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>cancer_immunotherapy</title>

	<link href="fonts.css" rel="stylesheet">
	<link href="css/index.css" rel="stylesheet">
	<link href="css/bootstrap.min.css" rel="stylesheet">
    
  </head>
  <body style="background:#d5d5d5;">
  <header>
	<nav class="navbar navbar-fixed-top navbar-inverse">
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
        <li class="active dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Cancer <span class="caret"></span><span class="sr-only">(current)</span></a>
		<ul class="dropdown-menu">
			<li><a href="home.php">What is Cancer?</a></li>
			<li role="separator" class="divider"></li>
			<li><a href="symptoms.php">Symptoms</a></li>
			<li role="separator" class="divider"></li>
			<li><a href="causes.php">Causes of Cancer</a></li>
			<li role="separator" class="divider"></li>
			<li><a href="diagnosis.php">Diagnosis</a></li>
			<li role="separator" class="divider"></li>
			<li><a href="treatments.php">Treatments</a></li>
		</ul>
		</li>
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
	<img src= "images/1.jpg" id= "img1" style= "width:100%; height:300px; margin-top:50px; margin-bottom:20px;" >
  </header>
  
	<main class="container">
	<div class="row"><div class="col-md-9">
	<div class="col-md-4 col-xs-12">
		<div class="thumbnail"><img src="images/cancer2.jpg"></div>
	</div>
	<div class="col-md-8 co-xs-12">
			<h2 id="topic">What is Cancer?</h2>
			<p class="text text-justify"><b><font style="font-size:16px;">OVER 100 Types OF CANCERS Affect Humans</font></b>. Cancers are a large family of diseases that involve abnormal cell growth with the potential to invade or spread to other parts of the body.
			They form a subset of neoplasms. A neoplasm or tumor is a group of cells that have undergone unregulated growth and 
			will often form a mass or lump, but may be distributed diffusely.<br>
			All tumor cells show the six hallmarks of cancer. These characteristics are required to produce a malignant tumor. 
			They include:</p></div>
			<ul>
			<li>Cell growth and division absent the proper signals</li>
			<li>Continuous growth and division even given contrary signals</li>
			<li>Avoidance of programmed cell death</li>
			<li>Limitless number of cell divisions</li>
			<li>Promoting blood vessel construction</li>
			<li>Invasion of tissue and formation of metastases</li></ul>
	
			<blockquote class="text text-justify">The progression from normal cells to cells that can form a detectable mass to outright cancer involves 
			multiple steps known as malignant progression</blockquote>			
		<div class="row">
		<div class="col-md-3">
		<div class= "thumbnail">
		<img src= "images/symptoms.png" alt= "">
		<div class= "caption">
			<h4><a href= "symptoms.php">...symptoms</a></h4>
		</div></div></div>
		<div class= "col-md-3">
		<div class= "thumbnail">
		<img src= "images/causes.png" alt= "">
		<div class= "caption">
			<h4><a href= "causes.php">...causes</a></h4>
		</div></div></div>
		<div class="col-md-3">
		<div class= "thumbnail">
		<img src= "images/diagnosis.jpg" alt= "">
		<div class= "caption">
			<h4><a href= "diagnosis.php">...diagnosis</a></h4>
		</div></div></div>
		<div class="col-md-3">
		<div class= "thumbnail">
		<img src= "images/treatment.jpg" alt= "">
		<div class= "caption">
		<h4><a href= "treatments.php">...treatments</a></h4>
		</div></div></div>
		</div>	
		</div>
		
		<section class="col-md-3 col-xs-12">
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
			<div class="thumbnail">
				<h3>News Update</h3>
				<ul class="list-group">
					<li class="list-group-item"><a href="https://www.cancer.gov/about-cancer/treatment/types/immunotherapy/bio-therapies-fact-sheet">Biological Therapies for Cancer</a></li>
					<li class="list-group-item"><a href="https://www.cancer.gov/about-cancer/treatment/research/car-t-cells">CAR T-Cell Therapy: Engineering Patients' Immune Cells to Treat Their Cancers</a></li>
					<li class="list-group-item"><a href="https://www.cancer.gov/news-events/press-releases/2013/PediatricImmunotherapy">Cancer Immunotherapy in Children: How does it differ from approaches in Adults</a></li>
				</ul>
			</div>
		</section>
		</div>

		</main>
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
		function validateSearch(){
			var search=document.forms["searchform"]["search"].value;
			if(search==null || search==""){
				return false;
			}
		}

    </script>
	
	
  </body>
</html>