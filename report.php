<?php
require 'connection.php';

if(isset($_POST['reportbtn'])){
$fullName=$_POST['fullname'];
$phoneNumber=$_POST['phoneNumber'];
$drugAbused=$_POST['drugAbused'];
$location=$_POST['location'];
$gender=$_POST['gender'];

$sql="INSERT INTO report_abuse (name,phone,drug,location,gender)
VALUES ('$fullName','$phoneNumber','$drugAbused','$location','$gender')";

if (!mysqli_query($connect,$sql)) {
	$message='Enrollment failed';
	$label='text-danger';

}else{
	$message= 'Enrolled successfully';
	$label='text-success';
}
}

?>
<!DOCTYPE html>
<html>
<head>
		<!-- remove -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<!-- remove -->
	<title>Report Abuse</title>
	<meta  charset="utf-8">
	<link rel="icon" type="image/png" href="Styles/image/facon.png">
	<meta name="viewport" content="width=device-width , initial-scale=1">
	<link rel="stylesheet" type="text/css" href="Styles/bootStrap/css/bootstrap.min.css">
	<link rel="stylesheet"  type="text/css" href="Styles/css/fixed.css">
	<link rel="stylesheet"  type="text/css" href="Styles/css/about.css">
	<link rel="stylesheet"  type="text/css" href="Styles/css/navigationAndFooter.css">
	<link rel="stylesheet"  type="text/css" href="Styles/css/imageSlider.css">
	<link rel="stylesheet" type="text/css" href="icons/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="Styles/css/forms.css">
</head>
<body>

<!-- start home section -->
			<div id="home">

				<!-- Navigation bar -->
				<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
					<a class="navbar-brand" href="#">
						<!-- image logo -->
						<img src="Styles/image/logo1.gif"/>
					</a>

						<!-- button toggler for small screen devices -->
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
							<span class="navbar-toggler-icon"></span>
						</button>
						<!-- end of button toggler -->

						<!-- navigation links  -->
						<div class="collapse navbar-collapse" id="navbarResponsive">
							<ul class="navbar-nav m-auto">
								<li class="nav-item " >
									<a class="nav-link " href="index.php">Home</a>
								</li>

								<li class="nav-item">
										<a class="nav-link active" href="report.php">Report Abuse</a>
								</li>

								<li class="nav-item">
									<a class="nav-link" href="enrol.php">Enrol</a>
								</li>

							<li class="nav-item">
									<a class="nav-link" href="about.php">About</a>
							</li>
							<li class="nav-item">
									<a class="nav-link" href="moreondrugs.php">More On Drugs</a>
							</li>

									<li class="nav-item">
								<a class="nav-link link1 hide" href="moreondrugs.php#Founders">Causes of Drug Abuse</a>
							</li>

							<li class="nav-item">
								<a class="nav-link link1 hide" href="moreondrugs.php#psychoDiv">Psychological effects</a>
							</li>

							<li class="nav-item">
								<a class="nav-link link1 hide" href="moreondrugs.php#effect">Physical Effects</a>
							</li>

							<li class="nav-item">
								<a class="nav-link  link1 hide" href="moreondrugs.php#effect"> Behavioral Effects</a>
							</li>
							<li class="nav-item">
								<a class="nav-link link1 hide" href="moreondrugs.php#effect"> Effects on Unborn</a>
							</li>
							<li class="nav-item">
								<a class="nav-link link1 hide" href="moreondrugs.php#Location"> Health Effects</a>
							</li>


							</ul>
						</div>
						<!-- end navigation links -->

				</nav>
				<!-- end navigation bar -->

<!--Second Navigation bar -->
				<nav class="navbar navbar1 navbar-expand-md navbar-dark bg-dark fixed-top">
					<a class="navbar-brand" href="#">
						<!-- image logo -->
						<!-- <img src="logo1.gif"/> -->
					</a>

						<!-- button toggler for small screen devices -->
					<button class="navbar-toggler mr-auto" type="button" data-toggle="collapse" data-target="#navbarResponsive1">
							<span class="navbar-toggler-icon" style="background-color: black !important;"></span>
						</button>
						<!-- end of button toggler -->

						<!-- navigation links  -->
						<div class="collapse navbar-collapse" id="navbarResponsive1">
							<ul class="navbar-nav m-auto">
								
							<li class="nav-item">
								<a class="nav-link link1" href="moreondrugs.php#Founders">Causes of Drug Abuse</a>
							</li>

							<li class="nav-item">
								<a class="nav-link link1" href="moreondrugs.php#psychoDiv">Psychological effects</a>
							</li>

							<li class="nav-item">
								<a class="nav-link link1" href="moreondrugs.php#effect">Physical Effects</a>
							</li>

							<li class="nav-item">
								<a class="nav-link  link1" href="moreondrugs.php#effect"> Behavioral Effects</a>
							</li>
							<li class="nav-item">
								<a class="nav-link link1" href="moreondrugs.php#effect"> Effects on Unborn</a>
							</li>
							<li class="nav-item">
								<a class="nav-link link1" href="moreondrugs.php#Location"> Health Effects</a>
							</li>

							</ul>
						</div>
						<!-- end navigation links -->

				</nav>
				<!-- end of second navigation bar -->
