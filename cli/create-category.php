<?php
/**
 * Created by Thibaud BARDIN (Irvyne)
 * This code is under the MIT License (https://github.com/Irvyne/license/blob/master/MIT.md)
 */

PHP_SAPI === 'cli' ?: exit('CLI Mandatory !');

$entityManager = require __DIR__."/../bootstrap.php";

$name = $argv[1];

$category = new Category();
$category->setName($name);

$entityManager->persist($category);
$entityManager->flush();

echo "Created Category with ID " . $category->getId() . "\n";