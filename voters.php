
<?php

$votersage = 18;

if($votersage >= 18){
    echo "Above 18 years <br>";
        }elseif($votersage < 18){
            echo "Not Eligible to vote <br>";
        }

        $pvccheck = 'True';

        switch($pvccheck) {
            case "True": 
            echo "Voter has PVC";
            break;
           
        }
         $votersward = "020";
         if($votersward == "020"){
         echo "<br>Voter's Ward is 020 <br>";
         }else{
        echo "false";
         }
         $postmsg = 'Voter eligible to vote';
         echo "$postmsg";
?>
  
            
