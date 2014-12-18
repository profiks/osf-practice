<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-08-13 02:22:44 --- CRITICAL: ErrorException [ 4096 ]: Argument 3 passed to Kohana_Form::input() must be an array, string given, called in D:\OpenServer\domains\test\application\views\client\edit.php on line 19 and defined ~ SYSPATH\classes\Kohana\Form.php [ 93 ] in D:\OpenServer\domains\test\system\classes\Kohana\Form.php:93
2014-08-13 02:22:44 --- DEBUG: #0 D:\OpenServer\domains\test\system\classes\Kohana\Form.php(93): Kohana_Core::error_handler(4096, 'Argument 3 pass...', 'D:\OpenServer\d...', 93, Array)
#1 D:\OpenServer\domains\test\application\views\client\edit.php(19): Kohana_Form::input('last_name', '', 'class=>form-con...')
#2 D:\OpenServer\domains\test\system\classes\Kohana\View.php(61): include('D:\OpenServer\d...')
#3 D:\OpenServer\domains\test\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\OpenServer\d...', Array)
#4 D:\OpenServer\domains\test\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 D:\OpenServer\domains\test\application\views\template.php(109): Kohana_View->__toString()
#6 D:\OpenServer\domains\test\system\classes\Kohana\View.php(61): include('D:\OpenServer\d...')
#7 D:\OpenServer\domains\test\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\OpenServer\d...', Array)
#8 D:\OpenServer\domains\test\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 D:\OpenServer\domains\test\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#12 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 D:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 D:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#15 {main} in D:\OpenServer\domains\test\system\classes\Kohana\Form.php:93
2014-08-13 02:23:01 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH\views\client\edit.php [ 19 ] in file:line
2014-08-13 02:23:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-13 02:24:32 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '=', expecting ')' ~ APPPATH\views\client\edit.php [ 15 ] in file:line
2014-08-13 02:24:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-13 02:24:40 --- CRITICAL: ErrorException [ 2 ]: strpos() expects parameter 1 to be string, array given ~ SYSPATH\classes\Kohana\Form.php [ 48 ] in file:line
2014-08-13 02:24:40 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'strpos() expect...', 'D:\OpenServer\d...', 48, Array)
#1 D:\OpenServer\domains\test\system\classes\Kohana\Form.php(48): strpos(Array, '://')
#2 D:\OpenServer\domains\test\application\views\client\edit.php(16): Kohana_Form::open(Array)
#3 D:\OpenServer\domains\test\system\classes\Kohana\View.php(61): include('D:\OpenServer\d...')
#4 D:\OpenServer\domains\test\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\OpenServer\d...', Array)
#5 D:\OpenServer\domains\test\system\classes\Kohana\View.php(228): Kohana_View->render()
#6 D:\OpenServer\domains\test\application\views\template.php(109): Kohana_View->__toString()
#7 D:\OpenServer\domains\test\system\classes\Kohana\View.php(61): include('D:\OpenServer\d...')
#8 D:\OpenServer\domains\test\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\OpenServer\d...', Array)
#9 D:\OpenServer\domains\test\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#10 D:\OpenServer\domains\test\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#11 [internal function]: Kohana_Controller->execute()
#12 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#13 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 D:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 D:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#16 {main} in file:line
2014-08-13 03:11:39 --- CRITICAL: ErrorException [ 2 ]: htmlentities() expects parameter 1 to be string, array given ~ APPPATH\classes\Controller\Main.php [ 34 ] in file:line
2014-08-13 03:11:39 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'htmlentities() ...', 'D:\OpenServer\d...', 34, Array)
#1 D:\OpenServer\domains\test\application\classes\Controller\Main.php(34): htmlentities(Array)
#2 D:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Main->action_add()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#5 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2014-08-13 03:11:57 --- CRITICAL: ErrorException [ 2 ]: trim() expects parameter 1 to be string, array given ~ APPPATH\classes\Controller\Main.php [ 34 ] in file:line
2014-08-13 03:11:57 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'trim() expects ...', 'D:\OpenServer\d...', 34, Array)
#1 D:\OpenServer\domains\test\application\classes\Controller\Main.php(34): trim(Array)
#2 D:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Main->action_add()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#5 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2014-08-13 03:38:43 --- CRITICAL: ErrorException [ 1 ]: Call to a member function check() on a non-object ~ APPPATH\classes\Controller\Main.php [ 76 ] in file:line
2014-08-13 03:38:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-13 03:39:19 --- CRITICAL: View_Exception [ 0 ]: The requested view user/register could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in D:\OpenServer\domains\test\system\classes\Kohana\View.php:137
2014-08-13 03:39:19 --- DEBUG: #0 D:\OpenServer\domains\test\system\classes\Kohana\View.php(137): Kohana_View->set_filename('user/register')
#1 D:\OpenServer\domains\test\system\classes\Kohana\View.php(30): Kohana_View->__construct('user/register', NULL)
#2 D:\OpenServer\domains\test\application\classes\Controller\Main.php(86): Kohana_View::factory('user/register')
#3 D:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Main->action_add()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#6 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#9 {main} in D:\OpenServer\domains\test\system\classes\Kohana\View.php:137
2014-08-13 03:39:36 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Response::bind() ~ APPPATH\classes\Controller\Main.php [ 87 ] in file:line
2014-08-13 03:39:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-13 03:41:03 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Response::set() ~ APPPATH\classes\Controller\Main.php [ 87 ] in file:line
2014-08-13 03:41:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-13 03:41:37 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method View::body() ~ APPPATH\classes\Controller\Main.php [ 86 ] in file:line
2014-08-13 03:41:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-13 03:42:00 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_PAAMAYIM_NEKUDOTAYIM ~ APPPATH\classes\Controller\Main.php [ 86 ] in file:line
2014-08-13 03:42:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-13 03:43:05 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH\views\client\edit.php [ 11 ] in D:\OpenServer\domains\test\application\views\client\edit.php:11
2014-08-13 03:43:05 --- DEBUG: #0 D:\OpenServer\domains\test\application\views\client\edit.php(11): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\OpenServer\d...', 11, Array)
#1 D:\OpenServer\domains\test\system\classes\Kohana\View.php(61): include('D:\OpenServer\d...')
#2 D:\OpenServer\domains\test\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\OpenServer\d...', Array)
#3 D:\OpenServer\domains\test\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\OpenServer\domains\test\application\views\template.php(109): Kohana_View->__toString()
#5 D:\OpenServer\domains\test\system\classes\Kohana\View.php(61): include('D:\OpenServer\d...')
#6 D:\OpenServer\domains\test\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\OpenServer\d...', Array)
#7 D:\OpenServer\domains\test\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 D:\OpenServer\domains\test\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#11 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 D:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#14 {main} in D:\OpenServer\domains\test\application\views\client\edit.php:11
2014-08-13 03:47:24 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Response::set() ~ APPPATH\classes\Controller\Main.php [ 87 ] in file:line
2014-08-13 03:47:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-13 03:47:40 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Response::bind() ~ APPPATH\classes\Controller\Main.php [ 87 ] in file:line
2014-08-13 03:47:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-13 03:49:33 --- CRITICAL: ErrorException [ 2048 ]: Only variables should be passed by reference ~ APPPATH\classes\Controller\Main.php [ 87 ] in D:\OpenServer\domains\test\application\classes\Controller\Main.php:87
2014-08-13 03:49:33 --- DEBUG: #0 D:\OpenServer\domains\test\application\classes\Controller\Main.php(87): Kohana_Core::error_handler(2048, 'Only variables ...', 'D:\OpenServer\d...', 87, Array)
#1 D:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Main->action_add()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#7 {main} in D:\OpenServer\domains\test\application\classes\Controller\Main.php:87
2014-08-13 03:53:40 --- CRITICAL: ErrorException [ 4096 ]: Argument 2 passed to Kohana_Validation::rules() must be an array, none given, called in D:\OpenServer\domains\test\application\classes\Controller\Main.php on line 75 and defined ~ SYSPATH\classes\Kohana\Validation.php [ 238 ] in D:\OpenServer\domains\test\system\classes\Kohana\Validation.php:238
2014-08-13 03:53:40 --- DEBUG: #0 D:\OpenServer\domains\test\system\classes\Kohana\Validation.php(238): Kohana_Core::error_handler(4096, 'Argument 2 pass...', 'D:\OpenServer\d...', 238, Array)
#1 D:\OpenServer\domains\test\application\classes\Controller\Main.php(75): Kohana_Validation->rules(Array)
#2 D:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Main->action_add()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#5 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#8 {main} in D:\OpenServer\domains\test\system\classes\Kohana\Validation.php:238
2014-08-13 03:54:35 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ',' ~ APPPATH\classes\Controller\Main.php [ 44 ] in file:line
2014-08-13 03:54:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-13 03:55:04 --- CRITICAL: ErrorException [ 4096 ]: Argument 3 passed to Kohana_Validation::rule() must be an array, string given, called in D:\OpenServer\domains\test\system\classes\Kohana\Validation.php on line 242 and defined ~ SYSPATH\classes\Kohana\Validation.php [ 211 ] in D:\OpenServer\domains\test\system\classes\Kohana\Validation.php:211
2014-08-13 03:55:04 --- DEBUG: #0 D:\OpenServer\domains\test\system\classes\Kohana\Validation.php(211): Kohana_Core::error_handler(4096, 'Argument 3 pass...', 'D:\OpenServer\d...', 211, Array)
#1 D:\OpenServer\domains\test\system\classes\Kohana\Validation.php(242): Kohana_Validation->rule('number', 'n', 'o')
#2 D:\OpenServer\domains\test\application\classes\Controller\Main.php(74): Kohana_Validation->rules('number', Array, 'name', Array, 'last_name', Array, 'email', Array, 'adress', Array, 'city', Array, 'country', Array)
#3 D:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Main->action_add()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#6 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#9 {main} in D:\OpenServer\domains\test\system\classes\Kohana\Validation.php:211
2014-08-13 04:02:40 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Security::xss_clean() ~ APPPATH\classes\Controller\Main.php [ 37 ] in file:line
2014-08-13 04:02:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-13 04:04:40 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Validation::xss_clean() ~ APPPATH\classes\Controller\Main.php [ 37 ] in file:line
2014-08-13 04:04:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-13 04:09:17 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';', expecting ')' ~ APPPATH\classes\Controller\Main.php [ 44 ] in file:line
2014-08-13 04:09:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-13 04:09:46 --- CRITICAL: ErrorException [ 4096 ]: Argument 3 passed to Kohana_Validation::rule() must be an array, string given, called in D:\OpenServer\domains\test\system\classes\Kohana\Validation.php on line 242 and defined ~ SYSPATH\classes\Kohana\Validation.php [ 211 ] in D:\OpenServer\domains\test\system\classes\Kohana\Validation.php:211
2014-08-13 04:09:46 --- DEBUG: #0 D:\OpenServer\domains\test\system\classes\Kohana\Validation.php(211): Kohana_Core::error_handler(4096, 'Argument 3 pass...', 'D:\OpenServer\d...', 211, Array)
#1 D:\OpenServer\domains\test\system\classes\Kohana\Validation.php(242): Kohana_Validation->rule('number', 'number', 'Clients_Model::...')
#2 D:\OpenServer\domains\test\application\classes\Controller\Main.php(45): Kohana_Validation->rules('number', Array)
#3 D:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Main->action_add()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#6 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#9 {main} in D:\OpenServer\domains\test\system\classes\Kohana\Validation.php:211
2014-08-13 04:12:50 --- CRITICAL: ErrorException [ 4096 ]: Argument 3 passed to Kohana_Validation::rule() must be an array, string given, called in D:\OpenServer\domains\test\system\classes\Kohana\Validation.php on line 242 and defined ~ SYSPATH\classes\Kohana\Validation.php [ 211 ] in D:\OpenServer\domains\test\system\classes\Kohana\Validation.php:211
2014-08-13 04:12:50 --- DEBUG: #0 D:\OpenServer\domains\test\system\classes\Kohana\Validation.php(211): Kohana_Core::error_handler(4096, 'Argument 3 pass...', 'D:\OpenServer\d...', 211, Array)
#1 D:\OpenServer\domains\test\system\classes\Kohana\Validation.php(242): Kohana_Validation->rule('number', 'number', 'unique_number')
#2 D:\OpenServer\domains\test\application\classes\Controller\Main.php(45): Kohana_Validation->rules('number', Array)
#3 D:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Main->action_add()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#6 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#9 {main} in D:\OpenServer\domains\test\system\classes\Kohana\Validation.php:211
2014-08-13 04:13:42 --- CRITICAL: ReflectionException [ 0 ]: Function unique_number() does not exist ~ SYSPATH\classes\Kohana\Validation.php [ 396 ] in D:\OpenServer\domains\test\system\classes\Kohana\Validation.php:396
2014-08-13 04:13:42 --- DEBUG: #0 D:\OpenServer\domains\test\system\classes\Kohana\Validation.php(396): ReflectionFunction->__construct('unique_number')
#1 D:\OpenServer\domains\test\application\classes\Controller\Main.php(82): Kohana_Validation->check()
#2 D:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Main->action_add()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#5 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#8 {main} in D:\OpenServer\domains\test\system\classes\Kohana\Validation.php:396
2014-08-13 04:14:45 --- CRITICAL: ErrorException [ 4096 ]: Argument 3 passed to Kohana_Validation::rule() must be an array, string given, called in D:\OpenServer\domains\test\system\classes\Kohana\Validation.php on line 242 and defined ~ SYSPATH\classes\Kohana\Validation.php [ 211 ] in D:\OpenServer\domains\test\system\classes\Kohana\Validation.php:211
2014-08-13 04:14:45 --- DEBUG: #0 D:\OpenServer\domains\test\system\classes\Kohana\Validation.php(211): Kohana_Core::error_handler(4096, 'Argument 3 pass...', 'D:\OpenServer\d...', 211, Array)
#1 D:\OpenServer\domains\test\system\classes\Kohana\Validation.php(242): Kohana_Validation->rule('number', Object(Model_Clients), 'unique_number')
#2 D:\OpenServer\domains\test\application\classes\Controller\Main.php(45): Kohana_Validation->rules('number', Array)
#3 D:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Main->action_add()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#6 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#9 {main} in D:\OpenServer\domains\test\system\classes\Kohana\Validation.php:211
2014-08-13 04:34:52 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_list' not found ~ SYSPATH\classes\Kohana\Model.php [ 26 ] in file:line
2014-08-13 04:34:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-13 04:37:28 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_STRING ~ APPPATH\views\client\edit.php [ 24 ] in file:line
2014-08-13 04:37:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-13 04:38:31 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_ENCAPSED_AND_WHITESPACE, expecting T_STRING or T_VARIABLE or T_NUM_STRING ~ APPPATH\views\client\edit.php [ 26 ] in file:line
2014-08-13 04:38:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-13 04:39:12 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_ENCAPSED_AND_WHITESPACE, expecting T_STRING or T_VARIABLE or T_NUM_STRING ~ APPPATH\views\client\edit.php [ 26 ] in file:line
2014-08-13 04:39:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-13 04:39:22 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_ENCAPSED_AND_WHITESPACE, expecting T_STRING or T_VARIABLE or T_NUM_STRING ~ APPPATH\views\client\edit.php [ 26 ] in file:line
2014-08-13 04:39:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-13 04:39:54 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_ENCAPSED_AND_WHITESPACE, expecting T_STRING or T_VARIABLE or T_NUM_STRING ~ APPPATH\views\client\edit.php [ 26 ] in file:line
2014-08-13 04:39:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-13 04:42:47 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_STRING ~ APPPATH\views\client\edit.php [ 40 ] in file:line
2014-08-13 04:42:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-13 04:52:09 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH\classes\Controller\Main.php [ 57 ] in file:line
2014-08-13 04:52:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-13 04:55:35 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: No ending delimiter '^' found ~ SYSPATH\classes\Kohana\Valid.php [ 39 ] in file:line
2014-08-13 04:55:35 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\OpenServer\d...', 39, Array)
#1 D:\OpenServer\domains\test\system\classes\Kohana\Valid.php(39): preg_match('^[a-zA-Z]+$', 'Denysss Arkan')
#2 [internal function]: Kohana_Valid::regex('Denysss Arkan', '^[a-zA-Z]+$')
#3 D:\OpenServer\domains\test\system\classes\Kohana\Validation.php(391): ReflectionMethod->invokeArgs(NULL, Array)
#4 D:\OpenServer\domains\test\application\classes\Controller\Main.php(88): Kohana_Validation->check()
#5 D:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Main->action_add()
#6 [internal function]: Kohana_Controller->execute()
#7 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#8 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 D:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 D:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#11 {main} in file:line
2014-08-13 04:55:49 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Delimiter must not be alphanumeric or backslash ~ SYSPATH\classes\Kohana\Valid.php [ 39 ] in file:line
2014-08-13 04:55:49 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\OpenServer\d...', 39, Array)
#1 D:\OpenServer\domains\test\system\classes\Kohana\Valid.php(39): preg_match('\^[a-zA-Z]+$', 'Denysss Arkan')
#2 [internal function]: Kohana_Valid::regex('Denysss Arkan', '\^[a-zA-Z]+$')
#3 D:\OpenServer\domains\test\system\classes\Kohana\Validation.php(391): ReflectionMethod->invokeArgs(NULL, Array)
#4 D:\OpenServer\domains\test\application\classes\Controller\Main.php(88): Kohana_Validation->check()
#5 D:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Main->action_add()
#6 [internal function]: Kohana_Controller->execute()
#7 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#8 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 D:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 D:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#11 {main} in file:line
2014-08-13 04:56:11 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: No ending delimiter '&quot;' found ~ SYSPATH\classes\Kohana\Valid.php [ 39 ] in file:line
2014-08-13 04:56:11 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\OpenServer\d...', 39, Array)
#1 D:\OpenServer\domains\test\system\classes\Kohana\Valid.php(39): preg_match('"/^[a-zA-Z]+$', 'Denysss Arkan')
#2 [internal function]: Kohana_Valid::regex('Denysss Arkan', '"/^[a-zA-Z]+$')
#3 D:\OpenServer\domains\test\system\classes\Kohana\Validation.php(391): ReflectionMethod->invokeArgs(NULL, Array)
#4 D:\OpenServer\domains\test\application\classes\Controller\Main.php(88): Kohana_Validation->check()
#5 D:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Main->action_add()
#6 [internal function]: Kohana_Controller->execute()
#7 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#8 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 D:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 D:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#11 {main} in file:line
2014-08-13 04:56:17 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: No ending delimiter '&quot;' found ~ SYSPATH\classes\Kohana\Valid.php [ 39 ] in file:line
2014-08-13 04:56:17 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\OpenServer\d...', 39, Array)
#1 D:\OpenServer\domains\test\system\classes\Kohana\Valid.php(39): preg_match('"\^[a-zA-Z]+$', 'Denysss Arkan')
#2 [internal function]: Kohana_Valid::regex('Denysss Arkan', '"\^[a-zA-Z]+$')
#3 D:\OpenServer\domains\test\system\classes\Kohana\Validation.php(391): ReflectionMethod->invokeArgs(NULL, Array)
#4 D:\OpenServer\domains\test\application\classes\Controller\Main.php(88): Kohana_Validation->check()
#5 D:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Main->action_add()
#6 [internal function]: Kohana_Controller->execute()
#7 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#8 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 D:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 D:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#11 {main} in file:line
2014-08-13 04:56:25 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: No ending delimiter '/' found ~ SYSPATH\classes\Kohana\Valid.php [ 39 ] in file:line
2014-08-13 04:56:25 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\OpenServer\d...', 39, Array)
#1 D:\OpenServer\domains\test\system\classes\Kohana\Valid.php(39): preg_match('/^[a-zA-Z]+$', 'Denysss Arkan')
#2 [internal function]: Kohana_Valid::regex('Denysss Arkan', '/^[a-zA-Z]+$')
#3 D:\OpenServer\domains\test\system\classes\Kohana\Validation.php(391): ReflectionMethod->invokeArgs(NULL, Array)
#4 D:\OpenServer\domains\test\application\classes\Controller\Main.php(88): Kohana_Validation->check()
#5 D:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Main->action_add()
#6 [internal function]: Kohana_Controller->execute()
#7 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#8 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 D:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 D:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#11 {main} in file:line
2014-08-13 04:56:34 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Delimiter must not be alphanumeric or backslash ~ SYSPATH\classes\Kohana\Valid.php [ 39 ] in file:line
2014-08-13 04:56:34 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\OpenServer\d...', 39, Array)
#1 D:\OpenServer\domains\test\system\classes\Kohana\Valid.php(39): preg_match('\^[a-zA-Z]+$', 'Denysss Arkan')
#2 [internal function]: Kohana_Valid::regex('Denysss Arkan', '\^[a-zA-Z]+$')
#3 D:\OpenServer\domains\test\system\classes\Kohana\Validation.php(391): ReflectionMethod->invokeArgs(NULL, Array)
#4 D:\OpenServer\domains\test\application\classes\Controller\Main.php(88): Kohana_Validation->check()
#5 D:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Main->action_add()
#6 [internal function]: Kohana_Controller->execute()
#7 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#8 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 D:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 D:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#11 {main} in file:line
2014-08-13 04:56:47 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: No ending delimiter '^' found ~ SYSPATH\classes\Kohana\Valid.php [ 39 ] in file:line
2014-08-13 04:56:47 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\OpenServer\d...', 39, Array)
#1 D:\OpenServer\domains\test\system\classes\Kohana\Valid.php(39): preg_match('^[a-zA-Z]+$', 'Denysss Arkan')
#2 [internal function]: Kohana_Valid::regex('Denysss Arkan', '^[a-zA-Z]+$')
#3 D:\OpenServer\domains\test\system\classes\Kohana\Validation.php(391): ReflectionMethod->invokeArgs(NULL, Array)
#4 D:\OpenServer\domains\test\application\classes\Controller\Main.php(88): Kohana_Validation->check()
#5 D:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Main->action_add()
#6 [internal function]: Kohana_Controller->execute()
#7 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#8 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 D:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 D:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#11 {main} in file:line
2014-08-13 04:56:58 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Unknown modifier '+' ~ SYSPATH\classes\Kohana\Valid.php [ 39 ] in file:line
2014-08-13 04:56:58 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\OpenServer\d...', 39, Array)
#1 D:\OpenServer\domains\test\system\classes\Kohana\Valid.php(39): preg_match('[a-zA-Z]+$', 'Denysss Arkan')
#2 [internal function]: Kohana_Valid::regex('Denysss Arkan', '[a-zA-Z]+$')
#3 D:\OpenServer\domains\test\system\classes\Kohana\Validation.php(391): ReflectionMethod->invokeArgs(NULL, Array)
#4 D:\OpenServer\domains\test\application\classes\Controller\Main.php(88): Kohana_Validation->check()
#5 D:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Main->action_add()
#6 [internal function]: Kohana_Controller->execute()
#7 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#8 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 D:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 D:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#11 {main} in file:line
2014-08-13 04:57:43 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: No ending delimiter '/' found ~ SYSPATH\classes\Kohana\Valid.php [ 39 ] in file:line
2014-08-13 04:57:43 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\OpenServer\d...', 39, Array)
#1 D:\OpenServer\domains\test\system\classes\Kohana\Valid.php(39): preg_match('/^[a-zA-Z]+$', 'Denysss Arkan')
#2 [internal function]: Kohana_Valid::regex('Denysss Arkan', '/^[a-zA-Z]+$')
#3 D:\OpenServer\domains\test\system\classes\Kohana\Validation.php(391): ReflectionMethod->invokeArgs(NULL, Array)
#4 D:\OpenServer\domains\test\application\classes\Controller\Main.php(88): Kohana_Validation->check()
#5 D:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Main->action_add()
#6 [internal function]: Kohana_Controller->execute()
#7 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#8 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 D:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 D:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#11 {main} in file:line
2014-08-13 06:15:19 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: post ~ APPPATH\views\client\edit.php [ 26 ] in D:\OpenServer\domains\test\application\views\client\edit.php:26
2014-08-13 06:15:19 --- DEBUG: #0 D:\OpenServer\domains\test\application\views\client\edit.php(26): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\OpenServer\d...', 26, Array)
#1 D:\OpenServer\domains\test\system\classes\Kohana\View.php(61): include('D:\OpenServer\d...')
#2 D:\OpenServer\domains\test\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\OpenServer\d...', Array)
#3 D:\OpenServer\domains\test\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\OpenServer\domains\test\application\views\template.php(109): Kohana_View->__toString()
#5 D:\OpenServer\domains\test\system\classes\Kohana\View.php(61): include('D:\OpenServer\d...')
#6 D:\OpenServer\domains\test\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\OpenServer\d...', Array)
#7 D:\OpenServer\domains\test\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 D:\OpenServer\domains\test\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#11 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 D:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#14 {main} in D:\OpenServer\domains\test\application\views\client\edit.php:26
2014-08-13 06:16:41 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_ENCAPSED_AND_WHITESPACE, expecting T_STRING or T_VARIABLE or T_NUM_STRING ~ APPPATH\views\client\edit.php [ 26 ] in file:line
2014-08-13 06:16:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-13 06:17:56 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH\views\client\edit.php [ 14 ] in file:line
2014-08-13 06:17:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-13 06:18:05 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH\views\client\edit.php [ 14 ] in file:line
2014-08-13 06:18:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-13 06:18:23 --- CRITICAL: ErrorException [ 8 ]: Uninitialized string offset: 0 ~ APPPATH\views\client\edit.php [ 26 ] in D:\OpenServer\domains\test\application\views\client\edit.php:26
2014-08-13 06:18:23 --- DEBUG: #0 D:\OpenServer\domains\test\application\views\client\edit.php(26): Kohana_Core::error_handler(8, 'Uninitialized s...', 'D:\OpenServer\d...', 26, Array)
#1 D:\OpenServer\domains\test\system\classes\Kohana\View.php(61): include('D:\OpenServer\d...')
#2 D:\OpenServer\domains\test\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\OpenServer\d...', Array)
#3 D:\OpenServer\domains\test\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\OpenServer\domains\test\application\views\template.php(109): Kohana_View->__toString()
#5 D:\OpenServer\domains\test\system\classes\Kohana\View.php(61): include('D:\OpenServer\d...')
#6 D:\OpenServer\domains\test\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\OpenServer\d...', Array)
#7 D:\OpenServer\domains\test\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 D:\OpenServer\domains\test\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#11 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 D:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#14 {main} in D:\OpenServer\domains\test\application\views\client\edit.php:26
2014-08-13 06:18:35 --- CRITICAL: ErrorException [ 8 ]: Undefined index: number ~ APPPATH\views\client\edit.php [ 26 ] in D:\OpenServer\domains\test\application\views\client\edit.php:26
2014-08-13 06:18:35 --- DEBUG: #0 D:\OpenServer\domains\test\application\views\client\edit.php(26): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\OpenServer\d...', 26, Array)
#1 D:\OpenServer\domains\test\system\classes\Kohana\View.php(61): include('D:\OpenServer\d...')
#2 D:\OpenServer\domains\test\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\OpenServer\d...', Array)
#3 D:\OpenServer\domains\test\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\OpenServer\domains\test\application\views\template.php(109): Kohana_View->__toString()
#5 D:\OpenServer\domains\test\system\classes\Kohana\View.php(61): include('D:\OpenServer\d...')
#6 D:\OpenServer\domains\test\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\OpenServer\d...', Array)
#7 D:\OpenServer\domains\test\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 D:\OpenServer\domains\test\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#11 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 D:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#14 {main} in D:\OpenServer\domains\test\application\views\client\edit.php:26
2014-08-13 06:20:21 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: post ~ APPPATH\views\client\edit.php [ 26 ] in D:\OpenServer\domains\test\application\views\client\edit.php:26
2014-08-13 06:20:21 --- DEBUG: #0 D:\OpenServer\domains\test\application\views\client\edit.php(26): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\OpenServer\d...', 26, Array)
#1 D:\OpenServer\domains\test\system\classes\Kohana\View.php(61): include('D:\OpenServer\d...')
#2 D:\OpenServer\domains\test\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\OpenServer\d...', Array)
#3 D:\OpenServer\domains\test\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\OpenServer\domains\test\application\views\template.php(109): Kohana_View->__toString()
#5 D:\OpenServer\domains\test\system\classes\Kohana\View.php(61): include('D:\OpenServer\d...')
#6 D:\OpenServer\domains\test\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\OpenServer\d...', Array)
#7 D:\OpenServer\domains\test\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 D:\OpenServer\domains\test\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#11 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 D:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#14 {main} in D:\OpenServer\domains\test\application\views\client\edit.php:26
2014-08-13 06:21:31 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: post ~ APPPATH\views\client\edit.php [ 26 ] in D:\OpenServer\domains\test\application\views\client\edit.php:26
2014-08-13 06:21:31 --- DEBUG: #0 D:\OpenServer\domains\test\application\views\client\edit.php(26): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\OpenServer\d...', 26, Array)
#1 D:\OpenServer\domains\test\system\classes\Kohana\View.php(61): include('D:\OpenServer\d...')
#2 D:\OpenServer\domains\test\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\OpenServer\d...', Array)
#3 D:\OpenServer\domains\test\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\OpenServer\domains\test\application\views\template.php(109): Kohana_View->__toString()
#5 D:\OpenServer\domains\test\system\classes\Kohana\View.php(61): include('D:\OpenServer\d...')
#6 D:\OpenServer\domains\test\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\OpenServer\d...', Array)
#7 D:\OpenServer\domains\test\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 D:\OpenServer\domains\test\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#11 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 D:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#14 {main} in D:\OpenServer\domains\test\application\views\client\edit.php:26
2014-08-13 06:21:53 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: post ~ APPPATH\views\client\edit.php [ 26 ] in D:\OpenServer\domains\test\application\views\client\edit.php:26
2014-08-13 06:21:53 --- DEBUG: #0 D:\OpenServer\domains\test\application\views\client\edit.php(26): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\OpenServer\d...', 26, Array)
#1 D:\OpenServer\domains\test\system\classes\Kohana\View.php(61): include('D:\OpenServer\d...')
#2 D:\OpenServer\domains\test\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\OpenServer\d...', Array)
#3 D:\OpenServer\domains\test\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\OpenServer\domains\test\application\views\template.php(109): Kohana_View->__toString()
#5 D:\OpenServer\domains\test\system\classes\Kohana\View.php(61): include('D:\OpenServer\d...')
#6 D:\OpenServer\domains\test\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\OpenServer\d...', Array)
#7 D:\OpenServer\domains\test\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 D:\OpenServer\domains\test\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#11 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 D:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#14 {main} in D:\OpenServer\domains\test\application\views\client\edit.php:26
2014-08-13 06:24:18 --- CRITICAL: ErrorException [ 8 ]: Undefined index: number ~ APPPATH\views\client\edit.php [ 26 ] in D:\OpenServer\domains\test\application\views\client\edit.php:26
2014-08-13 06:24:18 --- DEBUG: #0 D:\OpenServer\domains\test\application\views\client\edit.php(26): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\OpenServer\d...', 26, Array)
#1 D:\OpenServer\domains\test\system\classes\Kohana\View.php(61): include('D:\OpenServer\d...')
#2 D:\OpenServer\domains\test\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\OpenServer\d...', Array)
#3 D:\OpenServer\domains\test\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\OpenServer\domains\test\application\views\template.php(109): Kohana_View->__toString()
#5 D:\OpenServer\domains\test\system\classes\Kohana\View.php(61): include('D:\OpenServer\d...')
#6 D:\OpenServer\domains\test\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\OpenServer\d...', Array)
#7 D:\OpenServer\domains\test\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 D:\OpenServer\domains\test\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#11 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 D:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#14 {main} in D:\OpenServer\domains\test\application\views\client\edit.php:26
2014-08-13 06:24:28 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: post ~ APPPATH\views\client\edit.php [ 26 ] in D:\OpenServer\domains\test\application\views\client\edit.php:26
2014-08-13 06:24:28 --- DEBUG: #0 D:\OpenServer\domains\test\application\views\client\edit.php(26): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\OpenServer\d...', 26, Array)
#1 D:\OpenServer\domains\test\system\classes\Kohana\View.php(61): include('D:\OpenServer\d...')
#2 D:\OpenServer\domains\test\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\OpenServer\d...', Array)
#3 D:\OpenServer\domains\test\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\OpenServer\domains\test\application\views\template.php(109): Kohana_View->__toString()
#5 D:\OpenServer\domains\test\system\classes\Kohana\View.php(61): include('D:\OpenServer\d...')
#6 D:\OpenServer\domains\test\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\OpenServer\d...', Array)
#7 D:\OpenServer\domains\test\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 D:\OpenServer\domains\test\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#11 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 D:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#14 {main} in D:\OpenServer\domains\test\application\views\client\edit.php:26
2014-08-13 06:26:11 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: post ~ APPPATH\views\client\edit.php [ 26 ] in D:\OpenServer\domains\test\application\views\client\edit.php:26
2014-08-13 06:26:11 --- DEBUG: #0 D:\OpenServer\domains\test\application\views\client\edit.php(26): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\OpenServer\d...', 26, Array)
#1 D:\OpenServer\domains\test\system\classes\Kohana\View.php(61): include('D:\OpenServer\d...')
#2 D:\OpenServer\domains\test\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\OpenServer\d...', Array)
#3 D:\OpenServer\domains\test\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\OpenServer\domains\test\application\views\template.php(109): Kohana_View->__toString()
#5 D:\OpenServer\domains\test\system\classes\Kohana\View.php(61): include('D:\OpenServer\d...')
#6 D:\OpenServer\domains\test\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\OpenServer\d...', Array)
#7 D:\OpenServer\domains\test\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 D:\OpenServer\domains\test\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#11 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 D:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#14 {main} in D:\OpenServer\domains\test\application\views\client\edit.php:26
2014-08-13 06:26:12 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: post ~ APPPATH\views\client\edit.php [ 26 ] in D:\OpenServer\domains\test\application\views\client\edit.php:26
2014-08-13 06:26:12 --- DEBUG: #0 D:\OpenServer\domains\test\application\views\client\edit.php(26): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\OpenServer\d...', 26, Array)
#1 D:\OpenServer\domains\test\system\classes\Kohana\View.php(61): include('D:\OpenServer\d...')
#2 D:\OpenServer\domains\test\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\OpenServer\d...', Array)
#3 D:\OpenServer\domains\test\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\OpenServer\domains\test\application\views\template.php(109): Kohana_View->__toString()
#5 D:\OpenServer\domains\test\system\classes\Kohana\View.php(61): include('D:\OpenServer\d...')
#6 D:\OpenServer\domains\test\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\OpenServer\d...', Array)
#7 D:\OpenServer\domains\test\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 D:\OpenServer\domains\test\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#11 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 D:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#14 {main} in D:\OpenServer\domains\test\application\views\client\edit.php:26
2014-08-13 06:29:18 --- CRITICAL: ErrorException [ 8 ]: Undefined index: name ~ APPPATH\views\client\edit.php [ 40 ] in D:\OpenServer\domains\test\application\views\client\edit.php:40
2014-08-13 06:29:18 --- DEBUG: #0 D:\OpenServer\domains\test\application\views\client\edit.php(40): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\OpenServer\d...', 40, Array)
#1 D:\OpenServer\domains\test\system\classes\Kohana\View.php(61): include('D:\OpenServer\d...')
#2 D:\OpenServer\domains\test\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\OpenServer\d...', Array)
#3 D:\OpenServer\domains\test\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\OpenServer\domains\test\application\views\template.php(109): Kohana_View->__toString()
#5 D:\OpenServer\domains\test\system\classes\Kohana\View.php(61): include('D:\OpenServer\d...')
#6 D:\OpenServer\domains\test\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\OpenServer\d...', Array)
#7 D:\OpenServer\domains\test\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 D:\OpenServer\domains\test\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#11 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 D:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#14 {main} in D:\OpenServer\domains\test\application\views\client\edit.php:40
2014-08-13 06:34:56 --- CRITICAL: Database_Exception [ 0 ]: ОШИБКА:  ошибка синтаксиса (примерное положение: "CALL")
LINE 1: CALL add_client();
        ^ [ CALL add_client(); ] ~ MODPATH\database\classes\Kohana\Database\PostgreSQL.php [ 178 ] in D:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php:251
