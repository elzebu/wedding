<?php include('class.wedding.php'); ?>
<?php 
    $root = simplexml_load_file('guest.xml');
    //$guest = $root->xpath("//guest[@code='001']");
    //$root->asXml('guest.xml');
    const FLAG_1 = 1; // 1
    const FLAG_2 = 2; // 2
    const FLAG_3 = 4; // 4
 
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    

    <h1>Liste des invités</h1>
    <div class="table-responsive">
        <table class="table table-striped small">
            <thead>
            <tr>
                <th></th>
                <th>Code</th>
                <th>Nom</th>
                <th>email</th>
                <th>nb adultes</th>
                <th>nb enfants</th>
                <th>Invité à</th>
                <th>Présence</th>
                <th>dort la nuit</th>
                <th>date conf</th>
                <th>Note / remarque</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            <?php $guests = $root->xpath("//guest");
            foreach($guests as $guest) { ?>
                <tr>
                    <th>
                        <a href="#" class="edit">
                           <span class="glyphicon glyphicon-pencil"></span>
                        </a>
                        <a href="#" class="cancel-edit hidden">
                           <span class="glyphicon glyphicon-ban-circle"></span>
                        </a>
                    </th>
                    <td>
                        <span class="code saved-data"><?php echo $guest['code'] ?></span>
                        <input type="hidden" name="code" value="<?php echo $guest['code'] ?>" class="data hidden form-control">
                    </td>
                    <td>
                        <span class="name saved-data"><?php echo $guest->name ?></span>
                        <input type="text" name="name" value="<?php echo $guest->name ?>" class="data hidden form-control">
                    </td>
                    <td>
                        <span class="mail saved-data"><?php echo $guest->mail ?></span>
                        <input type="mail" name="mail" value="<?php echo $guest->mail ?>" class="data hidden form-control">
                    </td>
                    <td>
                        <span class="nb saved-data"><?php echo $guest->nbAdult ?></span>
                        <input type="number" name="nbAdult" size="2" style="width:50px" value="<?php echo $guest->nbAdult ?>" class="data hidden form-control">
                    </td>
                    <td>
                        <span class="nb saved-data"><?php echo $guest->nbChildren ?></span>
                        <input type="number" name="nbChildren" size="2" style="width:50px" value="<?php echo $guest->nbChildren ?>" class="data hidden form-control">
                    </td>
                    <td>
                        <ul class="saved-data list-unstyled">
                        <?php if($guest->invited & wedding::CEREMONY) { ?>
                            <li>Cerémonie</li>
                        <?php } ?>
                        <?php if($guest->invited & wedding::LUNCH) { ?>
                            <li>Repas</li>
                        <?php } ?>
                        <?php if($guest->invited & wedding::SUNDAY) { ?>
                            <li>Lendemain</li>
                        <?php } ?>
                        </ul>
                        <ul class="data hidden list-unstyled">
                            <li><input type="checkbox" id="form-ceremony" name="invited[]" <?php if($guest->invited & wedding::CEREMONY) { echo 'checked'; }?> value="<?php echo wedding::CEREMONY?>"> <label for="form-ceremony">Cerémonie / apéritif</label></li>
                            <li><input type="checkbox" id="form-lunch" name="invited[]" <?php if($guest->invited & wedding::LUNCH) { echo 'checked'; }?> value="<?php echo wedding::LUNCH?>"> <label for="form-lunch">Repas</label></li>
                            <li><input type="checkbox" id="form-sunday" name="invited[]" <?php if($guest->invited & wedding::SUNDAY) { echo 'checked'; }?> value="<?php echo wedding::SUNDAY?>"> <label for="form-sunday">Dimanche</label></li>
                        </ul>
                    </td>
                    <td>
                        <ul class="saved-data list-unstyled">
                        <?php if($guest->presence & wedding::CEREMONY) { ?>
                            <li>Cerémonie</li>
                        <?php } ?>
                        <?php if($guest->presence & wedding::LUNCH) { ?>
                            <li>Repas</li>
                        <?php } ?>
                        <?php if($guest->presence & wedding::SUNDAY) { ?>
                            <li>Lendemain</li>
                        <?php } ?>
                        </ul>
                        <ul class="data hidden list-unstyled">
                            <li><input type="checkbox" id="form-ceremony" name="presence[]" <?php if($guest->presence & wedding::CEREMONY) { echo 'checked'; }?> value="<?php echo wedding::CEREMONY?>"> <label for="form-ceremony">Cerémonie / apéritif</label></li>
                            <li><input type="checkbox" id="form-lunch" name="presence[]" <?php if($guest->presence & wedding::LUNCH) { echo 'checked'; }?> value="<?php echo wedding::LUNCH?>"> <label for="form-lunch">Repas</label></li>
                            <li><input type="checkbox" id="form-sunday" name="presence[]" <?php if($guest->presence & wedding::SUNDAY) { echo 'checked'; }?> value="<?php echo wedding::SUNDAY?>"> <label for="form-sunday">Dimanche</label></li>
                        </ul>
                    </td>
                    <td>
                        <span class="saved-data">
                        <?php if($guest->stayOverNight == 1) { ?>
                            Oui
                        <?php } elseif($guest->stayOverNight == 0) {?>
                            Non
                        <?php } ?>
                        </span>
                        <span class="data hidden">
                            <input type="radio" name="stayOverNight" value="1" id="stayOverNight-yes" <?php if($guest->stayOverNight == 1) { echo 'checked'; }?>> <label for="stayOverNight-yes">Oui</label>
                            <br>
                            <input type="radio" name="stayOverNight" value="0" id="stayOverNight-no" <?php if($guest->stayOverNight == 0) { echo 'checked'; }?>> <label for="stayOverNight-no">Non</label>
                        </span>
                    </td>
                    <td>
                        <span class="dateConf"><?php echo $guest->dateConf ?></span>
                    </td>
                    <td>
                        <span class="note saved-data"><?php echo $guest->note ?></span>
                        <textarea name="note" style="min-width:200px;min-height:120px" class="data hidden form-control"><?php echo $guest->note ?></textarea>
                    </td>
                    <td><button type="button" class="hidden btn btn-primary modify">Modifier</button></td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
        <p class="text-right">
            <button type="button" class="btn btn-primary submit">Ajouter</button>
        </p>
    </div>



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <script src="js/bo.js"></script>
    <script>
    

    </script>
  </body>
</html>