<?php
    //Create a CLI application that takes a URL and a CSS selector arguments and prints the text content of the element that matches the selector. Hint you can use cheerio
    //https://packagist.org/packages/imangazaliev/didom
?>
<?php
    // Assuming you installed from Composer:
    require_once __DIR__ . '/vendor/autoload.php';
    use DiDom\Document;

    $document = new Document('https://roadmap.sh/full-stack', true);
    
    function verificacao($document){
        if ($document->has('tr')) {
            $posts = $document->find('tr');
            print_r($posts);
        }else{
            echo("Não tem");
        }       
    };
   verificacao($document);
?>