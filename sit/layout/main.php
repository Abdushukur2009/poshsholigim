<?php 
require $conf['base']['url'].'sit/layout/header.php';
?>
<div class="container">
<?php
if (isset($_GET['v'])) {
    include_once $conf['base']['url'].'sit/ozg/' . $_GET['v'] ;
    
} else {
    include $conf['base']['url'].'sit/ozg/home.php' ;

}
?>
</div>
<?php
require $conf['base']['url'].'sit/layout/footer.php';



?>

<!-- sjhdff -->