<!-- В этом файле описываем все  всплывающие окна -->

<!-- Popup-Certificates -->
<div class="certificates-popup-container" data-target="cert1">
	<div class="certificates-popup-overlay"></div>
	<div class="certificates-popup">
		<button class="certificates-popup__close"></button>
		<?
		$certp = carbon_get_the_post_meta('complex_certificates');
		if ($certp) {
			$certpIndex = 0;
			foreach ($certp as $itemp) {
		?>
				<img src="<?php echo wp_get_attachment_image_src($itemp['certificates_img'], 'large')[0]; ?>" alt="" class="certificates-popup__img">
				<div class="certificates-popup-wrap">
					<h3 class="certificates-popup-wrap__title"><? echo $itemp['certificates_title']; ?></h3>
					<p class="certificates-popup-wrap__desc"><? echo $itemp['certificates_text']; ?></p>
					<button href="#" class="certificates-popup-wrap__btn">СКАЧАТЬ</button>
				</div>
		<?
				$certpIndex++;
			}
		}
		?>
	</div>
</div>
<!-- Popup-Certificates End -->