<?php 
//Cheker for Palindrome 
function Palindrome($string){ 
      
    // Condition to end recursion call
    if ((strlen($string) == 1) || (strlen($string) == 0)){ 
        echo "Palindrome"; 
    } 
  
    else{ 
          
        // Compare first char with last
        if (substr($string,0,1) == substr($string,(strlen($string) - 1),1)){ 
              
            // Checked letters are dropped while function moves for next call 
            return Palindrome(substr($string,1,strlen($string) -2)); 
        } 
        else{  
            echo " This is not a Palindrome"; } 
    } 
} 
  
$string = "ABDEEDBA"; 
Palindrome($string); 
?>   