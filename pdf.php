<?php

    session_start();

    if(!isset($_SERVER['HTTP_X_REQUESTED_WITH']) || empty($_SERVER['HTTP_X_REQUESTED_WITH']) || strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest')
    {
        header('Location: deneme.php');
        die;
    }

    if (!isset($_POST['token']) || $_POST['token'] != $_SESSION['token']) {
        header('Location: deneme.php');
        die;
    }

    require 'vendor/autoload.php';

    use Knp\Snappy\Pdf;
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    $snappy = new Pdf('/var/www/html/vendor/h4cc/wkhtmltopdf-amd64/bin/wkhtmltopdf-amd64');
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
                                <img src="http://165.227.171.218/assets/images/pdflogo.png" width="100%" alt="">
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
                                <img src="http://165.227.171.218/assets/images/pdffooter.png" width="100%" alt="">
                            </div>
                        </div>
                    </div>
                </body>
                </html>';

    $filename = 'mektup_' . $uniq . '.pdf';
    $snappy->generateFromHtml($html, '/var/www/html/pdfdir/'.$filename);

    switch ($channel) {
        case "1":
            $channel = "mahmut.yildiz@oekopost.com";
            break;
        case "2":
            $channel = "adil.bayalan@oekopost.com";
            break;
        case "3":
            $channel = "grafik94@gmail.com";
            break;
        case "4":
            $channel = "mahmut.diker@oekopost.com";
            break;
        case "5":
            $channel = "volkan.yigit@oekopost.com";
            break;
        case "6":
            // $channel = "mahmut.yildiz@oekopost.com";
            $channel = "grafik94@gmail.com";
            break;
        default:
            # code...
            break;
    }

    $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
    try {
        //Server settings
        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = 'postasepetiofficial@gmail.com';                 // SMTP username
        $mail->Password = 'vaneo94@';                           // SMTP password
        $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 587;                                    // TCP port to connect to

        //Recipients
        $mail->setFrom('postasepetiofficial@gmail.com', 'PostaSepeti');
        $mail->addAddress($channel);               // Name is optional

        //Attachments
        $mail->addAttachment('/var/www/html/pdfdir/'.$filename);         // Add attachments

        //Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = 'Yeni Mektup';
        $mail->Body    = 'PostaSepeti\'nden yeni bir mektup var.';
        $mail->AltBody = 'PostaSepeti\'nden yeni bir mektup var.';

        $mail->send();
    } catch (Exception $e) {
        echo 'Message could not be sent.';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    }

?>
