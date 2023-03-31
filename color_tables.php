<table id="topTable">
    <?php
        $color_array = array("Red", "Orange", "Yellow", "Green", "Teal", "Blue", "Purple", "Grey", "Brown", "Black");
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
                    echo "<option value='$color_array[$j]'>$color_array[$j]</option>";
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

</table>