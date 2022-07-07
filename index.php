<!DOCTYPE html>

<?php
$page_title="Home Page";
include_once('include/header.php');
?>

<div class='container-fluid' style="background-color:blue;padding:2rem;">
  <h1>All your Favourite Games at Nerfed Prices!!</h1>
</div>

<div class='container-fluid'>
  <div class='row' style="margin-left:-1.5rem">
    <div class='col-sm'>
      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item">
            <img src="images/eldenring.jpg" class="d-block w-100" alt="..." height="500rem">
            <div class="carousel-caption d-none d-md-block">
              <h5>Elden Ring</h5>
              <p>Find</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="images/bioshock.jpg" class="d-block w-100" alt="..." height="500rem">
            <div class="carousel-caption d-none d-md-block">
              <h5>Bio Shock</h5>
              <p>Some representative placeholder content for the second slide.</p>
            </div>
          </div>
          <div class="carousel-item active">
            <img src="images/horizonFB.jpg" class="d-block w-100" alt="..." height="500rem">
            <div class="carousel-caption d-none d-md-block">
              <h5>Horizon Forbidden West</h5>
              <p>Some representative placeholder content for the third slide.</p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
    <div class='col-sm' style="margin:.3rem">

        <div class='card  border-primary mb-3'>
          <h1 class='card-header'>Trending titles</h1>
          <div class='card-body text-primary'>
            <h5 class='card-title'>title</h5>
            <p classs='card-text'>data</p>
          </div>
        </div>

    </div>
  </div>
</div>

<h1 class='display-2' style="width:16rem;margin:0 auto;">Browse</h1>

<?php
include_once('include/footer.php')
 ?>
