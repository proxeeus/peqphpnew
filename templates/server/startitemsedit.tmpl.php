	<?php
	$it_deities = array(
    0    => "All",
    201  => "Bertoxxulous",
    202  => "Brell Serilis",
    203  => "Cazic Thule",
    204  => "Erollisi Marr",
    205  => "Bristlebane",
    206  => "Innoruuk",
    207  => "Karana",
    208  => "Mithaniel Marr",
    209  => "Prexus",
    210  => "Quellious",
    211  => "Rallos Zek",
    212  => "Rodcet Nife",
    213  => "Solusek Ro",
    214  => "The Tribunal",
    215  => "Tunare",
    216  => "Veeshan",
	396  => "Agnostic"
);
	$zones= array(
	0 => "All",
	1 => "South Qeynos",
	2 => "North Qeynos",
	8 => "North Freeport",
	9 => "West Freeport",
	10 => "East Freeport",
	19 => "Rivervale",
	24 => "Erudin",
	29 => "Halas",
	40 => "Neriak - Foreign Quarter",
	41 => "Neriak - Commons",
	42 => "Neriak - 3rd Gate",
	49 => "Oggok",
	52 => "Grobb",
	54 => "Greater Faydark",
	55 => "Ak'Anon",
	60 => "South Kaladim",
	61 => "Northern Felwithe",
	62 => "Southern Felwithe",
	67 => "North Kaladim",
	75 => "Paineel",
	82 => "Cabilis West",
	106 => "Cabilis East",
);
	
?>
	
	<table class="edit_form">
        <tr>
          <td class="edit_form_header">
            <?=$id?>
			<table width="100%" cellpadding="0" cellspacing="0">
              <tr>
                <td align="left" width="33%">Edit Start Item</td>
              </tr>
            </table>
          </td>
        </tr>
        <tr>
<?if (isset($startitem)) :?>
<?$x=0; foreach($startitem as $combo=>$v):?>
          <td class="edit_form_content">
          <form name="startitemedit" method="post" action="index.php?editor=server&id=<?=$v['id']?>&race=<?=$v['race']?>&class=<?=$v['class']?>&deityid=<?=$v['deityid']?>&zoneid=<?=$v['zoneid']?>&itemid=<?=$v['itemid']?>&item_charges=<?=$v['item_charges']?>&gm=<?=$v['gm']?>&slot=<?=$v['slot']?>&action=59">
			<strong>Race:<br></strong>
             <select name="race" style="width: 265px;">
					<?foreach($races as $key=>$value):?>
						<option value="<?=$key?>"<?echo ($key == $v['race'])? " selected" : "";?>><?=$key?>: <?=$value?></option>
					<?endforeach;?>
			</select><br><br>
			
			
				Class:<br>
             <select name="race" style="width: 265px;">
					<?foreach($classes as $key=>$value):?>
						<option value="<?=$key?>"<?echo ($key == $v['class'])? " selected" : "";?>><?=$key?>: <?=$value?></option>
					<?endforeach;?>
			</select><br><br>
			
            <strong>Deity:<br></strong>
                    <select name="deity" style="width: 265px;">
<?foreach($it_deities as $key=>$value):?>
                      <option value="<?=$key?>"<?echo ($key == $v['deityid'])? " selected" : "";?>><?=$key?>: <?=$value?></option>
<?endforeach;?>
                    </select><br><br>
			
			  <strong>Start Zone:<br></strong>
                    <select name="zone" style="width: 265px;">
<?foreach($zones as $key=>$value):?>
                      <option value="<?=$key?>"<?echo ($key == $v['zoneid'])? " selected" : "";?>><?=$key?>: <?=$value?></option>
<?endforeach;?>
                    </select><br><br>

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
