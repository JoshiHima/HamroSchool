<?php
//session should be on top
if(!isset($_SESSION)){ // cehcking is session has started or not
    session_start();
}

include_once('../dbConnection.php');


// Checking Email Already Registered
if (isset($_POST['checkemail']) && isset($_POST['stuemail'])) {
    $stuemail = $_POST['stuemail'];
    $sql = "SELECT stu_email FROM student WHERE stu_email = '".$stuemail."'";
    $result = $conn->query($sql);
    $row = $result->num_rows;  // Get the number of rows (email occurrences)
    echo json_encode($row);  // Return the count of emails (0 if not found, 1 if found)
}





//Insert Student
if(isset($_POST['stusignup']) && isset($_POST['stuname']) 
&& isset($_POST['stuemail']) && isset($_POST['stupass'])){

$stuname = $_POST['stuname'];
$stuemail = $_POST['stuemail'];
$stupass = $_POST['stupass'];

//insert query
$sql = "INSERT  INTO student(stu_name, stu_email, stu_pass) VALUES
('$stuname', '$stuemail', '$stupass')";

if($conn->query($sql) == TRUE ){
    echo json_encode("OK");
}else{
    echo json_encode("Failed");
}
    
}


// Student login verification
if(!isset($_SESSION['is_Login'])){
// the login will run only if the session has not started or the user has not logged in
//if the user is already logged, so there is no any sense of logging in the same user again,
//so thats why the code is pushed inside the session check statement

if(isset($_POST['checkLogemail']) && isset($_POST['stuLogEmail'])
&& isset($_POST['stuLogPass'])){

    $stuLogEmail = $_POST['stuLogEmail'];
    $stuLogPass = $_POST['stuLogPass'];

    $sql = "SELECT stu_email, stu_pass FROM student WHERE stu_email = '".$stuLogEmail."' AND stu_pass = '".$stuLogPass."'";

    $result = $conn->query( $sql );

    $row = $result->num_rows; // gives the number of data with the email and password

    if($row === 1){
        //session 
        //once the user has logged the following this will happen and the email will be stroed in a variable
        $_SESSION['is_Login'] = true;
        $_SESSION['stuLogEmail'] = $stuLogEmail;
        echo json_encode($row);

    } else if($row === 0){ // if there is no any data of email and password
        echo json_encode($row);
    }

}
}

?>