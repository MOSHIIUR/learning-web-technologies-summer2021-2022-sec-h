

<?php


    $name = $_REQUEST['name'];

    $status = false;    //flag to check status if we found the user

    if($name != null)   //checking if we got a input or not  
    {
        $file = fopen('userProfile.txt', 'r');  //introducing the file and the operation gonna perform

        //finding the information for the target credentials
        while(!feof($file)) //while we are not end of the file
        {
            //going to fetch a line of data once at a time
            $data = fgets($file);
    
            //now the line of data we fetch need to break it down on parts
            $user = explode('~', $data); //breaking down the line at '~' and store that part at $user array
    
            //now check if the credential match
            if($name == $user[1])   //cheking if the $username of the credential matched the $user array's index 1 value. as in the file username present in the second data
                {
                    //upon finfing the target, storing required info to use them later
                    $id       = $user[0];
                    $username = $user[1];
                    $mail     = $user[2];
                    $pass     = $user[3];
                    $contact  = $user[4];
                    $joinDate = $user[5];

                    $status = true;
                    break;
                }
            
        }
    
    }



    //cheking here if we find the user
    if($status) //if status = true; if block executes
    {
        //php start
        ?> 
            <center>
                    <h1>SUCCESS! FOUND</h1><hr>
                    <h2> Here are your Credentials</h2><hr>
                    <table>
                        <tr>
                            <td>Username:</td>
                            <td><?php echo $username;?></td>
                        </tr>
                    
                        <tr>
                            <td>Mail:</td>
                            <td><?php echo $mail;?></td>
                        </tr>
                    
                        <tr>
                            <td>Password:</td>
                            <td><?php echo $pass;?></td>
                        </tr>
                    
                    </table>
                    <br><br><br><br><br><br><br>
                    <hr>
                    <h2>Back to <a href=login.html>Login</a></h2>
                </center>
        
        <?php //php start

    }

    else    //if status = false, means not found, else block executes
    {
        //php end
        ?>

            <center>
                <h1>SORRY, NOT FOUND!</h1><br>
                <h2>NULL or Wrong username. Input Right username</h2>
                <br><br><br><br><br><br><br>
                    <hr>
                    <h2>Go Back to <a href=accRecover.html>Recover Account</a>?</h2><br>
                    <h2>Go Back to <a href=login.html>Login</a>?</h2><br>
                
                
            </center>


        <?php //php start
    }

?>

