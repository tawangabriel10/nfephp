<?php

error_reporting(E_ALL);
ini_set('display_errors', 'On');

require_once(dirname(__FILE__).'/../../libs/NFe/DanfeNFCeNFePHP.class.php');

$saida = $_REQUEST['o'];

if (!isset($_REQUEST['o'])) {

    $saida = 'pdf';

}

$arq = dirname(__FILE__).'/../xml/exemploNFCe.xml';

if (is_file($arq)) {

    $docxml = file_get_contents($arq);
    $danfe  = new DanfeNFCeNFePHP($docxml, dirname(__FILE__).'/../../images/logo.jpg', 0);
    $id     = $danfe->montaDANFE(false);
    $teste  = $danfe->printDANFE($saida, $id.'.pdf', 'I');

}
