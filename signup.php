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

    // echo "<pre>";
    // echo gettype($new_date2);
    //     print_r($new_date2);
    // echo "</pre>";

    if (is_numeric($idnumber) && strlen($idnumber) === 13) {

      $dateboss = substr($idnumber, 0, 6);
      $num_array = str_split($dateboss);

      $id_year = $num_array[0] . $num_array[1];
      $id_month = $num_array[2] . $num_array[3];
      $id_day = $num_array[4] . $num_array[5];
  
      if ( $id_year < 1 || $id_year > 2022) {
        $errors = true;
      }else {
        echo "Year: " . $id_year . "<br>";
      } 
      if ( $id_month < 1 || $id_month > 12) {
        $errors = true;
      }else {
        echo "Month: " . $id_month . "<br>";
      } 
  
      if ( $id_day < 1 || $id_day > 31) {
        $errors = true;
      }else {
        echo "Day: " . $id_day . "<br>";
      } 
  
     $finalYear = "". $id_day."/". $id_month."/". $id_year."";

     if(!$finalYear === $new_date)
     {
      $message_id_already_exists = "<center><h1 class='white-text card'>Sorry...ID NUmber Provided , Does Not Match the Date of Birth you entered on the system !!!</h1></center>";
      print_r($message_id_already_exists);
     }else{
      $errors = false;
      require 'dbcon.php';
      $sqlcheck="SELECT * FROM users WHERE id_num ='$idnumber'";
      $result=mysqli_query($conn,$sqlcheck);
      if(mysqli_num_rows($result) >= 1)
      {
          $message_id_already_exists = "<center><h1 class='white-text card'>Sorry...ID NUmber Provided Already Exists On the System!!!</h1></center>";
          print_r($message_id_already_exists);
      }
          else{
              $sql="INSERT INTO `users`(`f_name`,`l_name`,`id_num`,`reg_date`) 
              VALUES ('$fname','$lname','$idnumber','$finalYear')";
              
              if ($conn->query($sql) === TRUE) {
                $message_id_already_exists = "<center><h1 class='white-text card'>New record created successfully Created!!!</h1></center>";
                print_r($message_id_already_exists);
              } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
              } 
      }
     }
    
       
     }
     else {
        $message_idnumber_thirteen_digits = "<center><h1 class='white-text card'>Sign Up Failed Either Because ==> 1 = Contains Non Numerical Characters || 2 = Not a Valid ID Number !!! Enter a Valid Record to Succeed </h1></center>";
        print_r($message_idnumber_thirteen_digits);
      }

} ?>