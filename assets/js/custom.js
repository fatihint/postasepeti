$(document).ready(function(){

    function timer() {
        var currentdate = new Date();
        var hour = currentdate.getHours();

        function addZero(i) {
            if (i<10) {
                i = "0" + i;
            }
            return i;
        }
        $("#date-span").html("<b>Tarih: </b>" + addZero(currentdate.getDate()) + "/" + (currentdate.getMonth()+1)  + "/" + currentdate.getFullYear());
        $("#hour-span").html("<b>Saat: </b>" + addZero(currentdate.getHours()) + ":" + addZero(currentdate.getMinutes()));
        setTimeout(timer,5000);
    }

    timer();

    var userData = [];

    $("#part-1-submit").on("click", function() {
        var alici = $("#alici").val().trim();
        var mektup = $("#mektup").val();
        if (alici.length>0 && mektup.length>0) {
            userData.push(alici,mektup);
            $("#part-1").css({
                'display': 'none'
            });
            $("#part-2").css({
                'display': 'block'
            });
        }
      else {
          alert("Bütün alanları doldurunuz.");
      }
    });

    $("#part-2-submit").on("click", function() {
        var gondericiisim = $("#gonderici-isim").val().trim();
        var gondericimail = $("#gonderici-mail").val().trim();
        var aliciisim = $("#alici-isim").val().trim();
        var alicimail = $("#alici-mail").val().trim();
        var gondericitelefon = $("#gonderici-telefon").val().trim();
        var gondericiadres = $("#gonderici-adres").val().trim();
        var alicitelefon = $("#alici-telefon").val().trim();
        var aliciadres = $("#alici-adres").val().trim();
        var uniqid = $("#uniqid").val();
        var channel = $("input[name=kanal]:checked").val()
        var token = $("input[name=token]").val();

        if(isPhone(alicitelefon) && isPhone(gondericitelefon)){
        if(isEmail(alicimail) && isEmail(gondericimail)){
        if (gondericiisim.length > 0 && gondericimail.length > 0 && aliciisim.length > 0 && alicimail.length > 0 && gondericitelefon.length > 0 && gondericiadres.length > 0 && alicitelefon.length > 0 && aliciadres.length > 0 ) {

            userData.push(gondericiisim,gondericiadres,aliciisim,aliciadres,gondericitelefon,gondericimail,alicitelefon,alicimail);
            $.ajax({
                type: 'POST',
                url: '../pdf.php',
                data: {
                    userData,
                    uniqid,
                    channel,
                    token
                },
                success:function(response) {
                    $("#part-2").css({
                        'display': 'none'
                    });
                    $("#part-3").css({
                        'display': 'block'
                    });
                }
            });

        }
        else{
            alert("Bütün alanları doldurunuz.");
        }
    }
    else{
        alert("Lütfen geçerli bir email giriniz.");
    }
    }
    else {
        alert("Lütfen geçerli bir telefon numarası giriniz.");
    }
    });

    $("#submit").on("click", function() {
        var kullaniciadi = $("#kullanici-adi").val().trim();
        var password = $("#password").val();
        if (kullaniciadi.length>0 && password.length>0) {
        //ne geleceği belirsiz submit etmesi gerek sanırım
        }
        else{
            alert("Bütün alanları doldurunuz.");
        }
    });
});



function isEmail(email) {
  var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  return regex.test(email);
}

function isPhone(phone) {
  var regex =/^(05)[0-9][0-9][1-9]([0-9]){6}$/;
  return regex.test(phone);
}
/*

    if($_POST['g-recaptcha-response']))
                $captcha=$_POST['g-recaptcha-response'];

              if(!$captcha){
                header("Location: ../../people.php?durum=no");
                exit();
              }
              $response=json_decode(file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=YOUR SECRET KEY&response=".$captcha."&remoteip=".$_SERVER['REMOTE_ADDR']), true);
              if($response['success'] == false)
              {
                header("Location: ../../people.php?durum=no");
              }
              else
              {
                header("Location: ../../people.php?durum=ok");
              }

*/
