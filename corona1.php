<!DOCTYPE html>
<html>
<head>


	<title>covid-19</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Muli:wght@200;400&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
  <style>
  	*{
  		font-family: 'Muli', sans-serif;
  		font-size: 15px;
  	}
  	.img{
  		animation: rotation 8s infinite linear;
  	}
  	.corona-update{
  		height: 350px;
  	}

  	.corona img{
  		animation: gocorona 3s linear infinite;
  		width: 300px;
  		height: 300px;

  	}

  	@keyframes gocorona{
  		0%{transform: rotate(0);}
  		100%{transform: rotate(360deg);}
  	}
  	.flag{
  		width: 50px;
  		height: 50px;
  	}
  		.aboutus{

  background-color: #9FA8DA;
}

.fb-ic{
  color: #3742fa;
}

.gplus-ic{
  color: #c23616;
}

.li-ic{

  color: #3742fa;
}

.ins-ic{
  color: #b71540;
}

.pin-ic{
  color: #e84118;
}




  </style>
</head>
<body>


<nav class="navbar navbar-expand-lg navbar-light bg-light ">
	<div class="container">
  <a class="navbar-brand" href="#">Covid-19</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto pr-5 ">
      <li class="nav-item active pr-5">
        <a class="nav-link" href="corona.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item pr-5">
        <a class="nav-link" href="update.php">Corona-Update</a>
      </li>
      <li class="nav-item pr-5">
        <a class="nav-link" href="#">Symptone</a>
      </li>
      <li class="nav-item pr-5">
        <a class="nav-link" href="#">Prevention</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contactus</a>
      </li>
    </ul>
  </div>
</div>
</nav>
<div class="container-fluid bg-primary">
	<div class="row text-center">
	<div class="name w-100 h-100 col-lg-12 col-md-12 col-sm-12 justify-content-center align-items-center">
	<p class="pt-5" style="font-size: 150px">COR<span class="corona"><img class="img mb-5" src="images/corona.png"></span>NA</p>
	</div>
	</div>

