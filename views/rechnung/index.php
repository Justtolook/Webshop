


<!--Table-->
<table class="table table-hover">

    <!--Table head-->
    <thead>
        <tr>
            <th>Rechnungsnummer</th>
            <th>Datum</th>
            <th>Uhrzeit</th>
            <th>Gesamtpreis</th>
        </tr>
    </thead>
    <!--Table head-->

    <!--Table body-->
    <tbody>
        <?php foreach($rechnungen as $rechnung) { ?>
        <tr>
            <th scope="row"><?php echo $rechnung->getID(); ?></th>
            <td><?php echo $rechnung->getDate(); ?></td>
            <td><?php echo $rechnung->getTime(); ?></td>
            <td><?php echo $rechnung->getValue(); ?> €</td>
        </tr>
        <?php } ?>
    </tbody>
    <!--Table body-->

</table>