<?php
$mysqli = new mysqli("mysql", "root", "123456", "mysql");
if ($mysqli->connect_error) {
    die("连接失败: " . $mysqli->connect_error);
}
echo "MySQL连接成功!";
$mysqli->close();
?>
