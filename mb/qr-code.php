<?php
  $ROOT_DIR="../";
  include $ROOT_DIR . "mb-templates/header.php";

?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js"></script>
<script>
  window.addEventListener("load", () => {
    var qrc = new QRCode(document.getElementById("qrcode"), "192.168.118.249/fredoware-homepage/mb/process.php?action=store-check-in&store=wingsxpress");
  });
</script>


<div class="card" style="margin-top:200px;">
  <div class="card-body">
    <div id="qrcode"></div>
  </div>
</div>





<?php include $ROOT_DIR . "mb-templates/footer.php"; ?>
