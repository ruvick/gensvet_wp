<!-- В этом файле описываем все  всплывающие окна -->

<!-- Popup Скачать инструкцию -->
<div style="display: none;">
	<div class="box-modal box-modal-new modal-container" id="instruction" data-target="#">
		<div class="box-modal_close box-modal_close_new arcticmodal-close modal-overlay"></div>
		<div class="headen_form_blk">
			<div class="modal">
				<button class="box-modal_close box-modal_close_new arcticmodal-close modal__close"></button>
				<div class="modal-wrap">
					<h3 class="modal-wrap__title">Получите инструкцию «Кривая силы света»</h3>
					<form action="" class="modal-wrap-form">
						<input name="user-name" type="text" id="form-instruction-name" class="modal-wrap-form__input" placeholder="Ваше имя" required minlength="2" maxlength="40" />
						<input name="user-tel" type="tel" id="form-instruction-tel" class="modal-wrap-form__input" placeholder="Номер телефона" required minlength="2" maxlength="40" />
						<input name="user-mail" type="email" id="form-instruction-email" class="modal-wrap-form__input" placeholder="Адрес электронной почты" required minlength="2" maxlength="40" />
						<div class="subscription-wrap-form-wrap modal-wrap-form-wrap">
							<input name="user-check" type="checkbox" class="subscription-wrap-form-wrap__checkbox-hidden" required hidden checked>
							<span class="subscription-wrap-form-wrap__checkbox modal-wrap-form-wrap__checkbox"></span>
							<p class="subscription-wrap-form-wrap__desc modal-wrap-form-wrap__desc">Отправляя форму, я соглашаюсь с условиями
								<a href="#" class="subscription-wrap-form-wrap__link modal-wrap-form-wrap__link"> политики персональных данных</a>
							</p>
						</div>
					</form>
					<button type="submit" href="#" class="modal-wrap__btn newButton">ПОЛУЧИТЬ ИНСТРУКЦИЮ</button>
				</div>
				<div class="modal__img"></div>
			</div>
		</div>
		<div class="SendetMsg" style="display:none;">
			<div class="modal modal--success">
				<button class="box-modal_close box-modal_close_new arcticmodal-close modal__close modal__close--success"></button>
				<img src="<?php echo get_template_directory_uri(); ?>/img/modals/success.png" alt="" class="modal__checkmark">
				<div class="modal-wrap modal-wrap--success">
					<h3 class="modal-wrap__title modal-wrap__title--success">ОТЛИЧНО!</h3>
					<p class="modal-wrap__desc">Мы уже отправили вам файлы. Проверьте вашу электронную почту. <br>
						Если письма нет, проверьте папку Спам или напишите нам <a href="#" class="modal-wrap__desc--link">support@deko-tm.ru</a></p>
				</div>
			</div>
		</div>

	</div>
</div>
<!-- Popup Скачать инструкцию End -->


<!-- Popup Скачать прайс-листы -->
<div style="display: none;">
	<div id="price-list" class="box-modal box-modal-new box-modal-new__cust modal-container" data-target="#">
		<div class="box-modal_close box-modal_close_new arcticmodal-close modal-overlay"></div>
		<div class="headen_form_blk">
			<div class="modal">
				<button class="box-modal_close box-modal_close_new arcticmodal-close modal__close"></button>
				<div class="modal-wrap">
					<h3 class="modal-wrap__title">скачать прайс-листы продукции</h3>
					<form action="" class="modal-wrap-form">
						<input name="user-name" type="text" id="form-price-name" class="modal-wrap-form__input" placeholder="Ваше имя" required minlength="2" maxlength="40" />
						<input name="user-tel" type="tel" id="form-price-tel" class="modal-wrap-form__input" placeholder="Номер телефона" required minlength="2" maxlength="40" />
						<input name="user-mail" type="email" id="form-price-email" class="modal-wrap-form__input" placeholder="Адрес электронной почты" required minlength="2" maxlength="40" />
						<div class="subscription-wrap-form-wrap modal-wrap-form-wrap">
							<input name="user-check" type="checkbox" class="subscription-wrap-form-wrap__checkbox-hidden" required hidden checked>
							<span class="subscription-wrap-form-wrap__checkbox modal-wrap-form-wrap__checkbox"></span>
							<p class="subscription-wrap-form-wrap__desc modal-wrap-form-wrap__desc">Отправляя форму, я
								соглашаюсь с условиями
								<a href="#" class="subscription-wrap-form-wrap__link modal-wrap-form-wrap__link"> политики
									персональных данных</a>
							</p>
						</div>
					</form>
					<button type="submit" href="#" class="modal-wrap__btn newButtonPrice">ПОЛУЧИТЬ ИНСТРУКЦИЮ</button>
				</div>
				<div class="modal__img modal__img--price"></div>
			</div>
		</div>
		<div class="SendetMsg" style="display:none;">
			<div class="modal modal--success">
				<button class="box-modal_close box-modal_close_new arcticmodal-close modal__close modal__close--success"></button>
				<img src="<?php echo get_template_directory_uri(); ?>/img/modals/success.png" alt="" class="modal__checkmark">
				<div class="modal-wrap modal-wrap--success">
					<h3 class="modal-wrap__title modal-wrap__title--success">ОТЛИЧНО!</h3>
					<p class="modal-wrap__desc">Мы уже отправили вам файлы. Проверьте вашу электронную почту. <br>
						Если письма нет, проверьте папку Спам или напишите нам <a href="#" class="modal-wrap__desc--link">support@deko-tm.ru</a></p>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Popup Скачать прайс-листы End -->


<!-- Popup-Certificates -->
<div class="certificates-popup-container" data-target="cert1">
	<div class="certificates-popup-overlay"></div>
	<div class="certificates-popup">
		<button class="certificates-popup__close"></button>

		<img id="imgCert" src="" alt="" class="certificates-popup__img">
		<div class="certificates-popup-wrap">
			<h3 class="certificates-popup-wrap__title"><? echo $itemp['certificates_title']; ?></h3>
			<p class="certificates-popup-wrap__desc"><? echo $itemp['certificates_text']; ?></p>
			<button href="#" class="certificates-popup-wrap__btn">СКАЧАТЬ</button>
		</div>
	</div>
</div>
<!-- Popup-Certificates End -->