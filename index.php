<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>AHDI</title>

  <!-- FONT & ICON -->
  <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;500;700&display=swap" rel="stylesheet"/>
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp"/>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <!-- STYLE -->
  <link rel="stylesheet" href="https://dekatutorial.github.io/18nembak/style.css"/>
</head>

<body>

<!-- PRELOAD -->
<div class="preload">
  <p>Loading dulu . . .</p>
</div>

<!-- OPEN -->
<div class="open">
  <div>
    <div class="lope" onclick="ilang()">
      <i class="love material-icons-sharp">favorite</i>
    </div>
    <h3>Pencet Love nya</h3>
  </div>
</div>

<div class="bg"></div>
<div class="lopeBg"></div>

<!-- STIKER -->
<div class="top stiker">
  <img src="1.gif" />
  <img src="2.gif" />
  <img src="3.gif" />
</div>

<!-- UCAPAN -->
<div class="ucapan">
  <div id="slider">
    <p>Hai Cantikk, boleh jujur ga?</p>
    <p>Aku suka kamu</p>
    <p>Kalo kamu tanya kenapa aku suka kamu, itu karena aku punya rasa nyaman dan cinta tersendiri yang ga akan aku temui di mana pun.

      Kamu Tau?
      Gaada yang bisa bikin aku suka selain kamu..

     </p>

    <p> Dan karena mengenalimu, aku merasakan apa itu cinta, apa itu kebahagiaan, dan kamu sekaligus rumah bagiku :)</p>
    <!-- Pertanyaan -->
    <p> Kamu mau gak pacaran sama aku?</p>


  </div>

  <div id="slider">
    <p>Makasih ya udah mau nerima aku ❤️</p>
  </div>
</div>

<!-- BUTTON -->
<div class="button">
  <div>
    <button type="button">Back</button>
    <button type="button">Next</button>
  </div>
  <div>
    <button type="button">Gamau</button>
    <button type="button" id="btnMau">Mau</button>
  </div>
  <div>
    <button type="button" onclick="modalPesan()">Kirim Pesan</button>
  </div>
</div>

<!-- MODAL PESAN -->
<div class="container-pesan" style="display:none">
  <div class="kirim-pesan">
    <p>Kirim ke WhatsApp aku ya 💬</p>
    <textarea id="pesanWA" cols="30" rows="8" placeholder="Tulis pesan..."></textarea>
    <button type="button" onclick="kirimWA()">Kirim</button>
  </div>
</div>

<!-- KONFIG -->
<script>
  var musik = "musik (2).mp3";
  var background = "background.jpg";
  var gambarStiker1 = "1.gif";
  var gambarStiker2 = "2.gif";
  var gambarStiker3 = "3.gif";
</script>

<!-- SCRIPT ASLI (WAJIB) -->
<script src="https://dekatutorial.github.io/18nembak/script.js"></script>

<!-- FIX TOMBOL MAU -->
<script>
document.getElementById("btnMau").addEventListener("click", function(){
  alert("Makasih ya ❤️\nKirim ke WhatsApp aku ya 😊");
  setTimeout(() => {
    modalPesan();
  }, 300);
});
</script>

<!-- WHATSAPP FIX -->
<script>
function kirimWA(){
  const pesan = document.getElementById("pesanWA").value.trim();

  if(pesan === ""){
    alert("Tulis pesannya dulu ya 😊");
    return;
  }

  // NOMOR WA TUJUAN
  const nomorWA = "6289647719232";

  const link = `https://wa.me/${nomorWA}?text=${encodeURIComponent(pesan)}`;
  window.location.href = link;
}
</script>

</body>
</html>
