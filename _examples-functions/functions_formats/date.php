<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Funções no PhP: DATE - Lucas Alvarenga</title>
    <!-- CSS -->
    <link rel="stylesheet" href="../../css/style.css">
</head>
<body>
    <main>

        <header class="header-content">
            <h1> DATE </h1>
            <h2> Usado para realizar a formatação de datas! </h2>
            <h4> Exemplos: 👇</h4>
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
                <p class="comment">// date( String de formatação )</p>
                <p class="coding">$hoje = <span class="function-php">date</span>("F d, Y - h:m a");</p>
                <p class="coding">echo $hoje</p>
                <p class="comment">// Saída - December 30, 2019 - 03:12 pm</p>
                
                <p class="coding">$hoje = <span class="function-php">date</span>("d.m.y");</p>
                <p class="coding">echo $hoje</p>
                <p class="comment">// Saída - 10.03.01</p>
                
                <p class="coding">$hoje = <span class="function-php">date</span>("H:i:s");</p>
                <p class="coding">echo $hoje</p>
                <p class="comment">// Saída - 11:27:18</p>
                
                <p class="coding">$hoje = <span class="function-php">date</span>("Y-m-d H:i:s");</p>
                <p class="coding">echo $hoje</p>
                <p class="comment">// Saída - 2001-03-10 11:28:32</p>
            </div>

        </div>

    </main>
    
    <footer> 
        <p> 😜 Dica: Entre no site <a href="https://www.php.net/manual/pt_BR/function.date.php" target="blank">php.net</a> e tenha mais informações sobre os demais caracteres de formatação de datas! </p>
    </footer>
</body>
</html>