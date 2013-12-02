<?php
/**
 * Created by Thibaud BARDIN (Irvyne)
 * This code is under the MIT License (https://github.com/Irvyne/license/blob/master/MIT.md)
 */

require 'vendor/autoload.php';

$config = new \Doctrine\DBAL\Configuration();

$connectionParams =

$connection = \Doctrine\DBAL\DriverManager::getConnection($connectionParams, $config);

var_dump($connection);

$query = $connection->query("SELECT * FROM rgerg");