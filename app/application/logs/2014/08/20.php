<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-08-20 07:13:46 --- CRITICAL: Database_Exception [ 0 ]: ОШИБКА:  ошибка синтаксиса (примерное положение: "d")
LINE 1: ...lient(4646,'ssfs','sdjfkhiuh','deny.ad@gm.com','s'd;sdks;din...
                                                             ^ [ SELECT * FROM add_client(4646,'ssfs','sdjfkhiuh','deny.ad@gm.com','s'd;sdks;din','sdkuhnlkw','oiusdnsdoidu') ] ~ MODPATH\database\classes\Kohana\Database\PostgreSQL.php [ 178 ] in D:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php:251
2014-08-20 07:13:46 --- DEBUG: #0 D:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PostgreSQL->query(1, 'SELECT * FROM a...', false, Array)
#1 D:\OpenServer\domains\test\application\classes\Model\clients.php(67): Kohana_Database_Query->execute(Object(Database_PostgreSQL))
#2 D:\OpenServer\domains\test\application\classes\Controller\Main.php(115): Model_Clients->add_client(Array)
#3 D:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Main->action_add()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#6 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#9 {main} in D:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php:251
2014-08-20 07:13:49 --- CRITICAL: Database_Exception [ 0 ]: ОШИБКА:  ошибка синтаксиса (примерное положение: "d")
LINE 1: ...lient(4646,'ssfs','sdjfkhiuh','deny.ad@gm.com','s'd;sdks;din...
                                                             ^ [ SELECT * FROM add_client(4646,'ssfs','sdjfkhiuh','deny.ad@gm.com','s'd;sdks;din','sdkuhnlkw','oiusdnsdoidu') ] ~ MODPATH\database\classes\Kohana\Database\PostgreSQL.php [ 178 ] in D:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php:251
2014-08-20 07:13:49 --- DEBUG: #0 D:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PostgreSQL->query(1, 'SELECT * FROM a...', false, Array)
#1 D:\OpenServer\domains\test\application\classes\Model\clients.php(67): Kohana_Database_Query->execute(Object(Database_PostgreSQL))
#2 D:\OpenServer\domains\test\application\classes\Controller\Main.php(115): Model_Clients->add_client(Array)
#3 D:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Main->action_add()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#6 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#9 {main} in D:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php:251