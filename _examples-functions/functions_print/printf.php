<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Funções no PhP: PRINTF - Lucas Alvarenga</title>
    <!-- CSS -->
    <link rel="stylesheet" href="../../css/style.css">
</head>
<body>
    <main>
        <header class="header-content">
            <h1> PRINTF </h1>
            <h2> Função herdada da linguagem C, é utilizada para exibir algo na tela com uma formatação específica.</h2>
            <h3>'Print' em português significa impressão, já o ' f ' refere-se a 'format' ou formatar.</h3>  
            <h4> Exemplo: 👇</h4>
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
                <p class="coding">$produto = "Leite";</p>
                <p class="coding">$preco = 4.5;</p>
                <p class="comment">$s - Textos | $f - Reais | %d - Inteiros | %.2f - Número de casas decimais 2,3,4... </p>
                <p class="coding"><span class="function-php">printf</span>("O %s custa R$ %.2f", $produto, $preco);</p>
            </div>

        </div>

        <div class="container-output">

            <h4>Saída: 👇</h4>

            <?php 
                $produto = "Leite";
                $preco = 4.5;
    
                printf("O %s custa R$ %.2f", $produto, $preco);
            ?>
            
        </div>
    </main>
</body>
</html>