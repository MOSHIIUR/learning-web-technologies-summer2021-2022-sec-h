<?php

    $id = $_COOKIE['id'];
    //$password = $_COOKIE['password'];

    $file = fopen('storeStdinfo.txt', 'r');  //introducing the file and the operation gonna perform

    //finding the information for the target credentials
    while(!feof($file)) //while we are not end of the file
    {
        //going to fetch a line of data once at a time
        $data = fgets($file);

        //now the line of data we fetch need to break it down on parts
        $user = explode('~', $data); //breaking down the line at '~' and store that part at $user array

        //now check if the credential match
        if($id == $user[0])   //cheking if the $username of the credential matched the $user array's index 1 value. as in the file username present in the second data
            {
                //upon finfing the target, storing required info to use them later
                $id       = $user[0];
                $name = $user[1];
                $cgpa     = $user[2];
                $Credit     = $user[3];
                $Program  = $user[4];
                $Department = $user[5];
                $Present_address = $user[6];
                $parmanent_address = $user[7];
                $dob = $user[8];
                $gender = $user[9];
                $nationality = $user[10];
                $religion = $user[11];
                $bloodgrp = $user[12];
                $admissionDate = $user[13];
                $graduationDate = $user[14];
        
                break;
            }

    }




?>