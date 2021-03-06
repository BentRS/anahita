<?php // no direct access
defined( '_JEXEC' ) or die( 'Restricted access' ); ?>
<fieldset class="adminform">
	<legend><?php echo JText::_( 'Site Settings' ); ?></legend>
	<table class="admintable" cellspacing="1">
	<tbody>
		<tr>
			<td width="185" class="key">

			<span class="editlinktip hasTip" title="<?php echo JText::_( 'Site Offline' ); ?>::<?php echo JText::_( 'TIPSETYOURSITEISOFFLINE' ); ?>">

			<?php echo JText::_( 'Site Offline' ); ?>
			</span>
			</td>
			<td>
			<?php echo $lists['offline']; ?>
			</td>
		</tr>
		<tr>
			<td valign="top" class="key">
				<span class="editlinktip hasTip" title="<?php echo JText::_( 'Offline Message' ); ?>::<?php echo JText::_( 'TIPIFYOURSITEISOFFLINE' ); ?>">
					<?php echo JText::_( 'Offline Message' ); ?>
				</span>
			</td>
			<td>
				<textarea class="text_area" cols="60" rows="2" style="width:400px; height:40px" name="offline_message"><?php echo $row->offline_message; ?></textarea>
			</td>
		</tr>
		<tr>
			<td class="key">
				<span class="editlinktip hasTip" title="<?php echo JText::_( 'Site Name' ); ?>::<?php echo JText::_( 'TIPSITENAME' ); ?>">
				<?php echo JText::_( 'Site Name' ); ?>
				</span>
			</td>
			<td>
				<input class="text_area" type="text" name="sitename" size="50" value="<?php echo $row->sitename; ?>" />
			</td>
		</tr>
		
	</tbody>
	</table>
</fieldset>
