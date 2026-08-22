<table>
    <thead>
        <div>
            <th><?php echo translate("name") ?></th>
            <th> <?php echo translate("email") ?></th>
            <th> <?php echo translate("register") ?></th>
    </thead>
    <tbody>
        <?php foreach ($allUsers as $user): ?>
            <tr>
                <td><?php echo $user->name ?> </td>
                <td> <?php echo $user->email ?></td>
                <td>
                <a href='<?php echo $usersScereens."?page=update&&id=$user->id"?>'><i class='fa fa-edit fa-fw'> </i></a>
                </td>
            </tr>;
        <?php endforeach ?>
    </tbody>
    </table>