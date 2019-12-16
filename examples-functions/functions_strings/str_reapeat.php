<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Funções no PhP: STR_REAPEAT - Lucas Alvarenga</title>
    <!-- CSS -->
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <main>
        <header class="header-content">
            <h1> STR_REAPEAT </h1>
            <h2> Essa função permite a criação de textos repetidos. </h2>     
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
                <p class="coding">$texto = <span class="function-php">str_repeat</span>("-", 20);</p>
                <p class="coding">echo "$texto";</p>
            </div>

        </div>

        <div class="container-output">

            <h4> Saída: 👇 </h4>

            <?php 

                $texto = str_repeat("-", 50);
                echo "<p>$texto</p>";
                #echo strlen($texto); -> Caso queira confirmar se há 50 caracteres...
            
            ?>
         
        </div>
    </main>
</body>
</html>