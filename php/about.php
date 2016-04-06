<?php
if(!isset($_SESSION))
{
	session_start();
}

include('helper/paths.php');
include('helper/getGeneralSettingsFromJSON.php');	

include('cookie.php');
?>

<!DOCTYPE html>

<html>
	<head>
		<title><?php echo $developerName;?> on Codera</title>
		<meta charset="UTF_8"/>
		<link type="text/css" rel="stylesheet" href="../css/stylesheet-main.css"/>
		<link type="text/css" rel="stylesheet" href="../css/stylesheet-buttons.css"/>
		<link type="text/css" rel="stylesheet" href="../css/stylesheet-template.css"/>
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"/>        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>     
    </head>
	<body>
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
				<div id="white">					
					<div id="about-headline">About</div>					
					<div class="line"></div>	
					<div class="about-headline-small"><?php echo $developerName;?></div>	
					<table class="about-table">
						<tr class="about-row">
							<td class="about-left">
								<div id="about-icon" style="background-image: url('<?php echo $path_folder_icons;?>/Bejeweled.png');"></div>
							</td>										
							<td class="about-right">
								Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.

								<p>Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.</p>

								<p>Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus.</p>

								<p>Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus.</p>

							</td>
						</tr>						
					</table>
					<div class="about-line"></div>					
					<div class="about-headline-small">Codera</div>	
					<table class="about-table">
						<tr class="about-row">
							<td class="about-left">
								<div id="about-icon" style="background-image: url('<?php echo $path_folder_icons;?>/codera-logo-transparent.png');"></div>								
							</td>										
							<td class="about-right">
								Codera is a free and open-source multi-user content management system for developers.<br> <br>
								It was founded by spaghettic0der and Deadlocker in 2016.<br> <br>
								Main purpose is to offer a solution for developers to deploy their software on their own server.
								The multi user system allows you to restrict certain projects from public access and only allow a few people to se them.
								In addition you have the opportunity to create additional admins that can maintain your website.
								Codera allows you to deploy executables or to link webservices/websites you have created.<br> <br>
								<table>
									<tr>
										<td>Download:</td>
										<td class="link-visible-table-right"><a class="link-visible" href="https://github.com/spaghettic0der/codera">Codera on Github</a></td>
									</tr>
									<tr>
										<td>Wiki & Documentation:</td>
										<td class="link-visible-table-right"><a class="link-visible" href="https://github.com/spaghettic0der/codera/wiki">Codera Wiki</a></td>
									</tr>
								</table>								
							</td>
						</tr>						
					</table>
					<div class="about-line"></div>				
					<div class="about-headline-small">Libraries</div>	
					<div class="about-text">
						Codera is using the following libraries:<br> <br>								
						<table class="link-visible-table">
							<tr>
								<td>Chosen Selectboxes:</td>
								<td class="link-visible-table-right"><a class="link-visible" href="https://github.com/harvesthq/chosen">Chosen on Github</a></td>
							</tr>
							<tr>
								<td>Lightbox2:</td>
								<td class="link-visible-table-right"><a class="link-visible" href="http://lokeshdhakar.com/projects/lightbox2/">lokeshdhakar.com</a></td>
							</tr>
							<tr>
								<td>Pickadate:</td>
								<td class="link-visible-table-right"><a class="link-visible" href="https://github.com/amsul/pickadate.js/">Pickadate on GitHub</a></td>
							</tr>
							<tr>
								<td>elFinder:</td>
								<td class="link-visible-table-right"><a class="link-visible" href="https://github.com/Studio-42/elFinder">elFinder on GitHub</a></td>
							</tr>
							<tr>
								<td>Toggle Switches:</td>
								<td class="link-visible-table-right"><a class="link-visible" href="https://ghinda.net/css-toggle-switch/index.html">CSS Toggle Switches</a></td>
							</tr>
						</table>								
					</div>
					<div class="about-line"></div>			
					<div class="about-headline-small">License</div>	
					<div class="about-text-full">
						Codera is distributed under the GPL License.
						<br>
					</div>
					<div class="about-line"></div>			
					<div class="about-headline-small" id="privacy">Privacy Policy</div>	
					<div class="about-text-full">
						This website uses cookies to improve the users experience while visiting the website. <br> <br>
						Cookies are small files saved to the user's computers hard drive that save and store information for later use. This allows the website, through its server to provide the users with a tailored experience within this website.
						Users are advised that if they wish to deny the use and saving of cookies from this website on to their computers hard drive they should take necessary steps within their web browsers security settings to block all cookies from this website and its external serving vendors.
						<br> <br>
						On this website cookies are used to enable php sessions especially for he login feature. <br>
						This site doesn't collect and store any personal information.
						<br> <br>
						For additional information you can visit these websites: <a class="link-visible" href="http://www.allaboutcookies.org/cookies/">www.allaboutcookies.org/cookies/</a><br>
																					<a class="link-visible" href="https://en.wikipedia.org/wiki/HTTP_cookie">en.wikipedia.org/wiki/HTTP_cookie</a>
						<br> <br> <br> <br>
					</div>
				</div>
			</div>			 
		</div>      
		<?php include("templates/footer.php"); ?>        
	</body>
</html>