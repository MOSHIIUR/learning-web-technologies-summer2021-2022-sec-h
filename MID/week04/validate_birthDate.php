<?php


$day = $_REQUEST['day'];
$month = $_REQUEST['month'];
$year = $_REQUEST['year'];


//print_r($_REQUEST);


if($day != null && $month != null && $year != null)
{
    if(checkDay($day) && checkmm($month) && checkyy($year))
        echo "Valid Birth Date";

   
        else echo "Invalid Birth crediantial";
    

}


else echo "Null value is not accepted";


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