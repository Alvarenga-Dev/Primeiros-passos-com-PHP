<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Funções no PhP: ARRAY_UNIQUE - Lucas Alvarenga</title>
    <!-- CSS -->
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <main>

        <header class="header-content">
            <h1> ARRAY_UNIQUE </h1>
            <h2> Usado para evitar repetição de dados em um array! </h2>
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
                <p class="coding">$vogais = array('a', 'e', 'i', 'o', 'u', 'e', 'i');</p>
                <p class="coding">$evitarRepeticao = <span class="function-php">array_unique</span>($vogais);</p>
            </div>

        </div>

        <div class="container-output">

            <h4>Saída: 👇</h4>

            <?php 
                $vogais = array('a', 'e', 'i', 'o', 'u', 'e', 'i');
                $evitarRepeticao = array_unique($vogais);

                foreach($evitarRepeticao as $vogal) {
                    echo '<p>Vogal: '. $vogal .'</p>';
                }
            ?>
            
        </div>
    </main>
</body>
</html>