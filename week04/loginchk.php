<?php



$name = $_POST['name'];

//print_r($_POST);
//echo $_POST'name';

//word counting
$wrdCount = str_word_count($name); 


//convert the string to array
$arr = str_split($name);
//print_r($arr); //print the whole array
//echo $arr[0]; //just a specific index character

//array size
$length = sizeof($arr);

$status=true;

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

    if($status)
    {
    echo "Naming success";
    }
    
    else echo "name is not accepted";
    


    
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









?>