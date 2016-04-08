<?php
ob_start();
require '../views/contact.php';
$viewContent = ob_get_clean();

require '../views/layout.php';