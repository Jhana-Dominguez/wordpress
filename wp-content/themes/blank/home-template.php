<?php 
	/*Template Name: HOME */
	get_header();

 ?>
<div class="container">

	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-80" src="http://localhost/wordpress/wp-content/uploads/2021/05/a2-1.jpeg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-80" src="http://localhost/wordpress/wp-content/uploads/2021/05/a5-1.jpeg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-80" src="http://localhost/wordpress/wp-content/uploads/2021/05/a1-1.jpeg" alt="Third slide">
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
		
	<div class="row">
		<div class="col-2">
			<h1>  Welcome to <br> La Bañana!</h1>
			<p>" Wardrobe styling services for women "</p> 
			<a href="" class="btn">View More &#8594;</a>
		</div>


 <?php get_footer(); ?>
 
