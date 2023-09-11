<?php
// Variavéis 
$name = 'Lucas Rodrigues Chanpao';
$adress = 'Rua dos Expedicionarios, 3871';
$about = " Tenho 23 anos, completo 24 anos em 15 de setembro desse ano de 2023, Sou Casado a quase 8 anos, com Jean Carlos, Atualmente tenho a profissão de Vendedor de roupas, Amo o que eu faço, porém esse ano resolvi me aprofundar no que eu também mais amo!, o mundo digital, informática, programação, etc... no passado não tive apoio e oportunidades, mas agora resolvi de uma vez começar algo para ser melhor, algo por mim, então entrei numa faculdade Chamada Unialfa, Onde agora sou acadêmico de Tecnologia para sistemas de internet.!, estou muito feliz com o curso por completo(professores, colegas, ambientes e diretoria).";
$age = 23;
$multi = 9;

// Impressão
echo "<h2>Meu nome é: $name <br></h2>";
echo "<h2>Moro na $adress <br></h2>";
echo "<h2>$about <br></h2>";
echo "<h2>Tenho $age anos</h2>";
// Impressão de 1 ate 100

echo "<h2> Tabuada </h2>";

for($cont = 1; $cont <= 10; $cont++){
    $tab = $multi * $cont;
    echo "<p>$multi X $cont = $tab</p>";
}

echo " <h2> Contagem </h2>";
for($i = 1; $i <= 100; $i++){
    echo "<h4> $i </h4>";
}