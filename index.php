<!-- Eseguire poi degli output istanziando oggetti delle varie classi. -->

<?php
include_once __DIR__ . '/classes/Jacket.php';
include_once __DIR__ . '/classes/Shirt.php';

$jacket = new Jacket('giacca', 'giacca di pelle', 450, 'giacca estiva', 'pelle');
$shirt = new Shirt('camicia', 'camicia elegante', 170, 'Ralph Lauren', 38, 'bianco');

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catalogo</title>
  </head>
  <body>
    <main>
      <div>
        <h4>Sconti fino al 30%</h4>
        <ul>
          <li>Nome: <?php echo $jacket->name; ?>
          </li>
          <li>Descrizione: <?php echo $jacket->description; ?>
          </li>
          <li>Tipologia: <?php echo $jacket->type; ?>
          </li>
          <li>Materiale: <?php echo $jacket->material; ?>
          </li>
          <li>Prezzo: € <?php echo $jacket->price; ?>
          </li>
          <li>Prezzo scontato: €
          <?php echo $jacket->getDiscount(30); ?>
          </li>
        </ul>
      </div>
      <div>
        <h4>Sconti fino al 20%</h4>
        <ul>
          <li>Nome: <?php echo $shirt->name; ?>
          </li>
          <li>Descrizione: <?php echo $shirt->description; ?>
          </li>
          <li>Marca: <?php echo $shirt->brand; ?>
          </li>
          <li>Taglia: <?php echo $shirt->size; ?>
          </li>
          <li>Prezzo: € <?php echo $shirt->price; ?>
          </li>
          <li>Prezzo scontato: €
           <?php echo $shirt->getDiscount(20); ?>
          </li>
        </ul>
      </div>
    </main>
  </body>
</html>
