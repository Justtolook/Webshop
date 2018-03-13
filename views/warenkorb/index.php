<p>Hier ist dein Warenkorb:</p>


<!--Table-->
<table class="table table-hover">

    <!--Table head-->
    <thead>
        <tr>
            <th>Artikelnummer</th>
            <th>Produkt</th>
            <th>Hersteller</th>
            <th>Menge</th>
            <th>Preis</th>
        </tr>
    </thead>
    <!--Table head-->

    <!--Table body-->
    <tbody>
        <?php foreach($warenkorb as $product) { ?>
        <tr>
            <th scope="row"><?php echo $product->getID(); ?></th>
            <td><?php echo $product->getName(); ?></td>
            <td><?php echo $product->getManufactor(); ?></td>
            <td><?php echo $product->getQuantity(); //TODO: WARENKORB ?></td>
            <td><?php echo $product->getPrice(); ?></td>
        </tr>
        <?php } ?>
    </tbody>
    <!--Table body-->

</table>
<!--Table-->
<a href="?controller=warenkorb&action=kasse">Zur Kasse</a>