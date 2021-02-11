
<?php
function validate($map){
    $map = trim($map);
    $map = stripslashes($map);
    $map = htmlspecialchars($map);
    return $map;
}
?>