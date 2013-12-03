<?php
/**
 * Created by Thibaud BARDIN (Irvyne)
 * This code is under the MIT License (https://github.com/Irvyne/license/blob/master/MIT.md)
 */

PHP_SAPI === 'cli' ?: exit('CLI Mandatory !');

$entityManager = require __DIR__."/../bootstrap.php";

$id = $argv[1];

$user = $entityManager->find('User', $id);

$entityManager->remove($user);
$entityManager->flush();

//echo "Delete Article with ID " . $article->getId() . "\n";