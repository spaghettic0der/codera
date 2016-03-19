<?php
//$options can be 'option' || 'image'
if(isset($property) && $property != null && isset($UUID) && $UUID != null && isset($options) && $options != null)
{
    global $projectArray;
    include "getProjectsFromJSON.php";

    for($i=0; $i < sizeof($projectArray); $i++)
    {
        if($projectArray[$i]->{'UUID'} == $UUID)
        {
            $selectedProject = $projectArray[$i];
            $allowedFilesArray = json_decode($selectedProject->{$property});
            if($options == "option")
            {
                for ($j = 0; $j < sizeof($allowedFilesArray); $j++)
                {
                    echo "<option>" . $allowedFilesArray[$j] . "</option>";
                }
            }
            elseif($options == "image")
            {
                $directory = "../images/screenshots/";
                $width = '100px';
                $height = '100px';
                for ($j = 0; $j < sizeof($allowedFilesArray); $j++)
                {
                    echo "<a href=".$directory.$allowedFilesArray[$j]." data-lightbox=".$directory.$allowedFilesArray[$j].">
                    <img width=$width height=$height src=".$directory.$allowedFilesArray[$j].">".
                    "</a>";
                }
            }

            break;
        }
    }
}