<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Funções no PhP: SUBSTR - Lucas Alvarenga</title>
    <!-- CSS -->
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <main>
        <header class="header-content">
            <h1> SUBSTR </h1>
            <h2> Essa função permite criar uma "Sub String", ou seja, recortar uma parte de um String! </h2>     
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
                <p class="comment">//substr(String a ser analisada, Por onde a função de começar a 'fatiar', (opcional) quatos caracteres ele irá percorrer)</p>
                <p class="coding">$frase = "Primeiros passos com o php";</p>
                <p class="coding">echo "A frase é: $frase";</p>
                <p class="coding">$sub = <span class="function-php">substr</span>($frase, 0, 9);</p>
                <p class="coding">echo "Primeira Sub String: $sub";</p>
                <p class="coding">$sub = <span class="function-php">substr</span>($frase, 9);</p>
                <p class="coding">echo "Segunda Sub String: $sub";</p>
            </div>

        </div>

        <div class="container-output">

            <h4> Saída: 👇 </h4>

            <?php 

                $frase = "Primeiros passos com o php";
                echo "<p>A frase é: $frase</p>";
                $sub = substr($frase, 0, 9);
                echo "<p>Primeira Sub String: $sub</p>";
                $sub = substr($frase, 9);
                echo "<p>Segunda Sub String: $sub</p>";
            
            ?>
         
        </div>
    </main>
</body>
</html>