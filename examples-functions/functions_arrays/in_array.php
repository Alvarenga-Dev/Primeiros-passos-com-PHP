<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Funções no PhP: IN_ARRAY - Lucas Alvarenga</title>
    <!-- CSS -->
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <main>
        <header class="header-content">
            <h1> IN_ARRAY </h1>
            <h2> Verifica se há um dado em um determinado array.</h2>
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
                <p class="comment">//in_array( elemento a ser verificado, array que será verificado )</p>
                <p class="coding">$letras = array('a', 'b', 'c', 'd');</p>
                <p class="coding">if(<span class="function-php">in_array</span>('a', $letras)){</p>
                <p class="coding">echo 'O array contém a vogal: A!';</p>
                <p class="coding">}else{</p>
                <p class="coding">echo 'Não foi contém a letra procurada.';</p>
                <p class="coding">}</p>
            </div>

        </div>

        <div class="container-output">

            <h4>Saída: 👇</h4>

            <?php 
                $letras = array('a', 'b', 'c', 'd');
                if(in_array('a', $letras)){
                    echo '<p>O array contém a vogal: A!</p>';
                }else{
                    echo '<p>Não foi contém a letra procurada.</p>';
                }
            ?>
            
        </div>
    </main>
</body>
</html>