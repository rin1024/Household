<div class="users form">
<?php echo $this->Form->create('User');?>
	<fieldset>
 		<legend><?php printf(__('[A Add %s', true), __('User', true)); ?></legend>
	<?php
		echo $this->Form->input('mail');
		echo $this->Form->input('pass');
		echo $this->Form->input('nickname');
		echo $this->Form->input('permission');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Users', true)), array('action' => 'index'));?></li>
	</ul>
</div>