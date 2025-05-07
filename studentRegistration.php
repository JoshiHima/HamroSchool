<!-- Start Student Registration Form-->
<!-- Success Message Box -->
<div id="successMsg" class="mb-3"></div>

<form id="stuRegForm">
  <div class="form-group mb-3">
    <label for="stuname" class="font-weight-bold">
      <i class="fas fa-user me-2"></i> Name
    </label>
    <div id="statusMsg1"></div>
    <input type="text" class="form-control" placeholder="Name" name="stuname" id="stuname">
  </div>

  <div class="form-group mb-3">
    <label for="stuemail" class="font-weight-bold">
      <i class="fas fa-envelope me-2"></i> Email
    </label>
    <div id="statusMsg2"></div>
    <input type="email" class="form-control" placeholder="Email" name="stumail" id="stuemail">
    <small class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>

  <div class="form-group mb-3">
    <label for="stupass" class="font-weight-bold">
      <i class="fas fa-key me-2"></i> New Password
    </label>
    <div id="statusMsg3"></div>
    <input type="password" class="form-control" placeholder="Password" name="stupass" id="stupass">
  </div>
</form>
<!-- End Student Registration Form-->
