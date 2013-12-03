<?php
/**
 * Created by Thibaud BARDIN (Irvyne)
 * This code is under the MIT License (https://github.com/Irvyne/license/blob/master/MIT.md)
 */

PHP_SAPI === 'cli' ?: exit('CLI Mandatory !');

$entityManager = require __DIR__."/../bootstrap.php";

$user_id = $argv[1];
$article_id = $argv[2];

$user = $entityManager->find('User', $user_id);
$article = $entityManager->find('Article', $article_id);

$article->setAuthor($user);

$entityManager->flush();

echo "Link Article <".$article->getId()."> with User <".$user->getId().'>'."\n";