<? if($course == "1_1"){?>
	<div id="chisel" class = "ch_1">
			<div class="chisel-top">
				<img src="img/type-curses/baranov.png" alt="�������� �������" />
			</div>
			<div class="chisel-middle">
				<div class="caption">�������� �������, PMP, PME, MCTS</div>
				<span>�������� �������� ���������� ���������</span>
			</div>
			<div class="arrows">
				<div class="left-arrow"><a onclick = "fade_chisel('ch_1', 'ch_2');"><img src="img/type-curses/left.png" /></a></div>
				<div class="right-arrow"><a onclick = "fade_chisel('ch_1', 'ch_2');"><img src="img/type-curses/right.png" /></a></div>
			</div>
			<div class="chisel-bottom">
				<div class="caption">
					 �� ������� ���� ������� � �� � ���� ��������������, ����������� ��� ��������� ������. ��� ���� �������� ����� �������, ��� �� 2,5 ��� �� ��������� ����������� �������� ��� ���� �������������� ������ � ������. ���������� �� -������� ����������
				</div>
			</div>
	</div>
	<div id="chisel" class = "ch_2">
		<div class="chisel-top">
			<img src="img/type-curses/kochetov.png" alt="��������� �������" />
		</div>
		<div class="chisel-middle">
			<div class="caption">��������� �������, PMP, PME</div>
			<span>����������� ������������ ���������</span>
		</div>
		<div class="arrows">
			<div class="left-arrow"><a onclick = "fade_chisel('ch_2', 'ch_1');"><img src="img/type-curses/left.png" /></a></div>
			<div class="right-arrow"><a onclick = "fade_chisel('ch_2', 'ch_1');"><img src="img/type-curses/right.png" /></a></div>
		</div>
		<div class="chisel-bottom">
			<div class="caption">
				�������� �������� � ������������ ������, ��� ��������� �� ��������� (� ����� ������ ������������ �������) ������ �����, ����� � ����� ��� ���� � ������� � ������������� ����������� �����, ������ ���������� � �����������, ������������ ������ �� ���������� ������������, ����������� � �������������� ����������� ����������. ����� ������� �������� � ������� �������� �������������. ��� ������������ ������������ ��������, � ����������� �������� ���� �������������� ��� ����������� ��������� �������
			</div>
		</div>
	</div>
	
	<script>
		//����� ������������
		function fade_chisel(var_out, var_in){$('.' + var_out).fadeOut(100);$('.' + var_in).fadeIn(100);}
		$('.ch_2').hide();
	</script>	
		
<? } ?>
<? if($course == "1_2"){?>
	<div id="chisel">
		<div class="chisel-top">
			<img src="img/type-curses/cheremisin.png" alt="����� ���������" />
		</div>
		<div class="chisel-middle">
			<div class="caption">����� ���������, PMSE, ���</div>
			<span>������������ ������ ������������ ��������</span>
		</div>
		<div class="arrows">
			<div class="left-arrow"><a onclick = "fade_chisel('ch_3', 'ch_2');"><img src="img/type-curses/left.png" /></a></div>
			<div class="right-arrow"><a onclick = "fade_chisel('ch_3', 'ch_4');"><img src="img/type-curses/right.png" /></a></div>
		</div>
		<div class="chisel-bottom">
			<div class="caption">
				�� ��� ����� 10 ��� ��������� ����������� ��������� � �� ��� ����� �� ���� �� ��������� � ���������� ������� ������������. � ������ ����� �� ������� �� ������ � ���, �� ����� ������ � ����������� ����������� ����� ��������, �� � ��������� ������ ����������� ��������������� ������� �� ������ ������ ������������� ����� � ���������
			</div>
		</div>
	</div>
<? } ?>
<? if($course == "1_3"){?>
	<div id="chisel">
		<div class="chisel-top">
			<img src="img/type-curses/homutinnikova.png" alt="������ �������������" />
		</div>
		<div class="chisel-middle">
			<div class="caption">������ �������������, PMP, PME, CPMA</div>
			<span>������-������, ���������</span>
		</div>
		<div class="arrows">
			<div class="left-arrow"><a onclick = "fade_chisel('ch_4', 'ch_3');"><img src="img/type-curses/left.png" /></a></div>
			<div class="right-arrow"><a onclick = "fade_chisel('ch_4', 'ch_5');"><img src="img/type-curses/right.png" /></a></div>
		</div>
		<div class="chisel-bottom">
			<div class="caption">
				���� ���������� ��������, ������ ������������ ��������� ��������� �� ���� � �� �� ������. ����� ����� ��������, ��������� ����������� � ��������������� � ���������� ����, ������ �����, ����� �������� �������� ��������� ���������� �������� 
			</div>
		</div>
	</div>	
<? } ?>
<? if($course == "1_4"){?>
	<div id="chisel">
		<div class="chisel-top">
			<img src="img/type-curses/baranov.png" alt="�������� �������" />
		</div>
		<div class="chisel-middle">
			<div class="caption">�������� �������, PMP, PME, MCTS</div>
			<span>�������� �������� ���������� ���������</span>
		</div>
		<div class="arrows">
			<div class="left-arrow"><a onclick = "fade_chisel('ch_5', 'ch_4');"><img src="img/type-curses/left.png" /></a></div>
			<div class="right-arrow"><a onclick = "fade_chisel('ch_5', 'ch_6');"><img src="img/type-curses/right.png" /></a></div>
		</div>
		<div class="chisel-bottom">
			<div class="caption">
				������������� � ������������� �������������� ������� � ����� ������ ������ �������. ��� ���� ����� ������������� ������ ����������� �������� ��������� ����� ��� ���������� ����, ��� � ������������� ��������
			</div>
		</div>
	</div>
<? } ?>
<? if($course == "1_5"){?>
	<div id="chisel">
		<div class="chisel-top">
			<img src="img/type-curses/viktorova.png" alt="����� ���������" />
		</div>
		<div class="chisel-middle">
			<div class="caption">����� ���������</div>
			<span>�������� �� ������������</span>
		</div>
		<div class="arrows">
			<div class="left-arrow"><a onclick = "fade_chisel('ch_6', 'ch_5');"><img src="img/type-curses/left.png" /></a></div>
			<div class="right-arrow"><a onclick = "fade_chisel('ch_6', 'ch_7');"><img src="img/type-curses/right.png" /></a></div>
		</div>
		<div class="chisel-bottom">
			<div class="caption">
				���� �������� ���������� ������� �� ������ ������������ ��������� ����������� � ������� ���������� ���������. ������ �������� �������, ����� ���� �����������, ������ �������� ����������� ������� ������ � ������� � ��������� ����������. � ������� �� ������ ���� ������ �������
			</div>
		</div>
	</div>
<? } ?>

