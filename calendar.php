<?php include_once("./layout/01_topsite.php")?>
<?php include_once("./layout/02_page_header.php")?>
<section class="section-md bg-gray-3">
	<div class="container">
	  <h3 class="text-center heading-divider">Календарь</h3><img src="images/calendar-1354x560.jpg" alt="" width="1354" height="560"/>
	  	<div class="box-single-services">
			<h4>Календарный план официальных физкультурных мероприятий и спортивных мероприятий Ростовской области на 2021 год по гольфу</h4>
	  		<p>
	  			Календарный план соревнований включает официальные спортивные мероприятия Ростовской области по гольфу.  
	  		</p>
			<style>
				.calendar{
					font-size: 0.9rem;
					margin-top: 20px;
				}
				.calendar th, td{
					padding: 0.3rem;
					border: 1px solid #d9d9d9;
				}
				.calendar th{
					text-align: center;
					background-color: #d9d9d9; 
				}
				.crosstd{
					text-align: center;
					font-weight: 600;
				}	
			</style>  
			<?php
			echo "<table class = ' table-custom-responsive calendar'>";
			echo "<header>";
			echo "<tr><th>Наименование мероприятия</th><th>Дата проведения</th><th width='20%'>Место проведения</th></tr>";
			echo "</header>";
			echo "<tbody>";
			$cal2021 = array(
				["", "Областные соревнования"],
				["Открытые областные соревнования по гольфу «Кубок Дона», I этап","29.04.","ст. Старочеркасская"],
				["Чемпионат Ростовской области по гольфу «DON OPEN»","03.06.-07.06.","ст. Старочеркасская"],
				["Открытые областные соревнования по гольфу «Кубок Дона», II этап","10.06.","ст. Старочеркасская"],
				["Открытые областные соревнования по гольфу «Кубок Дона», III этап","08.07.","ст. Старочеркасская"],
				["Первенство Ростовской области по гольфу (возрастные категории: мальчики, девочки 10-14 лет, юноши, девушки 15-16 лет, юниоры, юниорки 17-18 лет)","19.07.-23.07.","ст. Старочеркасская"],
				["Открытые областные соревнования по гольфу «Кубок Дона», финальный этап","12.08.","ст. Старочеркасская"],
				["Областные соревнования по гольфу «Кубок Президента Федерации гольфа Ростовской области»","27.08.-30.08.","ст. Старочеркасская"],
				["Кубок Губернатора Ростовской области по гольфу","09.09.-13.09.","ст. Старочеркасская"],
				["", "Всероссийские соревнования"],
				["Всероссийское соревнование «Детско-юношеский турнир «Раевский»","23.03.-28.03.","г. Анапа<br>ГК «Раевский»"],
				["Всероссийское соревнование «Детско-юношеский турнир «Геленджик»","28.03.-02.04.","г. Геленджик<br>ГК «Геленджик Гольф Резорт»"],
				["Всероссийское соревнование «Детско-юношеский турнир «Дон»","19.04.-24.04.","ст. Старочеркасская"],
				["Всероссийское соревнование «Детско-юношеский турнир «Форест Хиллс»","09.05.-14.05.","Московская область,<br>ГК «Форест Хиллс»"],
				["«Всероссийское соревнование по гольфу среди школьников (Всероссийская школьная Лига гольфа), IV этап»","24.05.-29.05.","г. Москва<br>ГБУ «СШОР «МШГ» Москомспорта»"],
				["Всероссийское соревнование  «Любители гольфа»","14.06.-20.06.","Лениградская область,<br>ГК «Земляничные поляны»"],
				["Всероссийское соревнование «Детско-юношеский турнир «Горки»","11.07.-16.07.","Лениградская область,<br>ГК «Горки»"],
				["Чемпионат России по гольфу","02.08.-08.08","Московская область,<br>ГК «Линкс Нейшнл»"],
				["Первенство России по гольфу (возрастные категории:  мальчики, девочки 10-14 лет, юноши, девушки 15-16 лет,юниоры, юниорки 17-18 лет)","16.08.-21.08.","Лениградская область,<br>ГК «Горки»"],
				["Всероссийское соревнование «Кубок Президента Ассоциации гольфа России»","05.09.-10.09.","Москвская область,<br>ГК «Пестово»"],
				["Кубок России по гольфу","26.09.-02.10.","г. Геленджик<br>ГК «Геленджик Гольф Резорт»"],
				["", "Тренировочные мероприятия"],
				["Тренировочные мероприятия сборных команд Ростовской области по подготовке к всероссийским, международным соревнованиям ","","по назначению"],
				["Тренировочное мероприятие по подготовке к ВС «Детско-юношескому турниру «Дон»","апрель","ст. Старочеркасская"],
				["Тренировочное мероприятия по подготовке к Первенству России","июль","ст. Старочеркасская"]

			);
			foreach($cal2021 as $cal){
				if($cal[0]==""){
					print("<tr><td colspan='3' class = 'crosstd'>{$cal[1]}</td></tr>");
				}
				else{
					print("<tr><td>{$cal[0]}</td><td class = 'crosstd'>{$cal[1]}</td><td>{$cal[2]}</td></tr>");
				}
			}
			echo "</tbody>";
			echo "</table>";
			?>

		</div>
	</div>  
</section>
<?php include_once("./layout/03_footersite.php")?>