<html>

<body>
    <table border="1" style="width:50%">

    <tr>
        <td> <!--  row one -->
<?php





for($i=1;$i<=3;$i++)
{
    for($j=1;$j<=$i;$j++)

    {
        //echo $j;
        echo "*";
    }
    echo "<br>";
    echo "\r\n";

}

?></td>
        <td><!--  row two -->
    <?php
        $n=0;
        for ($i = 3; $i >0; $i--)
            {
            for($j = $i; $j >0; $j-- )
                {
                
                $n++;
                    echo $n;
                }
            echo "<br>";
            echo "\r\n";

        $n=0;
        
        }

        ?>  </td>
        
        <td>

        <?php

    $q='A';

    for ($m = 0; $m <3; $m++)
        {
        
        for($p =0 ; $p<=$m; $p++ )
            {
        
           
                echo $q; $q++;
            }
        echo "<br>";
        echo "\r\n";


       }



?>

        </td>
    
    </tr>

    </table>
</body>

</html>