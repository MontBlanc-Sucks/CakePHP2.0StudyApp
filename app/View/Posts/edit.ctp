<div class="posts form">
	<h2>Edit Post</h2>
	<?php
		echo $this->Form->create('Post');
		echo $this->Form->input('title');
		echo $this->Form->input('body');
		echo $this->Form->end('Submit');
	?>
</div>

<div class="actions">
	<h3>Actions</h3>
	<ul>
		<li><?php echo $this->Html->link('List Posts', array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link('New Post', array('action' => 'add')); ?></li>
	</ul>
</div>
