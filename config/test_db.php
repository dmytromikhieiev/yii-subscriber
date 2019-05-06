<?php
$db = require __DIR__ . '/db.php';
// test database! Important not to run tests on production or development databases
$db['dsn'] = 'mysql:dbname=subscriber;host=db-yii-test';

return $db;
