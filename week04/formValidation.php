<?php


//name and email credentials
$name = $_POST['text'];
$mail = $_REQUEST['email'];


//date of birth credentials
$day = $_REQUEST['day'];
$month = $_REQUEST['month'];
$year = $_REQUEST['year'];

//files credentials
$file = $_REQUEST['uploadedFile'];


//print_r($_POST);
//echo $_POST'name';




if(namechk($name))
{
    if(mailchk($mail))
    {
        if(genderchk())
        {
            if(dobchk($day, $month, $year))
            {
                if(bloodtypechk())
                {
                    if(degreechk())
                    {
                        if(filechk($file))
                        {
                            echo 'SUCCESSFULLY REGISTERED';

                        }

                        else echo 'file is empty';

                    }

                    else echo 'degree did not checked';

                }

                else echo 'blood type not selected';

            }

            else echo 'invalid DOB';

        }

        else echo 'gender did not seleced';

    }

    else echo 'invalid email';

}

else echo "name format is not valid";

function namechk($name)
{
    
    //word counting
    $wrdCount = str_word_count($name); 


    //convert the string to array
    $arr = str_split($name);
    //print_r($arr); //print the whole array
    //echo $arr[0]; //just a specific index character

    //array size
    $length = sizeof($arr);

    $status=false;

    if($name != null && $wrdCount >=2)
    {
        
        if(checkLetter($arr[0]))
        {
            for($i=1; $i<$length; $i++)
            {
            
            if (checkLetter($arr[$i])|| check_specialChar($arr[$i])) 
            
            {
                $status = true;
            } 
            
            else $status = false;
            }
            
        }
            
            
            
        
        
        else $status = false;
    }

    else 'Null value is not allowed';

    if($status)
    {
    //echo "Naming success";
    return true;
    }
    
    else return false;//echo "name is not accepted";
        


}

function mailchk($mail)
{

    if($mail != null)
    {
        $arr = explode("@",$mail);
        //$status = true;

        //echo $arr[1];
        if(travaseString($mail))
        {
            if($arr[1] == "gmail.com")
            {
                //echo "Valid Email";
                return true;
            }
            else return false;
            //echo "Email is not Valid";

        }
        
    }

    else return false;



}

function genderchk()
{   
    if(isset($_REQUEST['gender']))
        return true;
    
    else return false;

}



function dobchk($day, $month, $year)
{
    
    if($day != null && $month != null && $year != null)
    {
        if(checkDay($day) && checkmm($month) && checkyy($year))
            return true;
            //echo "Valid Birth Date";

    
            else return false;
            //echo "Invalid Birth crediantial";
        

    }


    else return false;
    //echo "Null value is not accepted";

}

function bloodtypechk()
{
    if(isset($_REQUEST['bloodgrp']))
        return true;

    else return false;

}

function degreechk()
{
    if(isset($_REQUEST['option01']) || isset($_REQUEST['option02']) || isset($_REQUEST['option03']))
        return true;
    
    else return false;
}

function filechk($file)
{

    if(!empty($file))
        return true;

    else return false;
}

//############################################################# all the required functions

//A function to check if a character is a Alphabet or not
function checkLetter($x)
{
    if (($x >= 'a' && $x <= 'z') || ($x >= 'A' && $x <= 'Z')) {
        return true;
    } else {
        return false;
    }
}

//A function to check if a character is a 'dash' or 'dot'
function check_specialChar($x)
{
    if (($x == '-') || ($x == '.') || ($x == ' ')) {
        return true;
    } else {
        return false;
    }
}

//function to traverse a string
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


//function to validaye date of birth credentials
function checkDay($day)
{
    if($day>=0 && $day <= 31)
        return true;
    else return false;
}
function checkmm($month)
{
    if($month>=1 && $month <= 11)
        return true;
    else return false;
}

function checkyy($year)
{
    if($year>=1900 && $year <= 2016)
        return true;
    else return false;
}











?>