<?php
if(!isset($_SESSION))
{
	session_start();
}
global $colorScheme;
global $developerName;
global $gridSize;
include('helper/paths.php');
include($path_helper_getGeneralSettings);
?>


<!DOCTYPE html>
<html>
	<head>
		<title><?php echo $developerName ?> on Codera</title>
		<meta charset="UTF_8"/>
		<link type="text/css" rel="stylesheet" href="../css/stylesheet-main.css"/>
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
		<script src="../js/index.js"></script>		
	</head>
	<body onload="drawBanners('<?php echo $colorScheme;?>');">
		<div id="main">
			<?php 				
				if(isset($_SESSION['loggedIn']))
				{					
					include($path_header_logout); 
				}
				else
				{				
					include($path_header); 
				}				
			?>
			<div id="content">				
				<table id="projects">
					<?php
						
						global $projectArray;
						include('helper/getProjectsFromJSON.php');			
						include('helper/getGeneralSettingsFromJSON.php');						

						global $userArray;
						include "helper/getUsersFromJSON.php";

						for($i=0; $i < sizeof($userArray); $i++)
						{
							if($userArray[$i]->{'username'} == $_SESSION['loggedIn'])
							{
								$forbiddenProjects = json_decode($userArray[$i]->{'forbiddenProjects'});
							}
						}


						if($projectArray != NULL)
						{
							for($i=0; $i < sizeof($projectArray); $i++)
							{
								$icon = urldecode($projectArray[$i]->{'icon'});
								$name = $projectArray[$i]->{'name'};
								$UUID = $projectArray[$i]->{'UUID'};

								if(!in_array($UUID,$forbiddenProjects))
								{


									if (fmod($i, $gridSize) == 0)
									{
										echo '<tr class="row">';
									}


									if ($gridSize == 3)
									{
										echo '<td class="entry large">' .
											'<a name="icon-link" id="' . $UUID . '">' .
											'<div class="entry-icon large container">' .
											'<div class="entry-icon" style="background-image: url(' . "'" . $path_folder_icons . '/' . $icon . "'" . ');"> </div>' .
											'<canvas width="300" height="300"></canvas>' .
											'</div>' .
											'<div class="icon-name">' . $name . '</div>' .
											'</a>' .
											'</td>';

										if (fmod($i, 3) == 2)
										{
											echo '</tr>';
										}
									} else if ($gridSize == 4)
									{
										echo '<td class="entry medium">' .
											'<a name="icon-link" id="' . $UUID . '">' .
											'<div class="entry-icon medium container">' .
											'<div class="entry-icon" style="background-image: url(' . "'" . $path_folder_icons . '/' . $icon . "'" . ');"> </div>' .
											'<canvas width="300" height="300"></canvas>' .
											'</div>' .
											'<div class="icon-name">' . $name . '</div>' .
											'</a>' .
											'</td>';

										if (fmod($i, 4) == 3)
										{
											echo '</tr>';
										}
									} else
									{
										echo '<td class="entry small">' .
											'<a name="icon-link" id="' . $UUID . '">' .
											'<div class="entry-icon small container">' .
											'<div class="entry-icon" style="background-image: url(' . "'" . $path_folder_icons . '/' . $icon . "'" . ');"> </div>' .
											'<canvas width="300" height="300"></canvas>' .
											'</div>' .
											'<div class="icon-name">' . $name . '</div>' .
											'</a>' .
											'</td>';

										if (fmod($i, 5) == 4)
										{
											echo '</tr>';
										}
									}
								}
							}	
						}					
					?>						
				</table>		
			</div>			
		</div>
		<?php include("templates/footer.php"); ?>
	</body>
</html>
