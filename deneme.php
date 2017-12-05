<?php include 'header.php'; ?>

<?php

session_start();

if(empty($_SESSION['token'])) {
    $_SESSION['token'] = md5(uniqid(rand(), true));
}
?>

<div id="deneme">
    <div class="container page-container">
        <div id="part-1">
            <div class="row">
                <div class="col-xs-12 col-md-8 col-md-offset-2">
                    <h4><b>Bu ücretsiz deneme mektubunu,</b> adresini bildiğiniz bir arkadaşınıza hitaben, aşağıdaki boşlukları doldurarak oluşturabilirsiniz.</h4>
                </div>
                <div class="col-xs-12 col-md-8 col-md-offset-2 text-center">
                    <h3><b>Önce Kanal Seçiniz</b></h3>
                    <h4>Bu mektubu, birinin referansı ile yazıyorsanız, o kişinin -iletişim sayfamızda mevcut- kanal numarasını seçiniz. Eğer referansınız yoksa lütfen 6.kanalı seçiniz.</h4>
                    <form class="radioButtons" action="" method="post">
                        <span class="radio-span"> <label for="radio1">1</label> <input type="radio" name="kanal" id="1" value="1" checked> </span>
                        <span class="radio-span"> <label for="radio2">2</label> <input type="radio" name="kanal" id="2" value="2"> </span>
                        <span class="radio-span"> <label for="radio3">3</label> <input type="radio" name="kanal" id="3" value="3"> </span>
                        <span class="radio-span"> <label for="radio4">4</label> <input type="radio" name="kanal" id="4" value="4"> </span>
                        <span class="radio-span"> <label for="radio5">5</label> <input type="radio" name="kanal" id="5" value="5"> </span>
                        <span class="radio-span"> <label for="radio6">6</label> <input type="radio" name="kanal" id="6" value="6"> </span>
                    </form>
                </div>
            </div>
            <hr>
            &emsp;&emsp;Merhaba: <input type="text" name="alici" id="alici" placeholder="Arkadaşınıza hitabınız">

            <div class="row">
                <div class="col-xs-12">
                    <p>Bu mektubu ve Türkiye’de hizmete başlayan <b>Oekopost Hibrit Posta Sistemi</b>'nin hızını ve kalitesini denemek için yazıyorum.<br> Umarım şiiri de beğenirsin :)</p>
                    <p>Mektup eline ulaştığı gün, beni telefon veya mail ile haberdar edebilir misin?<br>Bakalım dedikleri kadar hızlı mı? Kullandıkları kağıt ve baskı kalitesi iyi mi?</p>
                    <textarea name="mektup" id="mektup" placeholder="Özel Mesaj 'istediğinizi yazabilirsiniz ancak arkadaşınızın eline geçeceğini unutmayın. Yazdığınız yazının bütün hukuki sorumluluğu yazan kişiye aittir.(max 1000 karakter)" maxlength="1000"></textarea>
                </div>
                <div class="col-xs-12">
                    <img src="assets/images/pdffooter.png" width="100%" alt="">
                </div>
                    <button id="part-1-submit" type="submit" class="btn btn-default">Gönder</button>

            </div>
        </div>

            <div class="row" id="part-2">
                <div class="col-xs-12 col-md-6 part-2-col">
                    <h2 class="text-center">Zarfa Basilacak Bilgiler</h2>
                    <p class="label-title">Gönderici</p>
                    <div class="input-group">
                        <input type="text" name="gonderici-isim" id="gonderici-isim" value="" placeholder="Adı Soyadı" required>
                    </div>
                    <div class="input-group">
                        <textarea name="gonderici-adres" id="gonderici-adres" placeholder="Adresi" maxlength="180"></textarea>
                    </div>
                    <p class="label-title">Alıcı</p>
                    <div class="input-group">
                        <input type="text" name="alici-isim" id="alici-isim" value="" placeholder="Adı Soyadı" required>
                    </div>
                    <div class="input-group">
                        <textarea name="alici-adres" id="alici-adres" placeholder="Adresi" maxlength="180"></textarea>
                    </div>
                </div>
                <div class="col-xs-12 col-md-6 part-2-col">
                    <h2 class="text-center">İletişim Bilgileri</h2>
                    <p class="label-title">Gönderici</p>
                    <div class="input-group">
                        <input type="text" name="gonderici-isim" id="gonderici-telefon" value="" placeholder="Telefonu" required>
                    </div>
                    <div class="input-group">
                        <input type="text" name="gonderici-mail" id="gonderici-mail" value="" placeholder="E-Posta Adresi" required>
                    </div>
                    <p class="label-title">Alıcı</p>
                    <div class="input-group">
                        <input type="text" name="alici-isim" id="alici-telefon" value="" placeholder="Telefonu" required>
                    </div>
                    <div class="input-group">
                        <input type="text" name="alici-mail" id="alici-mail" value="" placeholder="E-Posta Adresi" required>
                    </div>
                    <p class="label-desc">Bu deneme mektubunda gerekli boşlukları dilediğiniz gibi doldurabilirsiniz. Mektubun, renkli olarak basılıp, zarflanıp, kapatılarak, PTT eli ile yazdığınız arkadaşınızın adresine gideceğini düşünerek, adres ve kişi bilgilerinin doğru olması gerektiğini hatırlatırız. Her türlü yasal sorumluluk size aittir.</p>
                    <span id="date-span"><b>Tarih:</b>  </span>
                    <span id="hour-span"><b>Saat: </b>  </span>
                    <input type="hidden" name="" id="uniqid" value="<?php echo uniqid(); ?>">
                    <input type="hidden" name="token" id="uniqid" value="<?php echo $_SESSION['token'] ?>">
                    <button id="part-2-submit" type="submit" class="btn btn-default">Devam</button>
                </div>
            </div>

            <div class="row" id="part-4">
                <div class="col-xs-12 col-md-4 col-md-offset-4">
                    <p class="text-center"> Sistemi sürekli kullanmaya karar verirseniz, sizin için açılacak OEKOPOST hesabı için lütfen bir <b>kullanıcı adı</b> belirleyiniz.</p>
                    <div class="input-group">
                        <input type="text" name="kullanici-adi" id="kullanici-adi" value="" placeholder="Kullanıcı Adı" required>
                    </div>
                </div>
                <div class="col-xs-12 col-md-9 col-md-offset-2">
                    <button id="part-4-submit" type="submit" class="btn btn-default">Kaydet ve Gönder</button>
                </div>
            </div>

            <div class="row" id="part-3">
                <div class="col-xs-12">
                    <p class="text-center info">Tebrik Ederiz.</p>
                    <p class="text-center info">Mektubunuz sistem yazıcılarına ulaşmıştır.</p>
                    <p class="text-center info"><b>1 dakika</b> içerisinde basılacak diğer gönderiler arasında sıraya girmiş olacaktır.</p>
                    <hr>
                    <a href="anasayfa">
                        <button id="submit" type="submit" class="btn btn-default">Ana Sayfaya Dön</button>
                    </a>
                </div>
            </div>

        </div>
    </div>


    <?php include 'footer.php'; ?>
