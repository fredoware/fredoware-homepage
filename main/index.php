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
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<?php include $ROOT_DIR . "templates/footer.php"; ?>
