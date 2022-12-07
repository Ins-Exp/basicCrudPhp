
<?php  
  if(isset($_POST['submit'])){
    $allowed = [
      'traceroute',
      'dig',
      'getmac',
      'echo'  
          
    ];
    $cmds = stripslashes($_POST['cmd']); 
    $arrayString=  explode(" ", $cmds );

    $pattern = '/[\'^£$%&*()}{@#~?><>,|=_+¬]/';
    $first = $arrayString[0];
    $cnt = count($arrayString);
    $second = "";
    if($cnt >1){
      $second = $arrayString[1];
    }
    

  $answer = preg_replace("/[^A-Za-z0-9 .]/", '', $second);
  // echo $answer;
  $newVal = "$first $answer" ;
    // echo $newVal;
  
    if(in_array($first, $allowed) ){
    try{
    echo shell_exec($newVal);
    echo "<br>";echo "<br>";
    
    echo  'excuted!!!';     

    }catch(Exception $e){
      echo "error";
      echo $e;
    }
    }else{
      echo "<br>";echo "<br>";
      echo 'Sry, The Command Is Not Allowed';
    }

    
}
  ?>

