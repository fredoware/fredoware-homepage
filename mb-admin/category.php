<?php
  $ROOT_DIR="../";
  include $ROOT_DIR . "mb-admin-templates/store-header.php";
  $store = store()->get("Id=$storeId");
  $category_list = menuCategory()->list("storeId=$store->Id");

?>


<h1>Menu Category</h1>
  <table class="table">
    <th>#</th>
    <th>Name</th>

    <th> <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addModal">Add Category</button></th>
<th></th>
    <th></th>
    <!-- Start modal Add -->
    <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add new Category</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form class="" action="process.php?action=add-category&storeId=<?=$storeId?>" method="post" enctype="multipart/form-data">


            <input type="hidden" name="storeId" value="<?=$store->Id?>" class="form-control" required>
            Name:
            <input type="text" name="name" class="form-control" required>
            Description:
            <input type="text" name="description" class="form-control" required>
            <br>
            Image:
            <input type="file" name="image">

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save changes</button>
          </form>
        </div>
      </div>
    </div>
    </div>
    <!-- End modal Add -->

        <?php
        $count = 0;
        foreach ($category_list as $row):
        $count += 1; ?>

      <tr>
        <td><?=$count?></td>
        <td><?=$row->name?></td>
        <td> <a href="menu-item.php?Id=<?=$row->Id?>" class="btn btn-info">View</a>
        <button type="button" class="btn btn-warning" data-bs-toggle="modal"  data-bs-target="#view<?=$row->Id?>">Edit</button>
        <a href="process.php?action=delete-category&Id=<?=$row->Id?>&storeId=<?=$storeId?>" class="btn btn-danger">Delete</a></td>
        <td></td>
        <td></td>
        </tr>

<!-- Start modal View -->

<div class="modal fade" id="view<?=$row->Id?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel">Edit Category</h5>
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">Close</button>

    </div>
    <div class="modal-body">
      <form  action="process.php?action=edit-category&Id=<?=$row->Id?>" method="post">
        Name:
        <input type="text" name="name" class="form-control" value="<?=$row->name?>">

    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      <button type="submit" class="btn btn-primary">Save changes</button>
      </form>
    </div>
  </div>
</div>
</div>

<?php endforeach; ?>
<!-- End modal View -->

</table>
</div>
<?php include $ROOT_DIR . "mb-admin-templates/footer.php"; ?>