<? if($course == "2_1"){?>
	<div id="chisel">
		<div class="chisel-top">
			<img src="img/type-curses/kochetov.png" alt="��������� �������" />
		</div>
		<div class="chisel-middle">
			<div class="caption">��������� �������, PMP, PME</div>
			<span>����������� ������������ ���������</span>
		</div>
		<div class="arrows">
			<div class="left-arrow"><a onclick = "fade_chisel('ch_7', 'ch_6');"><img src="img/type-curses/left.png" /></a></div>
			<div class="right-arrow"><a onclick = "fade_chisel('ch_7', 'ch_8');"><img src="img/type-curses/right.png" /></a></div>
		</div>
		<div class="chisel-bottom">
			<div class="caption">
				����������� ��������� � ��� � ������ ������� ����������, ���������� �� ����������� �����. ������ �������� � ��������, ��������� �����������, ��� ������������ ���������� �� ���� ��������� ������ ��������. ���� ��������-������� �������� ��������������� ������ ������������� � ������ ����� ������������� ��������. ���� ����� ���������, ����� ���������������� � �� ��� ������ �������������
			</div>
		</div>
	</div>
<? } ?>
<? if($course == "2_2"){?>
	<div id="chisel">
		<div class="chisel-top">
			<img src="img/type-curses/homutinnikova.png" alt="������ �������������" />
		</div>
		<div class="chisel-middle">
			<div class="caption">������ �������������, PMP, PME, CPMA</div>
			<span>������-������, ���������</span>
		</div>
		<div class="arrows">
			<div class="left-arrow"><a onclick = "fade_chisel('ch_8', 'ch_7');"><img src="img/type-curses/left.png" /></a></div>
			<div class="right-arrow"><a onclick = "fade_chisel('ch_8', 'ch_9');"><img src="img/type-curses/right.png" /></a></div>
		</div>
		<div class="chisel-bottom">
			<div class="caption">
				����������� ��������� ������ - ������ ���������� ���������. ����������� ������������ �������� ��������� ���������� ���������� ����������, ��������� � ���������� ������������� ������� ���������� ���������, ������ ������������ �������� ���������� ����� � ��������. ������������ ������ ����� ��� � ����� ������� ����������� ������� ����� ���������, ������������ ��������� � ����������� ��� �������� ����������� �������������� ��������. ��������� ������ ���������� ��������� �������� - �������� ������ ������� ������������� ���������� �����, ��������� ����������� ������ ���������� ��������� �������������� �����
			</div>
		</div>
	</div>
<? } ?>

