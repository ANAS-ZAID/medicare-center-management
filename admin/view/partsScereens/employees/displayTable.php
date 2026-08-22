<table>
    <thead>
        <div>
            <th><?php echo translate("name") ?></th>
            <th> <?php echo translate("phoneNumber") ?></th>
            <th> <?php echo translate("register") ?></th>
    </thead>
    <tbody>
        <?php foreach ($allEmployees as $employee): ?>
            <tr>
                <td><?php echo $employee->name ?> </td>
                <td> <?php echo $employee->phone ?></td>
                <td>
                <a href='<?php echo $employeesScereens."?page=update&&id=$employee->id"?>'><i class='fa fa-edit fa-fw'> </i></a>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
    </table>