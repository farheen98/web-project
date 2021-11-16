<?php
session_start();
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Gujrati Marriage</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/carousel/">

    <!-- Bootstrap core CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <style>

      body {
        padding-top:0;
      }

      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="css/carousel.css" rel="stylesheet">
  </head>
  <body>
    <header>
  
</header>

<main role="main" >
	

  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    
    <div class="carousel-inner">
      <div class="carousel-item active">
      <img src="images/gal28.jpg"  width="auto" height="auto" alt="">
              

        <div class="container">
          <div class="carousel-caption text-left">
            <h1>Gujrati Marriage</h1>
            <p>Weddings are fun! Especially when you are not managing anything. 😉
            There are certain common things which happen at every Gujarati wedding, read it and you will definitely connect to it.</p>
            <p><a class="btn btn-lg btn-primary" href="signup.php" role="button">Sign up today</a>
            <a class="btn btn-lg btn-danger "href="typesofmarriages.php" role="button" style="margin-left:10px">Back</a></p>
          </div>
        </div>
      </div>
      
      
    </div>
    
  </div>


  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="container marketing">

    <!-- Three columns of text below the carousel -->
    <div class="row">
      <div class="col-lg-4">
        <img width="140" height="140" src="images/band.jpeg" style="border-radius:50%" focusable="false" role="img" aria-label="Placeholder: 140x140"></img>
        <h2>Bands</h2>
        <p>group of musicians who play popular music such as jazz, rock, or pop. He was a drummer in a rock band. Local bands provide music for dancing. A band is a group of musicians who play brass and percussion instruments.</p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
<img width="140" height="140" src="images/amb.jpeg" style="border-radius:50%" focusable="false" role="img" aria-label="Placeholder: 140x140"></img>        <h2>Ambience</h2>
        <p>Ambience is one of those words that we've out and out stolen from French. In French, the word meaning the same thing is, you guessed it, ambience. This is a word you're going to want to know if you have any interest in restaurant reviews — they always want to talk about the ambience</p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
<img width="140" height="140" src="images/food.jpg" style="border-radius:50%" focusable="false" role="img" aria-label="Placeholder: 140x140"></img>        <h2>Food services</h2>
        <p>We offer you the best food service we have in town to know more click on the view details button.</p>
      </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->


    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">Gujarati Wedding customization. <span class="text-muted">choose what you would like on the special day.</span></h2>
        <p class="lead">We're at your service in helping you to make your special day as you would imagine it to be, customize your options for the day.</p>
      </div>
      <div class="col-md-5">

      









       <form action="gthanks.php" method="POST">
          <label for="select" >Music / Band </label>
          <label>
              <select class="form-control" name="music" style="margin-left:200%;">
                  <option selected value="Best Bet"> Best Bet </option>
                  <option value="Jazz Notes">Jazz Notes</option>
                  <option value="Maroon 5">Maroon 5</option>
                  <option value="YTD">YTD</option>
                  <option value="Akog">Akog</option>
              </select>
          </label>
          <hr class="featurette-divider">
          <label for="select" >Estimated Guests</label>
          <label>
              <select class="form-control" name="guests" style="margin-left:170%;">
                  <option selected value="0 - 120"> 0 - 120 </option>
                  <option value="200 - 400"> 200 - 400 </option>
                  <option value="500 - 700"> 500 - 700 </option>
                  <option value="800 - 1000"> 800 - 1000 </option>
              </select>
          </label>
          <hr class="featurette-divider">
          <label for="select" > Catering </label>
          <label>
              <select class="form-control" name="food" style="margin-left:170%;">
                  <option selected value="Rahmania"> Rahmania </option>
                  <option value="Ocean pearl">Ocean pearl</option>
                  <option value="Deepa Comforts">Deepa Comforts</option>
                  <option value="Kokao">Kokao</option>
                  <option value="jethalal caterin">jethalal catering</option>
              </select>
          </label>
          <hr class="featurette-divider">
          
          <label for="select" > Ambience/Setting </label>
          <label>
              <select class="form-control" name="ambience" style="margin-left:140%;">
                  <option selected value="Beachside"> Beachside </option>
                  <option value="Lakeview"> Lakeview </option>
                  <option value="Ceremony Hall"> Ceremony Hall </option>
                  <option value="Custom"> Custom </option>
              </select>
          </label>
          <p> 
           
            <button class="btn btn-lg btn-success " onclick="window.location.href = 'thanks.php';" name="submit" type="submit" style="margin-left:41%;margin-top:20%">Enquire</button></p>
          

          
         </form>  
      </div>
      
    </div>

    <hr class="featurette-divider">


   

    



    <!-- /END THE FEATURETTES -->

  </div><!-- /.container -->
      


</main>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
</html>
