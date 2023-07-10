<?php
require_once __DIR__ . '/settings.php';
require_once __DIR__ . '/router.php';

require_once __DIR__ . '/services/user.php';
require_once __DIR__ . '/repositories/user.php';
require_once __DIR__ . '/controllers/user.php';

$userRepository = new UserJSONRepository(SETTINGS['USERS_SOURCE_FILE_PATH']);
$userService = new UserService($userRepository);
$userController = new UserController($userService);

$mainRouter = new Router();
$mainRouter->addRoute('GET', '/', [$userController, 'main'], "index");
$mainRouter->addRoute('POST', '/add', [$userController, 'addUser'], "addUser");
$mainRouter->addRoute('POST', '/delete', [$userController, 'deleteUser'], "deleteUser");

$mainRouter->handleRequest($_SERVER['REQUEST_METHOD'], $_SERVER['REQUEST_URI']);
