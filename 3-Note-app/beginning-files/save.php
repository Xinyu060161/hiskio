<?php


// echo '<pre>',print_r($_POST),'</pre>';
$connection = require_once './Connection.php';
$connecttion->addNote($_POST);

// // echo '<pre>',print_r($_POST),'</pre>';

// $connection = require_once './Connection.php';

// $id = $_POST['id'] ?? "";

// if($id) {
//   $connection->updateNote($id, $_POST);
// } else {
//   $connection->addNote($_POST);
// }

// header('Location: index.php');