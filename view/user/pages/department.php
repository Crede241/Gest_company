<?php
$title = "Departement";
ob_start();
?>



<?php
$page = ob_get_clean();
require "view/user/template-user.php";
?>


