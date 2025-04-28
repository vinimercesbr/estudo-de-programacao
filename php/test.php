<?php 

require_once __DIR__ . '/vendor/autoload.php';

use DiDom\Document;

$document = new Document('https://plus.diolinux.com.br/', true);

$posts = $document->find('a');

foreach($posts as $post) {
    echo $post->text(), "\n";
}
?>