</div>
<!-- end of home -->

<!--start of report abuse form -->
<div class="col-12 top-margin" style="margin-top: 9%; padding-bottom: 5%">
    <!-- start enrol form -->
    <form action="report.php" method="post" style="margin: auto; width: 50%;" 
    class="main-form needs-validation" >
        <h1 class="text-center">Report Abuse</h1>
        <div class="heading-underline"></div>
		<div class="<?php if(isset($label)) {echo $label;} ?>"><?php if(isset($message)) {echo $message;} ?></div>
      <div class="form-group">
                    <label for="fullname">Full Names</label>
                    <input type="text" name="fullname" class="form-control" required>
                    <div class="invalid-feedback">invalid input</div>
        </div>

        <div class="form-group">
            <label for="phoneNumber">Phone Number</label>
            <input type="number" name="phoneNumber" class="form-control" required>
        </div>

          <div class="form-group">
            <label for="drugAbused">Drug Abused</label>
            <input type="text" name="drugAbused" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="location">Location (County)</label>
            <input type="text" name="location" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="gender">Gender</label>
            <select name="gender" id="gender" class="form-control" required>
                <option value="male">Male</option>
                <option value="female">Female</option>
            </select>
        </div>

        <button type="submit" name="reportbtn" class="btn btn-primary">Submit</button>
    </form>
    <!-- end report form -->
</div>
<!--end of report abuse form-->


	<!-- start Founders section -->
	  <div id="Founders" class="offset">

			<!--  start jumbotorn -->
			<div class="jumbotron">
					<!-- start the row -->
				<div class="row text-center">

					<div class="col-12 text-center justify-content-center">
						<h3 class="heading" style="margin-top: 35px;"> Report </h3>
					<div class="heading-underline "></div>
					</div>

          <div class="col-12 founder">
           
               
                 <p>You must understand alcohol or drug addiction and their causes before you can overcome them. The factors that lead to substance abuse and addiction are different for each person. We explain how drugs affect your body, the reasons people turn to them and how to recover from alcoholism and other substance use disorders.</p>
                
                <button href="enrol.html" class="btn btn-outline-dark btn-lg" >Get Help Now </button>
              
            </div>
</div>
			</div>
			<!-- end jumbotron -->
	 </div>
	  <!-- end Founders section -->




<!-- start of contact -->
<div id="contact" class="offset">
<!-- start of footer -->
<footer>
<div class="row justify-content-center">

<div class="col-md-5 text-center">
	
	<img src="Styles/image/logo1.gif">
	<p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
<h3 class="ml-auto" style="color: black; font-weight: 700;">Quick Links</h3>

	<div class="row text-center">
		
		<div class="col-md-4 mr-auto">
			<h4></h4>
			<a href="about.php" class="footLink">Who are we</a><br>
               <a href="moreondrugs.php#Founders">Recreational use abuse</a><br>
               <a href="moreondrugs.php#Location">General Health Effects</a><br>
              
		</div>

      <div class="col-md-4 mr-auto">
			<a href="enrol.php" class="footLink">Where to enrol</a><br>
				 <a href="report.php" class="footLink">How to report</a><br>
				  <a href="moreondrugs.php#effect">Effects on unborn</a><br>
		</div>

		<div class="col-md-4">
				<strong>Contact</strong>
		<p>9876546789<br> <a href="mailto:soberkenya@info.com">soberkenya@info.com</a></p>

		<!--social media fontawesome icons and links  -->
	<a href="#" target="-blank"> <i class="fab fa-instagram"></i> </a>
	<a href="#" target="-blank"> <i class="fab fa-twitter-square"></i> </a>
	<a href="#" target="-blank"> <i class="fab fa-facebook-square"></i> </a>
	<!--social media fontawesome icons and links  -->

		</div>

		
		
	</div>
<!-- end row  -->

</div>
<!-- end col-md-5 -->

<hr class="socket">
&copy; Sober Kenya. 2019

</div>

</footer>
<!-- end of footer -->

</div>
<!-- end of contacts -->

<!-- Scirpt source files -->
	<scStyles/bootStrap/js/jquery-3.3.1.slim.min.js"></script>
	<scStyles/bootStrap/js/popper.min.js"></script>
	<scStyles/bootStrap/js/bootstrap.min.js"></script>
	<scStyles/js/activeNavabar.js"></script>
<!-- end of script source files -->

<!-- remove -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<!-- remove -->

</body>
</html>