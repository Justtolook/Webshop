<!--Table-->
<table class="table table-hover">

    <!--Table head-->
    <thead>
        <tr>
            <th>Hersteller</th>
            <th>Webadresse</th>
            <th>E-Mail Adresse</th>
            <th>Kontakt</th>
        </tr>
    </thead>
    <!--Table head-->

    <!--Table body-->
    <tbody>
        <?php foreach($arrayHersteller as $hersteller) { ?>
        <tr>
            <th scope="row"><?php echo $hersteller->getName(); ?></th>
            <td><a href="http://<?php echo $hersteller->getAdresse(); ?>"><?php echo $hersteller->getAdresse(); ?></a></td>
            <td><?php echo $hersteller->getEmail(); ?></td>
            <td><a href="mailto:<?php echo $hersteller->getEmail()?>"><img src="icon/email.svg" height="36px" width="36px"></a>
        </tr>
        <?php } ?>
    </tbody>
    <!--Table body-->
</table>
