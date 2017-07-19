<header>
	<div class="header-menu-button" onclick="$('.dropdown-menu').addClass(' visible')"><? include ($_SERVER['DOCUMENT_ROOT'].'/img/svg/menu-icon.svg');?></div>
	<div class="header-logo"><a href="/"><? include ($_SERVER['DOCUMENT_ROOT'].'/img/svg/logo.svg');?></a></div>
	<div class="header-description">Кровельно-фасадная мастерская в Кургане<br>пр. Машиностроителей, 20Б &mdash; tehnokrovla<span class="at"></span>mail.ru</div>
	<div class="header-spacer"></div>	
	<div class="header-order-button" id="order-measure-button" onclick="$('#order').addClass(' flex')">Заказать замер</div>
	<a class="header-order-button" onclick="yaCounter35072805.reachGoal('call-button')" id="call-button" href="tel:83522644050">Позвонить</a>
	<div class="header-map-button" onclick="$('#driving-scheme-popup').addClass(' flex')" title="Схема проезда"><? include ($_SERVER['DOCUMENT_ROOT'].'/img/svg/map.svg');?></div>
	<div class="header-callback-button" onclick="$('#callback').addClass(' flex')" title="Обратный звонок"><? include ($_SERVER['DOCUMENT_ROOT'].'/img/svg/callback.svg');?></div>
	<div class="header-telephone"><a href="tel:83522644050">8 (3522) 64-40-50</a></div>
	<div class="header-opening-hours">9:00-18:00 по будням<br>9:00-14:00 в субботу</div>
</header>

<div class="popup" id="order">
	<div class="popup-inner">
		<div class="popup-header">
			<div class="popup-caption">Заказать замер</div>
			<div class="popup-close" onclick="$('#order').removeClass(' flex')">&times;</div>
		</div>
		<div class="popup-content">
			<form onsubmit="yaCounter35072805.reachGoal('measure-header'); return true;" action="<?$_SERVER['DOCUMENT_ROOT']?>/mailer.php" id="form-order-measure-header" method="POST">
				<input type="hidden" name="field-subject" value="Заказ замера">
				<label for="field-name">Ваше имя</label>
				<input type="text" name="field-name">
				<label for="field-contacts">Телефон*</label>
				<input type="text" name="field-contacts" required>
				<input type="submit" value="Отправить" class="button-style-1">
			</form>
		</div>
	</div>
</div>

<div class="popup" id="driving-scheme-popup">
	<div class="popup-inner">
		<div class="popup-header">
			<div class="popup-caption">Схема проезда</div>
			<div class="popup-close" onclick="$('#driving-scheme-popup').removeClass(' flex')">&times;</div>
		</div>
		<div class="popup-content">
			<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A1H1xshmZhDOxrvrl3__LTvn3ey-UFCuW&amp;width=100%25&amp;height=400&amp;lang=ru_RU&amp;scroll=true"></script>
		</div>
	</div>
</div>

<div class="popup" id="callback">
	<div class="popup-inner">
		<div class="popup-header">
			<div class="popup-caption">Обратный звонок</div>
			<div class="popup-close" onclick="$('#callback').removeClass(' flex')">&times;</div>
		</div>
		<div class="popup-content">
			<form onsubmit="yaCounter35072805.reachGoal('callback'); return true;" action="<?$_SERVER['DOCUMENT_ROOT']?>/mailer.php" id="form-callback-header" method="POST">
				<input type="hidden" name="field-subject" value="Заказ обратного звонка">
				<label for="field-name">Ваше имя</label>
				<input type="text" name="field-name">
				<label for="field-contacts">Телефон*</label>
				<input type="text" name="field-contacts" required>
				<input type="submit" value="Отправить" class="button-style-1">
			</form>
		</div>
	</div>
</div>

<div class="dropdown-menu">
	<div class="dropdown-menu-navigation">
		<? include ($_SERVER['DOCUMENT_ROOT'].'/pages/tpl/nav.php');?>
	</div>
	<div class="dropdown-menu-close">&times;</div>	
</div>

<script src="<?$_SERVER['DOCUMENT_ROOT']?>/js/libs.min.js"></script>
<script>
 	$(document).ready(function(){
	 	$('.menu-icon').on('click', function(){
	 		$('.dropdown-menu').toggleClass('visible');	
	 	});
	 	$('.dropdown-menu').on('dblclick', function(){
	 		$('.dropdown-menu').removeClass('visible');	
	 	});
	 	$('.dropdown-menu-close').on('click', function(){
	 		$('.dropdown-menu').removeClass('visible');	
	 	});
	 });
</script>