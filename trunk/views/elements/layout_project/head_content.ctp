<?php echo $html->charset(); ?>
<title><?php echo $title_for_layout; ?></title>
<?php echo $html->meta('icon'); ?>
<?php echo $html->meta(array('name' => 'generator', 'content' => Configure::read('Engine.name') . '/' . Configure::read('Engine.version'))); ?>
<?php echo $html->css(array('cake.project')); ?>
<?php echo $scripts_for_layout; ?>