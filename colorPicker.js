$(function(){
    //initialize selected colors
    var selectedArr = [];
    $("option:selected").each(function(){
        selectedArr.push($(this).text().toLowerCase());
        let str = "option:contains(" + $(this).text() + ")";
        $(str).attr("disabled", "disabled");
    });

    //first color is selected
    $("input:radio:first").click();

    //bottom table cell is clicked
    $(".bottom-table-cell").click(function(){
        //paint feature
        let index = $("input:checked").attr("id").substr(6);
        let color = $("option:selected").eq(index).text().toLowerCase();
        $(this).attr("class", "bottom-table-cell "+color);

        //coord display
        let id = " " + $(this).attr("id");
        if(!$(".top-table-coords").text().includes(id)){
            $(".top-table-coords").eq(index).append(id);
        }else if(!$(".top-table-coords").eq(index).text().includes(id)){
            let text = $(((".top-table-coords:contains("+id+")"))).text().replace(id, "");
            $(((".top-table-coords:contains("+id+")"))).text(text);
            $(".top-table-coords").eq(index).append(id);
        }
    });

    //change color if color changes
    $("select").change(function(){
        let index = $(this).attr("id").substr(7);
        let newColor = $("option:selected").eq(index).text();
        let prevColor = "."+selectedArr[index];

        //add new color
        let str = "option:contains(" + newColor + ")";
        $(str).attr("disabled", "disabled");
        $(prevColor).toggleClass(newColor.toLowerCase());

        //get rid of old
        str = "option:contains(" + selectedArr[index].charAt(0).toUpperCase() +selectedArr[index].substr(1) + ")";
        $(str).removeAttr("disabled");
        $(prevColor).toggleClass(selectedArr[index]);
        selectedArr[index] = newColor.toLowerCase();
    });


});