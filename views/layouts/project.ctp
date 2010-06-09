<?php echo $this->Html->docType('xhtml-strict'); ?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<?php echo $this->Html->tag('head', $this->element('layout_project' . DS . 'head_content', array('scripts_for_layout' => $scripts_for_layout))); ?>
<body>

<?php echo $this->element('layout_project' . DS . 'header'); ?>
<?php echo $this->element('layout_project' . DS . 'sidebar'); ?>
<?php echo $content_for_layout; ?>
<?php echo $this->element('layout_project' . DS . 'footer'); ?>

</body>
</html>