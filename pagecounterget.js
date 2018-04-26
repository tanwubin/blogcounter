$(document).ready(function(){
        $.ajax({
            //提交数据的类型 POST GET
            type:"POST",
            //提交的网址
            url:"http://localhost/BlogCounter/counterget.php",
            //提交的数据
            data:{title:"我想和这个世界聊聊",url:"https://tanwubin.github.io"},
            //返回数据的格式
            datatype: "html",

            success:function(data){
                //更新浏览数
                $("#msg").html(data);
            },
            //调用出错执行的函数
            error: function(){
                //请求出错处理
                $("#msg").html(0);

            }
        });
});
