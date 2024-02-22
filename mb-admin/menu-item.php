<?php
  $ROOT_DIR="../";
  include $ROOT_DIR . "mb-admin-templates/store-header.php";
  $Id = $_GET["Id"];
  $menu_list = menuItem()->list("menuCategoryId='$Id'");
?>


<h1>Menu</h1>
  <table class="table">
    <th>#</th>
    <th>Logo</th>
    <th>Name</th>
    <th>Price</th>
    <th> <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addModal">Add Menu</button></th>
<th></th>
    <th></th>
    <!-- Start modal Add -->
    <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add new Menu</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="process.php?action=add-menu&Id=<?=$Id?>" method="post" enctype="multipart/form-data">


            <input type="hidden" name="menuCategoryId" class="form-control" value="<?=$Id?>" required>
            Name:
            <input type="text" name="name" class="form-control" required>
            Price:
            <input type="text" name="price" class="form-control" required>
            Description:
            <input type="text" name="description" class="form-control" required>
            <br>
            Image:
            <input type="file" name="image" required>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save Menu</button>
          </form>
        </div>
      </div>
    </div>
    </div>
    <!-- End modal Add -->

        <?php
        $count = 0;
        foreach ($menu_list as $row):
        $count += 1; ?>

      <tr>

        <td><?=$count?></td>
        <td><img src="../media/<?=$row->image?>" style="width:40px; height:40px; border-radius:50%;"></td>
        <td><?=$row->name?></td>

        <td><?=$row->price?></td>
        <td>
        <button type="button" class="btn btn-warning" data-bs-toggle="modal"  data-bs-target="#view<?=$row->Id?>">Edit</button>
        <button type="button" class="btn btn-danger" data-bs-toggle="modal"  data-bs-target="#delete<?=$row->Id?>">Delete</button></td>
        <td></td>
        <td></td>
        </tr>







<!-- Start modal View -->

<div class="modal fade" id="view<?=$row->Id?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel">Edit Menu</h5>
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">Close</button>

    </div>
    <div class="modal-body">
      <form action="process.php?action=edit-menu&Id=<?=$row->Id?>&categoryId=<?=$Id?>" method="post" enctype="multipart/form-data">
        Name:
        <input type="text" name="name" class="form-control" value="<?=$row->name?>">
        Price:
        <input type="text" name="price" class="form-control" value="<?=$row->price?>">
        <br><br>
        Image:
        <input type="file" name="image" value="<img src="../media/<?=$row->image?>"">
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      <button type="submit" class="btn btn-primary">Save changes</button>
      </form>
    </div>
  </div>
</div>
</div>


<!-- End modal View -->

<!-- Start Delete Modal -->

<div class="modal fade" id="delete<?=$row->Id?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel">Delete?</h5>
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">Close</button>

    </div>
    <div class="modal-body">
      <form class="" action="process.php?action=delete-menu&Id=<?=$row->Id?>&categoryId=<?=$Id?>" method="post" enctype="multipart/form-data">
        ARE YOU SURE YOU WANT TO DELETE THIS MENU?

    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      <button type="submit" class="btn btn-primary">Delete</button>
      </form>
    </div>
  </div>
</div>
</div>
<!-- End Delete Modal -->


<?php endforeach; ?>
</table>
</div>
<?php include $ROOT_DIR . "mb-admin-templates/footer.php"; ?>
