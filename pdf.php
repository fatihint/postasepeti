<?php

    require 'vendor/autoload.php';

    use Knp\Snappy\Pdf;

    $snappy = new Pdf('/var/www/html/postasepeti/vendor/h4cc/wkhtmltopdf-amd64/bin/wkhtmltopdf-amd64');
    $snappy->setOption('user-style-sheet', 'assets/css/bootstrap.css');
    
    $html = ' <!DOCTYPE html>
                <html>
                <head>
                    <link rel="stylesheet" href="assets/css/bootstrap.css">
                    <link rel="stylesheet" href="assets/css/style.css">
                <meta charset="utf-8">
                </head>
                <body>
                    <div class="container" id="pdf">
                        <div class="row header-row">
                            <div class="col-xs-12" id="header">
                                <img src="http://localhost/postasepeti/assets/images/pdflogo.png" width="100%" alt="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-6 info-row section-row">
                                <h5>Gönderici</h5>
                                <p><b>Adı Soyadı:</b> Fatih İntekin</p>
                                <p><b>Adresi:</b> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim </p>
                                <h5>Alıcı</h5>
                                <p><b>Adı Soyadı:</b> Fatih İntekin</p>
                                <p><b>Adresi:</b> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim </p>
                            </div>
                            <div class="col-xs-6 info-row section-row">
                                <h5>Gönderici</h5>
                                <p><b>e-Posta Adresi:</b> fatihint@gmail.com</p>
                                <p><b>Telefonu:</b> 0 203 28 41</p>
                                <h5>Alıcı</h5>
                                <p><b>e-Posta Adresi:</b> fatihint@gmail.com</p>
                                <p><b>Telefonu:</b> 0 248 49 21</p>
                                <p class="date"><b>Tarih:</b> 21/08/2017 <b>Saat:</b> 16:32</p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xs-12 content-row section-row">
                                <p> &emsp;&emsp;Merhaba, <b>Fatih</b></p>
                                <p>Bu mektubu ve şiiri, hem seni biraz gülümsetmek hem de Türkiye\'de hizmete yeni başlayan <b>Oekopost Hibrit Posta Sistemi</b>\'nin hızını ve kalitesini denemek için yazıyorum.</p>
                                <p>Bu mektup adresine teslim edildiğinde, beni telefon yada mail ile haberdar eder misin?<br>Bakalım dedikleri kadar hızlı mı? Kullandıkları kağıt ve baskı kalitesi nasıl?</p>
                                <p class="message">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.dolor in reprehenderit in voluptate lit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                                </p>
                            </div>
                        </div>

                        <div class="row footer-row">
                            <div class="col-xs-12" id="png-footer">
                                <img src="http://localhost/postasepeti/assets/images/pdffooter.png" width="100%" alt="">
                            </div>
                        </div>
                    </div>
                </body>
                </html>';

    $filename = 'deneme';
    $snappy->generateFromHtml($html, '/var/www/html/postasepeti/pdfdir/'.$filename.'.pdf');


?>
