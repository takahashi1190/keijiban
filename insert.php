<?php
$dbh = new PDO("mysql:host=127.0.0.1; dbname=lesson01; charset=utf8", 'root', 'rootroot');
echo "接続完了";
$dbh->exec("insert into 4each_keijiban(handlename,title,comments)
 values('".$_POST['handlename']."','".$_POST['title']."','".$_POST['comments']."');");

$stmt = $dbh->query("select * from 4each_keijiban");

while ($row = $stmt->fetch()){
    echo $row['handlename'];
    echo $row['title'];
    echo $row['comments'];
}

?>