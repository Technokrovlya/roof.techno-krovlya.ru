<!DOCTYPE html>
<html lang="ru">
<head>
	<? require_once($_SERVER['DOCUMENT_ROOT'].'/pages/tpl/head.php');?>	
	<title>404 | Технокровля</title>
	<meta name="description" content="Страница не найдена">
	<meta name="robots" content="noindex, nofollow">
</head>
<body>

<? require_once($_SERVER['DOCUMENT_ROOT'].'/pages/tpl/top-line.php');?>
<? require_once($_SERVER['DOCUMENT_ROOT'].'/pages/tpl/header.php');?>
<? require_once($_SERVER['DOCUMENT_ROOT'].'/pages/tpl/popup.php');?>

<section class="content">
	<div class="wrapper">
		<h1 class="large-caption">Ошибка 404</h1>
		<p><a href="<?$_SERVER['DOCUMENT_ROOT']?>/index.php">На главную</a></p>
	</div>
</section>


<? require_once($_SERVER['DOCUMENT_ROOT'].'/pages/tpl/footer.php');?>
<? require_once($_SERVER['DOCUMENT_ROOT'].'/pages/tpl/scripts.php');?>

</body>
</html>