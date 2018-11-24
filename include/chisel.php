<? if($course == "1_1"){?>
	<div id="chisel" class = "ch_1">
			<div class="chisel-top">
				<img src="img/type-curses/baranov.png" alt="Владимир Баранов" />
			</div>
			<div class="chisel-middle">
				<div class="caption">Владимир Баранов, PMP, PME, MCTS</div>
				<span>Директор Практики управления проектами</span>
			</div>
			<div class="arrows">
				<div class="left-arrow"><a onclick = "fade_chisel('ch_1', 'ch_2');"><img src="img/type-curses/left.png" /></a></div>
				<div class="right-arrow"><a onclick = "fade_chisel('ch_1', 'ch_2');"><img src="img/type-curses/right.png" /></a></div>
			</div>
			<div class="chisel-bottom">
				<div class="caption">
					 «Я начинал свою карьеру в УП с роли администратора, приходилось все осваивать самому. Наш курс построен таким образом, что за 2,5 дня вы получаете максимально полезные для роли администратора знания и навыки. Фактически вы -готовый специалист»
				</div>
			</div>
	</div>
	<div id="chisel" class = "ch_2">
		<div class="chisel-top">
			<img src="img/type-curses/kochetov.png" alt="Александр Кочетов" />
		</div>
		<div class="chisel-middle">
			<div class="caption">Александр Кочетов, PMP, PME</div>
			<span>Заместитель генерального директора</span>
		</div>
		<div class="arrows">
			<div class="left-arrow"><a onclick = "fade_chisel('ch_2', 'ch_1');"><img src="img/type-curses/left.png" /></a></div>
			<div class="right-arrow"><a onclick = "fade_chisel('ch_2', 'ch_1');"><img src="img/type-curses/right.png" /></a></div>
		</div>
		<div class="chisel-bottom">
			<div class="caption">
				«Проводя аналогию с вооруженными силами, для командира на передовой (в нашем случае Руководителя проекта) крайне важно, чтобы в штабе все было в порядке – фиксировалось продвижение войск, запасы находились в сохранности, направлялись заявки на пополнение боеприпасами, учитывалась и обрабатывалась необходимая информация. Таким штабным офицером в проекте является Администратор. Как практический руководитель проектов, я подчеркиваю важность роли Администратора для эффективной проектной работы»
			</div>
		</div>
	</div>
	
	<script>
		//Смена рекомендации
		function fade_chisel(var_out, var_in){$('.' + var_out).fadeOut(100);$('.' + var_in).fadeIn(100);}
		$('.ch_2').hide();
	</script>	
		
<? } ?>
<? if($course == "1_2"){?>
	<div id="chisel">
		<div class="chisel-top">
			<img src="img/type-curses/cheremisin.png" alt="Роман Черемисин" />
		</div>
		<div class="chisel-middle">
			<div class="caption">Роман Черемисин, PMSE, РМЕ</div>
			<span>Руководитель отдела строительных проектов</span>
		</div>
		<div class="arrows">
			<div class="left-arrow"><a onclick = "fade_chisel('ch_3', 'ch_2');"><img src="img/type-curses/left.png" /></a></div>
			<div class="right-arrow"><a onclick = "fade_chisel('ch_3', 'ch_4');"><img src="img/type-curses/right.png" /></a></div>
		</div>
		<div class="chisel-bottom">
			<div class="caption">
				«Я уже почти 10 лет занимаюсь управлением проектами и за это время ни разу не усомнился в полезности функции планирования. В рамках трека вы узнаете не только о том, на какие кнопки в программном обеспечении нужно нажимать, но и научитесь решать возникающие организационные вопросы на основе нашего практического опыта в проектах»
			</div>
		</div>
	</div>
<? } ?>
<? if($course == "1_3"){?>
	<div id="chisel">
		<div class="chisel-top">
			<img src="img/type-curses/homutinnikova.png" alt="Ксения Хомутинникова" />
		</div>
		<div class="chisel-middle">
			<div class="caption">Ксения Хомутинникова, PMP, PME, CPMA</div>
			<span>Бизнес-тренер, методолог</span>
		</div>
		<div class="arrows">
			<div class="left-arrow"><a onclick = "fade_chisel('ch_4', 'ch_3');"><img src="img/type-curses/left.png" /></a></div>
			<div class="right-arrow"><a onclick = "fade_chisel('ch_4', 'ch_5');"><img src="img/type-curses/right.png" /></a></div>
		</div>
		<div class="chisel-bottom">
			<div class="caption">
				«Как показывает практика, многие руководители постоянно наступают на одни и те же грабли. Этого можно избежать, используя накопленный и зафиксированный в стандартах опыт, однако важно, чтобы стандарт учитывал специфику российских проектов» 
			</div>
		</div>
	</div>	
<? } ?>
<? if($course == "1_4"){?>
	<div id="chisel">
		<div class="chisel-top">
			<img src="img/type-curses/baranov.png" alt="Владимир Баранов" />
		</div>
		<div class="chisel-middle">
			<div class="caption">Владимир Баранов, PMP, PME, MCTS</div>
			<span>Директор Практики управления проектами</span>
		</div>
		<div class="arrows">
			<div class="left-arrow"><a onclick = "fade_chisel('ch_5', 'ch_4');"><img src="img/type-curses/left.png" /></a></div>
			<div class="right-arrow"><a onclick = "fade_chisel('ch_5', 'ch_6');"><img src="img/type-curses/right.png" /></a></div>
		</div>
		<div class="chisel-bottom">
			<div class="caption">
				«Обоснованные и своевременные управленческие решения – залог успеха любого проекта. При этом ввиду расширяющихся границ сегодняшних проектов одинаково важны как российский опыт, так и международная практика»
			</div>
		</div>
	</div>
<? } ?>
<? if($course == "1_5"){?>
	<div id="chisel">
		<div class="chisel-top">
			<img src="img/type-curses/viktorova.png" alt="Ольга Викторова" />
		</div>
		<div class="chisel-middle">
			<div class="caption">Ольга Викторова</div>
			<span>Директор по сертификации</span>
		</div>
		<div class="arrows">
			<div class="left-arrow"><a onclick = "fade_chisel('ch_6', 'ch_5');"><img src="img/type-curses/left.png" /></a></div>
			<div class="right-arrow"><a onclick = "fade_chisel('ch_6', 'ch_7');"><img src="img/type-curses/right.png" /></a></div>
		</div>
		<div class="chisel-bottom">
			<div class="caption">
				«Для успешной реализации проекта не только руководителю требуются компетенции в области управления проектами. Каждый участник команды, чтобы быть эффективным, должен обладать необходимым набором знаний и навыков в проектном управлении. В команде не должно быть слабых звеньев»
			</div>
		</div>
	</div>
<? } ?>

