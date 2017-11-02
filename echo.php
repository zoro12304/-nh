<?php

require_once __DIR__ . DIRECTORY_SEPARATOR . 'vendor/autoload.php';

use zoro12304/Chatfuel;

if (isset($_GET['msg']) && ! empty($_GET['min'])) {
	(new Chatfuel())->sendText($_GET['msg']);
}