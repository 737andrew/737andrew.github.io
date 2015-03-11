---
layout: page_2
title: "Расчет расхода и стоимости потолка с одноуровневым каркасом"
description: "Расчет расхода и стоимости потолка с одноуровневым каркасом"
---
{% include JB/setup %}

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
		<td>1</td>
          <td><?php echo $gips ?></td>
          <td><?php echo $wgips ?></td>
          <td><?php echo $ygips ?>&nbsp;у.е.</td>          
        </tr>
        <tr>
		<td>2</td>
          <td><?php echo $cd ?></td>
          <td><?php echo $wcd ?></td>
          <td><?php echo $ycd ?>&nbsp;у.е.</td>        
        </tr>
        <tr>
          <td>3</td>
          <td><?php echo $ud ?></td>
          <td><?php echo $wud ?></td>
          <td><?php echo $yud ?>&nbsp;у.е.</td>
        </tr>
        <tr>
          <td>4</td>
          <td><?php echo $ccd ?></td>
          <td><?php echo $wccd ?></td>
          <td><?php echo $yccd ?>&nbsp;у.е.</td>
        </tr>
        <tr>
          <td>5</td>
          <td><?php echo $crab ?></td>
          <td><?php echo $wcrab ?></td>
          <td><?php echo $ycrab ?>&nbsp;у.е.</td>
        </tr>
        <tr>
          <td>6а</td>
          <td><?php echo $pod  ?></td>
          <td><?php echo $wpod ?></td>
          <td><?php echo $ypod ?>&nbsp;у.е.</td>
        </tr>
        <tr>
          <td>6б</td>
          <td><?php echo $prov ?></td>
          <td><?php echo $wprov ?></td>
          <td><?php echo $yprov ?>&nbsp;у.е.</td>
        </tr>
        <tr>
          <td>7</td>
          <td><?php echo $tn ?> </td>
          <td><?php echo  $wtn?></td>
          <td><?php echo $ytn ?>&nbsp;у.е.</td>
        </tr>
        <tr>
          <td>8</td>
          <td><?php echo $tdn ?></td>
          <td><?php echo $wtdn ?></td>
          <td><?php echo $ytdn ?>&nbsp;у.е.</td>
        </tr>
        <tr>
          <td>9</td>
          <td><?php echo $dub ?></td>
          <td><?php echo $wdub ?></td>
          <td><?php echo $ydub ?>&nbsp;у.е.</td>
        </tr>
		        <tr>
          <td>10</td>
          <td><?php echo $len ?></td>
          <td><?php echo $wlen ?></td>
          <td><?php echo $ylen ?>&nbsp;у.е.</td>
        </tr>
		        <tr>
          <td>11</td>
          <td><?php echo $fug ?></td>
          <td><?php echo $wfug ?></td>
          <td><?php echo $yfug ?>&nbsp;у.е.</td>
        </tr>
						        <tr>
          <td>&nbsp;</td>
          <td><?php echo $ln9 ?></td>
          <td><?php echo $wln9 ?></td>
          <td><?php echo $yln9 ?>&nbsp;у.е.</td>
        </tr>
				        <tr>
          <td>&nbsp;</td>
          <td>ИТОГО</td>
          <td>&nbsp;</td>
          <td><?php echo $sum_1 ?>&nbsp;у.е.</td>
        </tr>
				        <tr>
          <td>&nbsp;</td>
          <td>возможные замены</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
				        <tr>
          <td>6в</td>
          <td><?php echo $uho ?></td>
          <td><?php echo $wuho ?></td>
          <td><?php echo $yuho ?>&nbsp;у.е.</td>
        </tr>
      
	</table>
</div>
</form>