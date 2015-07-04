<?php require '/srv/http/TEMPLATES/dev-header.php';?>
<?php require '/srv/http/TEMPLATES/navbar.php'; ?>

<div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="6000">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img class="carousel-item img-responsive" src="/RESOURCES/devPics/carousel/evil-tuxGreen.jpg">
      </div>
    
      <div class="item">
        <img class="carousel-item img-responsive" src="/RESOURCES/devPics/JPCH/ARC/screen1.png">
      </div>

		 <div class="item">
        <img class="carousel-item img-responsive" src="/RESOURCES/devPics/JPCH/ARDrone/ARDrone.jpg">
      </div>

      <div class="item">
        <img class="carousel-item img-responsive" src="/RESOURCES/devPics/JPCH/ARC/screen3.png">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"> </span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

<div class="col-sm-12">
			<div class="panel panel-default transparent">
				<div class="panel-heading"><h1>Development Projects</h1></div>
				<div class="panel-body">

					<div class="media">
   					<div class="media-left media-top">
      					<a href="/CONTENT/dev/JPCH/ARC/dev-ARC-1.php">
         					<img class="media-object" src="/RESOURCES/devPics/JPCH/ARC/arc_logo.png" alt="">
         					</img>
      					</a>
   					</div>
   					<div class="media-body">
      					<h4 class="media-heading"><a href="/CONTENT/dev/JPCH/ARC/dev-ARC-1.php">A.R.C.</a></h4>
      						<p>Brunel second year project to create an augmented reality application using android </p>
   					</div>
					</div>

					<div class="media">
   						<div class="media-left media-top">
    							<a href="/CONTENT/dev/BeSeen/dev-bs-egaCalc1.php">
					        		<img class="media-object" src="/RESOURCES/devPics/BeSeen/egaCalc/logo.jpg" alt="">
      					   	</img>
						      </a>
					   	</div>
						   <div class="media-body">
						      <h4 class="media-heading"><a href="/CONTENT/dev/BeSeen/dev-bs-egaCalc1.php">Economic Growth Accelerator calculator</a></h4>
						      <p>Economic Growth Accelerator calculator, made for BeSeen, a digital marketing and web design company in beaconsfield</p>
						   </div>
					</div>

					<div class="media">
					   <div class="media-left media-top">
					      <a href="/CONTENT/dev/JPCH/ARDrone/arDrone-1.php">
					         <img class="media-object" src="/RESOURCES/devPics/JPCH/ARDrone/ARDrone.jpg" alt="">
					         </img>
					      </a>
					   </div>
					   <div class="media-body">
					      <h4 class="media-heading"><a href=" /CONTENT/dev/JPCH/ARDrone/arDrone-1.php ">Drone Hackathon</a></h4>
					      <p>The code that was used to win the Brunel 2015 Drone-a-thon</p>
					   </div>
					</div>

				</div>
			</div>
		</div>
<?php require '/srv/http/TEMPLATES/footer.php'; ?>