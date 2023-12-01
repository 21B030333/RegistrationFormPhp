<?php

session_start();

session_destroy();

header("Location: grove.php");
exit;

?>