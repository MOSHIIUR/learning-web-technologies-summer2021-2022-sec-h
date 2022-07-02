<?php

require('header.php');

//html heading
echo '
<center>
    <h1>List of Student</h1><hr>
</center>
';

//file reading
$file = fopen('storeStdinfo.txt', 'r');  //introducing the file and the operation gonna perform


//finding the number of lines in the file
$count=0; //setting up a counter to count no. of lines
while(fgets($file))
{
    
    $count++;

}

//again opening the file; start fresh
$file = fopen('storeStdinfo.txt', 'r');  //introducing the file and the operation gonna perform
for($i=1; $i<=$count; $i++)//while we are not end of the file
{

    //going to fetch a line of data once at a time
    $data = fgets($file);

    //now the line of data we fetch need to break it down on parts
    $user = explode('~', $data); //breaking down the line at '~' and store that part at $user array

        ?>
        <center> <form>
            <table>
                <tr>
                    <td><?php echo $user[0];?></td>
                    <td><?php echo $user[1];?></td>
                    <td><?php echo '<a href=viewStdprofile.php?id='.$user[0].'>View</a>'; ?></td>
                    <td><hr></td>
                </tr>
            </table></form>
        </center>

        <?php





}

echo '
<center>
    <!--    add std/home    -->
    <hr>
    <h1><a href=addStd.php>Add Student</a></h1>
    <h3>Back to<a href=home.php> Home</a>?</h3>

</center>
';


?>

