<div class="infoCategories view">
<h2><?php  __('Info Category');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $infoCategory['InfoCategory']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('User'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($infoCategory['User']['id'], array('controller' => 'users', 'action' => 'view', $infoCategory['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Master Category'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($infoCategory['MasterCategory']['name'], array('controller' => 'master_categories', 'action' => 'view', $infoCategory['MasterCategory']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $infoCategory['InfoCategory']['name']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(sprintf(__('Edit %s', true), __('Info Category', true)), array('action' => 'edit', $infoCategory['InfoCategory']['id'])); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('Delete %s', true), __('Info Category', true)), array('action' => 'delete', $infoCategory['InfoCategory']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $infoCategory['InfoCategory']['id'])); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Info Categories', true)), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Info Category', true)), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Users', true)), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('User', true)), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Master Categories', true)), array('controller' => 'master_categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Master Category', true)), array('controller' => 'master_categories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Records', true)), array('controller' => 'records', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Record', true)), array('controller' => 'records', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php printf(__('Related %s', true), __('Records', true));?></h3>
	<?php if (!empty($infoCategory['Record'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('User Id'); ?></th>
		<th><?php __('Vouncer Id'); ?></th>
		<th><?php __('Master Category Id'); ?></th>
		<th><?php __('Info Category Id'); ?></th>
		<th><?php __('Description'); ?></th>
		<th><?php __('Price'); ?></th>
		<th><?php __('Use Credit Card'); ?></th>
		<th><?php __('Pay Temporary'); ?></th>
		<th><?php __('Add Cash Payment Journal'); ?></th>
		<th><?php __('Add Bank Payment Journal'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($infoCategory['Record'] as $record):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $record['id'];?></td>
			<td><?php echo $record['user_id'];?></td>
			<td><?php echo $record['vouncer_id'];?></td>
			<td><?php echo $record['master_category_id'];?></td>
			<td><?php echo $record['info_category_id'];?></td>
			<td><?php echo $record['description'];?></td>
			<td><?php echo $record['price'];?></td>
			<td><?php echo $record['use_credit_card'];?></td>
			<td><?php echo $record['pay_temporary'];?></td>
			<td><?php echo $record['add_cash_payment_journal'];?></td>
			<td><?php echo $record['add_bank_payment_journal'];?></td>
			<td><?php echo $record['created'];?></td>
			<td><?php echo $record['modified'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'records', 'action' => 'view', $record['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'records', 'action' => 'edit', $record['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'records', 'action' => 'delete', $record['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $record['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Record', true)), array('controller' => 'records', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