<? if($course == "2_1"){?>
	<div id="chisel">
		<div class="chisel-top">
			<img src="img/type-curses/kochetov.png" alt="Александр Кочетов" />
		</div>
		<div class="chisel-middle">
			<div class="caption">Александр Кочетов, PMP, PME</div>
			<span>Заместитель генерального директора</span>
		</div>
		<div class="arrows">
			<div class="left-arrow"><a onclick = "fade_chisel('ch_7', 'ch_6');"><img src="img/type-curses/left.png" /></a></div>
			<div class="right-arrow"><a onclick = "fade_chisel('ch_7', 'ch_8');"><img src="img/type-curses/right.png" /></a></div>
		</div>
		<div class="chisel-bottom">
			<div class="caption">
				«Управление проектами – это в первую очередь технологии, основанные на накопленном опыте. Многие ситуации и проблемы, кажущиеся уникальными, уже неоднократно испытывали на себе участники других проектов. Трек «Эксперт-практик» позволит воспользоваться опытом руководителей и команд самых разнообразных проектов. Опыт можно принимать, можно совершенствовать – но его нельзя игнорировать»
			</div>
		</div>
	</div>
<? } ?>
<? if($course == "2_2"){?>
	<div id="chisel">
		<div class="chisel-top">
			<img src="img/type-curses/homutinnikova.png" alt="Ксения Хомутинникова" />
		</div>
		<div class="chisel-middle">
			<div class="caption">Ксения Хомутинникова, PMP, PME, CPMA</div>
			<span>Бизнес-тренер, методолог</span>
		</div>
		<div class="arrows">
			<div class="left-arrow"><a onclick = "fade_chisel('ch_8', 'ch_7');"><img src="img/type-curses/left.png" /></a></div>
			<div class="right-arrow"><a onclick = "fade_chisel('ch_8', 'ch_9');"><img src="img/type-curses/right.png" /></a></div>
		</div>
		<div class="chisel-bottom">
			<div class="caption">
				«Управление проектным офисом - задача системного характера. Компетенции руководителя включают понимание технологий проектного управления, структуры и содержания корпоративной системы управления проектами, логики планомерного развития проектного офиса в компании. Руководитель должен знать сам и уметь донести сотрудникам разницу между проектами, комплексными проектами и программами для создания эффективных управленческих процедур. Понимание логики управления портфелем проектов - ключевой фактор высокой эффективности проектного офиса, поскольку закладывает основу достижения компанией стратегических целей»
			</div>
		</div>
	</div>
<? } ?>

