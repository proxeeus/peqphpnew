        <div class="table_container" style="width: 700px;">
          <div class="table_header">
            <table width="100%" cellpadding="0" cellspacing="0">
              <tr>
                <td align="left" width="33%">Start Items Combos</td>
              </tr>
            </table>
          </div>
          <table class="table_content2" width="100%">
<?if (isset($startitemscombolist)) :?>
            <tr>
              <td align="center" width="8%"><strong>Alloc. ID</strong></td>
              <td align="center" width="10%"><strong>Race</strong</td>
              <td align="center" width="15%"><strong>Class</strong></td>
              <td align="center" width="20%"><strong>Deity</strong></td>
              <td align="center" width="22%"><strong>Start Zone</strong></td>
              <td align="center" width="20%"><strong>Item</strong></td>
			  <td align="center" width="20%"><strong>Item Charges</strong></td>
			  <td align="center" width="20%"><strong>GM</strong></td>
			  <td align="center" width="20%"><strong>Slot</strong></td>
            </tr>
<?$x=0; foreach($startitemscombolist as $combo=>$v):?>
            <tr bgcolor="#<? echo ($x % 2 == 0) ? "BBBBBB" : "AAAAAA";?>">
              <td align="center" width="8%"><?=$v['id']?></td>
              <td align="center" width="10%"><?=$races[$v['race']]?> (<?=$v['race']?>)</td>
              <td align="center" width="15%"><?=$classes[$v['class']]?> (<?=$v['class']?>)</td>
              <td align="center" width="20%"><?=$deities[$v['deityid']]?> (<?=$v['deityid']?>)</td>
              <td align="center" width="22%"><?=$zoneids[$v['zoneid']]?> (<?=$v['zoneid']?>)</td>
              <td align="center" width="22%"><?=$itemids[$v['itemid']]?> <span><a href="http://lucy.allakhazam.com/item.html?id=<?=$v['itemid']?>" target="_blank"><?=$v['Name']?></a> (<?=$v['itemid']?>)</span></td>
			  <td align="center" width="22%"><?=$item_charges[$v['item_charges']]?> <?=$v['item_charges']?></td>
			  <td align="center" width="22%"><?=$gm[$v['gm']]?> <?=$v['gm']?></td>
			  <td align="center" width="22%"><?=$slot[$v['slot']]?> <?=$v['slot']?></td>
			  <td align="right"><a href="index.php?editor=server&id=<?=$v['id']?>&race=<?=$v['race']?>&class=<?=$v['class']?>&deityid=<?=$v['deityid']?>&zoneid=<?=$v['zoneid']?>&itemid=<?=$v['itemid']?>&item_charges=<?=$v['item_charges']?>&gm=<?=$v['gm']?>&slot=<?=$v['slot']?>&action=58"<img src="images/edit2.gif" border="0" title="Edit Starting Item">Edit</a></td>
            </tr>
<?$x++; endforeach;?>
<?endif;?>
<?if (!isset($startitemscombolist)):?>
            <tr>
              <td align="left" width="100" style="padding: 10px;">No Starting Items combos</td>
            </tr>
<?endif;?>
          </table>
        </div>
