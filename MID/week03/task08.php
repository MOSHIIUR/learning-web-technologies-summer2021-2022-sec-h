<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>    <table border='1'>

	<tr>
    <td colspan="2">Shapes to print </td>
</tr>


<tr>

<td><?php

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

    
 ?></td>
 
 <td><?php

    $q='A';

    for ($m = 0; $m <$3; $m++)
        {
        
        for($p =0 ; $p<=$m; $p++ )
            {
        
           
                echo $q; 
                $q++;
            }
        
        echo "<br>";

       }

    
 ?></td>
    </tr>
    </table>
</body>
</html>




