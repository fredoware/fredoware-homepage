<?php
  $ROOT_DIR="../";
  include $ROOT_DIR . "mb-templates/header-store.php";

  $category_list = menuCategory()->list("storeId=$store->Id");

  $cart = $_SESSION["cart"];

  $totalAmount = 0;
  $totalQuantity = 0;

  foreach ($cart as $key => $qty){
    $item = menuItem()->get("Id=$key");
    $totalAmount += $item->price*$qty;
    $totalQuantity += $qty;

  }

?>

<main id="main">

  <section id="menu" class="menu">
    <div class="container" data-aos="fade-up">

      <div class="section-header">
        <h2>Notification</h2>
      </div>

      <div class="alert alert-danger" role="alert" id="alertBar" style="display:none;" onclick="location.href='kitchen-orders.php?status=Pending'">
          <span id="totalPending">0</span> new pending orders!
       </div>

     </div>
   </section>
 </main>

 <script type="text/javascript">
 var currentPending = 0;

 var intervalId = window.setInterval(function(){
   $.ajax({
       type: "GET",
       url: "api-pending-orders.php?storeName=<?=$storeName?>",
       success: function(data){
         const obj = JSON.parse(data);
         if (currentPending!=obj.totalPending) {
           document.getElementById("alertBar").style.display = "";
           document.getElementById("totalPending").innerHTML = obj.totalPending;
           currentPending = obj.totalPending;

           // Play sound
           const audio = new Audio("../templates/audio/notification.mp3");
           audio.play();
         }
       }
     });
 }, 5000);

 </script>

<?php include $ROOT_DIR . "mb-templates/footer.php"; ?>
