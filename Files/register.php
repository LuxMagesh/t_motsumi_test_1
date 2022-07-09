
<?php
include_once"includes/ent_registor.php";

  ?>



<!DOCTYPE html>
<html lang="en">
<head>
<title>BizNex Register</title>
 <meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
 <link href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=devanagari,latin-ext" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
<link href="css/register.css" type="text/css" rel="stylesheet" media="all">   
 <link rel="stylesheet" href="css/bootstrap.min.css">  

<link rel="stylesheet" href="css/font-awesome.min.css"> 
    <link href=" css/select2/dist/css/select2.css" rel="stylesheet" type="text/css"/>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-125418044-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-125418044-1');
</script>

</head>
 <body>
<script src='js/jquery.min.js'></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script src="css/select2/dist/js/select2.js"></script>
<!-- section -->
<section class="register">
	<div class="register-full">
		<div class="register-left">
			<div class="register">
				<div class="logo">
					<a href="#"><img src="img/logo2.png" class="img-responsive"></a>

				</div>
 				<div class="content3">
					<ul>
						<li><a class="" href="./">Main Site</a></li>
 					</ul>
				</div>
			</div>
		</div>
		<div class="register-right">
			<div class="register-in">
				<h2><span class="fa fa-pencil"></span> register here</h2>
				<div class="register-form">
					<form  method="post" enctype="multipart/form-data" action="<?php echo $_SERVER['REQUEST_URI'];?>" role="form" id="registration" data-toggle="validator" >
						<div class="fields-grid">
							<div class="styled-input agile-styled-input-top">
								<input type="text" name="name" required=""> 
								<label>Enter Full Name</label>
								<span></span>
							</div>
							<div class="styled-input">
								<input type="email" name="Email" required="">
								<label>Email</label>
								<span></span>
							</div>
							<div class="styled-input">
								<input type="tel" name="Phone" id='phone' required="">
								<label>Phone Number</label>
								<div id="error2"> <p class="btn-danger">Invalid Phone Number</p></div>

								<span></span>
							</div>
 
 						
							<div class="styled-input">
								<input type="password" id="pass1" name="password" required="">
								<label>Password</label>
								<span></span>
							</div>

<div class="styled-input">
								<input type="password" id="pass2" name="password2" required="">
								<label>Confirm Password</label>
								<span></span>
							</div>


							<div class="styled-input agile-styled-input-top">

         <select  name="ind" required="" class=" browser-default" style="color: white">
        <option selected disabled="" >Select Your Industry..*</option>
			<option>Accommodation Establishment</option>
			<option>Tour Guide</option>
			<option>General Tourism</option>
			<option>Medical, Health and health services</option>
			<option>Education and training</option>
			<option>Transportation logistics and services</option>
			<option>Professional Business Services</option>
			<option>Legal and Law Enforcement</option>
			<option>Industrial and manufacturing</option>
			<option>Science and Technology</option>
			<option>Telecommunications</option>
			<option>Infrastructure Development and construction</option>
			<option>Communication and society mobilization</option>
      </select> 
								<span></span>
							</div>
							<div class="clear"> </div>
							 <label class="checkbox"><input type="checkbox" name="checkbox" required=""><i></i>I agree to the <a href="#" data-toggle="modal" data-target="#myModal">Terms and Conditions</a></label>
						</div>
 						<input style="display: block" type="submit" id="register" name="reg" value="Register">
					</form>
				</div>

			</div>
			<div class="clear"> </div>
		</div>
	<div class="clear"> </div>
	</div>
	<!---728x90--->
</div>
 
	<!---728x90--->

</section>
<!-- //section -->

<script type="text/javascript">




$( document ).ready(function() {

var password = document.getElementById("pass1")
var confirm_password = document.getElementById("pass2");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Passwords Don't Match");
  } else {
    confirm_password.setCustomValidity('');
  }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;




$('#register').hide();
$('#error').css('display', 'none');
$('#error2').css('display', 'none');

$("#phone").on('input',function () {

    var txtEntered = false;
    var error = $('#error2');
	var call = $('#phone').val();
    var correct = true;

     txtEntered = ($(this).val() !== "" ) ? true :  false ;

    if (txtEntered){
        correct = ( call.length != 10 || !isNumber(call) ) ? false :  true ;

             if (correct) {
                error.css('display', 'none');
                $('#register').show();

            $('#result2').empty();
            }else{
                error.css('display', 'block');
            }
}


function isNumber(n) {
    return !isNaN(parseFloat(n)) && isFinite(n);
}


});



});
</script>

   <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
       <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Terms and Conditions</h4>
        </div>
        <div class="modal-body">
         <center> <p>The profile of each entrepreneur is subject classification based on a custom BizNexus criteria. BizNexus is not under any obligation whatsover to reveal, share or modify the criteria used, save to mention  that the same scoring system is used for all entrepreneurs accessing the BizNexus website. <br>By accepting to provide profile information the user agrees to being scored on this criteria and that BizNexus reserves the right not to reveal the resultant score or to explain how it is arrived at. <br>The information obtained from the users is volunteered by them directly and it is not sourced discreetly or through the use of any cookies.</p></center>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>

</body>	
 </html>
 