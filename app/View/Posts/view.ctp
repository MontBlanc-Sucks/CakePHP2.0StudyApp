<div class="posts view">
<h2><?php echo h($post['Post']['title']); ?></h2>
	<div class="post-body">
		<?php echo nl2br(h($post['Post']['body'])); ?>
	</div>
</div>

<div class="actions">
	<h3>Actions</h3>
	<ul>
		<li><?php echo $this->Html->link('List Posts', array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link('New Post', array('action' => 'add')); ?></li>
	</ul>
</div>
