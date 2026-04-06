<?php

use Core\Database;

$config = require base_path('config.php');
$db = new Database($config['database']);

$errors = [];

view('notes/create.view.php', [
    'heading' => 'Create note',
    'errors' => $errors
]);