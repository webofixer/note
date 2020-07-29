<?php
$html = $arResult["DETAIL_TEXT"];
//$html = iconv('windows-1251', 'UTF-8', $html);
libxml_use_internal_errors(true) AND libxml_clear_errors();// Ignore errors
$doc = new DOMDocument();
$doc->loadHTML('<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">' . $html);
$html = $doc->saveHTML();
$html = preg_replace('~<(?:!DOCTYPE|/?(?:html|body))[^>]*>\s*~i', '',  $html);
$html = preg_replace('~<head>.*?</head>~i', '',  $html);
//$html = iconv('UTF-8', 'windows-1251', $html);
echo $html;
?>
