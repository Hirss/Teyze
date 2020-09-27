<!DOCTYPE html>
<html lang="fr">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Teyze</title>

</head>

              <body id="page-top">           
               <h2 class="text-left">Texte Image Generator</h2>
                <form method="POST" action="data_image.php" class="bg-light p-5 contact-form">
                  <div class="form-group">
                    <input type="text" name="titre" autocomplete="off" required class="form-control" placeholder="Titre">
                  </div>
                  <div class="form-group">
                    <input type="file" name="image" required></input>
                  </div>
                  <div class="form-group">
                    <textarea name="texte" required cols="30" rows="7" class="form-control" placeholder="Texte"></textarea>
                  </div>
                  <div class="form-group">
                    <input type="submit" name="submit" value="Lancer" class="btn btn-primary py-3 px-5">
                    <a href="<?php echo $output; ?>" class="btn btn-success py-3 px-5" download="<?php echo $output; ?>"><i class="fas fa-download"></i> Download</a>
                  </div>
                </form>
               </body>
              </html>
