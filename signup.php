<?php

$message_id_already_exists = '';
$message_successfully_inserted_into_db = '';
$message_idnumber_thirteen_digits = '';
$message_idnumber_numeric = '';
if ( isset( $_POST['submit'] ) )
{

    require 'dbcon.php';
    $fname=$_POST['f_name'];
    $lname=$_POST['l_name'];
    $idnumber=$_POST['id_num'];
    $date = $_POST['reg_date'];
    $new_date = date("d/m/Y", strtotime($date));
        echo "<pre>";
            echo gettype($new_date);
            print_r($new_date);
        echo "</pre>";

    if (is_numeric($idnumber) && strlen($idnumber) === 13) {
        $errors = false;
        $sqlcheck="SELECT * FROM users WHERE id_num ='$idnumber'";
        $result=mysqli_query($conn,$sqlcheck);
        if(mysqli_num_rows($result) >= 1)
        {
            $message_id_already_exists = "<center><h1 class='white-text card'>Sorry...ID NUmber Provided Already Exists On the System!!!</h1></center>";
            print_r($message_id_already_exists);
        }
            else{
                $sql="INSERT INTO `users`(`f_name`,`l_name`,`id_num`,`reg_date`) 
                VALUES ('$fname','$lname','$idnumber','$new_date')";
                
                if ($conn->query($sql) === TRUE) {
                  $message_id_already_exists = "<center><h1 class='white-text card'>New record created successfully Created!!!</h1></center>";
                  print_r($message_id_already_exists);
                } else {
                  echo "Error: " . $sql . "<br>" . $conn->error;
                } 
        }
     }
     else {
        $message_idnumber_thirteen_digits = "<center><h1 class='white-text card'>Sign Up Failed Either Because ==> 1 = Contains Non Numerical Characters || 2 = Not a Valid ID Number !!! Enter a Valid Record to Succeed </h1></center>";
        print_r($message_idnumber_thirteen_digits);
      }

} ?>