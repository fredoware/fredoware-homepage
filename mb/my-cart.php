<?php
  $ROOT_DIR="../";
  include $ROOT_DIR . "mb-templates/header.php";

  $cart = $_SESSION["cart"];

  $totalAmount = 0;

  foreach ($cart as $key => $qty){
    $item = menu_item()->get("Id=$key");
    $totalAmount += $item->price*$qty;

  }

?>

<main id="main">

  <section id="menu" class="menu">
    <div class="container" data-aos="fade-up">

      <div class="section-header">
        <h2>My Cart</h2>
      </div>

      <div class="row">

        <?php
         foreach ($cart as $key => $qty):
          $item = menu_item()->get("Id=$key");
          $total = $item->price*$qty;

           ?>
      <div class="col-lg-4 menu-item mb-3" id="cartItem<?=$item->Id;?>">

        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="col">
               <img src="../media/<?=$item->image;?>" width="100%" alt="">
              </div>
              <div class="col">
                <h4><?=$item->name;?></h4>
                <p class="ingredients">
                  <?=$item->description;?>
                </p>
                <p class="price">
                  <?=format_money($item->price);?>
                </p>

                <button type="button" class="btn btn-warning" onclick="update_quantity('<?=$item->Id?>', '<?=$item->price?>', -1)">-</button>
                <button type="button" class="btn btn-warning" id="quantity<?=$item->Id?>"><?=$qty?></button>
                <button type="button" class="btn btn-warning" onclick="update_quantity('<?=$item->Id?>', '<?=$item->price?>', 1)">+</button>


                <div id="totalPrice<?=$item->Id?>" class="mt-3" style="font-size:20px;font-weight:bold;color:red">
                  <?=format_money($total);?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <?php endforeach; ?>



      </div>



    </div>
  </section><!-- End Menu Section -->

</main>


<div class="content-fluid bottom-sheet-dialog" onclick="location.href=''">
  <div class="card">
    <div class="card-body">
      <div class="row">
        <div class="col" style="text-align:left;margin-left:20px">
          Place Order
        </div>
        <div class="col-3" id="cartDisplayTotalAmount">
          0
        </div>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">


var totalAmount = document.getElementById("cartDisplayTotalAmount");
var cartTotalAmount = <?=$totalAmount?>;

totalAmount.innerHTML = format_money(cartTotalAmount);

function update_quantity(itemId, price, addedValue){
  var quantity = document.getElementById("quantity"+itemId);
  var totalPrice = document.getElementById("totalPrice"+itemId);
  var cartItem = document.getElementById("cartItem"+itemId);

  var newQuantity = parseInt(quantity.innerHTML) + parseInt(addedValue);

  var newTotal = 0;
  if (addedValue==1) {
    newTotal = parseFloat(cartTotalAmount) + parseFloat(price);
  }
  else{
    newTotal = parseFloat(cartTotalAmount) - parseFloat(price);
  }
  totalAmount.innerHTML = format_money(newTotal);
  cartTotalAmount = newTotal;


  if (newQuantity>=1) {
    quantity.innerHTML = newQuantity;
    totalPrice.innerHTML = format_money(newQuantity*parseFloat(price));
    $.ajax({
        type: "GET",
        url: "process.php?action=update-cart&itemId=" + itemId + "&value=" + newQuantity,
      });
  }
  else{
    cartItem.style.display = "none";
    $.ajax({
        type: "GET",
        url: "process.php?action=remove-from-cart&itemId=" + itemId,
      });
  }
}



</script>

<?php include $ROOT_DIR . "mb-templates/footer.php"; ?>
