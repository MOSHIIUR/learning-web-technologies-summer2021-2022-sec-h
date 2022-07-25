<?php

$id = $_REQUEST['id'];
$file = $_REQUEST['uploadedFile'];


if(is_numeric($id) && $id>0 && !empty($file))
    echo 'success';

else echo 'invalid';

?>