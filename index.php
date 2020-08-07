<?php


if ($_POST['submit']) {
	
	if (!$_POST['name']) {
		$error="<br/>- Please enter your name";
	}
	
	if (!$_POST['email']) {
		$error.="<br/>- Please enter your email";
	}
	
	if (!$_POST['message']) {
		$error.="<br/>- Please enter a message";
	}
	
	if (!$_POST['check']) {
		$error.="<br/>- Please confirm you are human";
	}
	
	if ($error) {
		$results='<div class="alert alert-danger" role="alert"><strong>Sorry, there is an error.</strong> Please correct the following: '.$error.' </div';
	} else {
		mail("creativelitho@sbcglobal.net", "Contact message", "Name: ".$_POST['name'].
			"Email: ".$_POST['email'].
			"Message: ".$_POST['message']);
		{
		$results='<div class="alert alert-success" role="alert"><stron>Thank you! We will get back in touch with you shortly.</div>';	
		}
	}
}
		   

?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
    
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<link rel="stylesheet" type="text/css" href="css/styles.css">
    
<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
<script src="https://kit.fontawesome.com/c5bb0e9542.js" crossorigin="anonymous"></script>
    
<link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700;900&display=swap" rel="stylesheet">
    
<link href="https://fonts.googleapis.com/css2?family=Red+Rose:wght@400;700&display=swap" rel="stylesheet">
    
<title>Creative Litho</title>
</head>

<body>
    
<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
  <div class="container">
      <a class="navbar-brand" href="index.php">
          <img src="img/bullet.png" alt="rose icon" style="width:70px; height:auto;">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto"></ul>
          
          <ul class="navbar-nav navbar-right">
              <li class="nav-item">
                <a class="nav-link" href="#about">ABOUT <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#products">PRODUCTS</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#contact"><i class="fas fa-envelope"></i></a>
              </li>
          </ul>
      </div>
  </div>
</nav>
    
