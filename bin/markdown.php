<?php

require_once dirname(__FILE__).'/../src/Madflow/Markdown/Parser.php';

$file = array_key_exists(1,$argv) ? $argv[1] : null;

if(is_file($file))
{
    $content = file_get_contents($file);
    $parser = new Madflow\Markdown\Parser();
    $html = $parser->transform($content);
    echo $html;
}
