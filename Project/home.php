
<?php

    $username = $_REQUEST['name'];
    $password = $_REQUEST['password'];
    
    //set cookies for credentials
    setcookie('name', $username, time()+356985, '/');
    setcookie('password', $password, time()+356985, '/');

	if(isset($_COOKIE['name']))
	{
        //php end
        ?> 
    <center>

        <h1>Wecome Home, <?php echo $_COOKIE['name'];?> </h1>
        <a href="search.html">Search</a>
        <a href="userProfile.php">View Profile</a>
        <a href="addStd.html">Student Profiles</a>
        <a href="facultyprofile.html">Faculty Profiles</a>
        <a href="notice.html">Notices</a>
        <a href="addCourse.html">Courses</a>

    </center>

<?php  //php start
    }
    
    else
    {
            echo "<h1>nvalid Request to Accessing Home Page</h1>";
    } 

?>

