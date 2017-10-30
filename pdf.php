<?php

    require 'vendor/autoload.php';

    use Knp\Snappy\Pdf;

    $snappy = new Pdf('/var/www/html/postasepeti/vendor/h4cc/wkhtmltopdf-amd64/bin/wkhtmltopdf-amd64');
    $snappy->setOption('user-style-sheet', 'assets/css/bootstrap.css');

    foreach ($_POST['userData'] as $input) {
        $input = htmlentities($input, ENT_QUOTES);
    }

    $userData = $_POST['userData'];
    $uniq = $_POST['uniqid'];
    $channel = $_POST['channel'];
    $date = date('d/m/Y');
    $time = date("H:i");

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
                                <p><b>Adı Soyadı:</b> '. $userData[2] .'</p>
                                <p><b>Adresi:</b> ' . $userData[3] . ' </p>
                                <h5>Alıcı</h5>
                                <p><b>Adı Soyadı:</b> '. $userData[4] .'</p>
                                <p><b>Adresi:</b> ' . $userData[5] . ' </p>
                            </div>
                            <div class="col-xs-6 info-row section-row">
                                <h5>Gönderici</h5>
                                <p><b>e-Posta Adresi:</b> ' . $userData[7] . ' </p>
                                <p><b>Telefonu:</b> ' . $userData[6] . ' </p>
                                <h5>Alıcı</h5>
                                <p><b>e-Posta Adresi:</b> ' . $userData[9] . ' </p>
                                <p><b>Telefonu:</b> ' . $userData[8] .' </p>
                                <p class="date"><b>Tarih: </b> ' . $date .' <b>Saat: </b> ' . $time .' </p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xs-12 content-row section-row">
                                <p> &emsp;&emsp;Merhaba, <b> ' . $userData[0] . ' </b></p>
                                <p>Bu mektubu ve şiiri, hem seni biraz gülümsetmek hem de Türkiye\'de hizmete yeni başlayan <b>Oekopost Hibrit Posta Sistemi</b>\'nin hızını ve kalitesini denemek için yazıyorum.</p>
                                <p>Bu mektup adresine teslim edildiğinde, beni telefon yada mail ile haberdar eder misin?<br>Bakalım dedikleri kadar hızlı mı? Kullandıkları kağıt ve baskı kalitesi nasıl?</p>
                                <div class="message-container">
                                    <p class="message"> ' . $userData[1] . ' </p>
                                </div>
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

    $filename = $uniq . '.pdf';
    $snappy->generateFromHtml($html, '/var/www/html/postasepeti/pdfdir/'.$filename);

    $file = 'pdfdir/'. $filename;
    $content = file_get_contents($file);
    $content = chunk_split(base64_encode($content));
    $uid = md5(uniqid(time()));
    $name = basename($file);

    $from_name = $userData[2];
    $from_mail = $userData[7];

    // header
    $header = "From: ".$from_name." <".$from_mail.">\r\n";
    // $header .= "Reply-To: ".$replyto."\r\n";
    $header .= "MIME-Version: 1.0\r\n";
    $header .= "Content-Type: multipart/mixed; boundary=\"".$uid."\"\r\n\r\n";

    $message = "POSTA SEPETI YENI MEKTUP ISTEGI";
    // message & attachment
    $nmessage = "--".$uid."\r\n";
    $nmessage .= "Content-type:text/plain; charset=iso-8859-1\r\n";
    $nmessage .= "Content-Transfer-Encoding: 7bit\r\n\r\n";
    $nmessage .= $message."\r\n\r\n";
    $nmessage .= "--".$uid."\r\n";
    $nmessage .= "Content-Type: application/octet-stream; name=\"".$filename."\"\r\n";
    $nmessage .= "Content-Transfer-Encoding: base64\r\n";
    $nmessage .= "Content-Disposition: attachment; filename=\"".$filename."\"\r\n\r\n";
    $nmessage .= $content."\r\n\r\n";
    $nmessage .= "--".$uid."--";

    switch ($channel) {
        case "1":
            $channel = "fatihint@gmail.com";
            break;
        case "2":
            $channel = "abaranozoglu@gmail.com";
            break;
        case "3":
            $channel = "karaeren042@gmail.com";
            break;
        case "4":
            $channel = "fatihint@gmail.com";
            break;
        case "5":
            $channel = "fatihint@gmail.com";
            break;
        case "6":
            $channel = "fatihint@gmail.com";
            break;
        default:
            # code...
            break;
    }

    $subject = "POSTASEPETI YENI MEKTUP";

    if (mail($channel, $subject, $nmessage, $header)) {
        echo "OK";
    } else {
        echo "NO";
    }

?>
