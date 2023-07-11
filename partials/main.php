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
$mainRouter->addRoute('GET', '/', [$userController, 'main']);
$mainRouter->addRoute('POST', '/add', [$userController, 'addUser']);
$mainRouter->addRoute('POST', '/delete', [$userController, 'deleteUser']);
$mainRouter->setNotFoundHandler(function () {
    return template('404');
});

$mainRouter->handleRequest($_SERVER['REQUEST_METHOD'], $_SERVER['REQUEST_URI']);
