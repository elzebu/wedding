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
        <table class="table table-striped">
            <thead>
            <tr>
                <th></th>
                <th>Code</th>
                <th>Nom</th>
                <th>email de contact</th>
                <th>nombre de personnes</th>
                <th>Invité à</th>
                <th>Présence</th>
                <th>date de confirmation</th>
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
                        <span class="code"><?php echo $guest['code'] ?></span>
                        <input type="hidden" name="code" value="<?php echo $guest['code'] ?>" class="data">
                    </td>
                    <td>
                        <span class="name"><?php echo $guest->name ?></span>
                        <input type="text" name="name" value="<?php echo $guest->name ?>" class="data hidden form-control">
                    </td>
                    <td>
                        <span class="mail"><?php echo $guest->mail ?></span>
                        <input type="mail" name="mail" value="<?php echo $guest->mail ?>" class="data hidden form-control">
                    </td>
                    <td>
                        <span class="nb"><?php echo $guest->nb ?></span>
                        <input type="number" name="nb" value="<?php echo $guest->nb ?>" class="data hidden form-control">
                    </td>
                    <td>
                        <ul>
                        <?php if($guest->invited & FLAG_1) { ?>
                            <li>Cerémonie</li>
                        <?php } ?>
                        <?php if($guest->invited & FLAG_2) { ?>
                            <li>Repas</li>
                        <?php } ?>
                        <?php if($guest->invited & FLAG_3) { ?>
                            <li>Lendemain</li>
                        <?php } ?>
                        </ul>
                    </td>
                    <td>
                        <ul>
                        <?php if($guest->presence & FLAG_1) { ?>
                            <li>Cerémonie</li>
                        <?php } ?>
                        <?php if($guest->presence & FLAG_2) { ?>
                            <li>Repas</li>
                        <?php } ?>
                        <?php if($guest->presence & FLAG_3) { ?>
                            <li>Lendemain</li>
                        <?php } ?>
                        </ul>
                    </td>
                    <td>
                        <span class="dateConf"><?php echo $guest->dateConf ?></span>
                        <input type="date" name="nb" value="<?php echo $guest->nb ?>" class="data hidden form-control">
                    </td>
                    <td><button type="button" class="hidden btn btn-primary submit">Modifier</button></td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <script>
    

    </script>
  </body>
</html>