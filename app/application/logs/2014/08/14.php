<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-08-14 04:11:34 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\classes\Controller\Main.php [ 103 ] in file:line
2014-08-14 04:11:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-14 04:14:02 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH\classes\Controller\Main.php [ 140 ] in file:line
2014-08-14 04:14:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-14 05:40:12 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: post ~ APPPATH\views\client\edit.php [ 26 ] in D:\OpenServer\domains\test\application\views\client\edit.php:26
2014-08-14 05:40:12 --- DEBUG: #0 D:\OpenServer\domains\test\application\views\client\edit.php(26): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\OpenServer\d...', 26, Array)
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
2014-08-14 05:43:02 --- CRITICAL: ErrorException [ 8 ]: Undefined index: number ~ APPPATH\views\client\edit.php [ 26 ] in D:\OpenServer\domains\test\application\views\client\edit.php:26
2014-08-14 05:43:02 --- DEBUG: #0 D:\OpenServer\domains\test\application\views\client\edit.php(26): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\OpenServer\d...', 26, Array)
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
2014-08-14 05:45:18 --- CRITICAL: ErrorException [ 2 ]: Wrong parameter count for var_dump() ~ APPPATH\classes\Controller\Main.php [ 139 ] in file:line
2014-08-14 05:45:18 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'Wrong parameter...', 'D:\OpenServer\d...', 139, Array)
#1 D:\OpenServer\domains\test\application\classes\Controller\Main.php(139): var_dump()
#2 D:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Main->action_edit()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#5 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2014-08-14 05:45:43 --- CRITICAL: ErrorException [ 2 ]: Illegal offset type ~ APPPATH\classes\Controller\Main.php [ 137 ] in D:\OpenServer\domains\test\application\classes\Controller\Main.php:137
2014-08-14 05:45:43 --- DEBUG: #0 D:\OpenServer\domains\test\application\classes\Controller\Main.php(137): Kohana_Core::error_handler(2, 'Illegal offset ...', 'D:\OpenServer\d...', 137, Array)
#1 D:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Main->action_edit()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#7 {main} in D:\OpenServer\domains\test\application\classes\Controller\Main.php:137
2014-08-14 05:46:55 --- CRITICAL: ErrorException [ 2 ]: Illegal offset type ~ APPPATH\classes\Controller\Main.php [ 138 ] in D:\OpenServer\domains\test\application\classes\Controller\Main.php:138
2014-08-14 05:46:55 --- DEBUG: #0 D:\OpenServer\domains\test\application\classes\Controller\Main.php(138): Kohana_Core::error_handler(2, 'Illegal offset ...', 'D:\OpenServer\d...', 138, Array)
#1 D:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Main->action_edit()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#7 {main} in D:\OpenServer\domains\test\application\classes\Controller\Main.php:138
2014-08-14 05:51:22 --- CRITICAL: Database_Exception [ 0 ]: ОШИБКА:  функция get_client() не существует
LINE 1: select * from get_client()
                      ^
HINT:  Функция с данными именем и типами аргументов не найдена. Возможно, вам следует добавить явные преобразования типов. [ select * from get_client() ] ~ MODPATH\database\classes\Kohana\Database\PostgreSQL.php [ 178 ] in D:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php:251
2014-08-14 05:51:22 --- DEBUG: #0 D:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PostgreSQL->query(1, 'select * from g...', false, Array)
#1 D:\OpenServer\domains\test\application\classes\Model\clients.php(88): Kohana_Database_Query->execute(Object(Database_PostgreSQL))
#2 D:\OpenServer\domains\test\application\classes\Controller\Main.php(134): Model_Clients->one_client(NULL)
#3 D:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Main->action_edit()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#6 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#9 {main} in D:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php:251
2014-08-14 05:51:36 --- CRITICAL: Database_Exception [ 0 ]: ОШИБКА:  функция get_client() не существует
LINE 1: select * from get_client()
                      ^
HINT:  Функция с данными именем и типами аргументов не найдена. Возможно, вам следует добавить явные преобразования типов. [ select * from get_client() ] ~ MODPATH\database\classes\Kohana\Database\PostgreSQL.php [ 178 ] in D:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php:251
2014-08-14 05:51:36 --- DEBUG: #0 D:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PostgreSQL->query(1, 'select * from g...', false, Array)
#1 D:\OpenServer\domains\test\application\classes\Model\clients.php(88): Kohana_Database_Query->execute(Object(Database_PostgreSQL))
#2 D:\OpenServer\domains\test\application\classes\Controller\Main.php(134): Model_Clients->one_client(NULL)
#3 D:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Main->action_edit()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#6 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#9 {main} in D:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php:251
2014-08-14 05:54:52 --- CRITICAL: ErrorException [ 1 ]: Class 'Event' not found ~ APPPATH\classes\Controller\Main.php [ 136 ] in file:line
2014-08-14 05:54:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-14 05:55:59 --- CRITICAL: Database_Exception [ 0 ]: ОШИБКА:  функция get_client() не существует
LINE 1: select * from get_client()
                      ^