<? if($course == "3_1"){?>
	<div id="chisel">
		<div class="chisel-top">
			<img src="img/type-curses/smirnov.png" alt="Иван Смирнов" />
		</div>
		<div class="chisel-middle">
			<div class="caption">Иван Смирнов, PMP</div>
			<span>Директор Практики управления проектами</span>
		</div>
		<div class="arrows">
			<div class="left-arrow"><a onclick = "fade_chisel('ch_10', 'ch_9');"><img src="img/type-curses/left.png" /></a></div>
			<div class="right-arrow"><a onclick = "fade_chisel('ch_10', 'ch_11');"><img src="img/type-curses/right.png" /></a></div>
		</div>
		<div class="chisel-bottom">
			<div class="caption">
				«В строительных проектах крайне важно контролировать критический путь и технологические границы, грамотно управлять подрядчиком на основании данных из календарно-сетевой модели. Квалифицированный руководитель проекта обязан знать и использовать все возможности MS Project в своей проектной деятельности»
			</div>
		</div>
	</div>
<? } ?>
<? if($course == "3_2"){?>
	<div id="chisel">
		<div class="chisel-top">
			<img src="img/type-curses/lavrentiev.png" alt="Павел Лаврентьев" />
		</div>
		<div class="chisel-middle">
			<div class="caption">Павел Лаврентьев, PME</div>
			<span>Директор Практики управления проектами</span>
		</div>
		<div class="arrows">
			<div class="left-arrow"><a onclick = "fade_chisel('ch_11', 'ch_10');"><img src="img/type-curses/left.png" /></a></div>
			<div class="right-arrow"><a onclick = "fade_chisel('ch_11', 'ch_12');"><img src="img/type-curses/right.png" /></a></div>
		</div>
		<div class="chisel-bottom">
			<div class="caption">
				«По нашему опыту, именно в сфере IT наиболее часто складываются ситуации, при которых руководители проекта, чрезмерно углубляясь в детали предметной области, теряют общую картину происходящего в проекте. В результате проекты терпят неудачу. Мы понимаем, как избежать подобных ошибок, и готовы поделиться нашими знаниями»
			</div>
		</div>
	</div>
<? } ?>
<? if($course == "3_3"){?>
	<div id="chisel">
		<div class="chisel-top">
			<img src="img/type-curses/cheremisin.png" alt="Роман Черемисин" />
		</div>
		<div class="chisel-middle">
			<div class="caption">Роман Черемисин, PMSE, РМЕ</div>
			<span>Руководитель отдела строительных проектов</span>
		</div>
		<div class="arrows">
			<div class="left-arrow"><a onclick = "fade_chisel('ch_9', 'ch_8');"><img src="img/type-curses/left.png" /></a></div>
			<div class="right-arrow"><a onclick = "fade_chisel('ch_9', 'ch_10');"><img src="img/type-curses/right.png" /></a></div>
		</div>
		<div class="chisel-bottom">
			<div class="caption">
				«Я уже почти 10 лет занимаюсь управлением проектами и за это время ни разу не усомнился в полезности функции планирования. В рамках трека вы узнаете не только о том, на какие кнопки в программном обеспечении нужно нажимать, но и научитесь решать возникающие организационные вопросы на основе нашего практического опыта в проектах»
			</div>
		</div>
	</div>
<? } ?>

<? if($course == "4_1"){?>
	<div id="chisel">
		<div class="chisel-top">
			<img src="img/type-curses/smirnov.png" alt="Иван Смирнов" />
		</div>
		<div class="chisel-middle">
			<div class="caption">Иван Смирнов, PMP</div>
			<span>Директор Практики управления проектами</span>
		</div>
		<div class="arrows">
			<div class="left-arrow"><a onclick = "fade_chisel('ch_12', 'ch_11');"><img src="img/type-curses/left.png" /></a></div>
			<div class="right-arrow"><a onclick = "fade_chisel('ch_12', 'ch_13');"><img src="img/type-curses/right.png" /></a></div>
		</div>
		<div class="chisel-bottom">
			<div class="caption">
				«Успех проекта напрямую зависит не только от проектной команды, но и от вовлеченности руководства и его понимания происходящих в проекте процессов»
			</div>
		</div>
	</div>
<? } ?>
<? if($course == "4_2"){?>
	<div id="chisel">
		<div class="chisel-top">
			<img src="img/type-curses/chemisova.png" alt="Анастасия Чемисова" />
		</div>
		<div class="chisel-middle">
			<div class="caption">Анастасия Чемисова</div>
			<span>Директор по обучению</span>
		</div>
		<div class="arrows">
			<div class="left-arrow"><a onclick = "fade_chisel('ch_13', 'ch_12');"><img src="img/type-curses/left.png" /></a></div>
			<div class="right-arrow"><a onclick = "fade_chisel('ch_13', 'ch_1');"><img src="img/type-curses/right.png" /></a></div>
		</div>
		<div class="chisel-bottom">
			<div class="caption">
				 «Вы организуете бизнес, планируете свадьбу или нестандартное путешествие? Скорость изменений в современном мире заставляет практически при любой активности работать в проектном режиме – формировать команду, распределять бюджет, закладывать сроки, ставить измеримые цели и достигать их. Трек дает возможность погрузиться в атмосферу реального проекта, где в игровом формате вы получите знания и навыки, необходимые для успешного управления проектом»
			</div>
		</div>
	</div>
<? } ?>
