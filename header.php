<!DOCTYPE html>
<?php
$url=$_SERVER["REQUEST_URI"];
$path=parse_url($url,PHP_URL_PATH);
$parts = explode("/", trim($path, "/"));
?>
<html>
    <head>
        <meta charset="utf-8">
        <title>
        <?php
        if(end($parts)=="anasayfa")
        echo "PostaSepeti";
        if(end($parts)=="hakkimizda")
        echo "Hakkımızda";
        if(end($parts)=="sistem")
        echo "Sistem";
        if(end($parts)=="deneme")
        echo "Deneme Mektubu";
        if(end($parts)=="iletisim")
        echo "İletişim";
        ?>
        </title>
        <link rel="stylesheet" href="assets/css/bootstrap.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
    </head>
    <body>
        <header id="header">
            <div class="container">
                <div class="col-xs-6 company-name">
                    <img src="assets/images/logo.png" alt="">
                </div>
                <div class="col-xs-6 col-md-12 menu">
                    <nav class="navbar navbar-default">
                        <div class="navbar-header">
                          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                          </button>
                        </div>

                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav">
                                <?php
                                if(end($parts)=="anasayfa"){
                                ?>
                                <li><a href="anasayfa"><b>Ana Sayfa</b></a></li>
                                <?php
                                }else{
                                ?>
                                <li><a href="anasayfa">Ana Sayfa</a></li>
                                <?php
                                }
                                if(end($parts)=="hakkimizda"){
                                ?>
                                <li><a href="hakkimizda"><b>Hakkımızda</b></a></li>
                                <?php
                                }else{
                                ?>
                                <li><a href="hakkimizda">Hakkımızda</a></li>
                                <?php
                                }
                                if(end($parts)=="sistem"){
                                ?>
                                <li><a href="sistem"><b>Sistem</b></a></li>
                                <?php
                                }else{
                                ?>
                                <li><a href="sistem">Sistem</a></li>
                                <?php
                                }
                                if(end($parts)=="deneme"){
                                ?>
                                <li><a href="deneme"><b>Deneme Mektubu</b></a></li>
                                <?php
                                }else{
                                ?>
                                <li><a href="deneme">Deneme Mektubu</a></li>
                                <?php
                                }
                                if(end($parts)=="iletisim"){
                                ?>
                                <li><a href="iletisim"><b>İletişim</b></a></li>
                                <?php
                                }else{
                                ?>
                                <li><a href="iletisim">İletişim</a></li>
                                <?php
                                }
                                ?>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
            <div class="images-menu">
                <div class="container">
                    <img src="assets/images/baslik.png" alt="header">
                </div>
            </div>
        </header>
