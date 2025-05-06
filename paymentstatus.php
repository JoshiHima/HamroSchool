<!-- Start Header -->
<?php
include('./mainInclude/header.php');
?>
<!-- End Header -->

<!-- Start Course Page Banner-->

<div class="container-fluid p-0" style="height: 80vh; background-color: #000;">
  <div class="row m-0 h-100">
    <img src="image/courseimg/course_banner.jpg" alt="courses"
         style="height: 100%; width: 100%; object-fit: fill; display: block;">
  </div>
</div>
<!-- End Course Page banner-->

<!-- Start Main Content-->
<div class="container">
  <h2 class="text-center my-4">Payment Status</h2>
  <form action="" method="post">
    <div class="form-group row justify-content-center">
      <label class="col-form-label mr-2">Order ID:</label>
      <div>
        <input type="text" class="form-control">
      </div>
      <div>
        <input type="submit" class="btn btn-primary ml-2" value="View">
      </div>
    </div>
  </form>
</div>
<!-- End Main Content-->

<!-- Start Contact Us-->
   <?php
    include('./contact.php');
    ?>
<!-- End Contact Us-->

<!-- Start Footer -->
<?php
include('./mainInclude/footer.php');
?>
<!-- End Footer -->