<?php
include 'includes/Curso.class.php';

$nome1 = $_POST['nome1'];
$duracao1 = $_POST['duracao1'];
$nome2 = $_POST['nome2'];
$duracao2 = $_POST['duracao2'];

$curso1 = new Curso($nome1, $duracao1);
$curso2 = new Curso($nome2, $duracao2);

$classificacao1 = $curso1->classificarDuracao();
$classificacao2 = $curso2->classificarDuracao();
?>

<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Resultado dos cursos</title>
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <main class="card">
        <h1>Resultado dos cursos</h1>

        <h2>Primeiro curso</h2>
        <p><strong>Nome:</strong> <?= $curso1->getNome(); ?></p>
        <p><strong>Duração:</strong> <?= $curso1->getDuracao(); ?> semestre(s)</p>
        <p><strong>Classificação:</strong> <?= $classificacao1; ?></p>

        <h2>Segundo curso</h2>
        <p><strong>Nome:</strong> <?= $curso2->getNome(); ?></p>
        <p><strong>Duração:</strong> <?= $curso2->getDuracao(); ?> semestre(s)</p>
        <p><strong>Classificação:</strong> <?= $classificacao2; ?></p>

        <p>
            <a href="index.html">Voltar ao formulário</a>
        </p>
    </main>
</body>

</html>
