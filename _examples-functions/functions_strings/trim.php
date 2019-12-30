<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Funções no PhP: TRIM - Lucas Alvarenga</title>
    <!-- CSS -->
    <link rel="stylesheet" href="../../css/style.css">
</head>
<body>
    <main>
        <header class="header-content">
            <h1> TRIM </h1>
            <h2> Função usada retirar possíveis espaços em uma determinda String.</h2>
            <h3> A função trim() é muito usada em validações de formulários para evitar que espaços em branco sejam contados como um carácter.</h3>     
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
                <p class="comment">//Digamos que estejamos recebendo dados de um formulário.</p>
                <p class="comment">//Obs.: É importante você gerar validações tanto no Front tanto no Back de sua aplicação!</p>
                <p class="coding">$inputName = "   "; <span class="comment">//4 espaços vazios</span></p>
                <p class="coding">$tamanho = <span class="function-php">strlen</span>($inputName);</p>
            </div>

        </div>

        <div class="container-output">

            <h4>Saída: 👇</h4>

            <?php 

                $inputName = "    ";  
                echo "<p> Número de caracteres sem o uso do trim() - ". strlen($inputName)."</p>";
                $validarInputName = trim($inputName);
                echo "<p> Número de caracteres com o uso do trim() - ". strlen($validarInputName)."</p>";
                
            ?>
         
        </div>
    </main>
    <footer>
        <p class="footer-text">Essa função ajuda a evitar o envio dados com excesso de espaços em branco e além de ser muito usada em validações, então, faça de questão de grava-lá em seu ❤️</p>
    </footer>
</body>
</html>