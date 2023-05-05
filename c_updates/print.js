$(function() {
  

document.getElementById("print_view").onclick = function() {printSelected()};

function printSelected() {
  const arr = "<?php echo json_encode('$selected');?>";
  document.getElementById("here").innerHTML = arr;
}

});
