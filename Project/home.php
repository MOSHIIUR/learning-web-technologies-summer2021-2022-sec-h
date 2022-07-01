<?php
if(isset($_COOKIE['status']))
    {
        echo '
        
        <center>

            <h1> Home</h1>
            <a href="search.html">Search</a>
            <a href="profile.html">View Profile</a>
            <a href="addStd.html">Student Profiles</a>
            <a href="facultyprofile.html">Faculty Profiles</a>
            <a href="notice.html">Notices</a>
            <a href="addCourse.html">Courses</a>
        
        </center>
        
        
        
        ';
       // header('location:header.php');
    
    }
?>

