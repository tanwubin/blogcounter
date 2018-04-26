$(document).ready(function(){
        $.ajax({
            type:"POST",
            url:"http://localhost/BlogCounter/counteradd.php",
            data:{title:"我想和这个世界聊聊",url:"https://tanwubin.github.io"},
            datatype: "html",

            success:function(data){
            },
            error: function(){
            }
        });
});
