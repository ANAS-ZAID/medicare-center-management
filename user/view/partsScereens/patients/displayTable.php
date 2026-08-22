<table>
    <thead>
        <div>
            <th><?php echo translate("name") ?></th>
            <th> <?php echo translate("phoneNumber") ?></th>
            <th> <?php echo translate("register") ?></th>
    </thead>
    <tbody>
        <?php foreach ($allPatients as $patient): ?>
            <tr>
                <td><?php echo $patient->name ?> </td>
                <td> <?php echo $patient->phone ?></td>
                <td>
                <a href='<?php echo $patientsScereens."?page=update&&id=$patient->id"?>'><i class='fa fa-edit fa-fw'> </i></a>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
    </table>