<?php

$m = $_POST['email'];
mailcheck($m);


function mailcheck($mail)
{
    $arr = explode("@",$mail);
    //$status = true;

    //echo $arr[1];
    if(travaseString($mail))
    {
        if($arr[1] == "example.com")
        {
            echo "Valid Email";
        }
        else echo "Email is not Valid";

    }
    

}

function travaseString($string)
{
    $arr = str_split($string); //making a array
    $length = sizeof($arr); //finding array size
    $status = true;

    for($i=1; $i<$length; $i++) //traversing the full array
    {
    
    if ($arr[$i] == '@') 
    
    {
        $status = true;
        break;
    } 
    
    else $status = false;
    }

    return $status;


}




?>