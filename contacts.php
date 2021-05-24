<?php include_once("./layout/01_topsite.php")?>
<?php include_once("./layout/02_page_header.php")?>
<section class="section-md bg-gray-3">
	<div class="container">
	  <h3 class="text-center heading-divider">Контакты</h3><img src="images/contacts-1354x560.jpg" alt="" width="1354" height="560"/>
	  	<div class="box-single-services">
		  <h4 class = 'text-center heading-divider'>Отправьте Ваше сообщение</h4>
			<section class="section-lg bg-white">
				<div class="shell">		
					<div class="cell-md-10 cell-lg-8">
					<!-- RD Mailform-->
					<form class="rd-mailform rd-mailform_style-1 text-center" data-form-output="form-output-global" data-form-type="contact" method="post" action="/bat/rd-mailform.php">
						<div class="form-wrap form-wrap_icon linear-icon-man">
						<input class="form-input" id="contact-name" type="text" name="name" data-constraints="@Required"/>
						<label class="form-label" for="contact-name">Ваше имя</label>
						</div>
						<div class="form-wrap form-wrap_icon linear-icon-envelope">
						<input class="form-input" id="contact-email" type="email" name="email" data-constraints="@Email @Required"/>
						<label class="form-label" for="contact-email">Ваш e-mail</label>
						</div>
						<div class="form-wrap form-wrap_icon linear-icon-telephone">
						<input class="form-input" id="contact-phone" type="text" name="phone" data-constraints="@Numeric"/>
						<label class="form-label" for="contact-phone">Ваш телефон</label>
						</div>
						<div class="form-wrap form-wrap_icon linear-icon-feather">
						<textarea class="form-input" id="contact-message" name="message" data-constraints="@Required"></textarea>
						<label class="form-label" for="contact-message">Ваше сообщение</label>
						</div>
						<button class="button button-primary" type="submit">Отправить</button>
					</form>
					</div>
				</div>
				</div>
			</section>
		</div>
	</div>  
</section>
<?php include_once("./layout/03_footersite.php")?>