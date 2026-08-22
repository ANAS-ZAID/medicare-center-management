
<table>
    <!-- <h4>// echo translate("reservations")</h4> -->
    <thead>
       <div>
       <th><?php echo translate("patient") ?></th>
        <th> <?php echo translate("doctor") ?></th>
        <th> <?php echo translate("status") ?></th>
        <th> <?php echo translate("entryDate") ?></th>
        <th colspan='2'> <?php echo translate("date") ?></th>
       </div>
        <!-- <th> <?php ///echo translate("users") ?></th> -->
    </thead>
    <tbody>
        <?php foreach ($allReservations as $reservation) {
           $request=selectFromTable("patients", where: "id=?", whereValues: [$reservation->patientId], typeReturn: "one");
            $patientName =$request['status']? $request['data']->name:"";
          $request=selectFromTable("employees", where: "id=?", whereValues: [$reservation->doctorId], typeReturn: "one");
            $doctorName = $request['status']? $request['data']->name:"";
            $button= !isset($displayButton)?
                      "<td > 
                            <a href='?page=delete&&id= $reservation->id'><i class='fa fa-trash fa-fw'> </i></a>   
                            <a href='?page=update&&id= $reservation->id'><i class='fa fa-edit fa-fw'> </i></a>
                       </td>":"";     

            echo "<tr>" .

                "<td>" . $patientName . "</td>" .
                "<td>" . $doctorName . "</td>" .
                "<td>" . $reservation->status . "</td>" .
                "<td>" . $reservation->createdAt . "</td>" .
                "<td>" . $reservation->date . "</td>
                $button
                </tr>";

        } ?>
    </tbody>
</table>