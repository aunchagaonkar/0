<?php
setcookie("username", "", time() - 3600);
setcookie("useremail", "", time() - 3600);
header("Location: cookies.php");
exit;
?>
