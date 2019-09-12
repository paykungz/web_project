$(document).ready(function(){
    alert("ready!");
    var url_main = "search_byid.php?id=";

    $("#searchButton").click(function(){
        var search_kwd = $("#search_word").val();
        url = url_main + search_kwd;
        console.log('search Btn pressed -> ' + search_kwd + url);
        $.getJSON(url,function(result){
            console.log(result.length)
            if(result.length>0){
                $.each(result,function(i,field){
                    console.log(field);
                    $("#myOutput").html(field.id + '<br>'+field.name+'<br>'+field.passworld);
                });
            }else{
                $("#myOutput").html("Not found <br>");
            }
        })
    });
    
})