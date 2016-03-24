<?php
if(!isset($_SESSION))
{
	session_start();
}
include_once "../helper/functions.php";
if(!isUserAdmin($_SESSION['loggedIn']))
{
	header('Location: ../login.php');
	exit;
}
?>

<table id="infos-small">
	<tr class="infos-row">
		<td class="infos-left lesspadding">
			<div class="icon">
				<i class="material-icons">lock</i> <span class="icon-text">Old Username:</span>
			</div>
		</td>										
		<td class="infos-right lesspadding">
			<input class="input project" id="input-username-old" type="text" maxlength="30" placeholder="Your Login Name"/>
		</td>
	</tr>	
	<tr class="infos-row">
		<td class="infos-left lesspadding">
			<div class="icon">
				<i class="material-icons">lock</i> <span class="icon-text">Old Password:</span>
			</div>
		</td>										
		<td class="infos-right lesspadding">
			<input class="input project" id="input-password-old" type="password" placeholder="Old Password"/>
		</td>
	</tr>
	<tr class="infos-row">	
		<td class="infos-left lesspadding"></td>
		<td class="infos-right lesspadding">
			<div class="icon" id="icon-warn">
				<i class="material-icons">warning</i> <span class="icon-text">Old Credentials are incorrect!</span>
			</div>
			<div class="icon" id="icon-success">
				<i class="material-icons">check</i> <span class="icon-text">Successfully saved.</span>
			</div>
		</td>
	</tr>	
	<tr class="infos-row">
		<td class="infos-left lesspadding">
			<div class="icon">
				<i class="material-icons">mode_edit</i> <span class="icon-text">New Username:</span>
			</div>
		</td>										
		<td class="infos-right lesspadding">
			<input class="input project" id="input-username-new" type="text" maxlength="30" placeholder="New Username"/>
		</td>
	</tr>	
	<tr class="infos-row">
		<td class="infos-left">
			<div class="icon">
				<i class="material-icons">mode_edit</i> <span class="icon-text">New Password:</span>
			</div>
		</td>										
		<td class="infos-right">
			<input class="input project" id="input-password-new" type="password" placeholder="New Password"/>
		</td>
	</tr>	
	<tr class="infos-row">
		<td class="infos-left">	</td>										
		<td class="infos-right">
			<a class="button save" id="button-save-changeLogin" href="javascript:void(null)">
				<i class="material-icons">check</i> <span class="button-text">Save</span>
			</a>
			<a class="button discard" id="button-discard-changeLogin" href="javascript:void(null)">									
				<i class="material-icons">delete</i> <span class="button-text">Discard</span> 									
			</a>
		</td>
	</tr>						
</table>