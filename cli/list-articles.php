<?php
/**
 * Created by Thibaud BARDIN (Irvyne)
 * This code is under the MIT License (https://github.com/Irvyne/license/blob/master/MIT.md)
 */

PHP_SAPI === 'cli' ?: exit('CLI Mandatory !');

$entityManager = require __DIR__."/../bootstrap.php";

$repo = $entityManager->getRepository('Article');
$articles = $repo->findAll();

foreach ($articles as $article) {
    echo sprintf(
        '%d- %s'."\n",
        $article->getId(),
        $article->getTitle()
    );
}

// TODO Afficher tous les articles