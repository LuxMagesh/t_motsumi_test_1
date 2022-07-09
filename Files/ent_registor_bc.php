 <?php 
 
 include_once 'Functions.php';
 $message = '';
 if (isset($_POST['reg'])) 
 {
 

        //Connect to the database   
   require 'dbconn.php';
   $fname=mysqli_real_escape_string($conn ,$_POST['name']);
    $inputEmail= $_POST['Email'] ;
  // $age=mysqli_real_escape_string($conn ,$_POST['dob']);
   $cell=mysqli_real_escape_string($conn ,$_POST['Phone']);
  // $sex=mysqli_real_escape_string($conn ,$_POST['gender']);
  // $race=mysqli_real_escape_string($conn ,$_POST['race']);
   // $citzenship=mysqli_real_escape_string($conn ,$_POST['citzenship']);
   $ind=mysqli_real_escape_string($conn ,$_POST['ind']);
  // $id=mysqli_real_escape_string($conn ,$_POST['ID']);

  // $ind=ArrCon($_POST['ind']);

   $password= secured_hash($_POST['password2']);

   $sqlcheck="SELECT inputEmail FROM users WHERE inputEmail='$inputEmail'";
   $result=mysqli_query($conn,$sqlcheck);
   if(mysqli_num_rows($result) >= 1)
   {
     $message = "<center><h1 class='white-text card'>Sorry...Email Provided Already Exists!!!</h1></center>";
    print_r($message);
   }else{
      $sql="INSERT INTO `users`( `name`, `inputEmail`, `cell`, `date_reg`, `industry`, `password`) VALUES (  '$fname','$inputEmail','$cell',NOW(),'$ind','$password')";

          if (mysqli_query($conn, $sql)) {

            $query_user = "SELECT id FROM users WHERE inputEmail = '$inputEmail'";
            $result_user=mysqli_query($conn,$query_user);

            while($user_id=mysqli_fetch_assoc($result_user)){
              $user_id = $user_id['id'];
              $sql_in= "INSERT INTO profile (`uid`) VALUES ('$user_id')";
              $query_in = mysqli_query($conn, $sql_in);


              $link="http://$_SERVER[HTTP_HOST]".strstr($_SERVER['REQUEST_URI'], 'registration.php', true)."/activate?id=" . $user_id;
               include_once"mail.php";
              }
            }
        }
}
 
        ?>