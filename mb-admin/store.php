<?php
  $ROOT_DIR="../";
  include $ROOT_DIR . "mb-admin-templates/header.php";
  $store_list = store()->list();
  $password = rand_string(6); //the number specified in brackets is the amount of characters in your password

?>


<h1>Store</h1>
  <table class="table">
    <th>Logo</th>
    <th>Store</th>
    <th>Owner</th>
    <th> <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#addModal">Add Store</button></th>

    <th></th>
    <th></th>
    <!-- Start modal Add -->
    <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add new Store</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form class="" action="process.php?action=add-store" method="post" enctype="multipart/form-data">
            Store Code:
            <input type="text" name="storeCode" class="form-control" required>
            Storename:
            <input type="text" name="name" class="form-control" required>
            Owner:
            <input type="text" name="owner" class="form-control" required>
            Phonenumber:
            <input type="text" name="phone" class="form-control" required>
            Address:
            <input type="text" name="address" class="form-control" required>
            Email Address:
            <input type="text" name="email" class="form-control" required>

            <input type="hidden" name="email" class="form-control" required>

            Theme:
            <input type="text" name="theme" class="form-control" required>
            Password:
            <input type="text" name="password" class="form-control" value="<?=$password?>" required>
            <br>
            Logo:
            <input type="file" name="logo" required>

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

    <?php foreach ($store_list as $row): ?>
      <tr>
        <td><img src="../media/<?=$row->logo?>" style="width:40px; height:40px; border-radius:50%;"></td>
        <td><?=$row->name?></td>
        <td><?=$row->owner?></td>


        <td>
          <a href="process.php?action=view-store&Id=<?=$row->Id?>" class="btn btn-info">View Store</a>

          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#edit<?=$row->Id?>">Edit</button>
           <a href="process.php?action=delete-store&Id=<?=$row->Id?>" class="btn btn-danger">Delete</a> </td>

      <td></td>
      <td></td>
      </tr>



<!-- Start modal View -->

<div class="modal fade" id="edit<?=$row->Id?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel">Edit Admin</h5>
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">Close</button>

    </div>
    <div class="modal-body">
      <form class="" action="process.php?action=edit-store&Id=<?=$row->Id?>" method="post" enctype="multipart/form-data">
        Store Code:
        <input type="text" name="storeCode" class="form-control" value="<?=$row->storeCode?>" required>
        Storename:
        <input type="text" name="name" class="form-control" value="<?=$row->name?>" required>
        Owner:
        <input type="text" name="owner" class="form-control" value="<?=$row->owner?>" required>
        Phonenumber:
        <input type="text" name="phone" class="form-control" value="<?=$row->phone?>" required>
        Address:
        <input type="text" name="address" class="form-control" value="<?=$row->address?>" required>
        Email Address:
        <input type="text" name="email" class="form-control" value="<?=$row->email?>" required>
        Theme:
        <input type="text" name="theme" class="form-control" value="<?=$row->theme?>" required>
        Password:
        <input type="text" name="password" class="form-control" value="<?=$password?>" required>
        <br>
        Logo:
        <input type="file" name="logo">

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
<?php endforeach; ?>
</table>
</div>
<?php include $ROOT_DIR . "mb-admin-templates/footer.php"; ?>
