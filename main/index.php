<?php
  $ROOT_DIR="../";
  include $ROOT_DIR . "templates/header.php";


?>


<section id="home">
  <div id="carouselExampleCaptions" class="carousel slide">

    <div class="carousel-inner">
      <div class="carousel-item active">

        <img src="../templates/img/test.jpg" class=" w-100 center-cropped">

        <div class="carousel-caption d-md-block">
          <h5>We Make Ideas Happen</h5>
          <p>Some representative placeholder content for the first slide.</p>
          <button type="button" name="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Start a project</button>
        </div>
      </div>
    </div>

  </div>
</section>

<section id="websites">
ASDASDHAKJSHDJAKSHDJASDHKJ
</section>

<section id="apps">

</section>

<section id="aboutus">

</section>

<section id="contact">

</section>
<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Inquire Now</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="process.php?action=inquiry-add" method="post">
  <div class="row">
    <div class="col-6">
        <input type="text" name="firstName" placeholder="Firstname*" class="form-control">
    </div>
    <div class="col-6">
        <input type="text" name="lastName" placeholder="Lastname*" class="form-control">
    </div>
    <div class="col-12 mt-2">
        <input type="text" name="company" placeholder="Company(optional)*" class="form-control">
    </div>
    <div class="col-6 mt-2">
        <input type="text" name="email" placeholder="Email Address*" class="form-control">
    </div>
    <div class="col-6 mt-2">
      <input type="text" name="phone" placeholder="Contact Number*" class="form-control">
    </div>

    <div class="col-12 mt-5">
      <select class="form-control" name="type" required>
      <option value="">--Select--</option>
      <option>Website</option>
      <option>Apps</option>
      </select>
    </div>
    <div class="col-12 mt-2">
      <textarea  class="form-control" type="text" name="message" placeholder="Message*" required>
      </textarea>
      <br>
      <button type="submit" name="button" class="btn btn-primary">SUBMIT</button>

    </div>
          </form>


      </div>
    </div>
  </div>
</div>
<?php include $ROOT_DIR . "templates/footer.php"; ?>