HINT:  Функция с данными именем и типами аргументов не найдена. Возможно, вам следует добавить явные преобразования типов. [ select * from get_client() ] ~ MODPATH\database\classes\Kohana\Database\PostgreSQL.php [ 178 ] in D:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php:251
2014-08-14 05:55:59 --- DEBUG: #0 D:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PostgreSQL->query(1, 'select * from g...', false, Array)
#1 D:\OpenServer\domains\test\application\classes\Model\clients.php(88): Kohana_Database_Query->execute(Object(Database_PostgreSQL))
#2 D:\OpenServer\domains\test\application\classes\Controller\Main.php(139): Model_Clients->one_client(NULL)
#3 D:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Main->action_edit()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#6 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#9 {main} in D:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php:251
2014-08-14 05:56:24 --- CRITICAL: Database_Exception [ 0 ]: ОШИБКА:  функция get_client() не существует
LINE 1: select * from get_client()
                      ^
HINT:  Функция с данными именем и типами аргументов не найдена. Возможно, вам следует добавить явные преобразования типов. [ select * from get_client() ] ~ MODPATH\database\classes\Kohana\Database\PostgreSQL.php [ 178 ] in D:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php:251
2014-08-14 05:56:24 --- DEBUG: #0 D:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PostgreSQL->query(1, 'select * from g...', false, Array)
#1 D:\OpenServer\domains\test\application\classes\Model\clients.php(88): Kohana_Database_Query->execute(Object(Database_PostgreSQL))
#2 D:\OpenServer\domains\test\application\classes\Controller\Main.php(139): Model_Clients->one_client(NULL)
#3 D:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Main->action_edit()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#6 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#9 {main} in D:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php:251
2014-08-14 06:06:43 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Form::reset() ~ APPPATH\views\client\add.php [ 135 ] in file:line
2014-08-14 06:06:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-14 06:12:22 --- CRITICAL: ErrorException [ 2 ]: Missing argument 1 for Controller_Main::_valid(), called in D:\OpenServer\domains\test\application\classes\Controller\Main.php on line 102 and defined ~ APPPATH\classes\Controller\Main.php [ 25 ] in D:\OpenServer\domains\test\application\classes\Controller\Main.php:25
2014-08-14 06:12:22 --- DEBUG: #0 D:\OpenServer\domains\test\application\classes\Controller\Main.php(25): Kohana_Core::error_handler(2, 'Missing argumen...', 'D:\OpenServer\d...', 25, Array)
#1 D:\OpenServer\domains\test\application\classes\Controller\Main.php(102): Controller_Main->_valid()
#2 D:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Main->action_add()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#5 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#8 {main} in D:\OpenServer\domains\test\application\classes\Controller\Main.php:25
2014-08-14 06:12:36 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: clients ~ APPPATH\classes\Controller\Main.php [ 33 ] in D:\OpenServer\domains\test\application\classes\Controller\Main.php:33
2014-08-14 06:12:36 --- DEBUG: #0 D:\OpenServer\domains\test\application\classes\Controller\Main.php(33): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\OpenServer\d...', 33, Array)
#1 D:\OpenServer\domains\test\application\classes\Controller\Main.php(102): Controller_Main->_valid(Array)
#2 D:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Main->action_add()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#5 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#8 {main} in D:\OpenServer\domains\test\application\classes\Controller\Main.php:33
2014-08-14 06:37:57 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_IF, expecting ')' ~ APPPATH\classes\Controller\Main.php [ 34 ] in file:line
2014-08-14 06:37:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-14 11:34:45 --- CRITICAL: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\client\table.php [ 21 ] in D:\OpenServer\domains\test\application\views\client\table.php:21
2014-08-14 11:34:45 --- DEBUG: #0 D:\OpenServer\domains\test\application\views\client\table.php(21): Kohana_Core::error_handler(2, 'Invalid argumen...', 'D:\OpenServer\d...', 21, Array)
#1 D:\OpenServer\domains\test\system\classes\Kohana\View.php(61): include('D:\OpenServer\d...')
#2 D:\OpenServer\domains\test\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\OpenServer\d...', Array)
#3 D:\OpenServer\domains\test\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\OpenServer\domains\test\application\views\template.php(112): Kohana_View->__toString()
#5 D:\OpenServer\domains\test\system\classes\Kohana\View.php(61): include('D:\OpenServer\d...')
#6 D:\OpenServer\domains\test\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\OpenServer\d...', Array)
#7 D:\OpenServer\domains\test\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 D:\OpenServer\domains\test\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#11 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 D:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#14 {main} in D:\OpenServer\domains\test\application\views\client\table.php:21