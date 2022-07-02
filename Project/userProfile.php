<?php

    require('header.php');
    require('credential.php'); //loading the credential(id/username); which will be used for fetched info from file

?>



<center>

<h1>Admin Profile</h1><hr>

<table >
    
    <!--    id  -->
    <tr>
        <td align="right">ID:</td>
        <td><?php echo $id;?></td>
    </tr>
    <!--    Username  -->
    <tr>
        <td align="right">Username:</td>
        <td><?php echo $username;?></td>
    </tr>

    <!--    Email  -->
    <tr>
        <td align="right">EMail:</td>
        <td><?php echo $mail;?></td>
    </tr>

    <!--    Password  -->
    <tr>
        <td align="right">Password:</td>
        <td><?php echo $pass;?></td>
    </tr>

    <!--    phn no.  -->
    <tr>
        <td align="right">Contact Number:</td>
        <td><?php echo $contact;?></td>
    </tr>

    <!--    Date of working -->
    <tr>
        <td align="right">Joined:</td>
        <td><?php echo $joinDate;?></td>
    </tr>

    <!--    break  -->
    <tr>
        <td><br></td>
    </tr>

    <!--    hr  -->
    <tr>
        <td colspan="2"><hr></td>
    </tr>

    <!--    information change -->
        <tr>
            <td colspan="2" align="center"><input type="submit" value="Change nformation"></td>
        </tr>






</table>

</center>





