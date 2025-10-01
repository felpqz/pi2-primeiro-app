<?php include "includes/page-top.php"; ?>

<!-- Slider -->
<div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/img1.jpg" class="d-block w-100" alt="Imagem 1">
    </div>
    <div class="carousel-item">
      <img src="img/img2.jpg" class="d-block w-100" alt="Imagem 2">
    </div>
    <div class="carousel-item">
      <img src="img/img3.jpg" class="d-block w-100" alt="Imagem 3">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>

<!-- Cards -->
<div class="container mt-4">
  <div class="row">
    <div class="col-md-4">
      <div class="card">
        <img src="img/card1.jpg" class="card-img-top" alt="Card 1">
        <div class="card-body">
          <h5 class="card-title">Título 1</h5>
          <p class="card-text">Descrição do card 1.</p>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card">
        <img src="img/card2.jpg" class="card-img-top" alt="Card 2">
        <div class="card-body">
          <h5 class="card-title">Título 2</h5>
          <p class="card-text">Descrição do card 2.</p>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card">
        <img src="img/card3.jpg" class="card-img-top" alt="Card 3">
        <div class="card-body">
          <h5 class="card-title">Título 3</h5>
          <p class="card-text">Descrição do card 3.</p>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include "includes/page-bottom.php"; ?>
