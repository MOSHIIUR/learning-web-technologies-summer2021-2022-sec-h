<?php 

    require('header.php');
    setcookie('id', $_GET['id'], time()+3600, '/'); 
    require('stdCredentials.php');
    



?>

<center>
    
    <h1>Student Profile: <?php echo $name?></h1><hr>
    
    <form>
    
<table>
    <!--    id    -->
    <tr>
        <td>ID:</td>
        <td><?php echo $id;?></td>
    </tr>
    
    <!--    name    -->
    <tr>
        <td>Name:</td>
        <td><?php echo $name;?></td>
    </tr>
    
    <!--    cgpa    -->
    <tr>
        <td>CGPA:</td>
        <td><?php echo $cgpa;?></td>
    </tr>

    <!--    credit    -->
    <tr>
        <td>Credit:</td>
        <td><?php echo $Credit;?></td>
    </tr>

    <!--    program    -->
    <tr>
        <td>Program:</td>
        <td><?php echo $Program;?></td>
    </tr>
    
    <!--    dept    -->
    <tr>
        <td>Department:</td>
        <td><?php echo $Department;?></td>
    </tr>
    
    <!--    address[present address]    -->
    <tr>
        <td>Present Address:</td>
        <td><?php echo $Present_address;?></td>
    </tr>

    <!--    paddress[permanent address]    -->
    <tr>
        <td>Permanent Address:</td>
        <td><?php echo $parmanent_address;?></td>
    </tr>

    <!--    dob    -->
    <tr>
        <td>DOB:</td>
        <td><?php echo $dob;?></td>
    </tr>

    <!--    gender    -->
    <tr>
        <td>Gender:</td>
        <td><?php echo $gender;?></td>
    </tr>

    <!--    nationality    -->
    <tr>
        <td>Nationality:</td>
        <td><?php echo $nationality;?></td>
    </tr>

    <!--    religion    -->
    <tr>
        <td>Religion:</td>
        <td><?php echo $religion;?></td>
    </tr>

    <!--    bloodgrp    -->
    <tr>
        <td>Blood Group:</td>
        <td><?php echo $bloodgrp;?></td>
    </tr>

    <!--    admission/[admission date]    -->
    <tr>
        <td>Admission Date:</td>
        <td><?php echo $admissionDate;?></td>
    </tr>

    <!--    graduation[graduation date]    -->
    <tr>
        <td>Graduation Date:</td>
        <td><?php echo $graduationDate;?></td>
    </tr>
    
    <!--    break    -->
    <tr><td><br></td></tr>
    <tr><td><br></td></tr>

    <!-- modify -->
    <tr>
        <td colspan="2" align="center"><?php echo '<a href=modifyStdprofile.php?>Modify</a>'; ?></td>

    </tr>


</table>

    <!--    home/back    -->
    <h3>Back to the<a href=listStd.php> List</a>?</h3>
    <h3>Back to<a href=home.php> Home</a>?</h3>


    </form>

</center>
