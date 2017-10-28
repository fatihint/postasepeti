<?php include '../header.php'; ?>

<div id="deneme">
    <div class="page-header text-center">
        <h1>DENEME</h1>
    </div>

    <div class="container">
        <div id="part-1">
            <div class="row">
                <div class="col-md-4 col-xs-12">
                    <h3>Önce Kanal Seçiniz</h2>
                        <form class="radioButtons" action="index.html" method="post">
                            <span class="radio-span"> <label for="radio1">1</label> <input type="radio" name="kanal" id="1" checked> </span>
                            <span class="radio-span"> <label for="radio2">2</label> <input type="radio" name="kanal" id="2"> </span>
                            <span class="radio-span"> <label for="radio3">3</label> <input type="radio" name="kanal" id="3"> </span>
                            <span class="radio-span"> <label for="radio4">4</label> <input type="radio" name="kanal" id="4"> </span>
                            <span class="radio-span"> <label for="radio5">5</label> <input type="radio" name="kanal" id="5"> </span>
                            <span class="radio-span"> <label for="radio6">6</label> <input type="radio" name="kanal" id="6"> </span>
                        </form>
                    </div>
                    <div class="col-md-8 col-xs-12">
                        <h4>Sistemin nasıl çalıştığını test etmek için ücretsiz deneme mektubu yazabilirsiniz. Posta adresini bildiğiniz bir arkadaşınıza hitaben aşağıdaki boşlukları doldurarak, mektubu oluşturabilirsiniz.</h4>
                    </div>
                </div>
                <hr>
                &emsp;&emsp;Merhaba: <input type="text" name="alici" placeholder="Arkadaşınıza hitabınız">

                <div class="row">
                    <div class="col-xs-12">
                        <p>Bu mektubu ve şiiri, hem seni biraz gülümsetmek hem de Türkiye'de hizmete yeni başlayan <b>Oekopost Hibrit Posta Sistemi</b>'nin hızını ve kalitesini denemek için yazıyorum.</p>
                        <p>Bu mektup adresine teslim edildiğinde, beni telefon yada mail ile haberdar eder misin?<br>Bakalım dedikleri kadar hızlı mı? Kullandıkları kağıt ve baskı kalitesi nasıl?</p>
                        <textarea name="mektup" placeholder="Özel Mesaj 'istediğinizi yazabilirsiniz ancak arkadaşınızın eline geçeceğini unutmayın. Yazdığınız yazının bütün hukuki sorumluluğu yazan kişiye aittir.(max 1000 karakter)" maxlength="1000"></textarea>
                    </div>
                    <button id="part-1-submit" type="submit" class="btn btn-default">Gönder</button>
                </div>
            </div>

            <div class="row" id="part-2">
                <div class="col-xs-12 col-md-6 part-2-col">
                    <h2 class="text-center">Zarfa Basilacak Bilgiler</h2>
                    <p class="label-title">Gonderici</p>
                    <div class="input-group">
                        <input type="text" name="" value="" placeholder="Adı Soyadı">
                    </div>
                    <div class="input-group">
                        <textarea name="name" placeholder="Adresi" maxlength="180"></textarea>
                    </div>
                    <p class="label-title">Alici</p>
                    <div class="input-group">
                        <input type="text" name="" value="" placeholder="Adı Soyadı">
                    </div>
                    <div class="input-group">
                        <textarea name="name" placeholder="Adresi" maxlength="180"></textarea>
                    </div>
                </div>
                <div class="col-xs-12 col-md-6 part-2-col">
                    <h2 class="text-center">İletişim Bilgileri</h2>
                    <p class="label-title">Gonderici</p>
                    <div class="input-group">
                        <input type="text" name="" value="" placeholder="Adı Soyadı">
                    </div>
                    <div class="input-group">
                        <input type="text" name="" value="" placeholder="Adresi">
                    </div>
                    <p class="label-title">Alici</p>
                    <div class="input-group">
                        <input type="text" name="" value="" placeholder="Adı Soyadı">
                    </div>
                    <div class="input-group">
                        <input type="text" name="" value="" placeholder="Adresi">
                    </div>
                    <p class="label-desc">Bu deneme mektubunda gerekli boşlukları dilediğiniz gibi doldurabilirsiniz. Mektubun, renkli olarak basılıp, zarflanıp, kapatılarak, PTT eli ile yazdığınız arkadaşınızın adresine gideceğini düşünerek, adres ve kişi bilgilerinin doğru olması gerektiğini hatırlatırız. Her türlü yasal sorumluluk size aittir.</p>
                    <span><b>Tarih:</b> <?php echo date('d/m/Y'); ?> </span>
                    <span><b>Saat: </b> <?php echo date("H:i") ?></span>
                    <button id="part-2-submit" type="submit" class="btn btn-default">Gönder</button>
                </div>
            </div>

            <div class="row" id="part-3">
                <div class="col-xs-12">
                    <p class="text-center info">Tebrik Ederiz.</p>
                    <p class="text-center info">Mektubunuz sistem yazıcılarına ulaşmıştır.</p>
                    <p class="text-center info"><b>1 dakika</b> içerisinde basılacak diğer gönderiler içerisinde sıraya geçmiş olacaktır.</p>
                    <hr>
                    <p>www.oekopost.com adresinde geçici deneme hesabı açılması için lütfen bir kullanıcı adı ve geçici şifre belirleyiniz. Daimi hesap açmak istediğinizde şifrenizi değiştirebilirsiniz ancak kullanıcı adınız aynı kalır.</p>
                    <div class="input-group">
                        <input type="text" name="" value="" placeholder="Kullanici Adi">
                    </div>
                    <div class="input-group">
                        <input type="password" name="" value="" placeholder="Gecici Sifre">
                    </div>
                    <button type="submit" class="btn btn-default">Kaydet</button>
                </div>
            </div>

        </div>
    </div>


    <?php include '../footer.php'; ?>
