<?php 

$_SESSION['name'] = 'Arnau';

view('index.view.php', [
    'heading' => 'Home',
]);