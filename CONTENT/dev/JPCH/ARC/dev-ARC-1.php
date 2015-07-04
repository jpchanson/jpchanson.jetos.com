<?php require '/srv/http/TEMPLATES/dev-header.php';?>
<?php require '/srv/http/TEMPLATES/navbar.php'; ?>

<div class="col-md-1"></div>

<div class="col-md-10">
	<div class="panel panel-default">
	   <div class="panel-heading"><!-- _____________PANEL HEADING______________ -->
	      <a class="title"><h2>A.R.C. - Android Web Development</h2></a>
         <p>A description of the android application, its design plus screenshots and code sample showing how the app connected to the server</p>
         <a href="https://github.com/jpchanson/A.R.C./tree/CurrentState" class="btn btn-primary" target="_blank">A.R.C. Applicaion - SourceCode</a>
         <a href="https://github.com/jpchanson/ArcServer" class="btn btn-primary" target="_blank" >A.R.C. Server - SourceCode</a>
          <nav> 
            <ul class="pagination"> 
               <li class="disabled"> 
                  <a href="#" aria-label="Previous"> 
                     <span aria-hidden="true">&laquo;</span> 
                  </a> 
               </li> 
               <li class="active"><a href="/CONTENT/dev/JPCH/ARC/dev-ARC-1.php">1</a></li> 
               <li><a href="/CONTENT/dev/JPCH/ARC/dev-ARC-2.php">2</a></li> 
               <li><a href="/CONTENT/dev/JPCH/ARC/dev-ARC-3.php">3</a></li> 
               <li><a href="/CONTENT/dev/JPCH/ARC/dev-ARC-4.php">4</a></li> 
               <li> 
                  <a href="/CONTENT/dev/JPCH/ARC/dev-ARC-2.php" aria-label="Next"> 
                     <span aria-hidden="true">&raquo;</span> 
                  </a> 
               </li> 
            </ul> 
         </nav>
                                 <!-- _____________ENDOF PANEL HEADING______________ -->
                                 <!-- _____________PANEL BODY______________ -->
	   </div >
		<div class="panel-body">
         <h3>Introduction</h3>
         <p>
         A.R.C. stands for augmented reality communicator, it is an attempt to produce an augmented reality 
         social networking application aimed at professionals (not professional SNS users but professionals in the
         more general sense). 
         </p>
         <p>
         A.R.C. was built for mobile devices using the android java framework as well as the BeyondAR and MapQuest 
         libraries as part of my Brunel University second year coursework for the group project module. This application
         however was built individually and thus is entirely my own work. The sourcecode is available on 
         <a href="https://github.com/jpchanson/A.R.C./tree/CurrentState" target="_blank" >GitHub</a> 
         </p>
         <p>
         The Augmented reality part of this application is implemented as a live camera preview with SNS data overlayed
         dependant on location (Determined by GPS), and a map view, which also overlays SNS data dependant on location.
         </p>
         
         <h3>Design</h3>
         <p>
         There are two aspects to the design of this app that i would like to draw particular attention to: The First is the
         modified MVP/MVC pattern, the second is the use of the strategy pattern.
         </p>
         <p>
         As is fairly obvious, the structure of an android application is inherently built around an MVC architecture. The 
         Views being the XML layout files, the Controllers being 'Activities' and the model is well...the model. However
         I must admit that this particular implementation never struck me as being conceptually elegant, you end up with too
         much view code in the activities, and if you then include other controller-type logic in there as well, the whole thing
         grows very quickly. So what i decided to do was use the XML and corresponding activity together to make up the views,
         putting all the visual code in one place and decoupling the application logic from the display logic. I then used 
         seperate presenter and model packages to contain the rest of the code (as appropriate).
         </p>
         <p>
         The second area I would like to draw attention to is the use of the strategy pattern to further decouple the display logic
         from the application logic; by encapsulating each of the views as a concrete strategy that subscribe to the ArcView interface
         (Strategy Interface), and using the presenter as the context class. Not only does this decouple the display code from application
         code, but it also provides a standard interface for adding new views.
         </p>

         <h3>Screenshots</h3>
         <img class="myThumb" data-toggle="modal" data-target="#arcScreen1" src="/RESOURCES/devPics/JPCH/ARC/screen1.png"></img>
         <img class="myThumb" data-toggle="modal" data-target="#arcScreen2" src="/RESOURCES/devPics/JPCH/ARC/screen2.png"></img>
         <img class="myThumb" data-toggle="modal" data-target="#arcScreen3" src="/RESOURCES/devPics/JPCH/ARC/screen3.png"></img>
         <img class="myThumb" data-toggle="modal" data-target="#arcScreen4" src="/RESOURCES/devPics/JPCH/ARC/screen4.png"></img>


         <h3>Connection to server</h3>
         <p>In order to connect to the server I used a direct JDBC connection, i figured this was probably the fastest way to do this. Also
         given that the nature of SNS data is relational by nature, it is unlikely that i am going to need to change the database implementation
         to something that JDBC doesn't support. It also removes a layer of complexity in dealing with HTTP requests and responses. I have included
         as code sample below from the test-presenter to show how i have implemented this.
         </p>
         <img class="img-responsive" src="/RESOURCES/devPics/JPCH/ARC/dbconnection.png"></img>
         <p>
         I have implemented it in a rather lazy way at the moment, but in the future I would like to structure it more like the way i have implemented
         the ArcServer (page 3, sourcecode in link at top of page)
         </p>   
         
         <nav> 
            <ul class="pagination"> 
               <li class="disabled"> 
                  <a href="#" aria-label="Previous"> 
                     <span aria-hidden="true">&laquo;</span> 
                  </a> 
               </li> 
               <li class="active"><a href="/CONTENT/dev/JPCH/ARC/dev-ARC-1.php">1</a></li> 
               <li><a href="/CONTENT/dev/JPCH/ARC/dev-ARC-2.php">2</a></li> 
               <li><a href="/CONTENT/dev/JPCH/ARC/dev-ARC-3.php">3</a></li> 
               <li><a href="/CONTENT/dev/JPCH/ARC/dev-ARC-4.php">4</a></li> 
               <li> 
                  <a href="/CONTENT/dev/JPCH/ARC/dev-ARC-2.php" aria-label="Next"> 
                     <span aria-hidden="true">&raquo;</span> 
                  </a> 
               </li> 
            </ul> 
         </nav>
			</div>
                                 <!-- _____________ENDOF PANEL BODY ______________ -->

											  <!-- __________modals for screenshots____________ -->
			<div class="modal fade" id="arcScreen1" role="dialog">
				<div class="modal-dialog modal-lg">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<h4>Timeline</h4>
						</div>
						<div class="modal-body">
							<img class="expandedImg" src="/RESOURCES/devPics/JPCH/ARC/screen1.png"></img>
						</div>
					</div>
				</div>
			</div>
			
			 <div class="modal fade" id="arcScreen2" role="dialog">
				<div class="modal-dialog modal-lg">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<h4>AR Camera Screen 1</h4>
						</div>
						<div class="modal-body">
							<img class="expandedImg" src="/RESOURCES/devPics/JPCH/ARC/screen2.png"></img>
						</div>
					</div>
				</div>
			</div>
			
			 <div class="modal fade" id="arcScreen3" role="dialog">
				<div class="modal-dialog modal-lg">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<h4>AR Camera Screen 2</h4>
						</div>
						<div class="modal-body">
							<img class="expandedImg" src="/RESOURCES/devPics/JPCH/ARC/screen3.png"></img>
						</div>
					</div>
				</div>
			</div>
			
			 <div class="modal fade" id="arcScreen4" role="dialog">
				<div class="modal-dialog modal-lg">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<h4>AR Map Screen</h4>
						</div>
						<div class="modal-body">
							<img class="expandedImg" src="/RESOURCES/devPics/JPCH/ARC/screen4.png"></img>
						</div>
					</div>
				</div>
			</div>
											 <!-- ______endof modals for screenshots______ -->


                                 <!-- _____________PANEL FOOTER______________ -->
      <div class="panel-footer">
         Jan Hanson: 1339404
      </div>                     <!-- _____________ENDOF PANEL FOOTER______________ -->
   </div>
</div>

<?php require '/srv/http/TEMPLATES/footer.php'; ?>