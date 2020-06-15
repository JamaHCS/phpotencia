<?php
$number = (empty($_POST['number'])) ? 1 : $_POST['number'];
$exponent = (empty($_POST['exponent'])) ? 1 : $_POST['exponent'];

$result = $number ** $exponent;
?>

<!DOCTYPE html>
<html lang="es-mx">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Potencia</title>

    <link rel="stylesheet" href="./assets/styles.css"/>
    <link rel="stylesheet" href="./assets/bootstrap.min.css"/>
</head>
<body>
<div class="container">
    <form class="needs-validation" novalidate action="index.php" method="post">
        <div class="form-row">
            <div class="col-md-4 mb-3">
                <div class="input-group">
                    <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroupPrepend">
                  Número
                  </span>
                    </div>
                    <input
                            type="text"
                            class="form-control"
                            name="number"
                            placeholder="Número"
                            aria-describedby="inputGroupPrepend"
                            required
                    />
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="input-group">
                    <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroupPrepend">
                  Exponente
                  </span>
                    </div>
                    <input
                            type="text"
                            class="form-control"
                            name="exponent"
                            value="0"
                            aria-describedby="inputGroupPrepend"
                    />
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="input-group">
                    <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroupPrepend">
                  Resultado
                  </span>
                    </div>
                    <input
                            type="text"
                            class="form-control"
                            id="resultado"
                            value="<?php echo $result ?>"
                            aria-describedby="inputGroupPrepend"
                            disabled
                    />
                </div>
            </div>
        </div>
        <button class="btn btn-primary" type="submit">Calcular!</button>
    </form>
</div>
<script
        src="https://code.jquery.com/jquery-3.5.1.js"
        integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
        crossorigin="anonymous"
></script>
<script src="./assets/bootstrap.min.js"></script>
<script src="https://unpkg.com/@popperjs/core@2"></script>
<script src="./assets/validate.js"></script>
</body>
</html>
