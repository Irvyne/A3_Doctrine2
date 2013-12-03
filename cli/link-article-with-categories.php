<?php
/**
 * Created by Thibaud BARDIN (Irvyne)
 * This code is under the MIT License (https://github.com/Irvyne/license/blob/master/MIT.md)
 */

PHP_SAPI === 'cli' ?: exit('CLI Mandatory !');

$entityManager = require __DIR__."/../bootstrap.php";

$article_id = $argv[1];
$categories_id = explode(',', $argv[2]);

$categoryRepo = $entityManager->getRepository('Category');
$article = $entityManager->find('Article', $article_id);

foreach ($categories_id as $category_id) {
    $category = $categoryRepo->find($category_id);
    $article->addCategory($category);
}

$entityManager->flush();