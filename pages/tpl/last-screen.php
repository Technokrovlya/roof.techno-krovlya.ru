<section class="last-screen-menu">
	<div class="wrapper">
		<? include ($_SERVER['DOCUMENT_ROOT'].'/pages/tpl/nav.php');?>
	</div>
</section>

<section class="last-screen">
	<div class="inner">
		<div class="last-screen-form">
			<div class="caption">Бесплатная консультация</div>
			<div class="description">Задайте интересующий вопрос по кровле/фасаду</div>	
			<form onsubmit="yaCounter35072805.reachGoal('consultation'); return true;" action="<?$_SERVER['DOCUMENT_ROOT']?>/mailer.php" id="form-consultation" method="POST">
				<input type="hidden" name="field-subject" value="Заказ консультации">
				<input type="text" name="field-name" placeholder="Ваше имя">
				<input type="text" placeholder="Телефон*" name="field-contacts" required>
				<input type="submit" value="Заказать" class="button-style-1">
			</form>

			<div class="confidence">
				<div class="confidence-icon"><? include ($_SERVER['DOCUMENT_ROOT'].'/img/svg/lock.svg');?></div>
				<p>Отправляя любую форму на этом сайте, Вы соглашаетесь с <a href="<?$_SERVER['DOCUMENT_ROOT']?>/pages/politics.php">политикой конфиденциальности</a></p>
			</div>
		</div>
		<div class="last-screen-contacts">
			<p>
			640007, Курган, проспект Машиностроителей, 20Б<br>
			8 (3522) 64-40-50, 8 (932) 316-03-22<br>
			tehnokrovla<span class="at"></span>mail.ru<br>
			9:00-18:00 по будням<br>
			9:00-14:00 в субботу<br>
			воскресенье &mdash; выходной
			</p>
		</div>
		<!--
		<div class="social">
			<script type="text/javascript" src="//vk.com/js/api/openapi.js?146"></script>
			<div id="vk_groups"></div>
			<script type="text/javascript">
			VK.Widgets.Group("vk_groups", {mode: 3, width: "auto", no_cover: 1, color1: '222222', color2: 'FDFDFD', color3: 'FF4400'}, 39259888);
			</script>
		</div>
		-->
	</div>
</section>