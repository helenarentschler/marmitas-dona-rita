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

    $i = $_GET["index"];
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
            <a href="">Contate-nos!</a>
            <a href="">Localização</a>
        </section>
        <section class="header">
            <a href="<?php echo $_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['HTTP_HOST'].'/marmitas-dona-rita';?>">
                <img id="marmitinha" src="marmitinha.png" alt="Personagem de marmitinha com rosto sorridente" srcset="">
            </a>
                <h1>Marmitas da Dona Rita</h1>
        </section>
    </header>
    <main>
    <section id="container-marmitas" class="individual">
        <h2><?php echo $marmitas[$i]["nome"];?></h2>
        <img src=<?php echo $marmitas[$i]["imagem-url"]; ?> alt="" srcset="">
        <ul>
            <li>Preço: R$<?php echo number_format($marmitas[$i]["preco"],2,",",".");?></li>
            <li>Tamanho: <?php echo $marmitas[$i]["tamanho"];?></li>
            <li>Ingredientes: 
                <?php foreach($marmitas[$i]["ingredientes"] as $ingrediente) {
                    echo $ingrediente.", ";
                } ?>
            </li>
        </ul>
    </section>
</main>
    <footer>
        <address>Helena Rentschler 2022, todos os direitos reservados</address>
    </footer>
</body>
</html>