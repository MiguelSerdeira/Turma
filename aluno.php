<?php

    $disciplina="Programação Web";
    $curso="TPSI";

    $alunos = [
                '190100249' => "Alex Ferreira Pires",
                '190100210' => "Alexandre José Costa Figueiredo",
                '190100216' => "Alexandre Miguel do Couto da Silva",
                '190100262' => "Daniel Marques Vicente",
                '190100282' => "Duarte Filipe Arriaga Santos",
                '190100225' => "Francisco José Pina da Silva Esteves",
                '190100488' => "Gonçalo Manuel Costa dos Santo",
                '190100209' => "Hugo Filipe da Conceição Figueiredo",
                '190100237' => "João Carlos Casaca Vinagre",
                '190100218' => "João Manuel Coelho Teixeira",
                '190100217' => "João Miguel Fernandes Ameixa",
                '190100263' => "Manuel Bernardo Nunes de Oliveira",
                '190100208' => "Márcio Alexandre Cintra Vilarinho Henriques",
                '190100269' => "Miguel Alexandre da Silva Serdeira",
                '190100260' => "Miguel Énio Gomes da Silva",
                '180100341' => "Nuno Miguel Mendes da Fonseca de Cardoso Assembleia",
                '190100315' => "Ricardo Filipe da Silva Ramos Duarte",
                '190100331' => "Serge Maia da Silva",
                '190100306' => "Weberth Rosa de Souza"
    ];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="turma.css">
    <title>Aluno de Programação Web</title>
</head>
<body>
  <header>
    <h1>Aluno de Programação Web</h1>
    <h2>TPSI</h2>
  </header>
  <aside>
  </aside>
  <?php
  if (isset($_POST["nAluno"])) {
    $codigo = $_POST["nAluno"];
    if (array_key_exists($codigo, $alunos)) {
  ?>
  <main>
    <div class="aluno">
      <div class="foto">
        <img src="https://siesgt.ipsantarem.pt/esgt/fotografias_service.foto?pct_cod=<?= $codigo?>">
      </div>
      <div class="info">
        <span class="nome"><?php echo $alunos["$codigo"]?></span>
        <span class="numero"><?= $codigo?></span>
      </div>
    </div>
  </main>
  <?php
    }else{
      echo "Número não encontrado";
    }
  }
  ?>
</body>
</html>
