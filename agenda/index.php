<html>
    <head>
        <title>Agenda</title>
    </head>

    <body>
        <h1>Agenda de Contatos</h1>

        <form method="POST">
            <fieldset>
                <legend>Dados do Contato</legend>

                <label>Nome</label>
                <input type="text" name="nome">
                <br>

                <label>Telefone</label>
                <input type="text" name="telefone">
                <br>

                <label>Email</label>
                <input type="text" name="email">
                <br>

                <label>Cidade</label>
                <input type="text" name="cidade">
                <br>

                <button type="submit">Cadastrar</button>

            </fieldset>
        </form>

<?php
    $nome= $_POST["nome"];
    $telefone= $_POST["telefone"]; 
    $email= $_POST["email"]; 
    $cidade= $_POST["cidade"];  

?>        

        <table>
            <thead>
            <tr>
                <th>Nome</th>
                <th>Telefone</th>
                <th>Email</th>
                <th>Cidade</th>
            </tr>
            </thead>

            <tbody>
                <tr>
                    <td><?php echo $nome ?></td>
                    <td><?php echo $telefone ?></td>
                    <td><?php echo $email ?></td>
                    <td><?php echo $cidade ?></td>
                </tr>            
            </tbody>

        </table>



    </body>


</html>