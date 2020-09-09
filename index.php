<?php
    require_once __DIR__ . 'vendor/michelf/php-markdown/Markdown.inc.php';
    use Michelf\Markdown;
    $readme = file_get_contents(__DIR__ . '/README.md');
    $html = Markdown::defaultTransform($readme);
    print $html;
?>
