<?php
/**
 * Created by Thibaud BARDIN (Irvyne)
 * This code is under the MIT License (https://github.com/Irvyne/license/blob/master/MIT.md)
 */

PHP_SAPI === 'cli' ?: exit('CLI Mandatory !');

$entityManager = require __DIR__."/../bootstrap.php";

$user_id = $argv[1];

$userRepo = $entityManager->getRepository('User');
$articleRepo = $entityManager->getRepository('Article');

$user = $userRepo->find($user_id);
$articles = $user->getArticles();

echo $user->getName()."\n";
echo '--> Articles :'."\n";
foreach ($articles as $article) {
    echo '====> '.$article->getTitle()."\n";
}

