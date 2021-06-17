<!DOCTYPE html>
<html lang="es">

<head>
    <title>Calcular Salario mensual</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>

<body>
    <header>
        <h1>
            <!-- Guardando los números ingresados en variables de PHP -->
            <?php $nom1 = isset($_POST['nombre1']) ? $_POST['nombre1'] : ""; ?>
            <?php $ap1 = isset($_POST['apellido1']) ? $_POST['apellido1'] : ""; ?>
            <?php $carg1 = isset($_POST['cargo1']) ? $_POST['cargo1'] : ""; ?>
            <?php $h1 = isset($_POST['horas1']) ? $_POST['horas1'] : 0; ?>

            <?php $nom2 = isset($_POST['nombre2']) ? $_POST['nombre2'] : ""; ?>
            <?php $ap2 = isset($_POST['apellido2']) ? $_POST['apellido2'] : ""; ?>
            <?php $carg2 = isset($_POST['cargo2']) ? $_POST['cargo2'] : ""; ?>
            <?php $h2 = isset($_POST['horas2']) ? $_POST['horas2'] : 0; ?>
        </h1>
    </header>

    <section action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <article style="font-weight: bolder;">
            <div >
                <?php

                if ($h1 >= 0 && $h2 >= 0) {
                    if ($carg1 == "Gerente" || $carg1 == "gerente") {
                        $bono1 = 10 / 100;
                    } else if ($carg1 == "Asistente" || $carg1 == "asistente") {
                        $bono1 = 5 / 100;
                    } else if ($carg1 == "Secretaria" || $carg1 == "secretaria") {
                        $bono1 = 3 / 100;
                    } else {
                        $bono1 = 2 / 100;
                    }
                    /*---------------------------------------------------- */
                    if ($h1 <= 160) {
                        $sueldoBase1 = $h1 * 9.75;
                    } else if ($h1 > 160) {
                        $nuh1 = $h1 - 160;
                        $sueldoBase1 = 160 * 9.75 + $nuh1 * 11.50;
                    }

                    /*-------------------empleado2----------------------------*/
                    if ($carg2 == "Gerente" || $carg2 == "gerente") {
                        $bono2 = 10 / 100;
                    } else if ($carg2 == "Asistente" || $carg2 == "asistente") {
                        $bono2 = 5 / 100;
                    } else if ($carg2 == "Secretaria" || $carg2 == "secretaria") {
                        $bono2 = 3 / 100;
                    } else {
                        $bono2 = 2 / 100;
                    }

                    /*---------------------------------------------------- */
                    if ($h2 <= 160) {
                        $sueldoBase2 = $h2 * 9.75;
                    } else if ($h2 > 160) {
                        $nuh2 = $h2 - 160;
                        $sueldoBase2 = 160 * 9.75 + $nuh2 * 11.50;
                    }

                    $iss1 = $sueldoBase1 * 5.25 / 100;
                    $afp1 = $sueldoBase1 * 6.88 / 100;
                    $renta1 = $sueldoBase1 * 10 / 100;
                    $sueldoLiquido1 = $sueldoBase1 - $iss1 - $renta1 - $afp1;
                    $salariofinal1 = $sueldoBase1 + $sueldoBase1 * $bono1;

                    
                    printf("<p><h2  align = 'left' >" . $nom1 . " " . $ap1 ."</h2>");
                    printf("<p><h4  align = 'left' > - Descuento por ISS = " . $iss1."</h4>");
                    printf("<p><h4  align = 'left' >- Descuento por AFP = " . $afp1)."</h4>";
                    printf("<p><h4  align = 'left' >- Descuento por RENTA = " . $renta1."</h4>");
                    printf("<p><h4  align = 'left' >-Sueldo a pagar = $" . $salariofinal1."</h4>");
                    printf("<br>");


                    $iss2 = $sueldoBase2 * 5.25 / 100;
                    $afp2 = $sueldoBase2 * 6.88 / 100;
                    $renta2 = $sueldoBase2 * 10 / 100;
                    $sueldoLiquido2 = $sueldoBase2 - $iss2 - $renta2 - $afp2;
                    $salariofinal2 = $sueldoBase2 + $sueldoBase2 * $bono2;

                    printf("<p><h2  align = 'left' >" . $nom2 . " " . $ap2."</h2>");
                    printf("<p><h4  align = 'left' > - Descuento por ISS = " . $iss2."</h4>");
                    printf("<p><h4  align = 'left' > - Descuento por AFP = " . $afp2."</h4>");
                    printf("<p><h4  align = 'left' > - Descuento por RENTA = " . $renta2."</h4>");
                    printf("<p><h4  align = 'left' > - Sueldo a pagar = $" . $salariofinal2."</h4>");
                } else {
                    printf("<p><h3  align = 'left' > Error... las horas laborales deben ser mayor que cero</h3>");
                    printf("<br><h4  align = 'left' >Dirijase para ingresar sus datos</h4>");
                }


                ?>
            </div>
            <article>
    </section>
</body>

</html>