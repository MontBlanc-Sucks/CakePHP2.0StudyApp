<div class="posts index">
	<h2>Posts</h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('title'); ?></th>
			<th><?php echo $this->Paginator->sort('body'); ?></th>
			<th class="actions">Actions</th>
	</tr>
<?php foreach ($posts as $post): ?>
	<tr>
		<td><?php echo $this->Html->link($post['Post']['title'], array('action' => 'view', $post['Post']['id'])); ?>&nbsp;</td>
		<td><?php echo h($post['Post']['body']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link('Edit', array('action' => 'edit', $post['Post']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $post['Post']['id']), null, __('Are you sure you want to delete # %s?', $post['Post']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>

	<div class="paging">
		<?php echo $this->Paginator->prev(); ?>
		|
		<?php echo $this->Paginator->numbers();?>
		|
		<?php echo $this->Paginator->next(); ?>
	</div>
</div>
<div class="actions">
	<h3>Actions</h3>
	<ul>
		<li><?php echo $this->Html->link('New Post', array('action' => 'add')); ?></li>
	</ul>
</div>