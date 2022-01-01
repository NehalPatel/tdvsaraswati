<?php
$cnt=1; foreach($hits as $a) { ?>
    <tr id="row">
        <td><?php echo $cnt++; ?></td>
        <td><?php echo $a['ip_address'];  ?></td>
        <td><?php echo $a['country'];  ?></td>
        <td><?php echo date('d M,Y',strtotime($a['date']))." &nbsp;"; echo date('h:i A',strtotime($a['time']));  ?></td>
    </tr>
<?php } ?>