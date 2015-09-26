<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
	<link rel="shortcut icon" href="images/favicon.png" />
</head>

<body>

<div class="container" id="page">
	<div id="head">
		<div>
			<div id="header">
				<a href="index.php?r=site/index">
					<div id="logo">
						<p id="m">m</p>
						<p id="d">d</p>
						<p id="l">l</p>
						<p id="text">beauty & health</p>
					</div>
				</a>
			</div><!-- header -->
			<div id="mainmenu">
				<?php $this->widget('zii.widgets.CMenu',array(
					'items'=>array(
						array('label'=>'Գլխավոր', 'url'=>array('/site/index')),
						array('label'=>'Մեր մասին', 'url'=>array('/site/page', 'view'=>'about')),
						array('label'=>'Կապ', 'url'=>array('/site/contact'))
					),
				)); ?>
			</div><!-- mainmenu -->
			<div id="loginmenu">
				<?php $this->widget('zii.widgets.CMenu',array(
					'items'=>array(
						array('label'=>'Մուտք', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
						array('label'=>'Ելք', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
					),
				)); ?>
			</div><!-- loginmenu -->
			<div id="user">
				<?php $this->widget('zii.widgets.CMenu',array(
					'items'=>array(
						array('label'=>Yii::app()->user->name, 'url'=>array('/profile'), 'visible'=>!Yii::app()->user->isGuest)
					),
				)); ?>
			</div><!-- user -->
		</div>
	</div><!-- head -->

	<div id='contentarea'>
		<?php if(isset($this->breadcrumbs)):?>
			<?php $this->widget('zii.widgets.CBreadcrumbs', array(
				'links'=>$this->breadcrumbs,
			)); ?><!-- breadcrumbs -->
		<?php endif?>

		<?php echo $content; ?>

		<div class="clear"></div>

		<div id="footer">
			<p>
				&copy; MaDaLi.am 2015
			</p>
		</div><!-- footer -->
	</div><!-- contentarea -->
</div><!-- page -->

</body>
</html>
