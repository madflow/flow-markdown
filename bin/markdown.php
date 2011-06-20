<?php
require_once dirname(__FILE__).'/../src/Flow/Markdown/Parser.php';

$file = array_key_exists(1,$argv) ? $argv[1] : null;

if(is_file($file))
{
    $content = file_get_contents($file);
    $parser = new Flow\Markdown\Parser();
    $html = $parser->transform($content);
    echo $html;
}
