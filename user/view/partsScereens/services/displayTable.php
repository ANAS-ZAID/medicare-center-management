<table>
    <thead>
        <div>
            <th><?php echo translate("service") ?></th>
            <th> <?php echo translate("discription") ?></th>
            <th> <?php echo translate("register") ?></th>
    </thead>
    <tbody>
        <?php foreach ($allServices as $service): ?>
            <tr>
                <td><?php echo $service->service ?> </td>
                <td> <?php echo words($service->discription,10)?></td>
                <td>
                <a href='<?php echo $servicesScereens."?page=update&&id=$service->id"?>'><i class='fa fa-edit fa-fw'> </i></a>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
    </table>