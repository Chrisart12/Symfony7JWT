<?php

use App\Kernel;

require_once dirname(__DIR__).'/vendor/autoload_runtime.php';

// if ($_SERVER['APP_DEBUG']) {
//     header('Access-Control-Allow-Origin:'.rtrim($_SERVER['HTTP_REFERER'], '/'));
// } else {
//     header('Access-Control-Allow-Origin:http://localhost:5173/');
// }
// header('Access-Control-Allow-Headers:*');
// header('Access-Control-Allow-Credentials:true');
// header('Access-Control-Allow-Headers:X-Requested-With, Content-Type, withCredentials');
// if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
//     die();
// }

return function (array $context) {
    return new Kernel($context['APP_ENV'], (bool) $context['APP_DEBUG']);
};
