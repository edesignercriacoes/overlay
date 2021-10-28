<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Overlay</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="load/load.css">
    <link rel="stylesheet" href="load/overlay.css">


</head>

<body>

    <?php
    include('funcoes/funcoes.php');
    ?>

    <div class="overlay"></div>

    <div class="container">
        <div class="row">
            <div class="col-sm-4"></div>
            <div class="col-sm-4">

                <?php load("Salvo com sucesso!", "verde");  ?>



            </div>
            <div class="col-sm-4"></div>
        </div>
    </div>

</body>

</html>