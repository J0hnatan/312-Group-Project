<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  
<form action="https://cs.colostate.edu:4444/~charldol/m1/index/m1/print" method="GET">

<table id="topTable">
    <?php
        //Assets
        echo Asset::js('colorPicker.js');
        echo Asset::css('colors.css');

       $color_array = array("Red", "Orange", "Yellow", "Green", "Teal", "Blue", "Purple", "Grey", "Brown", "Black");
        $selected = array();
        $table= $_GET['colors'];
        $count = 0;
        echo "<table style='width: 100%'>";
        for($i = 0; $i < $table; $i++){
            echo "<tr>";
            array_push($selected, $color_array[$i]);
            echo "<td class='top-table-check' ><input type='radio' name='colors' id='color#$i' class='radio-button'></td>";
            echo "<td class='top-table-select'>";
            echo "<select id='color$i' name='color$i'>";
            echo "<option value='$color_array[$i]'>$color_array[$i]</option>";
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
            echo "<td class='top-table-coords'></td>";
            echo "</tr>";
        }
        echo "</table>";

echo "</table>";

        $letters = array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z');
        $count = 1;
        echo "<table id='bottom_table'>";
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
            for($z = 0; $z < $num; $z++){
                echo "<td id='$letters[$z]$count' class='bottom-table-cell'></td>";
            }
            $count++;
            echo "</tr>";
        }
        echo "</table>";


echo "<input type='submit' value='Print View' name='print_view' id='print_view' onclick='action_print()'>";
echo "<p id='here'></p>";

echo "</form>";

echo Asset::js('print.js');

?>
