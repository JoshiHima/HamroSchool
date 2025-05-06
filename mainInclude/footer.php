 <!--Start Footer-->
 <footer class="container-fluid bg-dark text-center p-2">
    <small class="text-white">Copyright &copy; 2025 || Designed by HamroSchool || <a href="#login"
    data-bs-toggle="modal" data-bs-target="#adminLoginModalCenter">Admin Login</a></small>
 </footer> <!-- End Footer-->


<!-- Start Student Registration Modal-->
<!-- Modal -->
<div class="modal fade" id="stuRegModalCenter" tabindex="-1" aria-labelledby="stuRegModalCenterLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="stuRegModalCenterLabel">Student Registration</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!-- Start Student Registration Form-->
         <?php
          include('studentRegistration.php');
         ?>

        <!-- End Student Registration Form-->

      </div>
      <div class="modal-footer">
        <span id="successMsg"></span>
      <button type="button" class="btn btn-primary" onclick="addStu()">Sign Up </button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- End Student Registration Modal -->

<!-- Start Student Login Modal-->
<!-- Modal -->
<div class="modal fade" id="stuLoginModalCenter" tabindex="-1" aria-labelledby="stuLoginModalCenterLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="stuLoginModalCenterLabel">Student Login</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!-- Start Student Login Form-->
<form id="stuLoginForm">
  <div class="form-group mb-3">
    <label for="stuLogemail" class="font-weight-bold">
      <i class="fas fa-envelope me-2"></i> Email
    </label>
    <input type="email" class="form-control" placeholder="Email" name="stuLogmail" id="stuLogemail">
  </div>

  <div class="form-group mb-3">
    <label for="stuLogpass" class="font-weight-bold">
      <i class="fas fa-key me-2"></i> Password
    </label>
    <input type="password" class="form-control" placeholder="Password" name="stuLogpass" id="stuLogpass">
  </div>
</form>
<!-- End Student Login Form-->

      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-primary" id="stuLoginBtn">Login</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
      </div>
    </div>
  </div>
</div>

<!-- End Student Login Modal -->

<!-- Start Admin Login Modal-->
<!-- Modal -->
<div class="modal fade" id="adminLoginModalCenter" tabindex="-1" aria-labelledby="adminLoginModalCenterLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="adminLoginModalCenterLabel">Admin Login</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!-- Start Admin Login Form-->
<form id="adminLoginForm">
  <div class="form-group mb-3">
    <label for="adminLogemail" class="font-weight-bold">
      <i class="fas fa-envelope me-2"></i> Email
    </label>
    <input type="email" class="form-control" placeholder="Email" name="adminLogmail" id="adminLogemail">
  </div>

  <div class="form-group mb-3">
    <label for="adminLogpass" class="font-weight-bold">
      <i class="fas fa-key me-2"></i> Password
    </label>
    <input type="password" class="form-control" placeholder="Password" name="adminLogpass" id="adminLogpass">
  </div>
</form>
<!-- End Student Login Form-->

      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-primary" id="adminLoginBtn">Login</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
      </div>
    </div>
  </div>
</div>

<!-- End Student Login Modal -->









    






<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<script src="js/all.min.js"> </script>

<script type="text/javascript" src="js/owl.carousel.min.js"></script>
<script type="text/javascript" src="js/slider.js"></script>
<script type="text/javascript" src="js/ajaxrequest.js"></script>
</body>
</html>