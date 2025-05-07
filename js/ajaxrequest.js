$(document).ready(function () {
    // Email Checking Function on keypress and blur event
    $("#stuemail").on("keypress blur", function () {
      var reg = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
      var stuemail = $("#stuemail").val();
      $.ajax({
        url: 'Student/addstudent.php',
        method: 'POST',
        data: {
          checkemail: "checkemail",
          stuemail: stuemail,
        },
        success: function (data) {
          if (data != 0) {
            // Already exists
            $("#statusMsg2").html(
              '<div class="text-danger small">This Email ID is already used. Please use another one !!</div>'
            );
            $("#signup").attr("disabled", true);
          } else if (data == 0 && reg.test(stuemail)) {
            // Correct email
            $("#statusMsg2").html(
              '<div class="text-success small">Correct !!</div>'
            );
            $("#signup").attr("disabled", false);
          } else if (!reg.test(stuemail)) {
            // Invalid format
            $("#statusMsg2").html(
              '<div class="text-danger small">Please Enter Valid Email (example@gmail.com)!!</div>'
            );
            $("#signup").attr("disabled", false);
          }
          if (stuemail == "") {
            // Empty email field
            $("#statusMsg2").html(
              '<div class="text-danger small">Please don\'t leave this field empty !!</div>'
            );
          }
        }
      });
    });
  });
  
  // Student Registration Ajax Call
  function addStu() {
    var reg = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
    var stuname = $("#stuname").val();
    var stuemail = $("#stuemail").val();
    var stupass = $("#stupass").val();
  
    // Name Validation
    if (stuname.trim() == "") {
      $("#statusMsg1").html(
        '<div class="text-danger small">Please Enter Name !!</div>'
      );
      $("#stuname").focus();
      return false;
    }
  
    // Email Validation
    else if (stuemail.trim() == "") {
      $("#statusMsg2").html(
        '<div class="text-danger small">Please Enter Email !!</div>'
      );
      $("#stuemail").focus();
      return false;
    } else if (stuemail.trim() != "" && !reg.test(stuemail)) {
      $("#statusMsg2").html(
        '<div class="text-danger small">Please Enter Valid Email (example@gmail.com)!!</div>'
      );
      $("#stuemail").focus();
      return false;
    }
  
    // Password Validation
    else if (stupass.trim() == "") {
      $("#statusMsg3").html(
        '<div class="text-danger small">Please Enter Password !!</div>'
      );
      $("#stupass").focus();
      return false;
    }
  
    // Ajax Call to PHP
    else {
      $.ajax({
        url: 'Student/addstudent.php',
        method: 'POST',
        dataType: "json",
        data: {
          stusignup: "stusignup",
          stuname: stuname,
          stuemail: stuemail,
          stupass: stupass,
        },
        success: function (data) {
          console.log(data);
          if (data == "OK") {
            // Registration Success
            $('#successMsg').html(
              '<div class="alert alert-success alert-dismissible fade show" role="alert">\
                Registration Successful !!\
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>\
              </div>'
            );
            clearStuRegField();
          } else if (data == "Failed") {
            // Registration Failed
            $('#successMsg').html(
              '<div class="alert alert-danger alert-dismissible fade show" role="alert">\
                Unable to Register !!\
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>\
              </div>'
            );
          }
        }
      });
    }
  }
  
  // Clear Form Fields
  function clearStuRegField() {
    $("#stuRegForm").trigger("reset");
    $("#statusMsg1").html(" ");
    $("#statusMsg2").html(" ");
    $("#statusMsg3").html(" ");
  }
  