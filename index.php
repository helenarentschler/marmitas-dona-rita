<?php
    $marmitas = array (
       array(
        "nome" => "Marmita Fitness",
        "preco" => 12,
        "imagem-url" => "images/fitness.jpeg", 
        "tamanho" => "medio",
        "ingredientes" => array("Frango Grelhado", "Arroz Integral", "Grão de Bico", "Alface", "Tomate"),
       ),
       array(
        "nome" => "Marmita Pedreiro",
        "preco" => 16,
        "imagem-url" => "images/pedreiro.jpeg", 
        "tamanho" => "grande",
        "ingredientes" => array("Bife Acebolado", "Frango Empanado", "Arroz", "Feijao", "Alface", "Tomate", "Batata Assada", "Ovo", "Vagem"),
       ),
       array(
        "nome" => "Marmita Infantil",
        "preco" => 8,
        "imagem-url" => "images/infantil.jpeg", 
        "tamanho" => "pequeno",
        "ingredientes" => array("Frango Empanado", "Arroz", "Feijao", "Alface", "Batata Frita"),
       ),
       array(
        "nome" => "Marmita Macarronada",
        "preco" => 14,
        "imagem-url" => "images/macarronada.png", 
        "tamanho" => "grande",
        "ingredientes" => array("Espaguete", "Carne Moida", "Molho de Tomate", "Queijo Parmesao",  "Tomnate", "Pepino"),
       ),
       array(
        "nome" => "Marmita Gourmet",
        "preco" => 18,
        "imagem-url" => "images/gourmet.jpeg", 
        "tamanho" => "grande",
        "ingredientes" => array("Filé Mignon", "Arroz tropeiro", "Batata Rustica", "Molho da Casa", "Tabule", "Picles"),
       ),
       array(
        "nome" => "Marmita Massas",
        "preco" => 16,
        "imagem-url" => "images/massas.jpeg", 
        "tamanho" => "grande",
        "ingredientes" => array("Lasanha de Carne", "Macarrao com Queijo", "Empadao de Frango", "Tomate", "Picles"),
        )
    );

    function consultarURL($index) {
        return $marmitas[$index]["url"];
    }
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <link rel="shortcut icon" href="marmitinha.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Satisfy&family=Work+Sans&display=swap" rel="stylesheet">
    <title>Marmitas Dona Rita</title>
</head>
<body>
    <header>
        <section class="media">
            <a href="#contato">Encomende sua marmita!</a>
            <a href="#local">Localização</a>
        </section>
        <section class="header">
            <a href="#">
                <img id="marmitinha" src="marmitinha.png" alt="Personagem de marmitinha com rosto sorridente" srcset="">
            </a>
            <h1>Marmitas da Dona Rita</h1>
        </section>
    </header>
    <main>
        <section id="banner">
            <h2>As mais deliciosa marmita de Palmas!</h2>
            <h3>Preparadas com muita higiene, cuidado e carinho</h3>
            <section id="promo">
                <p>Promoção da semana: Leve 3 pague 2!</p>
            </section>
        </section>
        <section id="container-marmitas">
            <h2>Marmitas</h2>
            <ul id="lista-marmitas">
                <?php for($i = 0; $i < count($marmitas); $i++) { ?>
                    <li>
                        <a href="marmita.php?index=<?php echo $i;?>">
                            <h3><?php echo $marmitas[$i]["nome"]; ?></h3>
                            <img src=<?php echo $marmitas[$i]["imagem-url"]; ?> alt="" srcset="">
                            <div>
                                <p>Preço: R$<?php echo number_format($marmitas[$i]["preco"],2,",",".");?></p>
                            </div>
                        </a>
                    </li>
                <?php } ?> 
            </ul>
        </section>
    </main>
    <footer>
        <section>
            <p id="contato">Encomende pelo nosso WhatsApp: (41) 90000-0001 </p>
            <p>Atendimento de segunda à sexta das 9h00 às 17h00</p>
            <p id="local">Endereço: Rua das Rosas, Bairro Maria Catarina (Palmas - TO)</p>
        </section>
        <hr>
        <address>Helena Rentschler 2022, todos os direitos reservados</address>
    </footer>
</body>
</html>