<?php

require 'core/ClassLoader.php';

$loader = new ClassLoader();
$loader->registerDir(dirname(__FILE__). '/core'); //@todo ここのファイルは何を指定しているのか
$loader->registerDir(dirname(__FILE__). '/models');
$loader->register();