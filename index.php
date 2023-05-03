<?php
header("Content-Type: text/html; charset=utf-8");
spl_autoload_register(function ($classe) {
    $caminho = "{$classe}.php";
    if (file_exists($caminho)) {
        require_once $caminho;
    } else {
        echo "O arquivo {$classe}.php da classe {$classe} não foi encontrado";
    }
});

// Criamos um objeto de Contato e o persistimos no banco de dados
$contato1 = new Contato("Alexandre Barbosa", "teste@teste.com.br", "11999999999");
$daoContato = new DaoContato();
if ($daoContato->create($contato1)) {
    echo "Inseridos no banco com êxito";
}

// Recuperamos os dados persistidos no banco para um novo objeto de Contato
$contato2 = $daoContato->read(1);
var_dump($contato2);

// Atualizamos os dados do primeiro objeto de Contato e atualizamos no banco
$contato1->setNome("João Silva");
$contato1->setEmail("joao@teste.com.br");
if ($daoContato->update($contato1)) {
    echo "Atualizado no banco com êxito";
}

// Conferimos a atualização realizada
$contato2 = $daoContato->read(1);
var_dump($contato2);

// Excluímos o registro do banco
if ($daoContato->delete(1)) {
    echo "Excluído do banco com êxito";
}
