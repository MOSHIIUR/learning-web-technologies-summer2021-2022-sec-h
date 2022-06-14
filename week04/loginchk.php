<?php



$name = $_POST['name'];

//print_r($_POST);
//echo $_POST'name';

$length = strlen($name);



if($name != null && $length >=2 && ctype_alpha($name) && ctype_alpha($name[0]))
{
    

    
    echo "login Success";
}

else echo "not success"







?>