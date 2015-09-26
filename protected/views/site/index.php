<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<h1>Բարի գալուստ <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>

<?php
/* add register buttons */

echo CHtml::button('Հաճախորդ', array('submit' => array('/users')));
echo CHtml::button('Սրահ', array('submit' => array('/salons')));
echo CHtml::button('Անհատ մասնագետ', array('submit' => array('/specialists')));
?>
