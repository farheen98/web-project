<html>
 <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

     <style>
        .gallery {
            -webkit-column-count: 3;
            -moz-column-count: 3;
            column-count: 3;
            -webkit-column-width: 33%;
            -moz-column-width: 33%;
            column-width: 33%; }
            .gallery .pics {
            -webkit-transition: all 350ms ease;
            transition: all 350ms ease; }
            .gallery .animation {
            -webkit-transform: scale(1);
            -ms-transform: scale(1);
            transform: scale(1); }
            
            @media (max-width: 450px) {
            .gallery {
            -webkit-column-count: 1;
            -moz-column-count: 1;
            column-count: 1;
            -webkit-column-width: 100%;
            -moz-column-width: 100%;
            column-width: 100%;
            }
            }
            
            @media (max-width: 400px) {
            .btn.filter {
            padding-left: 1.1rem;
            padding-right: 1.1rem;
            }
            }
            </style>
 </head><body>
     <!-- Grid row -->
<div class="row">

        <!-- Grid column -->
        <div class="col-md-12 d-flex justify-content-center mb-5">
      
         <a href="index.php" style="margin-top: 10px;"><button type="button" class="btn btn-danger waves-effect filter" data-rel="all">HOME</button></a> 
          
      
        </div>
        <!-- Grid column -->
      
      </div>
      <!-- Grid row -->
      
      <!-- Grid row -->
      <div class="gallery" id="gallery">
      
        <!-- Grid column -->
        <div class="mb-3 pics animation all 2">
          <img class="img-fluid" src="images/gal1.jpg" alt="Card image cap">
        </div>
        <!-- Grid column -->
      
        <!-- Grid column -->
        <div class="mb-3 pics animation all 1">
          <img class="img-fluid" src="images/gal2.webp" alt="Card image cap">
        </div>
        <!-- Grid column -->
      
        <!-- Grid column -->
        <div class="mb-3 pics animation all 1">
          <img class="img-fluid" src="images/gal3.jpg" alt="Card image cap">
        </div>
        <!-- Grid column -->
      
        <!-- Grid column -->
        <div class="mb-3 pics animation all 2">
          <img class="img-fluid" src="images/gal4.jpg" alt="Card image cap">
        </div>
        <!-- Grid column -->
      
        <!-- Grid column -->
        <div class="mb-3 pics animation all 2">
          <img class="img-fluid" src="images/gal5.jpeg" alt="Card image cap">
        </div>
        <!-- Grid column -->
      
        <!-- Grid column -->
        <div class="mb-3 pics animation all 1">
          <img class="img-fluid" src="images/gal6.jpg" alt="Card image cap">
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="mb-3 pics animation all 1">
          <img class="img-fluid" src="images/gal9.jpg" alt="Card image cap">
        </div>
        <!-- Grid column -->
        <div class="mb-3 pics animation all 1">
          <img class="img-fluid" src="images/gal11.jpg" alt="Card image cap">
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        
        <!-- Grid column -->
        <div class="mb-3 pics animation all 1">
          <img class="img-fluid" src="images/gal19.jpg" alt="Card image cap">
        </div>
        <!-- Grid column -->
        <div class="mb-3 pics animation all 1">
          <img class="img-fluid" src="images/gal6.jpg" alt="Card image cap">
        </div>
        <!-- Grid column -->
        
        <div class="mb-3 pics animation all 1">
          <img class="img-fluid" src="images/gal20.jpg" alt="Card image cap">
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
 </body>
<script>
$(function() {
var selectedClass = "";
$(".filter").click(function(){
selectedClass = $(this).attr("data-rel");
$("#gallery").fadeTo(100, 0.1);
$("#gallery div").not("."+selectedClass).fadeOut().removeClass('animation');
setTimeout(function() {
$("."+selectedClass).fadeIn().addClass('animation');
$("#gallery").fadeTo(300, 1);
}, 300);
});
});
</script>
      </html>