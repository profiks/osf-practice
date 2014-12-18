<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-08-18 08:30:35 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH\views\template.php [ 2 ] in file:line
2014-08-18 08:30:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-18 09:20:54 --- CRITICAL: View_Exception [ 0 ]: The requested view pages/about could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in D:\OpenServer\domains\test\system\classes\Kohana\View.php:137
2014-08-18 09:20:54 --- DEBUG: #0 D:\OpenServer\domains\test\system\classes\Kohana\View.php(137): Kohana_View->set_filename('pages/about')
#1 D:\OpenServer\domains\test\system\classes\Kohana\View.php(30): Kohana_View->__construct('pages/about', NULL)
#2 D:\OpenServer\domains\test\application\classes\Controller\Main.php(8): Kohana_View::factory('pages/about')
#3 D:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Main->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#6 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#9 {main} in D:\OpenServer\domains\test\system\classes\Kohana\View.php:137
2014-08-18 10:05:06 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Request::$response ~ APPPATH\classes\Controller\Main.php [ 20 ] in D:\OpenServer\domains\test\application\classes\Controller\Main.php:20
2014-08-18 10:05:06 --- DEBUG: #0 D:\OpenServer\domains\test\application\classes\Controller\Main.php(20): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\OpenServer\d...', 20, Array)
#1 D:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Main->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#7 {main} in D:\OpenServer\domains\test\application\classes\Controller\Main.php:20
2014-08-18 10:06:35 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Request::$response ~ APPPATH\classes\Controller\Main.php [ 20 ] in D:\OpenServer\domains\test\application\classes\Controller\Main.php:20
2014-08-18 10:06:35 --- DEBUG: #0 D:\OpenServer\domains\test\application\classes\Controller\Main.php(20): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\OpenServer\d...', 20, Array)
#1 D:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Main->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#7 {main} in D:\OpenServer\domains\test\application\classes\Controller\Main.php:20
2014-08-18 10:07:02 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH\classes\Controller\Main.php [ 31 ] in file:line
2014-08-18 10:07:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-18 10:07:10 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_PRIVATE ~ APPPATH\classes\Controller\Main.php [ 36 ] in file:line
2014-08-18 10:07:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-18 10:12:25 --- CRITICAL: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\Controller\Main.php [ 92 ] in D:\OpenServer\domains\test\application\classes\Controller\Main.php:92
2014-08-18 10:12:25 --- DEBUG: #0 D:\OpenServer\domains\test\application\classes\Controller\Main.php(92): Kohana_Core::error_handler(2048, 'Creating defaul...', 'D:\OpenServer\d...', 92, Array)
#1 D:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Main->action_add()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#7 {main} in D:\OpenServer\domains\test\application\classes\Controller\Main.php:92
2014-08-18 10:16:41 --- CRITICAL: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\Controller\Main.php [ 149 ] in D:\OpenServer\domains\test\application\classes\Controller\Main.php:149
2014-08-18 10:16:41 --- DEBUG: #0 D:\OpenServer\domains\test\application\classes\Controller\Main.php(149): Kohana_Core::error_handler(2048, 'Creating defaul...', 'D:\OpenServer\d...', 149, Array)
#1 D:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Main->action_edit()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#7 {main} in D:\OpenServer\domains\test\application\classes\Controller\Main.php:149
2014-08-18 10:26:10 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH\classes\Controller\Main.php [ 105 ] in file:line
2014-08-18 10:26:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-18 10:28:19 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: post ~ APPPATH\views\client\add.php [ 31 ] in D:\OpenServer\domains\test\application\views\client\add.php:31
2014-08-18 10:28:19 --- DEBUG: #0 D:\OpenServer\domains\test\application\views\client\add.php(31): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\OpenServer\d...', 31, Array)
#1 D:\OpenServer\domains\test\system\classes\Kohana\View.php(61): include('D:\OpenServer\d...')
#2 D:\OpenServer\domains\test\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\OpenServer\d...', Array)
#3 D:\OpenServer\domains\test\application\views\template.php(56): Kohana_View->render()
#4 D:\OpenServer\domains\test\system\classes\Kohana\View.php(61): include('D:\OpenServer\d...')
#5 D:\OpenServer\domains\test\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\OpenServer\d...', Array)
#6 D:\OpenServer\domains\test\system\classes\Kohana\View.php(228): Kohana_View->render()
#7 D:\OpenServer\domains\test\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#8 D:\OpenServer\domains\test\application\classes\Controller\Main.php(20): Kohana_Response->body(Object(View))
#9 D:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Main->action_index()
#10 [internal function]: Kohana_Controller->execute()
#11 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#12 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 D:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 D:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#15 {main} in D:\OpenServer\domains\test\application\views\client\add.php:31
2014-08-18 10:31:27 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: clients ~ APPPATH\views\template.php [ 54 ] in D:\OpenServer\domains\test\application\views\template.php:54
2014-08-18 10:31:27 --- DEBUG: #0 D:\OpenServer\domains\test\application\views\template.php(54): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\OpenServer\d...', 54, Array)
#1 D:\OpenServer\domains\test\system\classes\Kohana\View.php(61): include('D:\OpenServer\d...')
#2 D:\OpenServer\domains\test\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\OpenServer\d...', Array)
#3 D:\OpenServer\domains\test\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\OpenServer\domains\test\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 D:\OpenServer\domains\test\application\classes\Controller\Main.php(22): Kohana_Response->body(Object(View))
#6 D:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Main->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#9 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 D:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 D:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#12 {main} in D:\OpenServer\domains\test\application\views\template.php:54
2014-08-18 10:35:59 --- CRITICAL: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\Controller\Main.php [ 215 ] in D:\OpenServer\domains\test\application\classes\Controller\Main.php:215
2014-08-18 10:35:59 --- DEBUG: #0 D:\OpenServer\domains\test\application\classes\Controller\Main.php(215): Kohana_Core::error_handler(2048, 'Creating defaul...', 'D:\OpenServer\d...', 215, Array)
#1 D:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Main->action_del()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#7 {main} in D:\OpenServer\domains\test\application\classes\Controller\Main.php:215
2014-08-18 10:36:33 --- CRITICAL: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\Controller\Main.php [ 167 ] in D:\OpenServer\domains\test\application\classes\Controller\Main.php:167
2014-08-18 10:36:33 --- DEBUG: #0 D:\OpenServer\domains\test\application\classes\Controller\Main.php(167): Kohana_Core::error_handler(2048, 'Creating defaul...', 'D:\OpenServer\d...', 167, Array)
#1 D:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Main->action_edit()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#7 {main} in D:\OpenServer\domains\test\application\classes\Controller\Main.php:167
2014-08-18 10:38:13 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: add ~ APPPATH\classes\Controller\Main.php [ 170 ] in D:\OpenServer\domains\test\application\classes\Controller\Main.php:170
2014-08-18 10:38:13 --- DEBUG: #0 D:\OpenServer\domains\test\application\classes\Controller\Main.php(170): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\OpenServer\d...', 170, Array)
#1 D:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Main->action_edit()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#7 {main} in D:\OpenServer\domains\test\application\classes\Controller\Main.php:170