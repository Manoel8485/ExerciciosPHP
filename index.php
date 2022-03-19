<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Exercícios PHP</title>
    <?php         
        $media = 0;
        $dados = "";
        $cidadesC ="";
        $dadosPessoa ="";
        $usuarioPessoa="";
        $formp = "";
        if (isset($_POST['n1'])) {
            if (($_POST['n1']) <> "")
                $media = ($_POST["n1"]+$_POST["n2"]+$_POST["n3"]+$_POST["n4"])/4;
        }     
        if (isset($_POST["nome"])) {
            $dados = $_POST["nome"].", nascido em ".$_POST["dtnasc"]." na cidade ".$_POST["cidade"].", ".$_POST["estado"].", ".$_POST["endereco"];
        }
        if (isset($_POST["cidades"])) {
            $cidades = ["Porto Velho","Ji-Paraná","Ariquemes","Jarú","Cacoal","Vilhena","Pimenta Bueno","Urupá","Nova União","Estrela de Rondônia"];
            for ($i=0; $i < 9; $i++) 
                $cidadesC .= "<br>".$cidades[$i];                
        }
        if (isset($_POST["nomepessoa"])) {
            if (($_POST["nomepessoa"]) <> "")
                $dadosPessoa = ($_POST["nomepessoa"].", ".$_POST["idadepessoa"]." anos.");
        }
        if (isset($_POST["email"])) {
            if (($_POST["email"]) <> "")
                $usuarioPessoa = ("E-mail: ".$_POST["email"].", Senha: ".$_POST["senha"].", tipo: ".$_POST["tipo"]);
        }    
        if (isset($_POST["nomep"])) {
            if (($_POST["nomep"]) <> "")
                $formp = 
                "<b>Nome: </b>".$_POST["nomep"].", ".
                "<b>Sobrenome: </b>".$_POST["sobrenomep"].", ".
                "<b>E-mail: </b>".$_POST["emailp"].", ".
                "<b>Nascimento: </b>".$_POST["dtnascp"].", ".
                "<b>Gênero: </b>".$_POST["generop"].", ".
                "<b>Rua: </b>".$_POST["ruap"].", ".
                "<b>Número: </b>".$_POST["numerop"].", <br>".
                "<b>Cidade: </b>".$_POST["cidadep"].", ".
                "<b>Estado: </b>".$_POST["estadop"].", ".
                "<b>Fototipo: </b>".$_POST["fototipop"].", ".
                "<b>Mãe: </b>".$_POST["maep"].", ".
                "<b>Pai: </b>".$_POST["paip"].".";
        } 

    ?>
</head>

