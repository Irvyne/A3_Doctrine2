<?php
/**
 * Created by Thibaud BARDIN (Irvyne)
 * This code is under the MIT License (https://github.com/Irvyne/license/blob/master/MIT.md)
 */

PHP_SAPI === 'cli' ?: exit('CLI Mandatory !');

$entityManager = require __DIR__."/../bootstrap.php";

$title = $argv[1];
$content = $argv[2];

$article = new Article();
$article->setTitle($title);
$article->setContent($content);

$entityManager->persist($article);
$entityManager->flush();

echo "Created Article with ID " . $article->getId() . "\n";