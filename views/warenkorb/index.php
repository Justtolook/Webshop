<h1 class="title">Warenkorb</h1>


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
            <th></th>
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
            <td>
                <?php echo $product->getQuantity(); ?>
                <button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal<?php echo $product->getID() ?>">
                    Ändern
                </button> 
            </td>
            <td><?php echo $product->getPrice(); ?></td>
            <td><a href="?controller=warenkorb&action=produktEntfernen&id=<?php echo $product->getID() ?>" class="btn btn-danger">X</a>
        </tr>
        <?php } ?>
    </tbody>
    <!--Table body-->

</table>
<!--Table-->
<a href="?controller=warenkorb&action=kasse" class="btn btn-success <?php if(count($warenkorb) == 0) echo "disabled" ?>">Zur Kasse</a>

<?php foreach($warenkorb as $product) { ?>
    <div class="modal fade" id="myModal<?php echo $product->getID();?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
			  <div class="modal-header">
				<h4 class="modal-title" id="myModalLabel"><?php echo $product->getName(); ?> - Menge ändern</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				
			  </div>
			  <div class="modal-body">
				<form method="POST" action="?controller=warenkorb&action=changeQuantity&id=<?php echo $product->getID()?>">
                    <input type="number" name="quantity" min="1" max="20" value="<?php echo $product->getQuantity()?>">
                        <?php $product->getQuantity()?>
                    </input>
                    <button type="submit" class="btn btn-primary">Ändern</button>
                </form>
			
			  </div>
			  <div class="modal-footer">
				<b>Stückpreis: <?php echo $product->getPrice(); ?></b>
				
				<button type="button" class="btn btn-mdb" data-dismiss="modal">Close</button>
			  </div>
			</div>
		</div>
    </div>
<?php } ?>