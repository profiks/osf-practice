<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-08-11 10:53:01 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_PUBLIC ~ APPPATH\classes\Controller\Welcome.php [ 7 ] in file:line
2014-08-11 10:53:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-11 10:55:05 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\main.php [ 97 ] in D:\OpenServer\domains\test\application\views\main.php:97
2014-08-11 10:55:05 --- DEBUG: #0 D:\OpenServer\domains\test\application\views\main.php(97): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\OpenServer\d...', 97, Array)
#1 D:\OpenServer\domains\test\system\classes\Kohana\View.php(61): include('D:\OpenServer\d...')
#2 D:\OpenServer\domains\test\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\OpenServer\d...', Array)
#3 D:\OpenServer\domains\test\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 D:\OpenServer\domains\test\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#10 {main} in D:\OpenServer\domains\test\application\views\main.php:97
2014-08-11 10:57:07 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: config ~ APPPATH\views\main.php [ 15 ] in D:\OpenServer\domains\test\application\views\main.php:15
2014-08-11 10:57:07 --- DEBUG: #0 D:\OpenServer\domains\test\application\views\main.php(15): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\OpenServer\d...', 15, Array)
#1 D:\OpenServer\domains\test\system\classes\Kohana\View.php(61): include('D:\OpenServer\d...')
#2 D:\OpenServer\domains\test\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\OpenServer\d...', Array)
#3 D:\OpenServer\domains\test\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 D:\OpenServer\domains\test\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#10 {main} in D:\OpenServer\domains\test\application\views\main.php:15
2014-08-11 11:00:15 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function URL() ~ APPPATH\views\main.php [ 18 ] in file:line
2014-08-11 11:00:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-11 11:00:20 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '(', expecting T_STRING or T_VARIABLE or '$' ~ APPPATH\views\main.php [ 18 ] in file:line
2014-08-11 11:00:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line