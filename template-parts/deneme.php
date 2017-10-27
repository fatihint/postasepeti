<?php include '../header.php'; ?>

<div id="deneme">

    <div class="page-header text-center">
        <h1>DENEME</h1>
    </div>

    <div class="container">
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
        <textarea name="mektup" placeholder="Özel Mesaj 'istediğinizi yazabilirsiniz ancak arkadaşınızın eline geçeceğini unutmayın. Yazdığınız yazının bütün hukuki sorumluluğu yazan kişiye aittir.(max 1000 karakter)'"></textarea>
      </div>

      <button type="submit" class="btn btn-default">Gönder</button>
      </div>
    </div>
</div>


<?php include '../footer.php'; ?>
