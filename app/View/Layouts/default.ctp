<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       cake.libs.view.templates.layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $title_for_layout; ?>:
		<?php echo $cakeDescription ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('cake.generic');

		echo $scripts_for_layout;
	?>
	<style>
		#menu {
			width: 100%;
			height: 2em;
			background-color: #066;
			color: #fff;
		}

		#menu ul {
			margin: auto;
			padding: 0;
		}

		#menu ul li {
			display: inline-block;
		}

		#menu ul li a {
			color: #fff;
		}

		#menu ul li a:hover {
			color: #cc9;
		}
	</style>
</head>
<body>
	<div id="container">
		<div id="header">
			<h1><?php echo $this->Html->link($cakeDescription, '/'); ?></h1>
		</div>
		<div id="menu">
			<ul>
			<?php if (AuthComponent::user()): ?>
				<li><?php echo $this->Html->link('Posts', array('controller' => 'posts')) ?></li>
				<li><?php echo $this->Html->link('Logout', array('controller' => 'users', 'action' => 'logout')) ?></li>
			<?php else: ?>
				<li><?php echo $this->Html->link('Register', array('controller' => 'users', 'action' => 'register')) ?></li>
				<li><?php echo $this->Html->link('Login', array('controller' => 'users', 'action' => 'login')) ?></li>
			<?php endif ?>
			</ul>
		</div>
		<div id="content">

			<?php echo $this->Session->flash('auth'); ?>
			<?php echo $this->Session->flash(); ?>

			<?php echo $content_for_layout; ?>

		</div>
		<div id="footer">
			<?php echo $this->Html->link(
					$this->Html->image('cake.power.gif', array('alt'=> $cakeDescription, 'border' => '0')),
					'http://www.cakephp.org/',
					array('target' => '_blank', 'escape' => false)
				);
			?>
		</div>
	</div>
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>