<? if($course == "3_1"){?>
	<div id="chisel">
		<div class="chisel-top">
			<img src="img/type-curses/smirnov.png" alt="���� �������" />
		</div>
		<div class="chisel-middle">
			<div class="caption">���� �������, PMP</div>
			<span>�������� �������� ���������� ���������</span>
		</div>
		<div class="arrows">
			<div class="left-arrow"><a onclick = "fade_chisel('ch_10', 'ch_9');"><img src="img/type-curses/left.png" /></a></div>
			<div class="right-arrow"><a onclick = "fade_chisel('ch_10', 'ch_11');"><img src="img/type-curses/right.png" /></a></div>
		</div>
		<div class="chisel-bottom">
			<div class="caption">
				�� ������������ �������� ������ ����� �������������� ����������� ���� � ��������������� �������, �������� ��������� ����������� �� ��������� ������ �� ����������-������� ������. ����������������� ������������ ������� ������ ����� � ������������ ��� ����������� MS Project � ����� ��������� ������������
			</div>
		</div>
	</div>
<? } ?>
<? if($course == "3_2"){?>
	<div id="chisel">
		<div class="chisel-top">
			<img src="img/type-curses/lavrentiev.png" alt="����� ����������" />
		</div>
		<div class="chisel-middle">
			<div class="caption">����� ����������, PME</div>
			<span>�������� �������� ���������� ���������</span>
		</div>
		<div class="arrows">
			<div class="left-arrow"><a onclick = "fade_chisel('ch_11', 'ch_10');"><img src="img/type-curses/left.png" /></a></div>
			<div class="right-arrow"><a onclick = "fade_chisel('ch_11', 'ch_12');"><img src="img/type-curses/right.png" /></a></div>
		</div>
		<div class="chisel-bottom">
			<div class="caption">
				��� ������ �����, ������ � ����� IT �������� ����� ������������ ��������, ��� ������� ������������ �������, ��������� ���������� � ������ ���������� �������, ������ ����� ������� ������������� � �������. � ���������� ������� ������ �������. �� ��������, ��� �������� �������� ������, � ������ ���������� ������ ��������
			</div>
		</div>
	</div>
<? } ?>
<? if($course == "3_3"){?>
	<div id="chisel">
		<div class="chisel-top">
			<img src="img/type-curses/cheremisin.png" alt="����� ���������" />
		</div>
		<div class="chisel-middle">
			<div class="caption">����� ���������, PMSE, ���</div>
			<span>������������ ������ ������������ ��������</span>
		</div>
		<div class="arrows">
			<div class="left-arrow"><a onclick = "fade_chisel('ch_9', 'ch_8');"><img src="img/type-curses/left.png" /></a></div>
			<div class="right-arrow"><a onclick = "fade_chisel('ch_9', 'ch_10');"><img src="img/type-curses/right.png" /></a></div>
		</div>
		<div class="chisel-bottom">
			<div class="caption">
				�� ��� ����� 10 ��� ��������� ����������� ��������� � �� ��� ����� �� ���� �� ��������� � ���������� ������� ������������. � ������ ����� �� ������� �� ������ � ���, �� ����� ������ � ����������� ����������� ����� ��������, �� � ��������� ������ ����������� ��������������� ������� �� ������ ������ ������������� ����� � ���������
			</div>
		</div>
	</div>
<? } ?>

<? if($course == "4_1"){?>
	<div id="chisel">
		<div class="chisel-top">
			<img src="img/type-curses/smirnov.png" alt="���� �������" />
		</div>
		<div class="chisel-middle">
			<div class="caption">���� �������, PMP</div>
			<span>�������� �������� ���������� ���������</span>
		</div>
		<div class="arrows">
			<div class="left-arrow"><a onclick = "fade_chisel('ch_12', 'ch_11');"><img src="img/type-curses/left.png" /></a></div>
			<div class="right-arrow"><a onclick = "fade_chisel('ch_12', 'ch_13');"><img src="img/type-curses/right.png" /></a></div>
		</div>
		<div class="chisel-bottom">
			<div class="caption">
				������ ������� �������� ������� �� ������ �� ��������� �������, �� � �� ������������� ����������� � ��� ��������� ������������ � ������� ���������
			</div>
		</div>
	</div>
<? } ?>
<? if($course == "4_2"){?>
	<div id="chisel">
		<div class="chisel-top">
			<img src="img/type-curses/chemisova.png" alt="��������� ��������" />
		</div>
		<div class="chisel-middle">
			<div class="caption">��������� ��������</div>
			<span>�������� �� ��������</span>
		</div>
		<div class="arrows">
			<div class="left-arrow"><a onclick = "fade_chisel('ch_13', 'ch_12');"><img src="img/type-curses/left.png" /></a></div>
			<div class="right-arrow"><a onclick = "fade_chisel('ch_13', 'ch_1');"><img src="img/type-curses/right.png" /></a></div>
		</div>
		<div class="chisel-bottom">
			<div class="caption">
				 ��� ����������� ������, ���������� ������� ��� ������������� �����������? �������� ��������� � ����������� ���� ���������� ����������� ��� ����� ���������� �������� � ��������� ������ � ����������� �������, ������������ ������, ����������� �����, ������� ��������� ���� � ��������� ��. ���� ���� ����������� ����������� � ��������� ��������� �������, ��� � ������� ������� �� �������� ������ � ������, ����������� ��� ��������� ���������� ��������
			</div>
		</div>
	</div>
<? } ?>
