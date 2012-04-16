<div class="users form">
<?php echo $this->Form->create('User');?>
	<fieldset>
 		<legend><?php printf(__('Edit %s', true), __('User', true)); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('mail');
		echo $this->Form->input('pass');
		echo $this->Form->input('name');
		echo $this->Form->input('permission');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('User.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('User.id'))); ?></li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Users', true)), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Info Categories', true)), array('controller' => 'info_categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Info Category', true)), array('controller' => 'info_categories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Master Categories', true)), array('controller' => 'master_categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Master Category', true)), array('controller' => 'master_categories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Records', true)), array('controller' => 'records', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Record', true)), array('controller' => 'records', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Vouncers', true)), array('controller' => 'vouncers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Vouncer', true)), array('controller' => 'vouncers', 'action' => 'add')); ?> </li>
	</ul>
</div>