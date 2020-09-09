<?php
    use Michelf\Markdown;
    $readme = file_get_contents("/README.md");
    $html = Markdown::defaultTransform($readme);
    print $html;
?>