<div class="container" id="top">
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
     
    
      <div class="carousel-indicators">
        <li data-target="#demo" data-slide-to="0" class="active"></li>
        <li data-target="#demo" data-slide-to="1"></li>
        <li data-target="#demo" data-slide-to="2"></li>
      </div>
        
      <div class="carousel-inner">
        <div class="carousel-item" data-interval="5000">
          <img src="img/cl_slide_one.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item active" data-interval="5000">
          <img src="img/cl_slide_two.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item" data-interval="5000">
          <img src="img/cl_slide_three.jpg" class="d-block w-100" alt="...">
        </div>
      </div>
        
      <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
        
      <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    
    <div id="story">
        <h1 class="story" id="about">OUR STORY</h1>
        <p>
            <span class="name">Creative Litho Inc.</span> is a full service, locally owned and family operated union printing and graphics company. Located in St. Louis's historic Cherokee Street business district we offer our clients a wide variety of copy, printing, design and bindery services. We welcome all types of work both big and small. Come by or give us a call today.
        </p>
        
        <p class="address_one">
            3021 Cherokee St. • St. Louis, MO 63118
        </p>
        
        <p class="hours">
            Monday - Friday: 8:00 AM - 4:00 PM
        </p>
        
        <p>
            314.772.6779
        </p>
        
    </div>
    <div class="container">
        <div class="row">
            <h1 class="story m-0" id="products">PRODUCTS &amp; SERVICES</h1>
            <div class="col-md-4 m-0 pt-4 pb-2 one">
                <ul>
                    <li>Business Cards</li>
                    <li>Letterheads</li>
                    <li>Business Envelopes</li>
                    <li>Window Envelopes</li>
                    <li>Business Repley Envelopes</li>
                    <li>Check Envelopes</li>
                    <li>Statements</li>
                    <li>NCR Forms</li>
                </ul>
            </div>
            <div class="col-md-4 m-0 pt-4 pb-2 two">
                <ul>
                    <li>Brochures</li>
                    <li>Menus</li>
                    <li>Guest Checks</li>
                    <li>Invoices</li>
                    <li>Continuous Forms</li>
                    <li>Invitations</li>
                    <li>Greeting Cards</li>
                    <li>Labels</li>
                </ul>
            </div>
            <div class="col-md-4 m-0 pt-4 pb-2 three">
                <ul>
                    <li>Lapel Stickers</li>
                    <li>Digital Color Copies</li>
                    <li>Flyers</li>
                    <li>Banners</li>
                    <li>Buttons</li>
                    <li>Shipping Labels</li>
                    <li>Donation Envelopes</li>
                    <li>Bindery</li>
                </ul>
            </div>
            <div class="col-md-4 m-0 pt-4 pb-2 four">
                <ul>
                    <li>Bumper Stickers</li>
                    <li>Newsletters</li>
                    <li>Publications</li>
                    <li>Contract Books</li>
                    <li>Raffle Tickets</li>
                    <li>Booklets</li>
                    <li>Business Reply Cards</li>
                    <li>Postcards</li>
                </ul>
            </div>
            <div class="col-md-4 m-0 pt-4 pb-2 five">
                <ul>
                    <li>Tabs</li>
                    <li>Report Covers</li>
                    <li>Proposal Binders</li>
                    <li>Typesetting</li>
                    <li>Direct Mailing</li>
                    <li>Political Pieces</li>
                    <li>Yard Signs</li>
                    <li>Posters</li>
                </ul>
            </div>
            <div class="col-md-4 m-0 pt-4 pb-2 six">
                <ul>
                    <li>Work Orders</li>
                    <li>Table Tents</li>
                    <li>Gift Certificates</li>
                    <li>Purchase Orders</li>
                    <li>Name Tags</li>
                    <li>Calenders</li>
                    <li>Note Pads</li>
                    <li>Graphic Design</li>
                </ul>
            </div>
            
            <div class="col-md-3 mt-4 mb-4">
                <div>
                    <img class="img-fluid img-thumbnail hvr-grow" src="img/cl5art.jpg" alt="5 cent copies">
                </div>
            </div>
            <div class="col-md-3 mt-4 mb-4">
                <div>
                    <img class="img-fluid img-thumbnail hvr-grow" src="img/clcolorart.jpg" alt="5 cent copies">
                </div>
            </div>
            <div class="col-md-3 mt-4 mb-4">
                <div>
                    <img class="img-fluid img-thumbnail hvr-grow" src="img/clsaveart.jpg" alt="5 cent copies">
                </div>
            </div>
            <div class="col-md-3 mt-4 mb-4">
                <div>
                    <img class="img-fluid img-thumbnail hvr-grow" src="img/clcalleart.jpg" alt="5 cent copies">
                </div>
            </div>
        </div>
        
        <div class="container">
            <section id="contact">
		
			    <div class="row">
				
				    <div class="col-md-12 mb-lg-4 text-center">
					
					    <?php echo $results;?>
					
						<h2 class="text-center"><strong>CONTACT US</strong></h2>
					
					    <form method="post" role="form">
						
						    <div class="form-group">
							    <input type="text" name="name" class="form-control" placeholder="Your Name" value="<?php echo $_POST['name']; ?>">
						    </div>
						
						    <div class="form-group">
							    <input type="email" name="email" class="form-control" placeholder="Your Email" value="<?php echo $_POST['email']; ?>">
						    </div>
						
						    <div class="form-group">
							    <textarea name="message" rows="8" class="form-control" placeholder="Message..."><?php echo $_POST['message']; ?></textarea>
						    </div>
						
						    <div class="checkbox">
							    <label>
								    <input type="checkbox" name="check"> I am human
							    </label>
						    </div>
						
						    <div align="center">
							    <input type="submit" name="submit" class="btn btn-default" value="send message"/>
						    </div>
						
					    </form>
						  
				    </div>
			    </div>
	        </section>
            
            <div>
                <h3>
                    <p class="address m-0 text-center mb-3">3021 Cherokee St. | St. Louis, MO 63118</p>
                    <p class="phone mb-1">314.772.6779</p>
                </h3>
            </div>
            
        </div>
    </div>
</div>
    
<div class="container text-center">
    <img class="social" src="img/ccards.jpg" width="220px" height="auto" alt="credit cards"/>
    <h4 class="mt-3 mb-3"><a href="#top"><i class="fas fa-arrow-circle-up"></i></a></h4>
</div>
    
<div class="footer pt-5 pb-5">
    <div class="container">
    <h3>3021 Cherokee Street &nbsp;| &nbsp;Saint Louis, MO 63118 &nbsp;| &nbsp;314.772.6779</h3>
    <h3>© Copyright 2020, Creative Litho Inc. &nbsp;All Rights Reserved.</h3>
    <h4 class="sonic">Web &nbsp;Design &nbsp;by &nbsp;Sonicpress &nbsp;| &nbsp;314.934.0168</h4>
    </div>
</div>
    
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    
</body>
</html>
