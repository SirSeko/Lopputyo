
<?php
include_once('nav.php');
include_once('mysql.php');
include_once('tuoteLuokka.php');
$tuotteet = array();
$db = new Tietokanta;
$tuotteet = $db->HaeKomponentit();

?>
<body>

<div class="col-md-2"></div>

<div class="col-md-8">
<h2 class="text-center">Komponentit</h2>
    <div class="row">
        
        <?php foreach($tuotteet as &$tuote) { ?>
        <div class="col-md-3">
            <h4><?= $tuote->getNimi();?></h4>
            <img src="<?= $tuote->getKuva();?>" id="products"/>
            <p class="list-price text-danger"> Hinta <s><?= $tuote->getHinta();?></s></p>
            <p class="price">Nyt vain: <?= $tuote->getAlennus();?></p>
            
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-<?= $tuote->getId();?>">Osta</button>
           
        </div>
    </div>
        <?php } ?>

<footer class="text-center" id="footer">&copy; Copyright 2019-2020 Lyytin verkkokauppa Oy</footer>
</div>

<?php

include 'details-modal-komponentti.php';

?>
</body>
</html>