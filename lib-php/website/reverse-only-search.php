<?php

require_once(CONST_LibDir.'/init-website.php');
require_once(CONST_LibDir.'/ParameterParser.php');

$oParams = new Nominatim\ParameterParser();
$sOutputFormat = $oParams->getSet('format', array('text', 'json'), 'text');

$oDB = new Nominatim\DB(CONST_Database_DSN);

if ($sOutputFormat == 'json') {
    header('content-type: application/json; charset=UTF-8');
}

if ($sOutputFormat == 'json') {
    $aResponse = array(
                  'status' => 404,
                  'message' => 'Reverse only installation method does not support forward searching',
                  'software_version' => CONST_NominatimVersion
                 );
    javascript_renderData($aResponse);
} else {
    echo 'Error 404, Reverse only installation method does not support forward searching';
}

exit;
