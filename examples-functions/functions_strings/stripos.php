<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Funções no PhP: STRIPOS - Lucas Alvarenga</title>
    <!-- CSS -->
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <main>
        <header class="header-content">
            <h1> STRIPOS </h1>
            <h2> Função que permite buscar palavras dentro de uma string (esta função ignora letras maiúsculas e minúsculas). </h2>
            <h3> Obs.: Caso deseje levar em consideração letras maiúsculas e minúsculas, use a função strpos()! </h3>     
            <h4> Exemplo: 👇 </h4>
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
                <p class="coding">$frase = "Eu estou aprendendo PHP e JavaScript";</p>
                <p class="coding">$posicao = <span class="function-php">stripos</span>($frase, "php");</p>
                <p class="coding">echo "A posição da palavra PHP é: $posicao";</p>
            </div>

        </div>

        <div class="container-output">

            <h4> Saída: 👇 </h4>

            <?php 

                $frase = "Eu estou aprendendo PHP e JavaScript";
                $posicao = stripos($frase, "php");
                echo "A posição da palavra PHP é: $posicao";

                   # Teste também a função strpos #
            
            ?>
         
        </div>
    </main>
</body>
</html>