
<?php


	if(isset($_COOKIE['name']))
	{
        //php end
        ?> 
    <center>

    <br><br><br><br><br>
        
        <h1>Wecome Home, <?php echo $_COOKIE['name'];?> </h1>

    <br><br><br>
        
        <table>
            
            <!--    image    -->
            <tr>
                <td><img src="search.PNG" width="100px" height="100px"></td>
                <td><img src="profile.JPG" width="100px" height="100px"></td>
                <td><img src="student.JPG" width="100px" height="100px"></td>
                <td><img src="faculty.jpg" width="100px" height="100px"></td>
                <td><img src="course.PNG" width="100px" height="100px"></td>
                <td><img src="notice.PNG" width="100px" height="100px"></td>
                <td><img src="logout.JPG" width="100px" height="100px"></td>
            </tr>
            
            <!--    text/href    -->
            <tr>
                <td align="center"><a href="search.html">Search</a></td>
                <td align="center"><a href="userProfile.php">View Profile</a></td>
                <td align="center"><a href="listStd.php">Students</a></td>
                <td align="center"><a href="facultyprofile.html">Faculties</a></td>
                <td align="center"><a href="addCourse.html">Courses</a></td>
                <td align="center"><a href="notice.html">Notices</a></td>
                <td align="center"><a href="logout.php">Sign Out</a></td>

            </tr>

        </table>

    </center>

<?php  //php start
    }
    
    else
    {

            $username = $_REQUEST['name'];
            $password = $_REQUEST['password'];
            
            if($username != null && $password != null)
            {
                    //set cookies for credentials
            setcookie('name', $username, time()+356985, '/');
            //setcookie('password', $password, time()+356985, '/');
            }

            else echo '<center><h1>Illigal Access</h1></center>';
    
        
    } 

?>

