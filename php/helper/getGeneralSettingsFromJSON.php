<?php
$filename = "../../config/generalSettings.json";
if(file_exists($filename))
{

    $settings = json_decode(file_get_contents($filename));
    $developerName = $settings->{'developerName'};
    $colorScheme = $settings->{'colorScheme'};
    $gridSize = $settings->{'gridSize'};
    //TODO read coderaVersion from somewhere else
    $coderaVersion = $settings->{'coderaVersion'};
}