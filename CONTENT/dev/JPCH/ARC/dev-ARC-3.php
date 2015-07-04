<?php require '/srv/http/TEMPLATES/dev-header.php';?>
<?php require '/srv/http/TEMPLATES/navbar.php'; ?>

<div class="col-md-1"></div>

<div class="col-md-10">
	<div class="panel panel-default">
	   <div class="panel-heading"><!-- _____________PANEL HEADING______________ -->
	      <a class="title"><h2>Server Side</h2></a>
         <p>group server development. n.b. all server side java code was written and designed by myself.</p>
         <a href="https://github.com/jpchanson/A.R.C./tree/CurrentState" class="btn btn-primary" target="_blank">A.R.C. Applicaion - SourceCode</a>
         <a href="https://github.com/jpchanson/ArcServer" class="btn btn-primary" target="_blank" >A.R.C. Server - SourceCode</a>

                 <nav> 
            <ul class="pagination"> 
               <li> 
                  <a href="/CONTENT/dev/JPCH/ARC/dev-ARC-2.php" aria-label="Previous"> 
                     <span aria-hidden="true">&laquo;</span> 
                  </a> 
               </li> 
               <li><a href="/CONTENT/dev/JPCH/ARC/dev-ARC-1.php">1</a></li> 
               <li><a href="/CONTENT/dev/JPCH/ARC/dev-ARC-2.php">2</a></li> 
               <li class="active" ><a href="/CONTENT/dev/JPCH/ARC/dev-ARC-3.php">3</a></li> 
               <li><a href="/CONTENT/dev/JPCH/ARC/dev-ARC-4.php">4</a></li> 
               <li> 
                  <a href="/CONTENT/dev/JPCH/ARC/dev-ARC-4.php" aria-label="Next"> 
                     <span aria-hidden="true">&raquo;</span> 
                  </a> 
               </li> 
            </ul> 
         </nav>
                                 <!-- _____________ENDOF PANEL HEADING______________ -->
                                 <!-- _____________PANEL BODY______________ -->
	   </div>
		<div class="panel-body">
         <h3>Design</h3>
         <img class="img-responsive" src="/RESOURCES/devPics/JPCH/ARC/ClassDiagram.png" style="background:grey;"></img>
         <p>The design of the server code follows a variant of the command pattern(Gang Of Four), to decouple the HTTP functionality from the 
         database functionality. It also encapsulates individual queries as command objects making the implementation of additional queries
         straight forward (see above diagram 'AnotherConcreteQuery'). The specific usage of the command pattern is discussed below.
         </p>
        
         <h4>Client</h4>
         <p>
         The client in this case is the Servlet class, it stores a local copy of the QuerySelector and also contains all the HTTP request/response
         code. 
         </p>
          
         <h4>Invoker</h4>
         <p>
         In my contect the invoker is the QuerySeletctor class, this is not much more than a switch statement for (oddly enough) selecting the query 
         to be run, as well as a method that calls the execute method of the query to be run. It is this class that the client(Servlet) interacts with
         to run a query based on a get request recieved by the HTTP server.
         </p>
         
         <h4>Abstract Command</h4>
         <p>
         The DBQuery interface is the abstract command interface, all concrete commands must conform to this interface in order to be compliant with the
         pattern.
         </p>
         
         <h4>Concrete Commands</h4>
         <p>
         These are the individual classes that inherit from DBQuery and allow SQL queries to be encapsulated in objects of type DBQuery(Abstract Command).
         These objects contain a reference to the JDBCQueryConnector in order to connect to the database.
         </p>
         
         <h4>Reciever</h4>
         <p>
         This would be the JDBCQueryConnector class, this is what the individual concrete command objects use to connect to the database, run the specified
         SQL and return the result to the concrete commands. This then gets passed up the chain and all the way back to the client(Servlet).
         </p>
         
         <h4>Sample Code</h4>
         <p>
         As I designed and wrote all the java code pertaining to the Server, it would take up a prohibitive amount of space to include sample code here.
         However all the code that I have written can be accessed from my <a href="https://github.com/jpchanson/ArcServer" target="_blank" >GitHub</a>
         page, or the group server, and is signed either: Jan Hanson(group server) or Orpheus(GitHub), using the @author tag in the class comments.
         </p>
         
         <nav> 
            <ul class="pagination"> 
               <li> 
                  <a href="/CONTENT/dev/JPCH/ARC/dev-ARC-2.php" aria-label="Previous"> 
                     <span aria-hidden="true">&laquo;</span> 
                  </a> 
               </li> 
               <li><a href="/CONTENT/dev/JPCH/ARC/dev-ARC-1.php">1</a></li> 
               <li><a href="/CONTENT/dev/JPCH/ARC/dev-ARC-2.php">2</a></li> 
               <li class="active" ><a href="/CONTENT/dev/JPCH/ARC/dev-ARC-3.php">3</a></li> 
               <li><a href="/CONTENT/dev/JPCH/ARC/dev-ARC-4.php">4</a></li> 
               <li> 
                  <a href="/CONTENT/dev/JPCH/ARC/dev-ARC-4.php" aria-label="Next"> 
                     <span aria-hidden="true">&raquo;</span> 
                  </a> 
               </li> 
            </ul> 
         </nav>
        	</div>
		                           <!-- _____________ENDOF PANEL BODY ______________ -->
                                 <!-- _____________PANEL FOOTER______________ -->
      <div class="panel-footer">
         Jan Hanson: 1339404
      </div>                     <!-- _____________ENDOF PANEL FOOTER______________ -->
   </div>
</div>

<?php require '/srv/http/TEMPLATES/footer.php'; ?>