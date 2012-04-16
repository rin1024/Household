<div class="masterCategories index">
	<h2><?php __('Master Categories');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('user_id');?></th>
			<th><?php echo $this->Paginator->sort('name');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($masterCategories as $masterCategory):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $masterCategory['MasterCategory']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($masterCategory['User']['id'], array('controller' => 'users', 'action' => 'view', $masterCategory['User']['id'])); ?>
		</td>
		<td><?php echo $masterCategory['MasterCategory']['name']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $masterCategory['MasterCategory']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $masterCategory['MasterCategory']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $masterCategory['MasterCategory']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $masterCategory['MasterCategory']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
	));
	?>	</p>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< '.__('previous', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('next', true).' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Master Category', true)), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Users', true)), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('User', true)), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Info Categories', true)), array('controller' => 'info_categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Info Category', true)), array('controller' => 'info_categories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Records', true)), array('controller' => 'records', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Record', true)), array('controller' => 'records', 'action' => 'add')); ?> </li>
	</ul>
</div>