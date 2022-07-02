

<?php

setcookie('name', $username, time()-10, '/');
header('location:login.html');

?>