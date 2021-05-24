<?php include_once("./layout/01_topsite.php")?>
<?php include_once("./layout/02_page_header.php")?>
<style>
.onedoc{
	/* border: 1px solid grey; */
}
.onedoc i{
	margin: 1rem;
}
.onedoc span{
	vertical-align: 0.4rem;
}
.manydocs:not(:last-child){
	border-bottom: 1px solid #d9d9d9;
	margin-bottom: 2rem;
}
</style>
<section class="section-md bg-gray-3">
	<div class="container">
	  <h3 class="text-center heading-divider">Документы федерации</h3>
	  	<div class="box-single-services">
			<h4>2020 год</h4> 
			<div class = "manydocs">
				<?php
				$docs = array(
					["2020","Отчет о реализации программы развития 2020","01_2020.pdf"],
					["2020","Отчет о спортивных мероприятиях и результатах ВС 2020","02_2020.pdf"],
					["2020","Отчет об использовании имущества 2020","03_2020.pdf"],
					["2020","Целевые показатели к Отчету о реализации программы развития 2020","04_2020.pdf"],
					["2019","Отчет об использовании имущества 2019","01_2019.pdf"],
					["2018","Отчет об использовании имущества 2018","01_2018.pdf"],
					["2017","Отчет об использовании имущества 2017","01_2017.pdf"]
					
				);
				foreach ($docs as $doc) {
					if($doc[0] == "2020"){
						echo "<div class='onedoc'><a href = './docs/{$doc[2]}'><i class= 'icon fa-2x fa-file-pdf-o'></i><span>{$doc[1]}</span></a></div>";
					}
				}
				?>
			</div>
			<h4>2017 - 2019 годы</h4> 
			<div class = "manydocs">
			<?php
				foreach ($docs as $doc) {
					if($doc[0] != "2020"){
						echo "<div class='onedoc'><a href = './docs/{$doc[2]}'><i class= 'icon fa-2x fa-file-pdf-o'></i><span>{$doc[1]}</span></a></div>";
					}
				}
			?>
			</div>
			
		</div>
	</div>
  
</section>
<?php include_once("./layout/03_footersite.php")?>