<?php
    function listaContatos()

    {
        $banco_dados = file(C:\Users\L.Abreu\Downloads\aula-php-main\agenda\dados.csv);

        $novo = array();

        foreach($banco_dados as $linha)
        {
            $registro = explode(",", $linha);
            $novo[] = array("nome" => $registro[0], "telefone" => $registro[1],"email" => $registro[2], "cidade" => $registro[3]);
        }
        
        return $novo;
    }

    function adicionarContato($banco_dados, $nome, $telefone, $email, $cidade)
    {
        $banco_dados  = listaContatos();
        $banco_dados[]=array("nome" => $nome, "telefone" => $telefone,"email" => $email, "cidade" => $cidade);
        return $banco_dados;
    }

?>