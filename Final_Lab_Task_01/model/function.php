<?php

//20-42619-1
function insertUser($username, $password, $email)
{
    $con = mysqli_connect('localhost', 'root', '', 'user');
    $sql = "insert into userprofile (username, password, email) values ('{$username}', '{$password}', '{$email}' ) ";


    $result = mysqli_query($con, $sql);
    

    if($result)
        return true;
    
    else return false;

}





?>