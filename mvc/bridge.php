<?php
$arrFile = glob("./mvc/core/*");
foreach ($arrFile as $file){
    require_once $file;
}