<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
        <link rel="stylesheet" href="assets/css/bootstrap.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>
        <script>
            function onSubmit(token) {
                document.getElementById("part-2").submit();
            }
        </script>
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
                                <li><a href="anasayfa">Ana Sayfa</a></li>
                                <li><a href="hakkimizda">Hakkımızda</a></li>
                                <li><a href="sistem">Sistem</a></li>
                                <li><a href="deneme">Deneme</a></li>
                                <li><a href="iletisim">İletişim</a></li>
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
