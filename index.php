<!doctype html>

<?php
header("Cache-Control: max-age=3600");
header_remove("Expires");

session_start(); 
if(isset($_SESSION['views']))
{
    $_SESSION['views']=$_SESSION['views']+1;
}
else
{
    $_SESSION['views']=1;
}
?>

<html lang="zh-CN">
    <head>
        <meta charset="utf-8">
        <title>暗区世界</title>
        <link href="./link/styles/css/background.css" rel="stylesheet">
        <style type="text/css">
            body{
                color: #FFFFFF;
            }  
            .box {
                width: 30%;
                margin: 13% 30% 0;
                background-color: #202326B3;
                padding: 2% 5%;
                border-radius: 10px;
            }
        </style>
    </head>
    <body>
        <div class="box">
            <h1>这里是 暗区世界 官网</h1>
            <h4>成立于2023年4月29日</h4>
            <div>
                <?php
                switch ($_SESSION['views']) {
                    case 1:
                        echo "似乎是新面孔呢";
                        break;
                    case 2:
                        echo "我们应该见过面了吧！";
                        break;
                    case 3:
                        echo "这是我们的第3次见面！";
                        break;
                    case 4:
                        echo "见这么多次，一定很喜欢我吧！像lem和486那样!";
                        break;
                    default :
                        echo "是蓝色啊！";
                        break;
                }
                ?>
            </div>
            我们欢迎您的到来<br/>
            <a href = "hr.php" style="color: #3390FD">简历投递</a>
            <h3>招贤纳士</h3>
            QQ:<br/>
            微信:<br/>
        </div>
    </body>
</html>