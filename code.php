<?php
 $email = $_POST['email'];
 $password = $_POST['password'];
 $radio= $_POST['flexRadioDefault'];


 if(empty($email)||empty($password)){
    echo '<script>alert("Email or password cannot be empty")</script>';
 }
 else{
  echo "Email: ".$email."<br>Password: ".$password."<br>";
 }

  echo "Radio: ", $radio, "<br>";

 
 
 if (isset($_POST['mycheckbox'])) {
    echo "Checkbox status : True";
  } else {
    echo 'Checkbox status : False';
  }
  function Sorted($array, $argument){
    $radio= $_POST['flexRadioDefault'];
    if($argument== 'ASC' && $radio== 'First Radio'){
        sort($array);

        $arrlength = count($array);
        for($i = 0; $i < $arrlength; $i++) {
            
        echo $array[$i];
        echo ", ";
        }
    }
    else if($argument== 'ASC' && $radio== 'Second Radio'){
        sort($array);

        $arrlength = count($array); 
        foreach($array as $i => $i_value) {
            echo "[" . $i . "] =>" . $i_value;
            echo ", ";
        }
        
    }
    else if($argument== 'DSC'){
        rsort($array);
        $arrlength = count($array);
        for($i = 0; $i < $arrlength; $i++) {
            echo $array[$i]."<br>";
            echo " , ";  
        }

    }else{
        sort($array);

        $arrlength = count($array);
        for($i = 0; $i < $arrlength; $i++) {
            
        echo $array[$i];
        echo " , ";
        }
    }
}
$random_array= range(0, 100);
    shuffle($random_array);
    $random_keys=array_slice($random_array,0,100);
echo "<br> Question 5,6:";
if($radio=="First Radio"){ 
 
    Sorted($random_keys, 'ASC');   
}
else if($radio=="Second Radio"){
    Sorted($random_keys, 'DSC');
}
else{
echo "error! Email and password are blank";
}





?>