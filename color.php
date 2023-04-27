<div class="color_coordinate">
    <h2>Color Coordinate Generator</h2>
    <form action="https://cs.colostate.edu:4444/~jibarra1/m1/index/m1/color" method="GET">
        <label for="Rows_Cols">Rows/Columns:</label>
        <input type="number" min="1" max="26" name="rows_cols" id="Rows_Cols" required>
        <br>
        <label for="colors">Colors</label>
        <input type="number" min="1" max="10" name="colors" id="colors" required>
        <br>
        <input type="submit">
    </form>
    <?php
        if($invalid){
            echo "<p style=\"background-color:lightcoral;border-radius:8px;padding:5px;\">ERROR: Invalid inputs from Rows/Columns or Colors.</p>";
        }
    ?>
</div>