
<div class="members_form">
	<?php 
		echo $this->Form->create('User', array('enctype' => 'multipart/form-data', 'novalidate' => true)); 
	?>

	<h2><?php echo __('Add User'); ?></h2>

	<table cellpadding='0' cellspacing='1' width='100%'>
		<?php
		    $random = substr( md5(rand()), 0, 7);
		    $id = $this->params['url']['id'];
		    
		    // echo $id;
		?>

		<tr> 
			<td class="heading">Member ID: </td> 
			<td class="data"><?php echo $this->Form->input('User.member_id', array('label' =>'', 'type' => 'text', 'value' => $id)); ?></td> 
		</tr>
		<tr>
			<td class="heading">Username: </td> 
			<td class="data"><?php echo $this->Form->input('User.username', array('label' =>'', 'value' => $random));?></td> 
		</tr>
		<tr>
			<td class="heading">Email: </td> 
			<td class="data"><?php echo $this->Form->input('User.email', array('label' =>'', 'value' => ''));?></td> 
		</tr>
		<tr>
			<td class="heading">Password: </td> 
			<td class="data"><?php echo $this->Form->input('User.password', array('label' =>'', 'value' => '123abc'));?></td> 
		</tr>
		<tr>
			<td class="heading">Confirm Password: </td> 
			<td class="data"><?php echo $this->Form->input('User.password_confirm', array('label' =>'', 'value' => '123abc'));?></td> 
		</tr>
		</tr>
			<td class="heading">Role: </td> 
			<td class="data"><?php echo $this->Form->input('User.role', array('label' =>'', 'value' => 'member'));?></td> 
		</tr>
	</table>
	<div id="submitButtons">
		<button type="submit">Add Member <?php echo $this->Form->end(); ?></button>
	</div>
</div>
