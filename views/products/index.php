<div class="row">
<?php 
foreach($products as $product) { 
?>
	<div class="col-md-4">
		<div class="card">
			<div class="view overlay">
				<img src="https://mdbootstrap.com/img/Photos/Others/images/43.jpg" class="img-fluid" alt="">
				<a data-toggle="modal" data-target="#myModal<?php echo $product->getID();?>">
					<div class="mask rgba-white-slight"></div>
				</a>
			</div>
			<div class="card-body">
				<h4 class="card-title"><?php echo $product->getName();?></h4>
				<p class ="card-text">Preis: <?php echo $product->getPrice();?> Euro</p>
				
				<a href="?controller=services&action=addToWarenkorb&ID_Produkt=<?php echo $product->getID(); ?>&Menge=1" class="btn btn-primary" role="button" >Buy</a>
				<button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal<?php echo $product->getID();?>">
					Details
				</button>
			</div>
		</div>
	</div>
	
<?php	
}	
?>
</div> 	
<?php 
foreach($products as $product) { 
?>	
	<div class="modal fade" id="myModal<?php echo $product->getID();?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
			  <div class="modal-header">
				<h4 class="modal-title" id="myModalLabel"><?php echo $product->getName(); ?></h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				
			  </div>
			  <div class="modal-body">
				<?php echo $product->getDescription(); ?><br>
				Hersteller: <?php echo $product->getManufactor();?><br>
				Kategorie: <?php echo $product->getCategory();?>
			
			  </div>
			  <div class="modal-footer">
				<b>Preis: <?php echo $product->getPrice(); ?></b>
				<a href="?controller=services&action=addToWarenkorb&ID_Produkt=<?php echo $product->getID(); ?>&Menge=1" class="btn btn-primary" role="button" >Buy</a>
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			  </div>
			</div>
		</div>
	</div>
	
	
	
	
	
<?php	
}	
?> 