2014-08-13 06:34:56 --- DEBUG: #0 D:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PostgreSQL->query(1, 'CALL add_client...', false, Array)
#1 D:\OpenServer\domains\test\application\classes\Model\clients.php(32): Kohana_Database_Query->execute()
#2 D:\OpenServer\domains\test\application\classes\Controller\Main.php(100): Model_Clients->add_client()
#3 D:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Main->action_add()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#6 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#9 {main} in D:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php:251
2014-08-13 06:35:34 --- CRITICAL: Database_Exception [ 0 ]: ОШИБКА:  ошибка синтаксиса (примерное положение: "call")
LINE 1: call add_client();
        ^ [ call add_client(); ] ~ MODPATH\database\classes\Kohana\Database\PostgreSQL.php [ 178 ] in D:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php:251
2014-08-13 06:35:34 --- DEBUG: #0 D:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PostgreSQL->query(1, 'call add_client...', false, Array)
#1 D:\OpenServer\domains\test\application\classes\Model\clients.php(32): Kohana_Database_Query->execute()
#2 D:\OpenServer\domains\test\application\classes\Controller\Main.php(100): Model_Clients->add_client()
#3 D:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Main->action_add()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#6 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#9 {main} in D:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php:251
2014-08-13 06:36:24 --- CRITICAL: Database_Exception [ 0 ]: ОШИБКА:  ошибка синтаксиса (примерное положение: "call")
LINE 1: call add_client(475,'name','last name','emil','adress','city...
        ^ [ call add_client(475,'name','last name','emil','adress','city','country'); ] ~ MODPATH\database\classes\Kohana\Database\PostgreSQL.php [ 178 ] in D:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php:251
2014-08-13 06:36:24 --- DEBUG: #0 D:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PostgreSQL->query(1, 'call add_client...', false, Array)
#1 D:\OpenServer\domains\test\application\classes\Model\clients.php(32): Kohana_Database_Query->execute()
#2 D:\OpenServer\domains\test\application\classes\Controller\Main.php(100): Model_Clients->add_client()
#3 D:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Main->action_add()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#6 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#9 {main} in D:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php:251
2014-08-13 06:37:35 --- CRITICAL: Database_Exception [ 0 ]: ОШИБКА:  ошибка синтаксиса (примерное положение: "call")
LINE 1: call add_client(475,'name','last name','emil','adress','city...
        ^ [ call add_client(475,'name','last name','emil','adress','city','country') ] ~ MODPATH\database\classes\Kohana\Database\PostgreSQL.php [ 178 ] in D:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php:251
2014-08-13 06:37:35 --- DEBUG: #0 D:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PostgreSQL->query(1, 'call add_client...', false, Array)
#1 D:\OpenServer\domains\test\application\classes\Model\clients.php(32): Kohana_Database_Query->execute()
#2 D:\OpenServer\domains\test\application\classes\Controller\Main.php(100): Model_Clients->add_client()
#3 D:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Main->action_add()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#6 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#9 {main} in D:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php:251
2014-08-13 06:38:03 --- CRITICAL: Database_Exception [ 0 ]: ОШИБКА:  ошибка синтаксиса (примерное положение: "call")
LINE 1: call add_client(475,'name','last name','emil','adress','city...
        ^ [ call add_client(475,'name','last name','emil','adress','city','country') ] ~ MODPATH\database\classes\Kohana\Database\PostgreSQL.php [ 178 ] in D:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php:251
2014-08-13 06:38:03 --- DEBUG: #0 D:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PostgreSQL->query(1, 'call add_client...', false, Array)
#1 D:\OpenServer\domains\test\application\classes\Model\clients.php(37): Kohana_Database_Query->execute(Object(Database_PostgreSQL))
#2 D:\OpenServer\domains\test\application\classes\Controller\Main.php(100): Model_Clients->add_client()
#3 D:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Main->action_add()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#6 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#9 {main} in D:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php:251
2014-08-13 06:38:07 --- CRITICAL: Database_Exception [ 0 ]: ОШИБКА:  ошибка синтаксиса (примерное положение: "call")
LINE 1: call add_client(475,'name','last name','emil','adress','city...
        ^ [ call add_client(475,'name','last name','emil','adress','city','country') ] ~ MODPATH\database\classes\Kohana\Database\PostgreSQL.php [ 178 ] in D:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php:251
2014-08-13 06:38:07 --- DEBUG: #0 D:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PostgreSQL->query(1, 'call add_client...', false, Array)
#1 D:\OpenServer\domains\test\application\classes\Model\clients.php(37): Kohana_Database_Query->execute(Object(Database_PostgreSQL))
#2 D:\OpenServer\domains\test\application\classes\Controller\Main.php(100): Model_Clients->add_client()
#3 D:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Main->action_add()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#6 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#9 {main} in D:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php:251
2014-08-13 06:39:17 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\Main.php [ 101 ] in file:line
2014-08-13 06:39:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-13 06:39:48 --- CRITICAL: Database_Exception [ 0 ]: ОШИБКА:  повторяющееся значение ключа нарушает ограничение уникальности "client_numb"
DETAIL:  Ключ "(number)=(475)" уже существует.
CONTEXT:  SQL-оператор: "INSERT INTO clients(
          number,
          name, 
          last_name, 
          email, 
          adress, 
          city,
          country
        )
        VALUES(
          _number,
          _name, 
          _last_name, 
          _email, 
          _adress, 
          _city,
          _country
        
        )"
функция PL/pgSQL add_client(integer,character varying,character varying,character varying,character varying,character varying,character varying), строка 3, оператор SQL-оператор [ select * from add_client(475,'name','last name','emil','adress','city','country') ] ~ MODPATH\database\classes\Kohana\Database\PostgreSQL.php [ 178 ] in D:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php:251
2014-08-13 06:39:48 --- DEBUG: #0 D:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PostgreSQL->query(1, 'select * from a...', false, Array)
#1 D:\OpenServer\domains\test\application\classes\Model\clients.php(37): Kohana_Database_Query->execute(Object(Database_PostgreSQL))
#2 D:\OpenServer\domains\test\application\classes\Controller\Main.php(100): Model_Clients->add_client()
#3 D:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Main->action_add()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#6 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#9 {main} in D:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php:251
2014-08-13 06:43:42 --- CRITICAL: ErrorException [ 2048 ]: Declaration of Controller_Main::redirect() should be compatible with that of Kohana_Controller::redirect() ~ APPPATH\classes\Controller\Main.php [ 3 ] in D:\OpenServer\domains\test\application\classes\Controller\Main.php:3
2014-08-13 06:43:42 --- DEBUG: #0 D:\OpenServer\domains\test\application\classes\Controller\Main.php(3): Kohana_Core::error_handler(2048, 'Declaration of ...', 'D:\OpenServer\d...', 3, Array)
#1 D:\OpenServer\domains\test\system\classes\Kohana\Core.php(511): require('D:\OpenServer\d...')
#2 [internal function]: Kohana_Core::auto_load('Controller_Main')
#3 [internal function]: spl_autoload_call('Controller_Main')
#4 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(74): class_exists('Controller_Main')
#5 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#8 {main} in D:\OpenServer\domains\test\application\classes\Controller\Main.php:3
2014-08-13 06:52:33 --- CRITICAL: ErrorException [ 1 ]: Function name must be a string ~ APPPATH\classes\Model\clients.php [ 40 ] in file:line
2014-08-13 06:52:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-13 06:55:47 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_ENCAPSED_AND_WHITESPACE, expecting T_STRING or T_VARIABLE or T_NUM_STRING ~ APPPATH\classes\Model\clients.php [ 39 ] in file:line
2014-08-13 06:55:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-13 06:56:46 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_ENCAPSED_AND_WHITESPACE, expecting T_STRING or T_VARIABLE or T_NUM_STRING ~ APPPATH\classes\Model\clients.php [ 39 ] in file:line
2014-08-13 06:56:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-13 06:56:53 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_ENCAPSED_AND_WHITESPACE, expecting T_STRING or T_VARIABLE or T_NUM_STRING ~ APPPATH\classes\Model\clients.php [ 39 ] in file:line
2014-08-13 06:56:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-13 06:59:37 --- CRITICAL: Database_Exception [ 0 ]: ОШИБКА:  колонка "test" не существует
LINE 1: select * from add_client(4646,Test,test,email@test.com,test,...
                                      ^ [ select * from add_client(4646,Test,test,email@test.com,test,test,test) ] ~ MODPATH\database\classes\Kohana\Database\PostgreSQL.php [ 178 ] in D:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php:251
2014-08-13 06:59:37 --- DEBUG: #0 D:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PostgreSQL->query(1, 'select * from a...', false, Array)
#1 D:\OpenServer\domains\test\application\classes\Model\clients.php(48): Kohana_Database_Query->execute(Object(Database_PostgreSQL))
#2 D:\OpenServer\domains\test\application\classes\Controller\Main.php(100): Model_Clients->add_client(Array)
#3 D:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Main->action_add()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#6 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#9 {main} in D:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php:251
2014-08-13 07:00:07 --- CRITICAL: Database_Exception [ 0 ]: ОШИБКА:  колонка "test" не существует
LINE 1: select * from add_client(4646,Test,test,email@test.com,test,...
                                      ^ [ select * from add_client(4646,Test,test,email@test.com,test,test,test) ] ~ MODPATH\database\classes\Kohana\Database\PostgreSQL.php [ 178 ] in D:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php:251
2014-08-13 07:00:07 --- DEBUG: #0 D:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PostgreSQL->query(1, 'select * from a...', false, Array)
#1 D:\OpenServer\domains\test\application\classes\Model\clients.php(48): Kohana_Database_Query->execute(Object(Database_PostgreSQL))
#2 D:\OpenServer\domains\test\application\classes\Controller\Main.php(100): Model_Clients->add_client(Array)
#3 D:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Main->action_add()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#6 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#9 {main} in D:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php:251
2014-08-13 07:00:38 --- CRITICAL: Database_Exception [ 0 ]: ОШИБКА:  колонка "test" не существует
LINE 1: select * from add_client(4646,Test,testwer,email@test.com,te...
                                      ^ [ select * from add_client(4646,Test,testwer,email@test.com,testwewwww,testeeeee,testttttt) ] ~ MODPATH\database\classes\Kohana\Database\PostgreSQL.php [ 178 ] in D:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php:251
2014-08-13 07:00:38 --- DEBUG: #0 D:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PostgreSQL->query(1, 'select * from a...', false, Array)
#1 D:\OpenServer\domains\test\application\classes\Model\clients.php(48): Kohana_Database_Query->execute(Object(Database_PostgreSQL))
#2 D:\OpenServer\domains\test\application\classes\Controller\Main.php(100): Model_Clients->add_client(Array)
#3 D:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Main->action_add()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#6 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#9 {main} in D:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php:251
2014-08-13 07:00:46 --- CRITICAL: Database_Exception [ 0 ]: ОШИБКА:  колонка "testeeeee" не существует
LINE 1: select * from add_client(4646,Testeeeee,testwer,email@test.c...
                                      ^ [ select * from add_client(4646,Testeeeee,testwer,email@test.com,testwewwww,testeeeee,testttttt) ] ~ MODPATH\database\classes\Kohana\Database\PostgreSQL.php [ 178 ] in D:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php:251
2014-08-13 07:00:46 --- DEBUG: #0 D:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PostgreSQL->query(1, 'select * from a...', false, Array)
#1 D:\OpenServer\domains\test\application\classes\Model\clients.php(48): Kohana_Database_Query->execute(Object(Database_PostgreSQL))
#2 D:\OpenServer\domains\test\application\classes\Controller\Main.php(100): Model_Clients->add_client(Array)
#3 D:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Main->action_add()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#6 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#9 {main} in D:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php:251
2014-08-13 07:02:31 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant add_client - assumed 'add_client' ~ APPPATH\classes\Model\clients.php [ 35 ] in D:\OpenServer\domains\test\application\classes\Model\clients.php:35
2014-08-13 07:02:31 --- DEBUG: #0 D:\OpenServer\domains\test\application\classes\Model\clients.php(35): Kohana_Core::error_handler(8, 'Use of undefine...', 'D:\OpenServer\d...', 35, Array)
#1 D:\OpenServer\domains\test\application\classes\Controller\Main.php(100): Model_Clients->add_client(Array)
#2 D:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Main->action_add()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#5 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#8 {main} in D:\OpenServer\domains\test\application\classes\Model\clients.php:35
2014-08-13 07:02:47 --- CRITICAL: Database_Exception [ 0 ]: ОШИБКА:  колонка "testeeeee" не существует
LINE 1: select * from add_client(4646,Testeeeee,testwer,email@test.c...
                                      ^ [ select * from add_client(4646,Testeeeee,testwer,email@test.com,testwewwww,testeeeee,testttttt) ] ~ MODPATH\database\classes\Kohana\Database\PostgreSQL.php [ 178 ] in D:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php:251
2014-08-13 07:02:47 --- DEBUG: #0 D:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PostgreSQL->query(1, 'select * from a...', false, Array)
#1 D:\OpenServer\domains\test\application\classes\Model\clients.php(48): Kohana_Database_Query->execute(Object(Database_PostgreSQL))
#2 D:\OpenServer\domains\test\application\classes\Controller\Main.php(100): Model_Clients->add_client(Array)
#3 D:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Main->action_add()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#6 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#9 {main} in D:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php:251
2014-08-13 07:03:31 --- CRITICAL: Database_Exception [ 0 ]: ОШИБКА:  колонка "denys" не существует
LINE 1: select * from add_client(14566,Denys,Arkan,email@test.com,Ko...
                                       ^ [ select * from add_client(14566,Denys,Arkan,email@test.com,Kosticeno,Warshaw,Poland) ] ~ MODPATH\database\classes\Kohana\Database\PostgreSQL.php [ 178 ] in D:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php:251
2014-08-13 07:03:31 --- DEBUG: #0 D:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PostgreSQL->query(1, 'select * from a...', false, Array)
#1 D:\OpenServer\domains\test\application\classes\Model\clients.php(48): Kohana_Database_Query->execute(Object(Database_PostgreSQL))
#2 D:\OpenServer\domains\test\application\classes\Controller\Main.php(100): Model_Clients->add_client(Array)
#3 D:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Main->action_add()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#6 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#9 {main} in D:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php:251
2014-08-13 07:04:09 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH\classes\Model\clients.php [ 46 ] in file:line
2014-08-13 07:04:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-13 07:04:20 --- CRITICAL: Database_Exception [ 0 ]: ОШИБКА:  колонка "arkan" не существует
LINE 1: select * from add_client(14566,'Denys',Arkan,email@test.com,...
                                               ^ [ select * from add_client(14566,'Denys',Arkan,email@test.com,Kosticeno,Warshaw,Poland) ] ~ MODPATH\database\classes\Kohana\Database\PostgreSQL.php [ 178 ] in D:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php:251
2014-08-13 07:04:20 --- DEBUG: #0 D:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PostgreSQL->query(1, 'select * from a...', false, Array)
#1 D:\OpenServer\domains\test\application\classes\Model\clients.php(48): Kohana_Database_Query->execute(Object(Database_PostgreSQL))
#2 D:\OpenServer\domains\test\application\classes\Controller\Main.php(100): Model_Clients->add_client(Array)
#3 D:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Main->action_add()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#6 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#9 {main} in D:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php:251
2014-08-13 07:11:40 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected $end, expecting T_VARIABLE or T_DOLLAR_OPEN_CURLY_BRACES or T_CURLY_OPEN ~ APPPATH\views\client\table.php [ 53 ] in file:line
2014-08-13 07:11:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-13 07:13:15 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_ENCAPSED_AND_WHITESPACE, expecting T_STRING or T_VARIABLE or T_NUM_STRING ~ APPPATH\views\client\table.php [ 36 ] in file:line
2014-08-13 07:13:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-13 07:13:32 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_ENCAPSED_AND_WHITESPACE, expecting T_STRING or T_VARIABLE or T_NUM_STRING ~ APPPATH\views\client\table.php [ 36 ] in file:line
2014-08-13 07:13:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-13 07:16:27 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: post ~ APPPATH\classes\Controller\Main.php [ 125 ] in D:\OpenServer\domains\test\application\classes\Controller\Main.php:125
2014-08-13 07:16:27 --- DEBUG: #0 D:\OpenServer\domains\test\application\classes\Controller\Main.php(125): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\OpenServer\d...', 125, Array)
#1 D:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Main->action_del()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#7 {main} in D:\OpenServer\domains\test\application\classes\Controller\Main.php:125
2014-08-13 07:16:59 --- CRITICAL: ErrorException [ 2 ]: Missing argument 1 for Controller_Main::action_del(), called in D:\OpenServer\domains\test\system\classes\Kohana\Controller.php on line 84 and defined ~ APPPATH\classes\Controller\Main.php [ 122 ] in D:\OpenServer\domains\test\application\classes\Controller\Main.php:122
2014-08-13 07:16:59 --- DEBUG: #0 D:\OpenServer\domains\test\application\classes\Controller\Main.php(122): Kohana_Core::error_handler(2, 'Missing argumen...', 'D:\OpenServer\d...', 122, Array)
#1 D:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Main->action_del()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#7 {main} in D:\OpenServer\domains\test\application\classes\Controller\Main.php:122
2014-08-13 07:18:37 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_ISSET, expecting '(' ~ APPPATH\classes\Controller\Main.php [ 124 ] in file:line
2014-08-13 07:18:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-13 07:18:38 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_ISSET, expecting '(' ~ APPPATH\classes\Controller\Main.php [ 124 ] in file:line
2014-08-13 07:18:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-13 07:18:38 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_ISSET, expecting '(' ~ APPPATH\classes\Controller\Main.php [ 124 ] in file:line
2014-08-13 07:18:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-13 07:18:41 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_ISSET, expecting '(' ~ APPPATH\classes\Controller\Main.php [ 124 ] in file:line
2014-08-13 07:18:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-13 07:19:03 --- CRITICAL: ErrorException [ 2 ]: Missing argument 1 for Controller_Main::action_del(), called in D:\OpenServer\domains\test\system\classes\Kohana\Controller.php on line 84 and defined ~ APPPATH\classes\Controller\Main.php [ 122 ] in D:\OpenServer\domains\test\application\classes\Controller\Main.php:122
2014-08-13 07:19:03 --- DEBUG: #0 D:\OpenServer\domains\test\application\classes\Controller\Main.php(122): Kohana_Core::error_handler(2, 'Missing argumen...', 'D:\OpenServer\d...', 122, Array)
#1 D:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Main->action_del()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#7 {main} in D:\OpenServer\domains\test\application\classes\Controller\Main.php:122
2014-08-13 07:19:20 --- CRITICAL: Database_Exception [ 0 ]: ОШИБКА:  функция del_client() не существует
LINE 1: select * from del_client();
                      ^
HINT:  Функция с данными именем и типами аргументов не найдена. Возможно, вам следует добавить явные преобразования типов. [ select * from del_client(); ] ~ MODPATH\database\classes\Kohana\Database\PostgreSQL.php [ 178 ] in D:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php:251
2014-08-13 07:19:20 --- DEBUG: #0 D:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PostgreSQL->query(1, 'select * from d...', false, Array)
#1 D:\OpenServer\domains\test\application\classes\Model\clients.php(85): Kohana_Database_Query->execute()
#2 D:\OpenServer\domains\test\application\classes\Controller\Main.php(127): Model_Clients->del_client('')
#3 D:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Main->action_del()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#6 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#9 {main} in D:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php:251
2014-08-13 07:20:37 --- CRITICAL: Database_Exception [ 0 ]: ОШИБКА:  функция del_client() не существует
LINE 1: select * from del_client()
                      ^
HINT:  Функция с данными именем и типами аргументов не найдена. Возможно, вам следует добавить явные преобразования типов. [ select * from del_client() ] ~ MODPATH\database\classes\Kohana\Database\PostgreSQL.php [ 178 ] in D:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php:251
2014-08-13 07:20:37 --- DEBUG: #0 D:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PostgreSQL->query(1, 'select * from d...', false, Array)
#1 D:\OpenServer\domains\test\application\classes\Model\clients.php(88): Kohana_Database_Query->execute()
#2 D:\OpenServer\domains\test\application\classes\Controller\Main.php(127): Model_Clients->del_client('')
#3 D:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Main->action_del()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#6 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#9 {main} in D:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php:251
2014-08-13 07:21:01 --- CRITICAL: Database_Exception [ 0 ]: ОШИБКА:  функция del_client() не существует
LINE 1: select * from del_client()
                      ^
HINT:  Функция с данными именем и типами аргументов не найдена. Возможно, вам следует добавить явные преобразования типов. [ select * from del_client() ] ~ MODPATH\database\classes\Kohana\Database\PostgreSQL.php [ 178 ] in D:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php:251
2014-08-13 07:21:01 --- DEBUG: #0 D:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PostgreSQL->query(1, 'select * from d...', false, Array)
#1 D:\OpenServer\domains\test\application\classes\Model\clients.php(88): Kohana_Database_Query->execute(Object(Database_PostgreSQL))
#2 D:\OpenServer\domains\test\application\classes\Controller\Main.php(127): Model_Clients->del_client('')
#3 D:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Main->action_del()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#6 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#9 {main} in D:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php:251
2014-08-13 07:21:02 --- CRITICAL: Database_Exception [ 0 ]: ОШИБКА:  функция del_client() не существует
LINE 1: select * from del_client()
                      ^
HINT:  Функция с данными именем и типами аргументов не найдена. Возможно, вам следует добавить явные преобразования типов. [ select * from del_client() ] ~ MODPATH\database\classes\Kohana\Database\PostgreSQL.php [ 178 ] in D:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php:251
2014-08-13 07:21:02 --- DEBUG: #0 D:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PostgreSQL->query(1, 'select * from d...', false, Array)
#1 D:\OpenServer\domains\test\application\classes\Model\clients.php(88): Kohana_Database_Query->execute(Object(Database_PostgreSQL))
#2 D:\OpenServer\domains\test\application\classes\Controller\Main.php(127): Model_Clients->del_client('')
#3 D:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Main->action_del()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#6 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#9 {main} in D:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php:251
2014-08-13 07:21:03 --- CRITICAL: Database_Exception [ 0 ]: ОШИБКА:  функция del_client() не существует
LINE 1: select * from del_client()
                      ^
HINT:  Функция с данными именем и типами аргументов не найдена. Возможно, вам следует добавить явные преобразования типов. [ select * from del_client() ] ~ MODPATH\database\classes\Kohana\Database\PostgreSQL.php [ 178 ] in D:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php:251
2014-08-13 07:21:03 --- DEBUG: #0 D:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PostgreSQL->query(1, 'select * from d...', false, Array)
#1 D:\OpenServer\domains\test\application\classes\Model\clients.php(88): Kohana_Database_Query->execute(Object(Database_PostgreSQL))
#2 D:\OpenServer\domains\test\application\classes\Controller\Main.php(127): Model_Clients->del_client('')
#3 D:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Main->action_del()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#6 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#9 {main} in D:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php:251
2014-08-13 07:29:29 --- CRITICAL: ErrorException [ 2 ]: Missing argument 1 for Controller_Main::action_del(), called in D:\OpenServer\domains\test\system\classes\Kohana\Controller.php on line 84 and defined ~ APPPATH\classes\Controller\Main.php [ 122 ] in D:\OpenServer\domains\test\application\classes\Controller\Main.php:122
2014-08-13 07:29:29 --- DEBUG: #0 D:\OpenServer\domains\test\application\classes\Controller\Main.php(122): Kohana_Core::error_handler(2, 'Missing argumen...', 'D:\OpenServer\d...', 122, Array)
#1 D:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Main->action_del()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#7 {main} in D:\OpenServer\domains\test\application\classes\Controller\Main.php:122
2014-08-13 07:30:13 --- CRITICAL: ErrorException [ 2 ]: Missing argument 1 for Controller_Main::action_del(), called in D:\OpenServer\domains\test\system\classes\Kohana\Controller.php on line 84 and defined ~ APPPATH\classes\Controller\Main.php [ 122 ] in D:\OpenServer\domains\test\application\classes\Controller\Main.php:122
2014-08-13 07:30:13 --- DEBUG: #0 D:\OpenServer\domains\test\application\classes\Controller\Main.php(122): Kohana_Core::error_handler(2, 'Missing argumen...', 'D:\OpenServer\d...', 122, Array)
#1 D:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Main->action_del()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#7 {main} in D:\OpenServer\domains\test\application\classes\Controller\Main.php:122
2014-08-13 07:30:28 --- CRITICAL: ErrorException [ 2 ]: Missing argument 1 for Controller_Main::action_del(), called in D:\OpenServer\domains\test\system\classes\Kohana\Controller.php on line 84 and defined ~ APPPATH\classes\Controller\Main.php [ 122 ] in D:\OpenServer\domains\test\application\classes\Controller\Main.php:122
2014-08-13 07:30:28 --- DEBUG: #0 D:\OpenServer\domains\test\application\classes\Controller\Main.php(122): Kohana_Core::error_handler(2, 'Missing argumen...', 'D:\OpenServer\d...', 122, Array)
#1 D:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Main->action_del()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#7 {main} in D:\OpenServer\domains\test\application\classes\Controller\Main.php:122
2014-08-13 07:30:34 --- CRITICAL: ErrorException [ 2 ]: Missing argument 1 for Controller_Main::action_del(), called in D:\OpenServer\domains\test\system\classes\Kohana\Controller.php on line 84 and defined ~ APPPATH\classes\Controller\Main.php [ 122 ] in D:\OpenServer\domains\test\application\classes\Controller\Main.php:122
2014-08-13 07:30:34 --- DEBUG: #0 D:\OpenServer\domains\test\application\classes\Controller\Main.php(122): Kohana_Core::error_handler(2, 'Missing argumen...', 'D:\OpenServer\d...', 122, Array)
#1 D:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Main->action_del()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#7 {main} in D:\OpenServer\domains\test\application\classes\Controller\Main.php:122
2014-08-13 07:30:46 --- CRITICAL: ErrorException [ 2 ]: Missing argument 1 for Controller_Main::action_del(), called in D:\OpenServer\domains\test\system\classes\Kohana\Controller.php on line 84 and defined ~ APPPATH\classes\Controller\Main.php [ 122 ] in D:\OpenServer\domains\test\application\classes\Controller\Main.php:122
2014-08-13 07:30:46 --- DEBUG: #0 D:\OpenServer\domains\test\application\classes\Controller\Main.php(122): Kohana_Core::error_handler(2, 'Missing argumen...', 'D:\OpenServer\d...', 122, Array)
#1 D:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Main->action_del()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#7 {main} in D:\OpenServer\domains\test\application\classes\Controller\Main.php:122
2014-08-13 07:33:02 --- CRITICAL: ErrorException [ 2 ]: Missing argument 1 for Controller_Main::action_del(), called in D:\OpenServer\domains\test\system\classes\Kohana\Controller.php on line 84 and defined ~ APPPATH\classes\Controller\Main.php [ 122 ] in D:\OpenServer\domains\test\application\classes\Controller\Main.php:122
2014-08-13 07:33:02 --- DEBUG: #0 D:\OpenServer\domains\test\application\classes\Controller\Main.php(122): Kohana_Core::error_handler(2, 'Missing argumen...', 'D:\OpenServer\d...', 122, Array)
#1 D:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Main->action_del()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#7 {main} in D:\OpenServer\domains\test\application\classes\Controller\Main.php:122
2014-08-13 07:33:03 --- CRITICAL: ErrorException [ 2 ]: Missing argument 1 for Controller_Main::action_del(), called in D:\OpenServer\domains\test\system\classes\Kohana\Controller.php on line 84 and defined ~ APPPATH\classes\Controller\Main.php [ 122 ] in D:\OpenServer\domains\test\application\classes\Controller\Main.php:122
2014-08-13 07:33:03 --- DEBUG: #0 D:\OpenServer\domains\test\application\classes\Controller\Main.php(122): Kohana_Core::error_handler(2, 'Missing argumen...', 'D:\OpenServer\d...', 122, Array)
#1 D:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Main->action_del()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#7 {main} in D:\OpenServer\domains\test\application\classes\Controller\Main.php:122
2014-08-13 07:33:08 --- CRITICAL: ErrorException [ 2 ]: Missing argument 1 for Controller_Main::action_del(), called in D:\OpenServer\domains\test\system\classes\Kohana\Controller.php on line 84 and defined ~ APPPATH\classes\Controller\Main.php [ 122 ] in D:\OpenServer\domains\test\application\classes\Controller\Main.php:122
2014-08-13 07:33:08 --- DEBUG: #0 D:\OpenServer\domains\test\application\classes\Controller\Main.php(122): Kohana_Core::error_handler(2, 'Missing argumen...', 'D:\OpenServer\d...', 122, Array)
#1 D:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Main->action_del()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#7 {main} in D:\OpenServer\domains\test\application\classes\Controller\Main.php:122
2014-08-13 07:41:57 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: heading ~ APPPATH\views\client\table.php [ 1 ] in D:\OpenServer\domains\test\application\views\client\table.php:1
2014-08-13 07:41:57 --- DEBUG: #0 D:\OpenServer\domains\test\application\views\client\table.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\OpenServer\d...', 1, Array)
#1 D:\OpenServer\domains\test\system\classes\Kohana\View.php(61): include('D:\OpenServer\d...')
#2 D:\OpenServer\domains\test\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\OpenServer\d...', Array)
#3 D:\OpenServer\domains\test\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\OpenServer\domains\test\application\views\template.php(109): Kohana_View->__toString()
#5 D:\OpenServer\domains\test\system\classes\Kohana\View.php(61): include('D:\OpenServer\d...')
#6 D:\OpenServer\domains\test\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\OpenServer\d...', Array)
#7 D:\OpenServer\domains\test\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 D:\OpenServer\domains\test\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#11 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 D:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#14 {main} in D:\OpenServer\domains\test\application\views\client\table.php:1
2014-08-13 07:42:48 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: heading ~ APPPATH\views\client\table.php [ 1 ] in D:\OpenServer\domains\test\application\views\client\table.php:1
2014-08-13 07:42:48 --- DEBUG: #0 D:\OpenServer\domains\test\application\views\client\table.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\OpenServer\d...', 1, Array)
#1 D:\OpenServer\domains\test\system\classes\Kohana\View.php(61): include('D:\OpenServer\d...')
#2 D:\OpenServer\domains\test\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\OpenServer\d...', Array)
#3 D:\OpenServer\domains\test\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\OpenServer\domains\test\application\views\template.php(109): Kohana_View->__toString()
#5 D:\OpenServer\domains\test\system\classes\Kohana\View.php(61): include('D:\OpenServer\d...')
#6 D:\OpenServer\domains\test\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\OpenServer\d...', Array)
#7 D:\OpenServer\domains\test\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 D:\OpenServer\domains\test\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#11 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 D:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#14 {main} in D:\OpenServer\domains\test\application\views\client\table.php:1
2014-08-13 07:43:30 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Controller_Main::$templete ~ APPPATH\classes\Controller\Main.php [ 22 ] in D:\OpenServer\domains\test\application\classes\Controller\Main.php:22
2014-08-13 07:43:30 --- DEBUG: #0 D:\OpenServer\domains\test\application\classes\Controller\Main.php(22): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\OpenServer\d...', 22, Array)
#1 D:\OpenServer\domains\test\application\classes\Controller\Main.php(9): Controller_Main->_allClients()
#2 D:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Main->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#5 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#8 {main} in D:\OpenServer\domains\test\application\classes\Controller\Main.php:22
2014-08-13 07:43:43 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: heading ~ APPPATH\views\client\table.php [ 1 ] in D:\OpenServer\domains\test\application\views\client\table.php:1
2014-08-13 07:43:43 --- DEBUG: #0 D:\OpenServer\domains\test\application\views\client\table.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\OpenServer\d...', 1, Array)
#1 D:\OpenServer\domains\test\system\classes\Kohana\View.php(61): include('D:\OpenServer\d...')
#2 D:\OpenServer\domains\test\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\OpenServer\d...', Array)
#3 D:\OpenServer\domains\test\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\OpenServer\domains\test\application\views\template.php(109): Kohana_View->__toString()
#5 D:\OpenServer\domains\test\system\classes\Kohana\View.php(61): include('D:\OpenServer\d...')
#6 D:\OpenServer\domains\test\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\OpenServer\d...', Array)
#7 D:\OpenServer\domains\test\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 D:\OpenServer\domains\test\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#11 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 D:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#14 {main} in D:\OpenServer\domains\test\application\views\client\table.php:1
2014-08-13 07:44:27 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: heading ~ APPPATH\views\client\table.php [ 1 ] in D:\OpenServer\domains\test\application\views\client\table.php:1
2014-08-13 07:44:27 --- DEBUG: #0 D:\OpenServer\domains\test\application\views\client\table.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\OpenServer\d...', 1, Array)
#1 D:\OpenServer\domains\test\system\classes\Kohana\View.php(61): include('D:\OpenServer\d...')
#2 D:\OpenServer\domains\test\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\OpenServer\d...', Array)
#3 D:\OpenServer\domains\test\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\OpenServer\domains\test\application\views\template.php(109): Kohana_View->__toString()
#5 D:\OpenServer\domains\test\system\classes\Kohana\View.php(61): include('D:\OpenServer\d...')
#6 D:\OpenServer\domains\test\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\OpenServer\d...', Array)
#7 D:\OpenServer\domains\test\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 D:\OpenServer\domains\test\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#11 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 D:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#14 {main} in D:\OpenServer\domains\test\application\views\client\table.php:1
2014-08-13 07:45:38 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH\views\client\edit.php [ 1 ] in D:\OpenServer\domains\test\application\views\client\edit.php:1
2014-08-13 07:45:38 --- DEBUG: #0 D:\OpenServer\domains\test\application\views\client\edit.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\OpenServer\d...', 1, Array)
#1 D:\OpenServer\domains\test\system\classes\Kohana\View.php(61): include('D:\OpenServer\d...')
#2 D:\OpenServer\domains\test\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\OpenServer\d...', Array)
#3 D:\OpenServer\domains\test\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\OpenServer\domains\test\application\views\template.php(109): Kohana_View->__toString()
#5 D:\OpenServer\domains\test\system\classes\Kohana\View.php(61): include('D:\OpenServer\d...')
#6 D:\OpenServer\domains\test\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\OpenServer\d...', Array)
#7 D:\OpenServer\domains\test\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 D:\OpenServer\domains\test\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#11 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 D:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#14 {main} in D:\OpenServer\domains\test\application\views\client\edit.php:1
2014-08-13 10:52:03 --- CRITICAL: ErrorException [ 1 ]: Call to a member function get_once() on a non-object ~ APPPATH\views\client\add.php [ 5 ] in file:line
2014-08-13 10:52:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-13 10:53:27 --- CRITICAL: ErrorException [ 1 ]: Call to a member function get() on a non-object ~ APPPATH\views\client\add.php [ 5 ] in file:line
2014-08-13 10:53:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-13 10:56:37 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in D:\OpenServer\domains\test\system\classes\Kohana\Cookie.php:67
2014-08-13 10:56:37 --- DEBUG: #0 D:\OpenServer\domains\test\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 D:\OpenServer\domains\test\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('session')
#2 D:\OpenServer\domains\test\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in D:\OpenServer\domains\test\system\classes\Kohana\Cookie.php:67