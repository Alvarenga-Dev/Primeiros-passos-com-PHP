<<<<<<< HEAD
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Funções no PHP: Estruturas condicionais - Lucas Alvarenga</title>
    <!-- CSS -->
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <main>
        <header class="header-content">
            <h1> Estruturas condicionais </h1>
            <p class="text-center"> As estruturas condicionais servem para realizar o controle de fluxo de executação de uma determinada aplicação. </p>
            
            <div class="note">
                <h1> Observação </h1>
                <p>  As estruturas condicionais são: if - else - else if - elseif </p>
            </div>
            
            <h4> Exemplos de estruturas condicionais no PHP: 👇</h4>
        </header>

        <div class="window-code">

            <div class="window-title-container">
                <svg xmlns="http://www.w3.org/2000/svg" width="54" height="14" viewBox="0 0 54 14">
                    <g fill="none" fill-rule="evenodd" transform="translate(1 1)">
                        <circle cx="6" cy="6" r="6" fill="#FF5F56" stroke="#E0443E" stroke-width=".5"></circle>
                        <circle cx="26" cy="6" r="6" fill="#FFBD2E" stroke="#DEA123" stroke-width=".5"></circle>
                        <circle cx="46" cy="6" r="6" fill="#27C93F" stroke="#1AAB29" stroke-width=".5"></circle>
                    </g>
                </svg>
            </div>

            <div class="code-php">
                <p class="coding">if ( expressão booleana ) {</p>
                <p class="coding">bloco de código a ser executado se passar na condição;</p>
                <p class="coding">} else {</p>
                <p class="coding">bloco de código a ser executado se não passar na condição;</p>
                <p class="coding">}</p>
            </div>

        </div>

        <div class="window-code">

            <div class="window-title-container">
                <svg xmlns="http://www.w3.org/2000/svg" width="54" height="14" viewBox="0 0 54 14">
                    <g fill="none" fill-rule="evenodd" transform="translate(1 1)">
                        <circle cx="6" cy="6" r="6" fill="#FF5F56" stroke="#E0443E" stroke-width=".5"></circle>
                        <circle cx="26" cy="6" r="6" fill="#FFBD2E" stroke="#DEA123" stroke-width=".5"></circle>
                        <circle cx="46" cy="6" r="6" fill="#27C93F" stroke="#1AAB29" stroke-width=".5"></circle>
                    </g>
                </svg>
            </div>

            <div class="code-php">
                <p class="coding">if ( expressão booleana ) {</p>
                <p class="coding">bloco de código a ser executado se passar na condição e não continua a execução do bloco de condições;</p>
                <p class="coding">} else if ( expressão booleana ) {</p>
                <p class="coding">bloco de código a ser executado se não passar na condição anterior e, após executar, não continua no bloco de condições;</p>
                <p class="coding">} else {</p>
                <p class="coding">bloco de código a ser executado se não passar na condição;</p>
                <p class="coding">}</p>
            </div>

        </div>

        <div class="window-code">

            <div class="window-title-container">
                <svg xmlns="http://www.w3.org/2000/svg" width="54" height="14" viewBox="0 0 54 14">
                    <g fill="none" fill-rule="evenodd" transform="translate(1 1)">
                        <circle cx="6" cy="6" r="6" fill="#FF5F56" stroke="#E0443E" stroke-width=".5"></circle>
                        <circle cx="26" cy="6" r="6" fill="#FFBD2E" stroke="#DEA123" stroke-width=".5"></circle>
                        <circle cx="46" cy="6" r="6" fill="#27C93F" stroke="#1AAB29" stroke-width=".5"></circle>
                    </g>
                </svg>
            </div>

            <div class="code-php">
                <p class="coding">if ( expressão booleana ) {</p>
                <p class="coding">bloco de código a ser executado se passar na condição e não continua a execução do bloco de condições;</p>
                <p class="coding">} elseif ( expressão booleana ) {</p>
                <p class="coding">bloco de código a ser executado se não passar na condição anterior e, após executar, não continua no bloco de condições;</p>
                <p class="coding">} else {</p>
                <p class="coding">bloco de código a ser executado se não passar na condição;</p>
                <p class="coding">}</p>
            </div>

        </div>

        <div class="note">
            <h1> else if ou elseif? </h1>
            <p> Possuem a mesma funcionalidade quando se é utilizando chaves ( '{}' ), mas se forem usadas com dois pontos ( : ) você não poderá separar else if em duas palavras, ou o PHP irá falhar com um erro de interpretação. </p>
        </div>

        <div class="window-code">

            <div class="window-title-container">
                <svg xmlns="http://www.w3.org/2000/svg" width="54" height="14" viewBox="0 0 54 14">
                    <g fill="none" fill-rule="evenodd" transform="translate(1 1)">
                        <circle cx="6" cy="6" r="6" fill="#FF5F56" stroke="#E0443E" stroke-width=".5"></circle>
                        <circle cx="26" cy="6" r="6" fill="#FFBD2E" stroke="#DEA123" stroke-width=".5"></circle>
                        <circle cx="46" cy="6" r="6" fill="#27C93F" stroke="#1AAB29" stroke-width=".5"></circle>
                    </g>
                </svg>
            </div>

            <div class="code-php">
                <p class="coding">if($a > $b):</p>
                <p class="coding">echo $a." é maior que ".$b;</p>
                <p class="coding">elseif($a == $b):</p>
                <p class="coding">echo $a." iguais ".$b;</p>
                <p class="coding">else:</p>
                <p class="coding">echo $a." é menor que ".$b;</p>
                <p class="coding">endif;</p>
            </div>

        </div>

        <?php
            /*
            $a = 1;
            $b = 2;

            if($a > $b):
                echo "<p>".$a." é maior que ".$b."</p>";
            elseif($a == $b):
                echo "<p>".$a." iguais ".$b."</p>";
            else:
                echo "<p>".$a." é menor que ".$b."</p>";
            endif;
            */
        ?>      

    </main>

    <footer> 
        <p> 😜 Dica: Pratique bastante, pois estruturas condicionais são muito utilizadas! </p>
    </footer>
</body>
</html>
=======

>>>>>>> 80be5a0aefa0f91553c23aeb259e20a1f4509633
