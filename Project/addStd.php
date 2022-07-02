<?php require('header.php'); ?>

<center>
    
    <h1>Student Profile Creation</h1><hr>
    
    <form action="addStd.php" method="post" enctype="">
    
<table>
    <!--    id    -->
    <tr>
        <td>ID</td>
        <td><input type="text" name="id" value=""></td>
    </tr>
    
    <!--    name    -->
    <tr>
        <td>Name</td>
        <td><input type="text" name="name" value=""></td>
    </tr>
    
    <!--    cgpa    -->
    <tr>
        <td>CGPA</td>
        <td><input type="number" name="cgpa" value=""></td>
    </tr>

    <!--    credit    -->
    <tr>
        <td>Credit</td>
        <td><input type="number" name="credit" value=""></td>
    </tr>

    <!--    program    -->
    <tr>
        <td>Program</td>
        <td>
            <select name="program">
                <option value="Bachelor of Science in Computer Science & Engineering">Bachelor of Science in Computer Science & Engineering</option>	
                <option value="Bachelor of Science in Electrical Engineering">Bachelor of Science in Electrical Engineering</option>	
                <option value="Bachelor of Science in Business Administration">Bachelor of Science in Business Administration</option>	
            </select>
        </td>
    </tr>
    
    <!--    dept    -->
    <tr>
        <td>Department</td>
        <td>
            <select name="dept">
                <option value="FACULTY OF SCIENCE & TECHNOLOGY">FACULTY OF SCIENCE & TECHNOLOGY</option>	
                <option value="FACULTY OF ENGINEERING">FACULTY OF ENGINEERING</option>	
                <option value="FACULTY OF BUSINESS ADMINISTRATION">FACULTY OF BUSINESS ADMINISTRATION</option>	
            </select>
        </td>
    </tr>
    
    <!--    address[present address]    -->
    <tr>
        <td>Present Address</td>
        <td><input type="text" name="address" value=""></td>
    </tr>

    <!--    paddress[permanent address]    -->
    <tr>
        <td>Permanent Address</td>
        <td><input type="text" name="paddress" value=""></td>
    </tr>

    <!--    dob    -->
    <tr>
        <td>DOB</td>
        <td><input type="date" name="dob" value=""></td>
    </tr>

    <!--    gender    -->
    <tr>
        <td>Gender</td>
        <td>
            <input type="radio" name="gender" value="Male">Male
            <input type="radio" name="gender" value="Female">Female
            <input type="radio" name="gender" value="Other" checked>other
        </td>
    </tr>

    <!--    nationality    -->
    <tr>
        <td>Nationality</td>
        <td>
            <select name="nationality">
                <option value="Bhutan">Bhutan</option>	
                <option value="India">India</option>	
                <option value="Srilanka">Srilanka</option>	
                <option value="Nepal">Nepal</option>	
                <option value="Bangladesh">Bangladesh</option>	
                <option value="USA">USA</option>	
            </select>
        </td>
    </tr>

    <!--    religion    -->
    <tr>
        <td>Religion</td>
        <td>
        <input type="radio" name="religion" value="Islam">Islam
        <input type="radio" name="religion" value="Hindu">Hindu
        <input type="radio" name="religion" value="Christian">Christian
        <input type="radio" name="religion" value="Bhuddhism" checked>Bhuddhism
        </td>
    </tr>

    <!--    bloodgrp    -->
    <tr>
        <td>Blood Group</td>
        <td>
            <select name="bloodgrp">
                <option value="A+">A+</option>	
                <option value="A-">A-</option>	
                <option value="AB+">AB+</option>	
                <option value="B+">B+</option>	
                <option value="B-">B-</option>	
                <option value="O+">O+</option>	
                <option value="O-">O-</option>	
            </select>
    
        </td>
    </tr>

    <!--    admission/[admission date]    -->
    <tr>
        <td>Admission Date</td>
        <td><input type="date" name="admission" value=""></td>
    </tr>

    <!--    graduation[graduation date]    -->
    <tr>
        <td>Graduation Date</td>
        <td><input type="date" name="graduation" value=""></td>
    </tr>
    
    <!--    break    -->
    <tr><td><br></td></tr>
    <tr><td><br></td></tr>


