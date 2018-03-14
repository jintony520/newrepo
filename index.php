<?php
$a = array( 'one' );
$a[] =& $a;

unset($a);
xdebug_debug_zval( 'a' );
