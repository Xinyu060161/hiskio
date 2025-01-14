<?php

// 開啟錯誤顯示
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include "./connection.php";

$connection = new connection();
$notes = $connection->getNotes("id");
echo '<pre>',print_r($notes),'<pre>';
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="app.css">
</head>
<body>
<div>
    <form class="new-note" action="save.php" method="post">
        <input type="hidden" name="id" value="">
        <input type="text" name="title" placeholder="Note title" autocomplete="off" value="">
        <textarea name="description" cols="30" rows="4"
                  placeholder="Note Description"></textarea>
        <button>
          New Note
        </button>
    </form>
    <div class="notes">
        <div class="note">
            <div class="title">           
              <?foreach($notes[1] as $nts){?>
              <?print_r($notes);?>
                <a href="#"><?echo $nts['title'];?></a>
            </div>
            <div class="description">
              <?$nts'description']?>
            </div>
            <small><?$nts['created_date']?></small>
            <form action="delete.php" method="post">
              <input type="hidden" name="id" value="">
            <button class="close">X</button>
          </form>
          <?}?>
        </div>
    </div>

    
    <div class="notes">
        <div class="note">
            <div class="title">
                <a href="#">This is post title</a>
            </div>
            <div class="description">
              This is description
            </div>
            <small>2021-05-31</small>
            <form action="delete.php" method="post">
              <input type="hidden" name="id" value="">
            <button class="close">X</button>
            </form>
        </div>
    </div>
  </div>
</body>
</html>