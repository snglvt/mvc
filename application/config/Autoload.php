<?php
/*автоматическая загрузка классов*/
function my_autoload($class_name)
{
    //разбиваем полное квалифицированное имя класса
	$class_pleces = explode('\\', $class_name);	
    //проверяем первый элемент
	switch($class_pleces[0]){
		case 'models':
		require 'application/' . implode('/', $class_pleces) . '.php'; 
	}
}
spl_autoload_register('my_autoload');