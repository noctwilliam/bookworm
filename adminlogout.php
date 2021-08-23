<!--ni untuk mana page dia akan pergi after tekan logout -->
<?php
session_start();

session_unset();
session_destroy();

header("Location: site.php");
