<table>
    <thead>
        <div>
            <th><?php echo translate("name") ?></th>
            <th> <?php echo translate("email") ?></th>
            <th> <?php echo translate("register") ?></th>
    </thead>
    <tbody>
        <?php foreach ($allAdmins as $admin): ?>
            <tr>
                <td><?php echo $admin->name ?> </td>
                <td> <?php echo $admin->email ?></td>
                <td>
               <a href='<?php echo $adminsScereens."?page=update&&id=$admin->id"?>'><i class='fa fa-edit fa-fw'> </i></a>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
    </table>