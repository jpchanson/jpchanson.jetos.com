<?php require '/srv/http/TEMPLATES/dev-header.php';?>
<?php require '/srv/http/TEMPLATES/navbar.php'; ?>

<div class="col-md-1"></div>

<div class="col-md-10">
	<div class="panel panel-default">
	   <div class="panel-heading"><!-- _____________PANEL HEADING______________ -->
	      <a class="title"><h2>AR Drone Hack-a-thon</h2></a>
         <p>A drone treasure hunt using an Parrot AR Drone v.2 to navigate from point to point, scanning QR codes along the way. 
				The contents to these QR codes contained phrases which when taken together would make up a message. The team to get
				the furthest would be judged the winner. </p>
         <a href=" https://github.com/jpchanson/ARdrone " class="btn btn-primary" target="_blank">SourceCode</a>
         <a href=" http://jpchanson.github.io/ARdrone/docs/html/index.html " class="btn btn-primary" target="_blank" >Documentation</a>
			<a href=" https://github.com/jpchanson/ARdrone/wiki " class="btn btn-primary" target="_blank" >Wiki</a>
          <nav> 
            <ul class="pagination"> 
               <li class="disabled"> 
                 <a aria-label="Previous"> 
                     <span aria-hidden="true">&laquo;</span> 
                  </a> 
               </li> 
               <li class="active"><span>1</span></li> 
               <li><a href=" /CONTENT/dev/JPCH/ARDrone/arDrone-2.php ">2</a></li> 
               <li><a href=" /CONTENT/dev/JPCH/ARDrone/arDrone-3.php ">3</a></li> 
               <li><a href=" /CONTENT/dev/JPCH/ARDrone/arDrone-4.php ">4</a></li> 
               <li> 
                  <a href="CONTENT/dev/JPCH/ARC/ARDrone/arDrone-2.php " aria-label="Next"> 
                     <span aria-hidden="true">&raquo;</span> 
                  </a> 
               </li> 
            </ul> 
         </nav>
		 </div>
                                 <!-- _____________ENDOF PANEL HEADING______________ -->



                                 <!-- _____________PANEL BODY______________ -->
	   <div class="panel-body">
	
			<img class="img-responsive" src="/RESOURCES/devPics/JPCH/ARDrone/ARDrone.jpg"></img>
			<sup>The Drone</sup>
			
			<h1>Introduction</h1>
			<p>
				On the 19<sup>th</sup> - 20<sup>th</sup> may 2015, Brunel university hosted a hackathon with the theme of a 
				drone based treasure hunt. The idea being that they give each team a quodcopter, and an "API" <sub>(The sneer quotes 
				will be explained)</sub> and we were to design an application that would allow the drone to navigate a set of
				coordinates, take pictures of and process QR codes at each set of coordinates, retrieving the secret message.
				The team to get the furthest <sub>(as decided by the judges)</sub> would be the winners.
			</p>
			
			<img class="img-responsive" src="/RESOURCES/devPics/JPCH/ARDrone/Team.jpg"></img>
			<sup>The team (sans myself) via dronecam</sup></br></br>
	
			<p>
				The "API" that we were given to us to use was hacked together by a couple of the lecturers, during a couple of weeks previous to the
				hackathon, and indeed were working on it right up untill the competition day (we had to wait a good 4 hours to get our hands on it). 
				The "API" was structured as a series of independant classes each attempting to use a different general piece of functionality (sensors, 
				control, video capture etc), each class had a main and could run as an independant test program. This made it easy for copy/paster's, 
				but significantly more difficult for anyone that wanted to design a reasonable system.
			</p>
			
			<p>
				I shouldn't be too harsh however, as the Parrot SDK was written in C++ and the lecturers in question are not hugely familiar with the
				language, making the whole endeavour rather challenging. Also having read through the SDK documentation myself, it is not the easiest
				of SDK's to use.
			</p>
			
	
		</div>
	                              <!-- _____________ENDOF PANEL BODY ______________ -->



                                 <!-- _____________PANEL FOOTER______________ -->
      <div class="panel-footer">
			<nav> 
            <ul class="pagination"> 
               <li class="disabled"> 
                  <a aria-label="Previous"> 
                     <span aria-hidden="true">&laquo;</span> 
                  </a> 
               </li> 
               <li class="active"><span>1</span></li> 
               <li><a href=" /CONTENT/dev/JPCH/ARDrone/arDrone-2.php ">2</a></li> 
               <li><a href=" /CONTENT/dev/JPCH/ARDrone/arDrone-3.php ">3</a></li> 
               <li><a href=" /CONTENT/dev/JPCH/ARDrone/arDrone-4.php ">4</a></li> 
               <li> 
                  <a href=" /CONTENT/dev/JPCH/ARDrone/arDrone-2.php " aria-label="Next"> 
                     <span aria-hidden="true">&raquo;</span> 
                  </a>
               </li> 
					 <li class="enabled"> <a href="https://uk.linkedin.com/in/jpchanson" TARGET="_blank">Jan P C Hanson</a> </li>
            </ul> 
         </nav>
      </div>                     <!-- _____________ENDOF PANEL FOOTER______________ -->
   </div>
</div>

<?php require '/srv/http/TEMPLATES/footer.php'; ?>