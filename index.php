<?php
    require __DIR__ . '/vendor/autoload.php';
    
    use Michelf\Markdown;
    $readme = file_get_contents(__DIR__ . '/README.md');
    $html = Markdown::defaultTransform($readme);
    print $html;
?>
