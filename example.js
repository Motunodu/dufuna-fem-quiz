$(document).ready(function(){
$('#add').click(
    function(){
        var value=$('#textField').val();
        console.log("hello");
        $("#list").append ('<li>'+ value+'</li>');
    })
});