</div>

			
				<div class="container-fluid pb-5 mt-5" id="c-update">


					<?php
              	$data = file_get_contents('https://api.covid19india.org/data.json');
                $coronalive=json_decode($data,true);

                $statecount= count($coronalive['statewise']);
                ?>

				<div class="mb-5 text-center">
					<h3 class="text-uppercase text-center">Covid-19 update</h3>
					<img src="images/indiaflag.png" id="flag">
					<hr class="w-25">
				</div>
				<div class="container-fluid">
					<div class="row text-center">
					<div class="col-lg-3 col-md-3 col-12 mt-5">
						<h1 class="count"><?php echo $coronalive['statewise'][0]['confirmed']?></h1>
						<p>Total Cases</p>
					</div>

					<div class="col-lg-3 col-md-3 col-12 mt-5">
						<h1 class="count"><?php echo $coronalive['statewise'][0]['active']?></h1>
						<p>Active Cases</p>
					</div>

					<div class="col-lg-3 col-md-3 col-12 mt-5">
						<h1 class="count"><?php echo $coronalive['statewise'][0]['recovered']?></h1>
						<p>Recovered</p>
					</div>

					<div class="col-lg-3 col-md-3 col-12 mt-5">
						<h1 class="count"><?php echo $coronalive['statewise'][0]['deaths']?></h1>
						<p>Death</p>
					</div>

						</div>
				</div>
				</div>


		<!--   live update end  -->	

			<div class="container-fluid pt-lg-5 pb-5 ">
				<div class="text-center pt-5">
					<h1>Coronavirus Symptons</h1>
					<hr class="w-25">
				</div>

				<div class="container">
					<div class="row">
						<div class="col-lg-4 col-md-4 col-12 mt-5">
							<figure class="text-center">
							<img src="images/cough.png" class="img-fluid" width="120" height="120">
						<figcaption class="mt-1">Cough</figcaption>
						</figure>
						</div>

						<div class="col-lg-4 col-md-4 col-12 mt-5">
							<figure class="text-center">
							<img src="images/nose.png" class="img-fluid" width="120" height="120">
						<figcaption class="mt-1">runny nose</figcaption>
						</figure>
						</div>

						<div class="col-lg-4 col-md-4 col-12 mt-5">
							<figure class="text-center">
							<img src="images/fever.png" class="img-fluid" width="120" height="120">
						<figcaption class="mt-1">Fever</figcaption>
						</figure>
						</div>

					</div>
				</div>
			</div>

			<div class="container-fluid pt-lg-5 pb-5">
				<div class="text-center pt-5">
					<h1>Coronavirus Prevention</h1>
					<hr class="w-25">
				</div>
				<div class="container">
					<div class="row">
						<div class="col-lg-4 col-md-4 col-12 mt-5">
							<figure class="text-center">
							<img src="images/face.png" class="img-fluid" width="120" height="120">
						<figcaption class="mt-1">Don't touch face</figcaption>
						</figure>
						</div>

						<div class="col-lg-4 col-md-4 col-12 mt-5">
							<figure class="text-center">
							<img src="images/handshake.png" class="img-fluid" width="120" height="120">
						<figcaption class="mt-1">Avoid handshake</figcaption>
						</figure>
						</div>

						<div class="col-lg-4 col-md-4 col-12 mt-5">
							<figure class="text-center">
							<img src="images/mask.png" class="img-fluid" width="120" height="120">
						<figcaption class="mt-1">Use mask</figcaption>
						</figure>
						</div>

						<div class="col-lg-4 col-md-4 col-12 mt-5">
							<figure class="text-center">
							<img src="images/social.png" class="img-fluid" width="120" height="120">
						<figcaption class="mt-1">Social distance</figcaption>
						</figure>
						</div>

						<div class="col-lg-4 col-md-4 col-12 mt-5">
							<figure class="text-center">
							<img src="images/stayhome.png" class="img-fluid" width="120" height="120">
						<figcaption class="mt-1">Stay Home</figcaption>
						</figure>
						</div>

						<div class="col-lg-4 col-md-4 col-12 mt-5">
							<figure class="text-center">
							<img src="images/wash.png" class="img-fluid" width="120" height="120">
						<figcaption class="mt-1">Wash Hand</figcaption>
						</figure>
						</div>


					</div>
				</div>
			</div>



			<div class="container pt-lg-5 pb-5 bg-light">
				<div class="text-center">
					<h1>Contact Us</h1>
					<hr class="w-25">
				</div>
				<form class="pt-5">
 				 <div class="row">
   						 <div class=" col-lg-6 col-md-6 col-sm-6 col-12">
     					 <input type="text" class="form-control" placeholder="First name">
    					</div>
  					  <div class="col-lg-6 col-md-6 col-sm-6 col-12">
     					 <input type="text" class="form-control" placeholder="Last name">
    						</div>

    						<div class="col-lg-6 col-md-6 col-sm-6 mt-3 col-12">
     					 <input type="text" class="form-control" placeholder="City">
    						</div>

    						<div class="col-lg-6 col-md-6 col-sm-6 mt-3 col-12">
     					 <input type="text" class="form-control" placeholder="State">
    						</div>
    						
    						<div class="col-lg-6 col-md-6 col-sm-6 mt-3">
    											<p>Have any symptone?</p>
    						    						<div class="form-check form-check-inline">
  								<input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
  									<label class="form-check-label" for="inlineCheckbox1">Cough</label>
								</div>

									<div class="form-check form-check-inline">
  									<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
 										 <label class="form-check-label" for="inlineCheckbox2">Fever</label>
									</div>


									<div class="form-check form-check-inline">
  									<input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
  									<label class="form-check-label" for="inlineCheckbox3">Runny nose</label>
								</div>

								<div class="form-check form-check-inline">
  									<input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
  									<label class="form-check-label" for="inlineCheckbox3">None</label>
								</div>
  				</div>
  				<div class="col-12 text-center">
  				<button type="button" class="btn btn-primary">Submit</button>
  				</div>
  				</div>

					</form>
			</div>

			<section class="aboutus">
  
  <div class="container">
    <div class="row">
      
      <div class="col-lg-12 col-md-10 text-center pt-5">
        <h3>Welcome To Our Website</h3>
        <h2>Do You Like It? Share This Page?</h2>
       </div>

     </div>
   </div>

       <!-- Footer -->
<footer class="page-footer font-small cyan darken-3">

  <!-- Footer Elements -->
  <div class="container text-center">

    <!-- Grid row-->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-12 pb-2 pt-4">
        <div class="mb-5 flex-center">

          <!-- Facebook -->
          <a class="fb-ic" href="#">
            <i class="fab fa-facebook-f fa-lg  mr-md-5 mr-3 fa-2x"> </i>
          </a>
          <!-- Twitter -->
          <a class="tw-ic" href="#">
            <i class="fab fa-twitter fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
          </a>
          <!-- Google +-->
          <a class="gplus-ic" href="#">
            <i class="fab fa-google-plus-g fa-lg  mr-md-5 mr-3 fa-2x"> </i>
          </a>
          <!--Linkedin -->
          <a class="li-ic" href="#">
            <i class="fab fa-linkedin-in fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
          </a>
          <!--Instagram-->
          <a class="ins-ic" href="#">
            <i class="fab fa-instagram fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
          </a>
          <!--Pinterest-->
          <a class="pin-ic" href="#">
            <i class="fab fa-pinterest fa-lg white-text fa-2x"> </i>
          </a>
        </div>
      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row-->

  </div>
  <!-- Footer Elements -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-2">© 2020 Copyright:
    <a>Sumit & Nilesh</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->
       
       


    

</section>
<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5ec909477422573c"></script>

  
</body>
</html>