<?php

session_start();

// pour se déconnecter (efface toute la session)
session_destroy();
header("Location: index.php");
?>