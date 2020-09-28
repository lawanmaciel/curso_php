<?php require __DIR__ . '/recursos/template/array.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aprendendo - PHP 7</title>
    <link rel="stylesheet" href="/recursos/css/estilo.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <section id="pagina-principal">
        <div class="container">
            <div class="d-flex justify-content-center">
                <div class="logo">
                    <h1>PHP</h1>
                </div>
            </div>
            <div class="modulos-cards">
                <div class="row">
                    <?php
                    foreach ($modulos as $key => $value) {
                    ?>
                        <div class="col-4">
                            <div class="cards-custom" style="border: 3px solid <?= $value['cor'] ?>;">
                                <div class="row">
                                    <div class="id-card" style="border: 3px solid <?= $value['cor'] ?>;">
                                        <h1><?= ($key + 1) ?></h1>
                                    </div>
                                    <h1 class="titulo-card"><?= $value['titulo'] ?></h1>
                                </div>
                                <div class="conteudo">
                                    <a href="">
                                        <?= $value['conteudo'] ?>
                                    </a>
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>
</body>

</html>