</table>

    <!--    submit/add    -->
    <input type="submit" name="submit" value="Add Student">
    <h3>Back to the<a href=listStd.php> List</a>?</h3>
    <h3>Back to<a href=home.php> Home</a>?</h3>


    </form>

</center>

<?php

if(isset($_REQUEST['submit']))

{

    require('header.php');

$id = $_REQUEST['id'];
$name = $_REQUEST['name'];  $cgpa = $_REQUEST['cgpa']; 
$credit = $_REQUEST['credit'];  $program = $_REQUEST['program'];
$dept = $_REQUEST['dept'];  $address = $_REQUEST['address'];
$paddress = $_REQUEST['paddress'];    $dob = $_REQUEST['dob'];
$gender = $_REQUEST['gender'];  $religion = $_REQUEST['religion'];
$nationality = $_REQUEST['nationality']; $bloodgrp = $_REQUEST['bloodgrp'];
$admission = $_REQUEST['admission'];    $graduation = $_REQUEST['graduation'];




 
$status = true;


    if($name!=NULL)
{
    if($cgpa!=NULL)
    {
        if($credit!=NULL)
        {
            if($program!=NULL)
            {
                if($dept!=NULL)
                {
                    if($address!=NULL)
                    {
                        if($paddress!=NULL)
                        {
                            if($dob!=NULL)
                            {
                                if($gender!=NULL)
                                {
                                    if($nationality!=NULL)
                                    {
                                        if($religion!=NULL)
                                        {
                                            if($bloodgrp!=NULL)
                                            {
                                                if($admission!=NULL)
                                                {
                                                    if($id != NULL)
                                                    {
                                                        $obj = $id."~".$name."~".$cgpa."~".$credit."~".$program."~".$dept."~".$address."~".$paddress."~".$dob."~".$gender."~".$nationality."~".$religion."~".$bloodgrp."~".$admission."~".$graduation."\r\n";
                                                        $file = fopen('storeStdinfo.txt', 'a');
                                                        fwrite($file, $obj);
                                                        
                                                        echo '
                                                        <center>
                                                            <h1>SUCCESS! Student Added</h1><hr>
                                                        </center>
                                                        ';
                                                    
                                                    }
                                                    
                                                    else echo 'null identity';

                                                }
                                                //else $status = false;
                                                else echo 'null admission time';

                                            }
                                            else echo 'null blood type';
                                            //else $status = false;   //echo 'null blood type';

                                        }
                                        else echo 'null religion';
                                        //else $status = false;   //echo 'null religion';
                                        
                                    }
                                    else echo 'null nationality';
                                    //else $status = false;   //echo 'null nationality';

                                }
                                else echo 'null gender';
                                //else $status = false;   //echo 'null gender';

                            }
                            else echo 'null date of birth';
                            //else $status = false;   //echo 'null date of birth';

                        }
                        else echo 'null parmanent address';
                        //else $status = false;   //echo 'null parmanent address';

                    }
                    else echo 'null present address';
                    //else $status = false;   //echo 'null present address';

                }

                else echo 'null department';
                //else $status = false;   //echo 'null department';

            }

            else echo 'null program';
            //else $status = false;   //echo 'null program';

        }

        else echo 'null credit';
        //else $status = false;   //echo 'null credit';

    }
    else echo 'nullcgpa';
    //else $status = false;   //echo 'nullcgpa';

}

/* else echo 'null username'
//else $status = false;   //echo 'null username' */





else
{
    echo '
    <center>
        <h1>FAILED! Null/Invalid Input</h1><hr>
    </center>
    
    ';
}

}


?>