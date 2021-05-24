<?php include_once("./layout/01_topsite.php")?>
<?php include_once("./layout/02_page_header.php")?>
<section class="section-md bg-gray-3">
		<div class="container">
		  <h3 class="text-center heading-divider">Структура ФГРО</h3><img src="images/structure-1354x560.jpg" alt="" width="1354" height="560"/>
		  <div class="box-single-services"> 
			<h4>Руководство</h4>
			<?php
			$mamber_arr = array(
				["Президент РОО «Федерация гольфа Ростовской области»" , "Ревенко Владимир Юрьевич"],
				["Вице-президент РОО «Федерация гольфа Ростовской области»" , "Гайдук Сергей Валентинович"],
				["Вице-президент РОО «Федерация гольфа Ростовской области»" , "Жигунов Леонид Эдуардович"],
				["Вице-президент РОО «Федерация гольфа Ростовской области»" , "Горбов Сергей Николаевич"],
				["Директор РОО «Федерация гольфа Ростовской области»" , "Резникова Оксана Анатольевна"]
			);
			foreach($mamber_arr as $mbr){
				echo "<p>".$mbr[0]."<br><strong>".$mbr[1]."</strong></p>";
			}
			?>
		</div>
	  </section>
<?php include_once("./layout/03_footersite.php")?>