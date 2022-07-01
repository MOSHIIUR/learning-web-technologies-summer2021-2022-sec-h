<?php

    $username = $_COOKIE['name'];
    //$password = $_COOKIE['password'];

    $file = fopen('userProfile.txt', 'r');  //introducing the file and the operation gonna perform

    //finding the information for the target credentials
    while(!feof($file)) //while we are not end of the file
    {
        //going to fetch a line of data once at a time
        $data = fgets($file);

        //now the line of data we fetch need to break it down on parts
        $user = explode('~', $data); //breaking down the line at '~' and store that part at $user array

        //now check if the credential match
        if($username == $user[1])   //cheking if the $username of the credential matched the $user array's index 1 value. as in the file username present in the second data
            {
                //upon finfing the target, storing required info to use them later
                $id       = $user[0];
                $username = $user[1];
                $mail     = $user[2];
                $pass     = $user[3];
                $contact  = $user[4];
                $joinDate = $user[5];
        
                break;
            }

    }




?>