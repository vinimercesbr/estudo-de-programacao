<?php
//Create a CLI application that takes a URL and a CSS selector arguments and prints the text content of the element that matches the selector. Hint you can use cheerio
//https://packagist.org/packages/imangazaliev/didom
?>
<?php
// Assuming you installed from Composer:
require_once __DIR__ . '/vendor/autoload.php';
use DiDom\Document;
echo("Site: ");
$site=trim(fgets(STDIN));
echo("Tag: ");
$tag=trim(fgets(STDIN));
$document = new Document($site, true);
$posts = $document->find($tag);
foreach($posts as $post) {
    echo $post->text(), "\n";
}
?>