<!DOCTYPE html>
<html lang="es">

<head>
    <title>Multiplos de 3 y 5</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>

<body>
    <header>
        <h1>
            <!-- Guardando los números ingresados en variables de PHP -->
            <?php $num1 = isset($_POST['numero1']) ? $_POST['numero1'] : 0; ?>
            <?php $num2 = isset($_POST['numero2']) ? $_POST['numero2'] : 0; ?>
            <?php $num3 = isset($_POST['numero3']) ? $_POST['numero3'] : 0; ?>
            <?php $num4 = isset($_POST['numero4']) ? $_POST['numero4'] : 0; ?>
            <?php $num5 = isset($_POST['numero5']) ? $_POST['numero5'] : 0; ?>

        </h1>
    </header>
    <section>
        <article style ="font-weight: bolder;" >
            <p class="msg" >
            <?php

                $arraynumeros = [$num1, $num2, $num3, $num4, $num5];
                $multiplo3 = 0;
                $multiplo5 = 0;

                if ($num1 >= 0 && $num2 >= 0 && $num3 >= 0 && $num4 >= 0 && $num5 >= 0) 
                {
                    if ($num1 < 501 && $num2 < 501 && $num3 < 501 && $num4 < 501 && $num5 < 501) 
                    {
                        for ($i = 0; $i < 5; $i++) {
                            if (intval($arraynumeros[$i]) % 3 == 0) 
                            {
                                $multiplo3 = $multiplo3 + 1;
                                if ($arraynumeros[$i] % 5 == 0) 
                                {
                                    $multiplo5 = $multiplo5 + 1;
                                }
                            } 
                            else if ($arraynumeros[$i] % 5 == 0) 
                            {
                                $multiplo5 = $multiplo5 + 1;
                            }
                        }
                        printf("<p><h3  align = 'left'> Numeros ingresados: " . $num1 . ", " . $num2 . ", " . $num3 . ", " . $num4 . ", " . $num5 ."</h3>");
                        printf("<p><h3  align = 'left' > Multiplos de 3: " . $multiplo3."</h3>");
                        printf("<p><h3  align = 'left' >Multiplos de 5: " . $multiplo5."</h3>");
                    }
                    else
                    {
                        printf("<p><h3  align = 'left' >Error...Ha ingresado un numero mayor que 500</h3>");
                        printf("<p><h2  align = 'left' >... Dirijase a la pagina anterior e ingrese numeros entre 0 y 500</h2>");
                    }
                }
                else
                    {
                        printf("<p><h3  align = 'left' >Error...Ha ingresado un numero negativo</h3>");
                        printf("<p><h2  align = 'left' >... Dirijase a la pagina anterior e ingrese numeros entre 0 y 500</h2>");
                    }

            ?>
            </p>
            <article>
    </section>
</body>

</html>