--TEST--
swoole_timer: The given parameters is too big.
--SKIPIF--
<?php require __DIR__ . "/../inc/skipif.inc"; ?>
--INI--
assert.active=1
assert.warning=1
assert.bail=0
assert.quiet_eval=0


--FILE--
<?php
var_dump(swoole_timer_after(86400001, function() {}));;
var_dump(swoole_timer_after(86400001, function() {}));
var_dump(swoole_timer_tick(86400001, function() {}));;
var_dump(swoole_timer_tick(86400001, function() {}));;
?>
--EXPECTF--
[%d%d%d%d-%d%d-%d%d %d%d:%d%d:%d%d @%f]	WARNING	php_swoole_add_timer: The given parameters is too big and must be greater than 0.
[%d%d%d%d-%d%d-%d%d %d%d:%d%d:%d%d @%f]	WARNING	zif_swoole_timer_after: add timer node failed.
bool(false)
[%d%d%d%d-%d%d-%d%d %d%d:%d%d:%d%d @%f]	WARNING	php_swoole_add_timer: The given parameters is too big and must be greater than 0.
[%d%d%d%d-%d%d-%d%d %d%d:%d%d:%d%d @%f]	WARNING	zif_swoole_timer_after: add timer node failed.
bool(false)
[%d%d%d%d-%d%d-%d%d %d%d:%d%d:%d%d @%f]	WARNING	php_swoole_add_timer: The given parameters is too big and must be greater than 0.
bool(false)
[%d%d%d%d-%d%d-%d%d %d%d:%d%d:%d%d @%f]	WARNING	php_swoole_add_timer: The given parameters is too big and must be greater than 0.
bool(false)