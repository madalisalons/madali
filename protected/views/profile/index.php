<?php
/* @var $this ProfileController */

$this->breadcrumbs=array(
	'Իմ էջը',
);
?>
<h1><?php echo $this->id . '/' . $this->action->id; ?></h1>
<div id='booking'>
<?php
/* add register buttons */
echo CHtml::button('Հերթագրվել', array('submit' => array('/orders')));
?>
</div>
