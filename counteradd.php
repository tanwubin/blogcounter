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

if (!mysqli_num_rows($result))
{
    $sql = "INSERT INTO pageviewcounter (title, url, viewcounter) VALUES ('$title', '$url', 1)";
    mysqli_query($conn, $sql);
}
else
{
    $id = $row['id'];
    $title = $row['title'];
    $url = $row['url'];
    $curcounter = $row['viewcounter'];
    $sql = "UPDATE pageviewcounter SET viewcounter = $curcounter+1 WHERE title = '$title' AND url = '$url'";
    mysqli_query($conn, $sql);
}

mysqli_close($conn);
?>