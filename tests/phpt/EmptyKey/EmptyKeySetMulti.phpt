--TEST--
EmptyKey - EmptyKeySetMulti

--SKIPIF--
<?php
include dirname(__FILE__)."/../../cbtestframework/cbtest-phpt-loader.inc";
couchbase_phpt_skipif("EmptyKey", "testEmptyKeySetMulti");

--FILE--
<?php
include dirname(__FILE__)."/../../cbtestframework/cbtest-phpt-loader.inc";
couchbase_phpt_runtest("EmptyKey", "testEmptyKeySetMulti");
--EXPECT--
PHP_COUCHBASE_OK