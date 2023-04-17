<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "lnmcbm";
    $showalert = false;
    $showerror = false;
    $name = $_POST['fname'];
    $e_mail = $_POST['email'];
    $mob = $_POST['mobile_no'];
    $Course = $_POST['course'];
    $pass = $_POST['password'];
    $conpass = $_POST['confirmpassword'];
    echo $name . '<br>';
    echo $e_mail . '<br>';
    echo $mob . '<br>';
    echo $Course . '<br>';
    echo $pass . '<br>';
    echo $conpass . '<br>';

    // Create connection
    $conn = new mysqli($servername, $username, $password,$dbname);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    else{
        echo "Connected successfully";
    }

//Create database code

//    $sql ="CREATE DATABASE lnmcbm";
//    if(mysqli_query($conn,$sql)){
//         echo "Database created successfully";
//    }else{
//         echo "Error database: " . mysqli_error($conn);
//    }
   
//    mysqli_close($conn);

//Create table code
// $sql = "CREATE TABLE teacher_registration (
//     id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//     fullname VARCHAR(100) NOT NULL,
//     email VARCHAR(50),
//     mobile_no VARCHAR(15) NOT NULL,
//     course VARCHAR(30) NOT NULL,
//     reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
//     )";

// if (mysqli_query($conn, $sql)) {
//     echo "Table student_registration created successfully";
//   } else {
//     echo "Error creating table: " . mysqli_error($conn);
//   }
  
//   mysqli_close($conn);

if($pass ==  $conpass){
    $sql = "INSERT INTO student_registration (fullname, email, mobile_no, password, course)
VALUES ('$name','$e_mail','$mob','$pass','$Course')";
    $result = mysqli_query($conn, $sql); 
    if ($result) {
        $showalert = true;
        header("location:contactus.php");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}else{
    $showalert = true;
}
?>