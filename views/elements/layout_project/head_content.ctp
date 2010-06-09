<?php echo $this->Html->charset(); ?>
<title><?php if (isset($title_for_layout)) echo $title_for_layout; ?></title>
<?php echo $this->Html->meta('icon'); ?>
<?php echo $this->Html->meta(array('name' => 'generator', 'content' => Inflector::slug(Configure::read('Engine.name')) . '/' . Configure::read('Engine.version') . ' CakePHP/' . Configure::version() . ' PHP/' . PHP_VERSION)); ?>
<?php echo $this->Html->css('cake.project'); ?>
<?php if (isset($scripts_for_layout)) echo $scripts_for_layout; ?>