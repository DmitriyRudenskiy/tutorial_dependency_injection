<?php

namespace Tutorial;

// Step 1
$auth = new Step001\Auth();
checkAuth($auth);

// Step 2
$auth = new Step002\Auth();
checkAuth($auth);

// Step 3
$auth = new Step003\Auth(new Step003\SessionStorage());
checkAuth($auth);

function checkAuth($auth)
{
    echo '<pre>';
    echo get_class($auth), PHP_EOL;

    $user = ['login' => 'foo', 'password' => 'bar'];

    if ($auth->quest()) {
        echo 'User', PHP_EOL;
    } else {
        echo 'Anonymous', PHP_EOL;
    }

    // вход пользователя на сайт
    $auth->login($user);

    // вывод информации о пользователе
    echo json_encode($auth->user());

    // выход пользователя с сайта
    $auth->logout();

    if ($auth->quest()) {
        echo 'User', PHP_EOL;
    } else {
        echo 'Anonymous', PHP_EOL;
    }
    echo '</pre>';
}
