<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Introdução ao PHP: Estruturas de repetição - Lucas Alvarenga</title>
    <!-- CSS -->
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <main>
        <header class="header-content">
            <h1> Estruturas de repetição </h1>
            <h4> Exemplos de estruturas de repetição no PHP: 👇</h4>
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
                <p class="coding">while ( expressão booleana ) {</p>
                <p class="coding">bloco de código a ser executado;</p>
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
                <p class="coding">do {</p>
                <p class="coding">bloco de código a ser executado;</p>
                <p class="coding">} while ( expressão booleana );</p>
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
                <p class="coding">for ( inicialização; condição-limite; iteração ) {</p>
                <p class="coding">bloco de código a ser executado;</p>
                <p class="coding">}</p>
            </div>

        </div>

    </main>

    <?php

    /*

        # Laço while

        $cont = 0;

        while($cont < 15) {
            echo "<p>$cont</p>";
            $cont++;
        }

        # Laço for (Tabuada de 5)

        for ($num=0; $num <= 10; $num++) { 
            echo "<p>$num x 5 = ". $num*5 ."</p>";
        }

        # Laço do...while

        $i = 6;

        do {
            echo "<p>Loop $i</p>";
        } while($i < 5);

    */
            
    ?>

    <footer> 
        <p> 😜 Dica: Veja alguns códigos PHP comentados no arquivo, prátique bastante e veja o artigo da <a href="https://www.devmedia.com.br/while-e-do-while-lacos-de-repeticoes-estrutura-da-linguagem-parte-1/18870" target="blank">Devmedia</a> que explica com mais detalhes as diferenças entre esses 3 laços de repetição! </p>
        <p> (O artigo usa exemplos em C#, mas a teoria é a mesma). </p>
    </footer>
</body>
</html>