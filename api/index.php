<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dia das Mulheres</title>
    <style>
        body {
            background-color: #ffe6f2;
            font-family: Arial, sans-serif;
            text-align: center;
            color: #d63384;
        }
        .container {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background: white;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        .carousel {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 10px;
            margin-top: 20px;
        }
        .carousel img {
            width: 200px;
            height: auto;
            object-fit: cover;
            border-radius: 10px;
        }
        #timer {
            font-size: 20px;
            margin-top: 20px;
            color: #d63384;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Feliz Dia das Mulheres, Meu Amor!</h1>
        <p>"Você é a luz que ilumina meus dias, a inspiração por trás dos meus sorrisos. Hoje e sempre, celebro a mulher incrível que você é!" ❤️</p>
        <p>" O que o ChatGPT não disse é que você é a minha pessoa favorita, amo sua presença, você é uma Mulher incrível, que essa luz que te ilumina permaneça ao meu lado para sempre!" ❤️</p>

        <div class="carousel">
            <?php 
                for ($i = 1; $i <= 9; $i++) {
                    echo "<img src='assets/img/imagem$i.jpeg' alt='Foto $i'>";
                }
            ?>
        </div>
        
        <div id="timer"></div>
    </div>
    
    <script>
        function updateTimer() {
            const startDate = new Date("2022-09-23T19:00:00");
            const now = new Date();
            const diff = now - startDate;
            
            const seconds = Math.floor(diff / 1000) % 60;
            const minutes = Math.floor(diff / (1000 * 60)) % 60;
            const hours = Math.floor(diff / (1000 * 60 * 60)) % 24;
            const days = Math.floor(diff / (1000 * 60 * 60 * 24)) % 365;
            const years = Math.floor(diff / (1000 * 60 * 60 * 24 * 365));
            
            document.getElementById("timer").innerText = 
                `Sou feliz com você a: ${years} anos, ${days} dias, ${hours} horas, ${minutes} minutos e ${seconds} e segundos desde 23 de setembro de 2022.`;
        }
        setInterval(updateTimer, 1000);
        updateTimer();
    </script>
</body>
</html>
