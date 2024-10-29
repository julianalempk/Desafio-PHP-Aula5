<?php
//Passo 1: Criar um array indexado multidimensional
$carros = array(
    array("Toyota", "Corolla", 2020, "Prata"),
    array("Honda", "Civic", 2019, "Preto"),
    array("Ford", "Focus", 2018, "Azul")
);

// Função para exibir o array de carros de forma organizada
function exibirCarros($carros)
{
    foreach ($carros as $index => $carro) {
        echo "Carro " . ($index + 1) . ":<br>";
        echo "Marca: " . $carro[0] . "<br>";
        echo "Modelo: " . $carro[1] . "<br>";
        echo "Ano: " . $carro[2] . "<br>";
        echo "Cor: " . $carro[3] . "<br><br>";
    }
}
// Passo 2: Exibir o array original
echo "<strong>Array original:</strong><br>";
exibirCarros($carros);
echo "<br>";

// Passo 3: Modifique a cor do segundo carro (Honda Civic) para "Branco".
$carros [1][3] = "Branco";
echo " <strong>Array após a modificação:</strong><br>";
exibircarros ($carros);
echo "<br>";

//Passo 4: Adicionar um novo carro ao array
$carros[] = array("Chevrolet", "Cruze", 2021, "Vermelho");
echo "<strong>Array após a adicionar o Chevrolet Cruze:</strong><br>";
exibircarros ($carros);
echo "<br>";

//Passo 5: Remover o primeiro carro do array
unset($carros[0]);
echo "<strong>Array após a remoção do Toyota Corolla:</strong><br>";
exibircarros ($carros);
echo "<br>";

//Passo 6: Reindexar o array (opcional)
$carros = array_values($carros);
echo "<strong>Array após a reindexação:</strong><br>";
exibircarros ($carros);
?>
