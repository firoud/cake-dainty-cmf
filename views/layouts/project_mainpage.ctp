<?php


$layoutFn = $this->_getLayoutFileName('project');

if ((bool)Configure::read('debug')) {
	include($layoutFn);
} else {
	@include($layoutFn);
}


?>