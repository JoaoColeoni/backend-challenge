
Pedido Criado
<br>
<br>
Cliente: <?php echo $Cliente; ?>
<br>
Pedido: <?php echo $Pedido; ?>
<br>
<br>
<br>
<?php if($Produto != null) { ?>
Produto
<br>
<br>
Name: <?php echo $Produto->name; ?>
<br>
Valor: <?php echo $Produto->price; ?>
<br>
Photo: <?php echo $Produto->photo; ?>
<img src="<?php echo $Produto->photo; ?>" width="500" height="500">
<?php } ?>
