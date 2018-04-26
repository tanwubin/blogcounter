<?php
/**
 * User: tanwubin
 * Url: http://localhost/BlogCounter/sqlop.php
 */
header('Access-Control-Allow-Origin:*');
$serverName = "localhost";
$userName = "root";
$passWord = "root";
$db = "blogcounter";

//获取post url链接参数
$title = $_POST['title'];
$url = $_POST['url'];

//创建连接
$conn = mysqli_connect($serverName, $userName, $passWord, $db);

//检查连接
if(!$conn)
{
    die("connection failed:" . mysqli_connect_error());
}

//数据库操作，刷新counter
mysqli_query($conn,"SET NAMES UTF8");
$sql="select * from pageviewcounter where title='$title' and url='$url'";
$result=mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);

if (mysqli_num_rows($result))
{
    $curcounter = $row['viewcounter'];
    echo $curcounter;
}
else
{
    echo 0;
}

mysqli_close($conn);
?>