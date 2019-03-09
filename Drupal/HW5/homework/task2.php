<?php
echo '<div class="container">';
echo '<form method="post">
        <input type="number" name="firstkatet">
        <input type="number" name="secondkatet">
        <input type="number" name="hipotenusa">
        <input type="submit">
        </form>';
function Theoremapifagora()
{
    if (!empty($_POST['firstcatet'] && $_POST['secondkatet'])) {
        $k1 = $_POST['firstkatet'];
        $k2 = $_POST['secondkatet'];
        $res = round(sqrt(($k1 * $k1 + $k2 * $k2)));
        echo $res;
    }
}

echo '<h2> Result:' . Theoremapifagora() . '</h2>';
echo '</div>';
include 'footer.tpl.php';
?>