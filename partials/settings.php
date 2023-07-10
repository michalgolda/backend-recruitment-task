<?php
$settings = [
    "TEMPLATES_PATH" => $_SERVER['DOCUMENT_ROOT'] . '/partials/templates/',
    "USERS_SOURCE_FILE_PATH" => $_SERVER['DOCUMENT_ROOT'] . '/dataset/users.json'
];

define('SETTINGS', $settings);
