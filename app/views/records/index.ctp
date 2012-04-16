<style type="text/css">
<!--

table tr td, table tr th {
  text-align: left;
  min-width: 35px;
  padding: 2px;
  border: 1px #808080 solid;
}

// -->
</style>
<div class="records index">
        <h2><?php __('Records');?></h2>
<br />
	<table cellpadding="0" cellspacing="0" >
        <tr>
<!--
			<th><?php echo $this->Paginator->sort('id');?></th>
                        <th><?php echo $this->Paginator->sort('user_id');?></th>
-->
			<th><?php echo $this->Paginator->sort('日付', 'date');?></th>
			<th><?php echo $this->Paginator->sort('使用者', 'vouncer_id');?></th>
			<th><?php echo $this->Paginator->sort('大カテ', 'master_category_id');?></th>
			<th><?php echo $this->Paginator->sort('小カテ', 'info_category_id');?></th>
<!--
                        <th><?php echo $this->Paginator->sort('内容', 'description');?></th>
-->
                        <th><?php echo $this->Paginator->sort('金額', 'price');?></th>
<!--
			<th><?php echo $this->Paginator->sort('クレカ', 'use_credit_card');?></th>
			<th><?php echo $this->Paginator->sort('立替', 'pay_temporary');?></th>
			<th><?php echo $this->Paginator->sort('add_cash_payment_journal');?></th>
			<th><?php echo $this->Paginator->sort('add_bank_payment_journal');?></th>
                        <th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
-->
			<th class="actions">&nbsp;</th>
	</tr>
	<?php
	$i = 0;
	foreach ($records as $record):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
        <tr<?php echo $class;?>>
<!--
		<td><?php echo $record['Record']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($record['User']['name'], array('controller' => 'users', 'action' => 'view', $record['User']['id'])); ?>
                </td>
-->
		<td><?php echo date("Y年 n月 j日" , strtotime($record['Record']['date'])); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($record['Vouncer']['name'], array('controller' => 'vouncers', 'action' => 'view', $record['Vouncer']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($record['MasterCategory']['name'], array('controller' => 'master_categories', 'action' => 'view', $record['MasterCategory']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($record['InfoCategory']['name'], array('controller' => 'info_categories', 'action' => 'view', $record['InfoCategory']['id'])); ?>
		</td>
		<td>¥<?php echo number_format($record['Record']['price']); ?>&nbsp;</td>
<!--
		<td><?php echo $record['Record']['use_credit_card']; ?>&nbsp;</td>
                <td><?php echo $record['Record']['pay_temporary']; ?>&nbsp;</td>
                <td><?php echo $record['Record']['add_cash_payment_journal']; ?>&nbsp;</td>
		<td><?php echo $record['Record']['add_bank_payment_journal']; ?>&nbsp;</td>
		<td><?php echo $record['Record']['created']; ?>&nbsp;</td>
                <td><?php echo $record['Record']['modified']; ?>&nbsp;</td>
-->
                <td class="actions">
E&nbsp;D
<!--
                        <?php echo $this->Html->link(__('View', true), array('action' => 'view', $record['Record']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $record['Record']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $record['Record']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $record['Record']['id'])); ?>
-->
		</td>
        </tr>
        <tr>
		<td colspan="7"><?php echo $record['Record']['description']; ?>&nbsp;</td>
        </tr>
<?php endforeach; ?>
        </table>
<br />
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
<!--
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Record', true)), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Users', true)), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('User', true)), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Vouncers', true)), array('controller' => 'vouncers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Vouncer', true)), array('controller' => 'vouncers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Master Categories', true)), array('controller' => 'master_categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Master Category', true)), array('controller' => 'master_categories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Info Categories', true)), array('controller' => 'info_categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Info Category', true)), array('controller' => 'info_categories', 'action' => 'add')); ?> </li>
	</ul>
</div>
-->