<body>
    <div class="container">
        <div class="jumbotron">
            <h1 class="display-4">Atividade 18 mar. 2022</h1>
            <p class="lead">Manoel José da Silva Junior</p>
            <hr class="my-4">
            <p>1. Faça um script PHP que armazene 4 notas de um aluno em variáveis e
                no final apresente a média das notas. </p>

            <form action="\index.php" method="POST">
                <div class="row row-cols-4">
                    <div class="col">
                        <label for="exampleFormControlInput1" class="form-label">Nota 1</label>
                        <input type="text" name="n1" class="form-control" id="exampleFormControlInput1"
                            placeholder="8.5">
                    </div>
                    <div class="col">
                        <label for="exampleFormControlInput2" class="form-label">Nota 2</label>
                        <input type="text" name="n2" class="form-control" id="exampleFormControlInput2"
                            placeholder="6.5">
                    </div>
                    <div class="col">
                        <label for="exampleFormControlInput3" class="form-label">Nota 3</label>
                        <input type="text" name="n3" class="form-control" id="exampleFormControlInput3"
                            placeholder="7.5">
                    </div>
                    <div class="col">
                        <label for="exampleFormControlInput4" class="form-label">Nota 4</label>
                        <input type="text" name="n4" class="form-control" id="exampleFormControlInput4"
                            placeholder="7.5">
                    </div>

                </div>
                <br>
                <button type="submit" class="btn btn-success">Calcular</button>
                <div class="badge bg-primary" id="to1">Média: <?php echo $media?></div>
                <form>


                    <br><br>
                    <p>2. Escreva um programa em PHP que apresente informações
                        relacionados a você, para isto, declarar variáveis para armazenamento dos
                        dados pedidos abaixo e posteriormente fazer a impressão deles utilizando o
                        comando ECHO.
                        • Nome Completo.
                        • Data, Cidade e Estado de nascimento
                        • Endereço </p>
                    <form action="\index.php" method="POST">
                        <div class="row row-cols-4">
                            <div class="col">
                                <label for="exampleFormControlInput1" class="form-label">Nome completo</label>
                                <input type="text" name="nome" class="form-control" id="exampleFormControlInput1"
                                    placeholder="João">
                            </div>
                            <div class="col">
                                <label for="exampleFormControlInput2" class="form-label">Data de nascimento</label>
                                <input type="date" name="dtnasc" class="form-control" id="exampleFormControlInput2"
                                    placeholder="32/05/1980">
                            </div>
                            <div class="col">
                                <label for="exampleFormControlInput3" class="form-label">Cidade</label>
                                <input type="text" name="cidade" class="form-control" id="exampleFormControlInput3"
                                    placeholder="Colorado">
                            </div>
                            <div class="col">
                                <label for="exampleFormControlInput4" class="form-label">Estado de Nascimento</label>
                                <input type="text" name="estado" class="form-control" id="exampleFormControlInput4"
                                    placeholder="Minas Gerais">
                            </div>
                            <div class="col">
                                <label for="exampleFormControlInput4" class="form-label">Endereço</label>
                                <input type="textarea" name="endereco" class="form-control"
                                    id="exampleFormControlInput4" placeholder="Rua 51, BH2">
                            </div>
                        </div>
                        <br>
                        <button type="submit" class="btn btn-success">Salvar</button>
                        <div class="badge bg-primary" id="to2">Informações: <?php echo $dados?></div>
                    </form>

                    <br>
                    <p>3. Escreva um programa em PHP que apresente o nome de 10 cidades
                        do estado de Rondônia, declarar variável pra cada uma das cidades e utilizar o
                        comando ECHO para fazer a impressão dos dados.</p>
                    <form action="\index.php" method="POST">
                        <button type="submit" name="cidades" value="cidades" class="btn btn-success">Mostrar
                            cidades</button>
                        <div class="badge bg-primary" id="to3">Informações: <?php echo $cidadesC?></div>
                        <br>
                    </form>
                    <p>4. Criar um formulário em HTML que a pessoa irá digitar o nome e a idade,
                        posteriormente, elabore um script em PHP que mostre o Nome e a idade
                        digitados.</p>
                    <form action="\index.php" method="POST">
                        <div class="row row-cols-4">
                            <div class="col">
                                <label for="exampleFormControlInput1" class="form-label">Nome</label>
                                <input type="text" name="nomepessoa" class="form-control" id="exampleFormControlInput1"
                                    placeholder="João">
                            </div>
                            <div class="col">
                                <label for="exampleFormControlInput2" class="form-label">Idade</label>
                                <input type="number" name="idadepessoa" class="form-control"
                                    id="exampleFormControlInput2" placeholder="35">
                            </div>
                        </div>
                        <br>
                        <button type="submit" class="btn btn-success">Salvar</button>
                        <div class="badge bg-primary" id="to4">Informações: <?php echo $dadosPessoa?></div>
                    </form>
                    <p>5. Criar um formulário em HTML que a pessoa irá digitar, o e-mail, senha
                        de acesso e utilize a opção radio do elemento input para a selecionar se é um
                        aluno ou professor, posteriormente, elabore um script em PHP que mostre os
                        dados digitados. </p>
                    <form action="\index.php" method="POST">
                        <div class="row row-cols-4">
                            <div class="col">
                                <label for="exampleFormControlInput1" class="form-label">Email</label>
                                <input type="email" name="email" class="form-control" id="exampleFormControlInput1"
                                    placeholder="joao@gmail.com">
                            </div>
                            <div class="col">
                                <label for="exampleFormControlInput2" class="form-label">Senha</label>
                                <input type="password" name="senha" class="form-control" id="exampleFormControlInput2">
                            </div>
                            <div class="col">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="tipo" id="exampleRadios1"
                                        value="Professor">
                                    <label class="form-check-label" for="exampleRadios1">
                                        Professor
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="tipo" id="exampleRadios2"
                                        value="Aluno" checked>
                                    <label class="form-check-label" for="exampleRadios2">
                                        Aluno
                                    </label>
                                </div>
                            </div>
                        </div>
                        <br>
                        <button type="submit" class="btn btn-success">Salvar</button>
                        <div class="badge bg-primary" id="to5">Informações: <?php echo $usuarioPessoa?></div>
                    </form>
                    <p>6. Criar um formulário em HTML estilizado com o Bootstrap, com pelo
                        menos 10 campos de input e 2 radio a serem digitados pelo usuário
                        posteriormente, elabore um script em PHP que mostre os dados digitados.</p>
                    <form action="\index.php" method="POST">
                        <div class="row row-cols-4">
                            <div class="col">
                                <label for="exampleFormControlInput1" class="form-label">Nome</label>
                                <input type="text" name="nomep" class="form-control" id="exampleFormControlInput1">
                            </div>
                            <div class="col">
                                <label for="exampleFormControlInput2" class="form-label">Sobrenome</label>
                                <input type="text" name="sobrenomep" class="form-control" id="exampleFormControlInput2">
                            </div>
                            <div class="col">
                                <label for="exampleFormControlInput1" class="form-label">E-mail</label>
                                <input type="email" name="emailp" class="form-control" id="exampleFormControlInput1">
                            </div>
                            <div class="col">
                                <label for="exampleFormControlInput2" class="form-label">Nascimento</label>
                                <input type="date" name="dtnascp" class="form-control" id="exampleFormControlInput2">
                            </div>
                            <div class="col">
                                Gênero
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="generop" id="exampleRadios1"
                                        value="Professor">
                                    <label class="form-check-label" for="exampleRadios1">
                                        Feminino
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="generop" id="exampleRadios2"
                                        value="Aluno" checked>
                                    <label class="form-check-label" for="exampleRadios2">
                                        Masculino
                                    </label>
                                </div>
                            </div>
                            <div class="col-5">
                                <label for="exampleFormControlInput2" class="form-label">Rua</label>
                                <input type="text" name="ruap" class="form-control" id="exampleFormControlInput2">
                            </div>
                            <div class="col-1">
                                <label for="exampleFormControlInput1" class="form-label">Número</label>
                                <input type="number" name="numerop" class="form-control" id="exampleFormControlInput1">
                            </div>
                            <div class="col">
                                <label for="exampleFormControlInput2" class="form-label">Cidade</label>
                                <input type="text" name="cidadep" class="form-control" id="exampleFormControlInput2">
                            </div>
                            <div class="col">
                                <label for="exampleFormControlInput1" class="form-label">Estado</label>
                                <input type="text" name="estadop" class="form-control" id="exampleFormControlInput1">
                            </div>
                            <div class="col-2">
                                Fototipo de pele
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="fototipop" id="exampleRadios6"
                                        value="Amarelo">
                                    <label class="form-check-label" for="exampleRadios6">
                                        Amarelo
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="fototipop" id="exampleRadios7"
                                        value="Branco">
                                    <label class="form-check-label" for="exampleRadios7">
                                        Branco
                                    </label>
                                </div>
                            </div>
                            <div class="col-1">
                                <br>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="fototipop" id="exampleRadios5"
                                        value="Negro">
                                    <label class="form-check-label" for="exampleRadios5">
                                        Negro
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="fototipop" id="exampleRadios4"
                                        value="Pardo" checked>
                                    <label class="form-check-label" for="exampleRadios4">
                                        Pardo
                                    </label>
                                </div>
                            </div>
                            <div class="col">
                                <label for="filiacao" class="form-label">Filiação</label>
                                <input type="text" name="maep" class="form-control" placeholder="Mãe" for="filiacao">
                            </div>
                            <div class="col">
                                <label for="filiacao" class="form-label">.</label>
                                <input type="text" name="paip" class="form-control" placeholder="Pai" for="filiacao">
                            </div>

                        </div>
                        <br>
                        <button type="submit" class="btn btn-success">Salvar</button>
                        <div class="badge bg-primary" id="to6"><?php echo $formp?></div>
                    </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    </script>
</body>

</html>