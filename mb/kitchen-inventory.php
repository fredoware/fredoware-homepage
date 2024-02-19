<?php
  $ROOT_DIR="../";
  include $ROOT_DIR . "mb-templates/header-store.php";

  $category_list = menuCategory()->list("storeId=$store->Id");


?>

<main id="main">

  <section id="menu" class="menu">
    <div class="container" data-aos="fade-up">

      <div class="section-header">
        <h2>Kitchen Inventory</h2>
      </div>

      <ul class="nav nav-tabs d-flex justify-content-center" data-aos="fade-up" data-aos-delay="200">

        <?php
          $count = 0;
         foreach ($category_list as $row):
           $count += 1;
           if ($count==1) {
             $activeStatus = "active show";
           }
           else{
             $activeStatus = "";
           }
           ?>
          <li class="nav-item">
            <a class="nav-link <?=$activeStatus?>" data-bs-toggle="tab" data-bs-target="#menu-link<?=$row->Id?>">
              <h4><?=$row->name;?></h4>
            </a>
          </li><!-- End tab nav item -->
        <?php endforeach; ?>
          </ul>

                <div class="tab-content" data-aos="fade-up" data-aos-delay="300">

                  <?php
                    $count = 0;
                   foreach ($category_list as $row):
                     $item_list = menuItem()->list("menuCategoryId=$row->Id");
                     $count += 1;
                     if ($count==1) {
                       $activeStatus = "active show";
                     }
                     else{
                       $activeStatus = "";
                     }
                     ?>


                         <div class="tab-pane fade <?=$activeStatus?>" id="menu-link<?=$row->Id?>">

                           <div class="tab-header text-center">
                             <h3><?=$row->name;?></h3>
                           </div>

                           <div class="row gy-5">

                            <?php foreach ($item_list as $item):
                                if ($item->status=="Available") {
                                  $availabiltyColor = "green";
                                }
                                else{
                                  $availabiltyColor = "red";
                                }
                               ?>
                               <div class="col-lg-4 menu-item" onclick="open_modal('<?=$item->Id?>')" style="margin-bottom:-30px" data-bs-toggle="modal" data-bs-target="#itemModal<?=$item->Id?>">

                                 <div class="card">
                                   <div class="card-body">
                                     <div class="row">
                                       <?php if ($item->image): ?>
                                       <div class="col">
                                           <img src="../media/<?=$item->image;?>" width="100%" alt="">
                                       </div>
                                     <?php endif; ?>
                                       <div class="col">
                                         <h4><?=$item->name;?></h4>
                                         <p class="ingredients">
                                           <?=$item->description;?>
                                         </p>
                                         <p class="price">
                                           <?=format_money($item->price);?>
                                         </p>
                                         <p id="availabilty<?=$item->Id?>" style="font-weight:bold;color:<?=$availabiltyColor;?>"><?=$item->status?></p>
                                       </div>
                                     </div>
                                   </div>
                                 </div>
                               </div>

                               <!-- Modal -->
                               <div class="modal fade" id="itemModal<?=$item->Id?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                 <div class="modal-dialog">
                                   <div class="modal-content">
                                     <div class="modal-header">
                                       <h1 class="modal-title fs-5"><?=$item->name;?></h1>
                                       <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                     </div>
                                     <div class="modal-body">
                                       Mark item as <b id="markAs<?=$item->Id?>">Status</b>
                                     </div>
                                     <div class="modal-footer">
                                       <button type="button" class="btn btn-primary" data-bs-dismiss="modal" aria-label="Close" onclick="change_item_status('<?=$item->Id?>')">Go</button>
                                     </div>
                                   </div>
                                 </div>
                               </div>
                            <?php endforeach; ?>


                           </div>
                         </div><!-- End Starter Menu Content -->


                  <?php endforeach; ?>


                </div>

              </div>
            </section><!-- End Menu Section -->

</main>


<script type="text/javascript">

function open_modal(itemId){
  var availabilty = document.getElementById("availabilty"+itemId);
  var markAs = document.getElementById("markAs"+itemId);
  if (availabilty.innerHTML=="Available") {
    markAs.innerHTML = "Not Available";
    markAs.style.color = "red";
  }
  else{
    markAs.innerHTML = "Available";
    markAs.style.color = "green";
  }
}

function change_item_status(itemId){
  var availabilty = document.getElementById("availabilty"+itemId);
  var markAs = document.getElementById("markAs"+itemId);
  if (markAs.innerHTML=="Available") {
    availabilty.innerHTML = "Available";
    availabilty.style.color = "green";
  }
  else{
    availabilty.innerHTML = "Not Available";
    availabilty.style.color = "red";
  }

  $.ajax({
      type: "GET",
      url: "process.php?action=change-item-status&Id=" + itemId + "&status=" + availabilty.innerHTML,
    });

}

</script>



<?php include $ROOT_DIR . "mb-templates/footer.php"; ?>
