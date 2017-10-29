<?php

    include '../header.php';

?>

<div id="thumbnail-preview-indicators" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#thumbnail-preview-indicators" data-slide-to="0" class="active">

            </li>
            <li data-target="#thumbnail-preview-indicators" data-slide-to="1">

            </li>
            <li data-target="#thumbnail-preview-indicators" data-slide-to="2">

            </li>
          </ol>
          <div class="carousel-inner">
            <div class="item slides active">
              <div class="slide-1"></div>
              <div class="container">
                <div class="carousel-caption">
                  <h1>Biz yaratıcıyız.</h1>
                  <h3>Hibrit posta sistemi Türkiye'de.</h3>
                  <p><a class="btn btn-lg btn-primary" href="hakkimizda.php" role="button">Biz Kimiz?</a></p>
                </div>
              </div>
            </div>
            <div class="item slides">
              <div class="slide-2"></div>
              <div class="container">
                <div class="carousel-caption">
                  <h1>Biz zekiyiz.</h1>
                  <h3>Bu harika sistemi farkedin.</h3>
                  <p><a class="btn btn-lg btn-primary" href="sistem.php" role="button">Daha Fazla!</a></p>
                </div>
              </div>
            </div>
            <div class="item slides">
              <div class="slide-3"></div>
              <div class="container">
                <div class="carousel-caption">
                  <h1>Biz inanılmazız.</h1>
                  <h3>Denemek için tıklayınız.</h3>
                  <p><a class="btn btn-lg btn-primary" href="deneme.php" role="button">Sistemi Dene!</a></p>
                </div>
              </div>
            </div>
          </div>
          <a class="left carousel-control" href="#thumbnail-preview-indicators" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
          <a class="right carousel-control" href="#thumbnail-preview-indicators" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
      </div>

<?php

    include '../footer.php';
?>
