<div id="callback" class="popup">
	<div class="inner">
		<div class="close"><button onclick="$('#callback').removeClass(' show-flex-popup');">&times;</button></div>
		<div class="content">
			
			<form id="callback-form" method="POST" onsubmit="$('#callback').removeClass('show-flex-popup'); $('#response').addClass('show-flex-popup'); sendMessage('#callback-form'); yaCounter35072805.reachGoal('callback');" action="javascript:void(null);">
				<label for="name">Ваше имя</label>
				<input type="text" name="name" required>
				<label for="contact">Телефон</label>
				<input type="text" name="contact" required>
				<input type="hidden" name="message" value="Обратный звонок">
				<input type="submit" value="Заказать звонок">	
			</form>

		</div>
	</div>
</div>

<div id="response" class="popup">
	<div class="inner">
		<div class="close"><button onclick="$('#response').removeClass(' show-flex-popup');">&times;</button></div>
		<div class="content" id="containerResponse">
			
		</div>
	</div>
</div>