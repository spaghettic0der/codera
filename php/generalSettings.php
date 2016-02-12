<table id="infos-small">
	<tr class="infos-row">
		<td class="infos-left">
			<div class="icon">
				<i class="material-icons">mode_edit</i> <span class="icon-text">Website Name:</span>
			</div>
		</td>										
		<td class="infos-right">
			<input class="input project" id="input-websiteName" type="text" maxlength="15" placeholder="MyEpicDeveloperName"/>
		</td>
	</tr>	
	<tr class="infos-row">
		<td class="infos-left">
			<div class="icon">
				<i class="material-icons">color_lens</i> <span class="icon-text">Color Scheme:</span>
			</div>
		</td>										
		<td class="infos-right">
			<select id="select-colors">
				<?php include ("printColorOptions.php") ?>
			</select>
		</td>
	</tr>
	<tr class="infos-row">
		<td class="infos-left">
			<div class="icon">
				<i class="material-icons">grid_on</i> <span class="icon-text">Gridsize:</span>
			</div>
		</td>										
		<td class="infos-right">
			<input class="input project input-simple" id="input-gridsize" type="range" min="3" max="5"/><label id="slider-label" />
		</td>
	</tr>
	<tr class="infos-row">
		<td class="infos-left">
			<div class="icon">
				<i class="material-icons">system_update</i> <span class="icon-text">Codera:</span>
			</div>
		</td>										
		<td class="infos-right">
			<table>
				<tr>
					<td id="codera-version-left">installed version:</td>
					<td id="codera-version-right"colspan="2">1.0.0</td>
				</tr>
				<tr>
					<td id="codera-version-left">newest version:</td>
					<td id="codera-version-right">1.5.3</td>
					<td id="codera-version-link"><a href="https://github.com/spaghettic0der/codera">Update</a></td>
				</tr>				
			</table>
		</td>
	</tr>	
	<tr class="infos-row">
		<td class="infos-left">	</td>										
		<td class="infos-right">
			<a class="button" id="button-save" href="javascript:void(null)">									
				<i class="material-icons">check</i> <span class="button-text">Save</span>
			</a>
			<a class="button" id="button-discard" href="javascript:void(null)">									
				<i class="material-icons">delete</i> <span class="button-text">Discard</span> 									
			</a>
		</td>
	</tr>						
</table>