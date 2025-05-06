function addStu(){
var reg = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
var stuname = $("#stuname").val();
var stuemail = $("#stuemail").val();
var stupass = $("#stupass").val();

//checking for fiels on form submission
if(stuname.trim() == ""){
    $("#statusMsg1").html(
        '<small style="color: red;">Please Enter Name !!</small>'
    );
    $("#stuname").focus();
    return false;
} else if(stuemail.trim() == ""){
    $("#statusMsg2").html(
        '<small style="color: red;">Please Enter Email !!</small>'
    );
    $("#stuemail").focus();
    return false;
} else if(stuemail.trim() != "" && !reg.test(stuemail)){
    $("#statusMsg2").html(
        '<small style="color: red;">Please Enter  Valid Email (example@gmail.com)!!</small>'
    );
    $("#stuemail").focus();
} else if(stupass.trim() == ""){
    $("#statusMsg3").html(
        '<small style="color: red;">Please Enter Password !!</small>'
    );
    $("#stupass").focus();
    return false;
} else{

    $.ajax({
        url:'Student/addstudent.php',
        method: 'POST',
        dataType: "json",
        data:{
            stusignup: "stusignup",
            stuname: stuname,
            stuemail: stuemail,
            stupass: stupass,
        },
        success:function(data){
            console.log(data);
            if(data == "OK"){
                $('#successMsg').html(
                    '<span class="alert alert-success">Registration Successful !!</span>'
                );
                clearStuRegField(); //calling the function to empty fields after submit
            }else if(data == "Failed"){
                $('#successMsg').html(
                    '<span class="alert alert-danger">Unable to Register !!</span>'
                );
            }
    
        }
    });

}

}

//empty all fields
function clearStuRegField(){
    $("#stuRegForm").trigger("reset");
    $("#statusMsg1").html(" ");
    $("#statusMsg2").html(" ");
    $("#statusMsg3").html(" ");
}