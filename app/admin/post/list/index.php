<?php
include( _i('inc/authenticate.php') );
$pageTitle = _t('Posts');
?>
<!DOCTYPE html>
<html lang="<?php echo _lang(); ?>">
<head>
	<title><?php echo _title($pageTitle); ?></title>
	<?php include( _i('inc/head.php') ); ?>
</head>
<body>
	<?php include('view.php'); ?>
</body>
</html>
<script type="text/javascript">
	Page.Post.List.init('<?php echo _getLang();?>');
</script>