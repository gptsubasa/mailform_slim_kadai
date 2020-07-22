<!DOCTYPE html>
<html lang="ja">
<head>
<?php echo $__env->yieldContent('head'); ?>
<?php echo $__env->yieldPushContent('css'); ?>
<?php echo $__env->yieldPushContent('js'); ?>
</head>
<body>
<?php echo $__env->yieldContent('header'); ?>
	<div id="contentsWrap">
<?php echo $__env->yieldContent('content'); ?>
	</div>
	<!-- /#contents_wrap -->
<?php echo $__env->yieldContent('footer'); ?>
</body>
</html>
<?php /**PATH /var/www/slim3/resources/views/layouts/app.blade.php ENDPATH**/ ?>