	  <table class="edit_form">
        <tr>
          <td class="edit_form_header">
            <?=$id?>
          </td>
        </tr>
        <tr>
<?if (isset($startitem)) :?>
<?$x=0; foreach($startitem as $combo=>$v):?>
          <td class="edit_form_content">
          <form name="startitemedit" method="post" action="index.php?editor=server&id=<?=$v['id']?>&race=<?=$v['race']?>&class=<?=$v['class']?>&deityid=<?=$v['deityid']?>&zoneid=<?=$v['zoneid']?>&itemid=<?=$v['itemid']?>&item_charges=<?=$v['item_charges']?>&gm=<?=$v['gm']?>&slot=<?=$v['slot']?>&action=59">
	     
		 <strong>Race:</strong> <br>
            <input class="indented" type="text" size="5" name="race" value="<?=$v['race']?>"><br><br>
          <strong>Class:</strong> <br>
            <input class="indented" type="text" size="5" name="class" value="<?=$v['class']?>"><br><br>   
		 <strong>Deity:</strong> <br>
            <input class="indented" type="text" size="5" name="deityid" value="<?=$v['deityid']?>"><br><br>	
		 <strong>Start Zone:</strong> <br>
            <input class="indented" type="text" size="5" name="zoneid" value="<?=$v['zoneid']?>"><br><br>
		 <strong>Item:</strong> <br>
            <input class="indented" type="text" size="5" name="itemid" value="<?=$v['itemid']?>"><br><br>
		 <strong>Item Charges:</strong> <br>
            <input class="indented" type="text" size="5" name="item_charges" value="<?=$v['item_charges']?>"><br><br>	
		<strong>GM:</strong> <br>
            <input class="indented" type="text" size="5" name="gm" value="<?=$v['gm']?>"><br><br>
		<strong>Slot:</strong> <br>
            <input class="indented" type="text" size="5" name="slot" value="<?=$v['slot']?>"><br><br>
			
		<center>
            <input type="submit" name="submit" value="Submit Changes">
        </center>
          </form>
          </td>
<?$x++; endforeach;?>
<?endif;?>
        </tr>
      </table>
