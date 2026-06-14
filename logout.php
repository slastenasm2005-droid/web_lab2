<?php

setcookie("User", "", time() - 7200, "/");

header("Location: index.php");
exit();

?>