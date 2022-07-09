<?php

$message = '';
if ( isset( $_POST['submit'] ) )
{

    // require './inc/dbcon.php';
    // require 'dbcon.php';
    $fname=$_POST['firstname'];
    $lname=$_POST['lastname'];
    $idnumber=$_POST['idnumber'];
    $date = $_POST['date'];
    $new_date = date("d/m/Y", strtotime($date));

    // $fdate = STR_TO_DATE(datestring, '%d/%m/%Y');
    echo "<pre>";
        print_r($fname);
        print_r($lname);
        print_r($idnumber);
        print_r($date);
    echo "</pre>";

    $sqlcheck="SELECT id_num FROM users WHERE id_num='$idnumber'";
    $result=mysqli_query($conn,$sqlcheck);
    if(mysqli_num_rows($result) >= 1)
    {
        $message = "<center><h1 class='white-text card'>Sorry...ID NUmber Provided Already Exists On the System!!!</h1></center>";
        print_r($message);
    }
        else{
            $sql="INSERT INTO `users`( `firstname`, `lastname`, `idnumber`, `date`) VALUES (  '$fname','$lname','$idnumber',$new_date)";
    }
    }
} ?>