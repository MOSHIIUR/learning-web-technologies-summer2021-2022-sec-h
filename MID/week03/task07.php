<?php





    for($i=1;$i<=3;$i++)
    {
        for($j=1;$j<=$i;$j++)

        {
            //echo $j;
            echo "*";
        }
        echo "<br>";
    }


    $n=0;
    for ($i = 3; $i >0; $i--)
        {
        for($j = $i; $j >0; $j-- )
            {
            
            $n++;
                echo $n;
            }
        echo "<br>";
       $n=0;
       }



    $q='A';

    for ($m = 0; $m <$3; $m++)
        {
        
        for($p =0 ; $p<=$m; $p++ )
            {
        
           
                echo $q; $q++;
            }
        echo "<br>";

       }



?>