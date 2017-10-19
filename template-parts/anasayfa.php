<?php

    include '../header.php';

?>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
     <!-- Indicators -->
     <ol class="carousel-indicators">
       <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
       <li data-target="#myCarousel" data-slide-to="1"></li>
       <li data-target="#myCarousel" data-slide-to="2"></li>
     </ol>
     <div class="carousel-inner" role="listbox">
       <div class="item active" align="center" >
         <img class="first-slide" src="http://akademi.nefesyayinevi.com/wp-content/uploads/2015/11/sehidemektup.jpg" alt="First slide">
         <div class="container">
           <div class="carousel-caption">
             <h1>Example headline.</h1>
             <p>Note: If you're viewing thi and left and right might not load/display properly due to web browser security rules.</p>
           </div>
         </div>
       </div>
       <div class="item" align="center">
         <img class="second-slide" src="http://akademi.nefesyayinevi.com/wp-content/uploads/2015/11/sehidemektup.jpg" alt="Second slide">
         <div class="container">
           <div class="carousel-caption">
             <h1>Another example headline.</h1>
             <p>Cras justo odio, dapibus ac facilisis in, n mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
           </div>
         </div>
       </div>
       <div class="item" align="center">
         <img class="third-slide" src="http://akademi.nefesyayinevi.com/wp-content/uploads/2015/11/sehidemektup.jpg" alt="Third slide">
         <div class="container" >
           <div class="carousel-caption">
             <h1>One more for good measure.</h1>
             <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
           </div>
         </div>
       </div>
     </div>
     <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
       <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
       <span class="sr-only">Previous</span>
     </a>
     <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
       <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
       <span class="sr-only">Next</span>
     </a>
   </div>
<?php


    include '../footer.php';
?>
