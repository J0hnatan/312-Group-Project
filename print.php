<table>
    <?php
        foreach($selected as $color){
            echo "<tr><td>$color</td><td></td></tr>";
        }
    ?>
</table>

<table>
    <?php
    $letters = array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z');
        echo "<tr><td></td>";
        for($i=0; $i<$rows_cols; $i++){
            echo "<td>$letters[$i]</td>";
        }
        echo "</tr>";

        
        for($i =1; $i <$rows_cols; $i++){
            echo "<tr>";
            for($j=0; $j < $rows_cols; $j++){
                if($j >0){
                    echo "<td></td>";
                }else{
                    echo "<td>$j</td>";
                }
            }
            echo "</tr>";
        }
    ?>
</table>