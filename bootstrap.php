<?php

Autoloader::add_core_namespace('Langswitcher');

Autoloader::add_classes(array(
	'Langswitcher\\Langswitcher' => __DIR__ . '/classes/langswitcher.php',
	'Langswitcher\\LangswitcherException' => __DIR__ . '/classes/langswitcher.php',

));
