<?php require '/srv/http/TEMPLATES/food-header.php';?>
<?php require '/srv/http/TEMPLATES/navbar.php'; ?>
<div class="container">
<div id="myCarousel" class="carousel slide" data-ride="carousel">
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
        <img class="carousel-item" src="/RESOURCES/foodPics/etonMessProfitorollesCheese.jpg">
      </div>

      <div class="item">
        <img class="carousel-item" src="/RESOURCES/foodPics/operaSorbetCoulis.JPG">
      </div>
    
      <div class="item">
        <img class="carousel-item" src="/RESOURCES/foodPics/leanaCake.JPG">
      </div>

      <div class="item">
        <img class="carousel-item" src="/RESOURCES/foodPics/LemonMeringuePie.JPG">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
      <!--___________________Page CONTENT__________________________________ -->
      <div class="row">
          <div class="col-md-4">
	<div class="panel panel-default">
	<div class="panel-heading">
	<a class="title" href="#"><h3>Recipes</h3></a>
	</div>
      <p>
      </p>
    </div>
   </div>

    <div class="col-md-4">
	<div class="panel panel-default">
	<div class="panel-heading">
	<a class="title" href="#"><h3>Techniques</h3></a>
	</div>
      <p>
      </p>
    </div>
   </div>

    <div class="col-md-4">
	<div class="panel panel-default">
	<div class="panel-heading">
	<a class="title" href="#"><h3>Food Science</h3></a>
	</div>
      <p></p>
    </div>
   </div>

      </div>
      <!--___________________ENDOF Page CONTENT____________________________ -->
</div>
</div>  
<?php require '/srv/http/TEMPLATES/footer.php'; ?>