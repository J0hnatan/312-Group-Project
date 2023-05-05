<script type="text/javascript"src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<?php
    //Assets
    echo Asset::js('colorPicker.js');
    echo Asset::css('colors.css');

    $color_array = array("Red", "Orange", "Yellow", "Green", "Teal", "Blue", "Purple", "Grey", "Brown", "Black");
    $table= $_GET['colors'];
    $count = 0;
    echo "<table id='top-table' >";
    for($i = 0; $i < $table; $i++){
        echo "<tr>";
        echo "<td class='top-table-check' ><input type='radio' name='colors' id='color#$i' class='radio-button'></td>"; 
        echo "<td class='top-table-select'>";
        echo "<select id='select#$i'>";        
        echo "<option value='Default'>$color_array[$i]</option>";
        for($j = 0; $j < 10; $j++){
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
        echo "<td class='top-table-coords'></td>";
        echo "</tr>";
    }
    echo "</table>";
?>

<?php
    $letters = array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z');
    $count = 1;
    echo "<table id='bottom-table'>";
    $num = $_GET['rows_cols'];
    echo "<tr>";
    echo "<td></td>";
    for($i = 0; $i < $num; $i++){
        echo "<td>$letters[$i]</td>";
    }
    echo "</tr>";
    for($i = 0; $i < $num; $i++){
        echo "<tr>";
        echo "<td>$count</td>";
        for($z = 0; $z < $num; $z++){
            echo "<td id='$letters[$z]$count' class='bottom-table-cell'></td>";
        }
        $count++;
        echo "</tr>";
    }
    echo "</table>";
?>