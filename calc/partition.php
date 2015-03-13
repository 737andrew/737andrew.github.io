---
layout: page_2
title: "Расчет расхода и стоимости перегородок"
title_name: "Расчет расхода и стоимости перегородок"
description: "Расчет расхода и стоимости перегородок"
time_publish: "12-04-2010"
---
{% include JB/setup %}
<img src="/calc/img/partition.jpg" style="float:right; margin:10px">
Используется в качестве внутренней ограждающей конструкции.Основное применение жилые помещения с небольшой высотой минимальными требованиями по пожарной безопасности и звукоизоляции (квартира, дом, дача).  Расчет перегородки с однослойной обшивкойДля промышленных объектов применяеться двух- трех- слойная обшивка гипсокартона.

Для расчета расхода и стоимости перегородки с однослойной обшивкой гипсокартона введите ее параметры :<br><br>

<form action="<?php $_SERVER['../PHP_SELF']; ?>" method="post" name="form" class="form-horizontal">
  <?php include("material.php"); ?>
  <div class="form-group">
    <label for="td5" class="col-sm-2 control-label">Длина</label>
    <div class="col-sm-2">
      <input type="text" class="form-control" id="td5" name="lang" placeholder="Длина м;">
    </div>
  </div>
  <div class="form-group">
    <label for="td5" class="col-sm-2 control-label">Ширина</label>
    <div class="col-sm-2">
      <input type="text" class="form-control" id="td5" name="wight"placeholder="Ширина м">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Расчитать</button>
    </div>
  </div>



  <div class="table-responsive">
   <table class="table table-striped table-bordered table-hover">

<tr>
		<td >1</td>
          <td >Лист гипсокартонный КНАУФ-ГКЛ m2</td>
          <td >0</td>
          <td >0&nbsp;у.е.</td>          
        </tr>
        <tr>
		<td>2</td>
          <td>Профиль направляющий UW 75/40 м.п.</td>
          <td>0</td>
          <td>0&nbsp;у.е.</td>        
        </tr>
        <tr>
          <td>3</td>
          <td>Профиль стоечный CW 75/50 м.п</td>
          <td>0</td>
          <td>0&nbsp;у.е.</td>
        </tr>
        <tr>
          <td>4</td>
          <td>Шуруп 3.5x25 ТN25 шт.</td>
          <td>0</td>
          <td>0&nbsp;у.е.</td>
        </tr>
        <tr>
          <td>5</td>
          <td>Лента армирующая м.п.</td>
          <td>0</td>
          <td>0&nbsp;у.е.</td>
        </tr>
        <tr>
          <td>6</td>
          <td>Шпаклевка Фугенфюллер кг.</td>
          <td>0</td>
          <td>0&nbsp;у.е.</td>
        </tr>
        <tr>
          <td>7</td>
          <td>Дюбель пластиковый 6/40	шт.</td>
          <td>0</td>
          <td>0&nbsp;у.е.</td>
        </tr>
        <tr>
          <td>8</td>
          <td>Лента уплотнительнная </td>
          <td>0</td>
          <td>0&nbsp;у.е.</td>
        </tr>
        <tr>
          <td>9</td>
          <td>Шуруп 3.5x9 LN 9 шт.</td>
          <td>0</td>
          <td>0&nbsp;у.е.</td>
        </tr>
        <tr>
          <td>10</td>
          <td>Минеральная вата м2</td>
          <td>0</td>
          <td>0&nbsp;у.е.</td>
        </tr>

				        <tr>
          <td>&nbsp;</td>
          <td>ИТОГО</td>
          <td>&nbsp;</td>
          <td>0&nbsp;у.е.</td>
        </tr>
				        <tr>
          <td>&nbsp;</td>
          <td>возможные замены</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>		        <tr>
          <td>&nbsp;</td>
          <td>Профиль стоечный CW 50/50 м.п</td>
          <td>0</td>
          <td>0&nbsp;у.е.</td>
        </tr>
		        <tr>
          <td>&nbsp;</td>
          <td>Профиль направляющий UW 50/40 м.п.</td>
          <td>0</td>
          <td>0&nbsp;у.е.</td>
        </tr>
						        <tr>
          <td>&nbsp;</td>
          <td>Профиль стоечный CW 100/50 м.п</td>
          <td>0</td>
          <td>0&nbsp;у.е.</td>
        </tr>
				        <tr>
          <td>&nbsp;</td>
          <td>Профиль направляющий UW 100/40 м.п.</td>
          <td>0</td>
          <td>0&nbsp;у.е.</td>
        </tr>
</table>
</div>
</form>
    <div>
        Также Вы можете произвести расчет:<br>
       <a href="/calc/ceiling_2.php">- потолоков c двухуровневым каркасом</a><br>
       <a href="/calc/wall.php">- стены</a><br>
       <a href="/calc/index.php">- потолоков одноуровневым каркасом</a><br>
           <br>
        *Все цены указаны в ознокомительных целях.Это средняя цена по Одессе в марте 2010г.
    </div>