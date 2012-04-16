<?php
  $options = array();
  // カテゴリによる絞り込み
  if (isset($this->params['url']['category_id'])) {
    $options['category_id'] = $this->params['url']['category_id'];
  }
  // 日付による絞り込み
  if (isset($this->params['url']['created'])) {
    $options['created'] = $this->params['url']['created'];
  }
  $paginator->options(array('url' => $options));
?>
<?php echo $paginator->counter(); ?>

<table>
  <tr> 
    <th><?php echo $paginator->sort('アイディー', 'Record.id'); ?></th> 
    <th><?php echo $paginator->sort('カテゴリ', 'Record.category_id'); ?></th> 
    <th><?php echo $paginator->sort('商品名', 'Record.title'); ?></th> 
    <th><?php echo $paginator->sort('日付', 'Record.created'); ?></th> 
  </tr> 
<?foreach($records as $record):?>
  <tr> 
    <td><?php echo $record['Record']['id']; ?> </td> 
    <td><?php echo $categories[$record['Record']['category_id']]; ?> </td> 
    <td><?php echo $record['Record']['title']; ?> </td> 
    <td><?php echo $record['Record']['created']; ?> </td> 
  </tr> 
<?endforeach;?>
</table> 

<?=$paginator->prev('≪ Previous ', null, null, array('class' => 'disabled'));?>
<?php echo $paginator->numbers(); ?>
<?=$paginator->next(' Next ≫', null, null, array('class' => 'disabled'));?> 

<form action="/" method="GET">
<input type="text" name="created" value="" />
<select name="category_id">
<?foreach($categories as $id => $name):?>
<option value="<?=$id?>"><?=$name?></option>
<?endforeach;?>
</select>
<input type="submit" value="Send" />
</form>


