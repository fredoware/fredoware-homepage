<?php
  $ROOT_DIR="../";
  include "templates/header.php";
  $roles = get_query_string("role", "");
  $user_list = user()->list("role='$roles'");
  $password = rand_string(6); //the number specified in brackets is the amount of characters in your password

?>


<h1><?=$roles?></h1>
  <table class="table">
    <th>Fullname</th>
    <th>Role</th>

  <?php if ($role=="Admin"): ?>
    <th>Password</th>
    <th> <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addModal">Add <?=$roles?></button></th>
  <?php endif; ?>
    <th></th>
    <th></th>
    <!-- Start modal Add -->
    <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add new <?=$roles?></h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form class="" action="process.php?action=add-user&Id=<?=$roles?>" method="post">
            Firstname:
            <input type="text" name="firstName" class="form-control" required>
            Lastname:
            <input type="text" name="lastName" class="form-control" required>
            Username:
            <input type="text" name="username" class="form-control" required>

            <input type="hidden" name="role" class="form-control" value="<?=$roles?>" required>
            Password:
            <input type="text" name="password" class="form-control" value="<?=$password?>" required>

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

    <?php foreach ($user_list as $row): ?>
      <tr>
        <td><?=$row->firstName?> &nbsp;<?=$row->lastName?></td>
        <td><?=$row->role?></td>
        <?php if ($role=="Admin"): ?>
        <td><?=$row->password?></td>


        <td> <button type="button" class="btn btn-warning" data-bs-toggle="modal"  data-bs-target="#view<?=$row->Id?>">View</button>
        <a href="process.php?action=delete-user&Id=<?=$row->Id?>&role=<?=$roles?>" class="btn btn-danger">Delete</a> </td>
        <?php endif; ?>
      <td></td>
      <td></td>
      </tr>







<!-- Start modal View -->

<div class="modal fade" id="view<?=$row->Id?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel">Edit Admin</h5>
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">Close</button>

    </div>
    <div class="modal-body">
      <form class="" action="process.php?action=edit-user&Id=<?=$row->Id?>&role=<?=$roles?>" method="post">
        Firstname:
        <input type="text" name="firstName" class="form-control" value="<?=$row->firstName?>"required>
        Lastname:
        <input type="text" name="lastName" class="form-control" value="<?=$row->lastName?>"required>
        Username:
        <input type="text" name="username" class="form-control"   value="<?=$row->username?>"required>
        Password:
        <input type="text" name="password" class="form-control" value="<?=$row->password?>" required>


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
<?php include "templates/footer.php"; ?>
