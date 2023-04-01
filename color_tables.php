<table id="topTable">
    <?php
        $color_array = array("Red", "Orange", "Yellow", "Green", "Teal", "Blue", "Purple", "Grey", "Brown", "Black");
        $selected = array();
        $table= $_GET['colors'];
        $count = 0;
        echo "<table style='width: 100%'>";
        for($i = 0; $i < $table; $i++){
            echo "<tr>"; 
            echo "<td style='width: 20%'>";
            echo "<select>";        
            echo "<option value='Default'>$color_array[$i]</option>";
            for($j = 0; $j < $table; $j++){
                if ($color_array[$i] == $color_array[$j]){
                    continue;
                }
                else{
                    echo "<option value='color'>$color_array[$j]</option>";
                    array_push($selected, $color_array[$j]); 
                }
            }
            echo "</select>";
            echo "</td>";
            echo "<td style='width: 80%'></td>";
            echo "</tr>";
        }
        echo "</table>";
    ?>

</table>

<table id="bottomTable">
    <?php
        $letters = array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z');
        $count = 1;
        echo "<table style='width: 100%'>";
        $num = $_GET['rows_cols'];
        echo "<tr>";
        echo "<td></td>";
        for($i = 0; $i < $num; $i++){
            echo "<td>$letters[$i]</td>";
        }
        echo "</tr>";
        for($i = 0; $i < $num; $i++){
            echo "<tr>";
            echo "<td>$count</td";
            for($j = 0; $j < $num - 1; $j++){
                echo "<td></td>";
            }
            echo "<td>$count[$i]</td>";
            $count++;
            echo "</tr>";
        }
        echo "</table>";
    ?>
</table>