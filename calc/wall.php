---
layout: page_2
title: "Расчет расхода и стоимости стен"
title_name: "Расчет расхода и стоимости стен"
description: "Расчет расхода и стоимости стен"
time_publish: "12-04-2010"
---
{% include JB/setup %}

<div ><img src="/calc/img/wall_CD.jpg" style="float:right; margin:10px">
<img src="/calc/img/wall_CW.jpg" style="float:left; margin:10px"></div><br><br><br>

<p>Отделка стен гипсокартоном применяется приемущественно при реконструкции, а также для улучшения тепло- и звукоизоляции помещений.Можно использовать как CD профиль, так и UW.Для расчета расхода и стоимости стен на профиль CD введите параметры помещения:</p>
<br><br>

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
          <td>Профиль потолочный CD 60/27 м.п.</td>
          <td>0</td>
          <td>0&nbsp;у.е.</td>        
        </tr>
        <tr>
          <td>3</td>
          <td>Профиль направляющий UD 28/27 м.п.</td>
          <td>0</td>
          <td>0&nbsp;у.е.</td>
        </tr>
        <tr>
          <td>4</td>
          <td>Подвес прямой для СD- профиля 125 мм</td>
          <td>0</td>
          <td>0&nbsp;у.е.</td>
        </tr>
        <tr>
          <td>5</td>
          <td>Лента уплотнительнная</td>
          <td>0</td>
          <td>0&nbsp;у.е.</td>
        </tr>  
		      <tr>
          <td>6</td>
          <td>Дюбель пластиковый 6/40	шт.</td>
          <td>0</td>
          <td>0&nbsp;у.е.</td>
        </tr>
		 <tr>
          <td>7</td>
          <td>Шуруп 3.5x9 LN 9 шт.</td>
          <td>0</td>
          <td>0&nbsp;у.е.</td>
        </tr>
		<tr>
          <td>8</td>
          <td>Шуруп 3.5x25 ТN25 шт. </td>
          <td>0</td>
          <td>0&nbsp;у.е.</td>
        </tr>
		        <tr>
          <td>9</td>
          <td>Лента армирующая м.п.</td>
          <td>0</td>
          <td>0&nbsp;у.е.</td>
        </tr>
		        <tr>
          <td>10</td>
          <td>Шпаклевка Фугенфюллер кг.</td>
          <td>0</td>
          <td>0&nbsp;у.е.</td>
        </tr>
				        <tr>
          <td>11</td>
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
        </tr>
				        <tr>
		       <tr>
          <td>2а</td>
          <td>Профиль стоечный CW 50/50 м.п</td>
          <td>0</td>
          <td>0&nbsp;у.е.</td>
        </tr>
        <tr>
          <td>3б</td>
          <td>Профиль направляющий UW 50/40 м.п.</td>
          <td>0</td>
          <td>0&nbsp;у.е.</td>
        </tr>
        <tr>
        </table>
</div>
</form>
    <div>
        Также Вы можете произвести расчет:<br>
       <a href="/calc/index.php">- потолоков c одноуровневым каркасом</a><br>
       <a href="/calc/ceiling_2.php">- потолоков c двухуровневым каркасом</a><br>
       <a href="/calc/partition.php">- перегородок</a><br>
           <br>
        *Все цены указаны в ознокомительных целях.Это средняя цена по Одессе в марте 2010г.
    </div>