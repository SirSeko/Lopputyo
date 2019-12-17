
<div class="modal fade details-1" id="details-1" tableindex="-1" role="dialog" aria-labelledby="details-1" aria-hidden="true">
<?php
$id = 1;
$db = new Tietokanta;
$tuote = $db->HaeKomponentti($id);



?>
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
             
                <h3 class="modal-title text-center"><?php echo $tuote->getNimi();?></h3>
                <button class="close" type="button" data-dismiss="modal" aria-label="close">
                    <span aria-hidden="true">&times;</span>
                </button>
                
            </div>
      
        <div class="modal-body">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <div class=center-block>
                            <img src="<?= $tuote->getKuva();?>" class="details img-responsive" id="products" />
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <h4>Lisätietoa:</h4>
                        <p><?= $tuote->getTiedot();?></p>
                        <hr />
                        <p>Hinta: <?= $tuote->getAlennus();?></p>
                        <form action="lisaa_ostoskoriin.php" method="post">
                            <div class="form-group">
                                <div class="col-sm-3">
                                    <label for="quantity" id="quantity-label">Määrä: </label>
                                    <input type="text" class="form control" id="quantity" name="quantity" />
                                </div>
                              
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-default" data-dismiss="modal">Sulje</button>
                <button class="btn btn-warning" type="submit"><span class="glyphicon glyphicon-shopping-cart">Lisää ostoskoriin</span></button>
            </div>
        </div>
    </div>
    
</div>


<div class="modal fade details-1" id="details-2" tableindex="-1" role="dialog" aria-labelledby="details-1" aria-hidden="true">
<?php
$id = 2;
$db = new Tietokanta;
$tuote = $db->HaeKomponentti($id);



?>
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
             
                <h3 class="modal-title text-center"><?php echo $tuote->getNimi();?></h3>
                <button class="close" type="button" data-dismiss="modal" aria-label="close">
                    <span aria-hidden="true">&times;</span>
                </button>
                
            </div>
      
        <div class="modal-body">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <div class=center-block>
                            <img src="<?= $tuote->getKuva();?>" class="details img-responsive" id="products" />
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <h4>Lisätietoa:</h4>
                        <p><?= $tuote->getTiedot();?></p>
                        <hr />
                      Hinta:
                        <form action="lisaa_ostoskoriin.php" method="post">
                            <div class="form-group">
                                <div class="col-sm-3">
                                    <label for="quantity" id="quantity-label">Määrä: </label>
                                    <input type="text" class="form control" id="quantity" name="quantity" />
                                </div>
                              
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-default" data-dismiss="modal">Sulje</button>
                <button class="btn btn-warning" type="submit"><span class="glyphicon glyphicon-shopping-cart">Lisää ostoskoriin</span></button>
            </div>
        </div>
    </div>
    
</div>


<div class="modal fade details-1" id="details-3" tableindex="-1" role="dialog" aria-labelledby="details-1" aria-hidden="true">
<?php
$id = 3;
$db = new Tietokanta;
$tuote = $db->HaeKomponentti($id);



?>
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
             
                <h3 class="modal-title text-center"><?php echo $tuote->getNimi();?></h3>
                <button class="close" type="button" data-dismiss="modal" aria-label="close">
                    <span aria-hidden="true">&times;</span>
                </button>
                
            </div>
      
        <div class="modal-body">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <div class=center-block>
                            <img src="<?= $tuote->getKuva();?>" class="details img-responsive" id="products" />
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <h4>Lisätietoa:</h4>
                        <p><?= $tuote->getTiedot();?></p>
                        <hr />
                      Hinta:
                        <form action="lisaa_ostoskoriin.php" method="post">
                            <div class="form-group">
                                <div class="col-sm-3">
                                    <label for="quantity" id="quantity-label">Määrä: </label>
                                    <input type="text" class="form control" id="quantity" name="quantity" />
                                </div>
                              
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-default" data-dismiss="modal">Sulje</button>
                <button class="btn btn-warning" type="submit"><span class="glyphicon glyphicon-shopping-cart">Lisää ostoskoriin</span></button>
            </div>
        </div>
    </div>
    
</div>

<div class="modal fade details-1" id="details-3" tableindex="-1" role="dialog" aria-labelledby="details-1" aria-hidden="true">
<?php
$id = 4;
$db = new Tietokanta;
$tuote = $db->HaeKomponentti($id);



?>
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
             
                <h3 class="modal-title text-center"><?php echo $tuote->getNimi();?></h3>
                <button class="close" type="button" data-dismiss="modal" aria-label="close">
                    <span aria-hidden="true">&times;</span>
                </button>
                
            </div>
      
        <div class="modal-body">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <div class=center-block>
                            <img src="<?= $tuote->getKuva();?>" class="details img-responsive" id="products" />
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <h4>Lisätietoa:</h4>
                        <p><?= $tuote->getTiedot();?></p>
                        <hr />
                      Hinta:
                        <form action="lisaa_ostoskoriin.php" method="post">
                            <div class="form-group">
                                <div class="col-sm-3">
                                    <label for="quantity" id="quantity-label">Määrä: </label>
                                    <input type="text" class="form control" id="quantity" name="quantity" />
                                </div>
                              
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-default" data-dismiss="modal">Sulje</button>
                <button class="btn btn-warning" type="submit"><span class="glyphicon glyphicon-shopping-cart">Lisää ostoskoriin</span></button>
            </div>
        </div>
    </div>
    
</div>

