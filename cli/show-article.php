<?php
/**
 * Created by Thibaud BARDIN (Irvyne)
 * This code is under the MIT License (https://github.com/Irvyne/license/blob/master/MIT.md)
 */

PHP_SAPI === 'cli' ?: exit('CLI Mandatory !');

$entityManager = require __DIR__."/../bootstrap.php";

$id = $argv[1];
$article = $entityManager->find('Article', $id);

if ($article === null) {
    echo "No article found.\n";
    exit(1);
}

echo sprintf("%d- %s\n", $article->getId(), $article->getTitle());