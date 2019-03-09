<?php
echo '<h1 style = "text-align: center;" > Pythagoras</h1 > ';
echo  '<form method = "post" >
     <input type = "submit" placeholder = "Confirm" >
     </form >';

function sumofelements(){
    if ($_POST) {
        $n = (int)$_POST['number'];
        $sum = 0;
        for ($i = 0; $i <= $n; $i++) {
            $sum += $i;
        }
        return $sum;
    } else echo 'Please enter a number';
}
echo '<h1>Sum is eqaul = ' . sumofelements() . '</h1>';
echo '<br>';
include 'footer.tpl.php';

?>