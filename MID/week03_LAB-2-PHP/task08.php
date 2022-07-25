<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>    <table border='1' style="width: 40%">

<tr>
    <td>The Array to declare</td>
    <td>Shapes to print </td>
</tr>


<tr>

    <td>

    <table border='1', style="width: 100%;">
        <?php

$arr=[


    [1, 2, 3, 'A'],
    [1, 2, 'B', 'C'],
    [1, 'D', 'E', 'F']
];


/* Use the loop to iterate the five rows of the array */
for ($row = 0; $row < 3; $row++) {
    echo "<tr>";

    /* Use the loop to iterate the three columns of the array */
    for ($col = 0; $col < 4; $col++) {

        /* Read the value of the array based on row and column values */  
        echo "<td>".$arr[$row][$col]."</td>";
    }
    echo "</tr>";
 
}


?>
        </table>

    </td>
   
   
    <td>
        <table border="1" style="width: 100%;">
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

        for ($m = 0; $m <3; $m++)
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
    </td>
    
</tr>
    
</table>
</body>
</html>




