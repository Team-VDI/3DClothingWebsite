<!DOCTYPE html>
<meta charset="UTF-8">
<html>
  <head>
    <meta name="viewport" content="initial-scale=1,maximum-scale=1,user-scalable=no"/>
    <link rel="preconnect" href="https://fonts.gstatic.com"> 
<link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Mono:wght@300&display=swap" rel="stylesheet">
    <!--Script for Submit form-->
    <script src="script/submit_script.js" type="text/javascript"> </script>
    <script src="script/jquery-1.8.1.min.js" type="text/javascript"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js">
    </script>
   </head>
  <body>
  <!--NavigationBar-->
    <section id="nav-bar">
    <nav class="navbar navbar-expand-lg navbar-light">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span></button>
      <div class="collapse navbar-collapse" id="navbarNav"> 
        <ul class="navbar-nav">
        <li class="nav-item">  
         <a class="nav-link" href="#top">   HOME    </a></li>
       <li class="nav-item">  
         <a class="nav-link" href="#about">   ABOUT US    </a></li>
       <li class="nav-item">
         <a class="nav-link" href="#gallery">   GALLERY    </a></li>
        <li class="nav-item">
         <a class="nav-link" href="#contact">   CONTACT US   </a></li>
        <li class="nav-item">
        </div>
        </div>
    <!-- LOG IN and SIGN UP-->
    <div class="navbar-nav ml-auto action-buttons">
			<div class="nav-item dropdown"> 
				<a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle mr-4">LOGIN</a>
          <div class="dropdown-menu action-form">  
					<form action="validation.php" method="post">
          <p class="hint-text">Insert username and password!</p>
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Username" name = "username" id = "username" required="required">
						</div>
						<div class="form-group">
							<input type="password" class="form-control" placeholder="Password" name = "password" id = "password" required="required">
						</div>
						<input type="submit" class="btn btn-primary btn-block" value="Login">
					</form>
         </div>
			</div>
			<div class="nav-item dropdown">
				<a href="#" data-toggle="dropdown" class="btn btn-primary dropdown-toggle sign-up-btn">SIGN UP</a>
                <div class="dropdown-menu action-form">
					<form action="registration.php" method="post">
						<p class="hint-text">Fill in this form to create your account!</p>
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Username" name="username" id = "username" required="required">
						</div>
						<div class="form-group">
							<input type="password" class="form-control" placeholder="Password" name="password" id = "password" required="required">
						</div>
						<input type="submit" class="btn btn-primary btn-block" value="Sign up">
					</form>
				</div>
			</div>
    </div>
	</div>
  </div>
</nav>
</section>   
  <!---Slider--->
  <section id="slider">
  <div id="slider"></div>
    <div id="headerSlider" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#headerSlider" data-slide-to="0" class="active"></li>
      <li data-target="#headerSlider" data-slide-to="1"></li>
      <li data-target="#headerSlider" data-slide-to="2"></li>
    </ol>
      <div class="carousel-inner">
      <div class="carousel-item active">
          <img src="img/Banner1.jpg" class="d-block img-fluid">
      <div class="carousel-caption">
      </div>
      </div>
      <div class="carousel-item">
          <img src="img/Banner2.jpg" class="d-block img-fluid">
      </div>
      <div class="carousel-caption">
      </div>
      <div class="carousel-item">
          <img src="img/Banner3.jpg" class="d-block img-fluid">
      </div>
      <div class="carousel-caption">
      </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
      </a>
      </div> 
  </section>
<!-----About Us----->
    <section id="about">
      <div class="container">
        <h1>ABOUT US</h1>
        <div class="row">
        <div class="about-content">
          Ever wondered how the clothes you see in online stores look on you? We sure did! That's why we decided to use our IT expertise to create
a new web platform from which YOU can view and download different articles of clothing in a 3D format! In addition with our mobile app you can scan your own 3D model and apply the clothing you see in our catalogue onto YOU! <br><br>

We're a two person powerhouse developer team from Latvia with a passion for computer vision and neural networks! We aim to bring the 3D world into your life!
          <br><br><br><br><br><br>
          </div>
        </div>
      </div>
    </section>
 <!-----Gallery----->
 <section id="gallery">
   <div class="container">
    <h1>GALLERY</h1>
    <div class="row">
    <div class="col-md-4">
      <div class="thumbnail">
          <img src="img/1.jpg" alt="1" style="width:100%">
          <div class="caption">
            <p>   </p>
          </div>
        </a>
      </div>
    </div>
    <div class="col-md-4">
      <div class="thumbnail">
          <img src="img/2.png" alt="2" style="width:100%">
          <div class="caption">
          <p> 'Sign Up' to download 3D models!</p>
          </div>
        </a>
      </div>
    </div>
    <div class="col-md-4">
      <div class="thumbnail">
          <img src="img/3.png" alt="3" style="width:100%">
          <div class="caption">
            <p>   </p>
          </div>
        </a>
      </div>
    </div>
  </div>
</div>
  <div class="container">
  <div class="row">
    <div class="col-md-4">
      <div class="thumbnail">
          <img src="img/4.png" alt="4" style="width:100%">
          <div class="caption">
          <p>   </p>
          </div>
        </a>
      </div>
    </div>
    <div class="col-md-4">
      <div class="thumbnail">
          <img src="img/5.png" alt="5" style="width:100%">
          <div class="caption">
          <p> 'Sign Up' to download 3D models!</p>
          </div>
        </a>
      </div>
    </div>
    <div class="col-md-4">
      <div class="thumbnail">
          <img src="img/6.png" alt="6" style="width:100%">
          <div class="caption">
            <p>   </p>
          </div>
        </a>
        </div>
        </div>
       </div>
      </div>
     </div>
    </div>
   </div>
 </section>
  <!-----Contact Us----->
  <section id="contact">
    <div class="container">
      <h1>CONTACT US</h1>
       <div class="contact-content">
        <div class="col-md-auto">
        <p1> Anete Dowling </p1><br><br>
        <p>Tel.: +371 27551386<br>
        E-mail: anete.dowling@gmail.com</p><br>

        <p1> Evija Cibuļska </p1><br><br>
        <p>Tel.: +371 26634200<br>
        E-mail: evija.cibulska@gmail.com</p><br>
        </div>
      </div>
      </div>
    </div>
  </section>
  <!-----Footer----->
  <section id="footer">
    <div class="container text-center">
      <p>Copyright © 2020 VDI.</p>
    </div>
  </section>
  <!-----Footer End----->
  <script src="js/smooth-scroll.js"></script>
  <script>
    var scroll = new SmoothScroll('a[href*="#"]');
  </script>
</body>
</html>

