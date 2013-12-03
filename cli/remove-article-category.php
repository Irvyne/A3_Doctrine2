<?php
/**
 * Created by Thibaud BARDIN (Irvyne)
 * This code is under the MIT License (https://github.com/Irvyne/license/blob/master/MIT.md)
 */

PHP_SAPI === 'cli' ?: exit('CLI Mandatory !');

$entityManager = require __DIR__."/../bootstrap.php";

$article_id = $argv[1];
$category_id = $argv[2];

$article = $entityManager->find('Article', $article_id);
$category = $entityManager->find('Category', $category_id);

$article->removeCategory($category);

$entityManager->flush();