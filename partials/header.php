
<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Moja stránka</title>
    <link rel="stylesheet" href="css/accordion.css">
    <link rel="stylesheet" href="css/form.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
  <header class="container main-header">
      <div class="logo-holder">
        <a href="index.php"><img src="img/logo.png" height="40 "></a>
      </div>

    <nav class="main-nav">
      <?php
        $pages = glob('*php');
        //print_r($pages);
      ?>
      <ul class="main-menu" id="main-menu container">
        <?php
          foreach($pages as $file){
            $page = basename($file,'.php');
            if($page!=='index'){
              echo '<li><a href="'.$file.'">'.ucfirst($page).'</a></li>';
            }
          }
        ?>        
      </ul>
      <a class="hamburger" id="hamburger">
        <i class="fa fa-bars"></i>
      </a>
    </nav>
  </header>

  
