<?php
Class Functions{
    public function secured_hash($input)
    {$output = password_hash($input,PASSWORD_DEFAULT);
    return $output;
    }
    public function myLogFunc($y,$z)
    {
        $upass = array('Username'=>$y ,'Password'=>$z);
        return $upass;
    }

    }
    function SqlInject($Username,$c, $d)
    {        $stmt = $c->prepare($d);
    $stmt->bind_param('s', $Username);
    $stmt->execute();
    $result1 = $stmt->get_result();
    $numrow = mysqli_num_rows($result1);
    $stage = array('Numrow'=>$numrow, 'Result'=>$result1 );
    return $stage;}function ArrCon($B){   $hat = " " ;
    foreach($B as $selected){
        $hat .= $selected.", ";
    }   return $hat;}
    function ArrCon2($F){   $hatt = " " ;   foreach($F as $selected2){   $hatt .= "$selected2, ";   }   return $hatt;}function better_crypt($input, $rounds = 12){    $salt = "";    $salt_chars = array_merge(range('A','Z'), range('a','z'), range(0,9));    for($i=0; $i < 22; $i++) {      $salt .= $salt_chars[array_rand($salt_chars)];    }    return crypt($input, sprintf('$2y$%02d$', $rounds) . $salt);  }
?>