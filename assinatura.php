<html lang="pt_BR">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta charset="UTF-8">
    </head>
    <body>
        <div id="assintura">
            <table width="800">
                <tbody>
                    <tr>
                        <td>
                            <span style="font-family: Verdana; font-size: 13px; font-weight: bold;color: rgb(0,47,135);" id="nome" class="nome">
                                <!-- AQUI ENTRA OS DOIS NOMES DOS FORMS (PRIMEIRO E ULTIMO NOME) -->
                                <?php 
                                    $name = ucfirst($_POST['nome']) .' '. ucfirst($_POST['sobre']);
                                    echo $name;
                                ?>
                            </span>
                            <br>
                            <span style="font-family: Verdana; font-size: 12px; color: rgb(0,47,135);" id="departamento" class="setor">
                                <!-- AQUI VEM OS DADOS DE SETOR -->
                                <?php
                                    echo $_POST['setor'];
                                ?>
                            </span>
                        </td>
				    </tr>	
                    <tr>
                        <td> 
                            <div class="boxlogo">
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img class="logo" src="assinatura.php_arquivos/clinisanitas_contagem.png" align="left">                                                                          
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            
                            <span style="font-family: Verdana; font-size: 12px; color: rgb(0,47,135);" id="telefone" class="fone">
                                <!-- AQUI ENTRA OS DOIS TELEFONES -->
                                <?php
                                    $telefone = $_POST['telefone'] ?? NULL;
                                    $corporativo = $_POST['corporativo'] ?? NULL;

                                    echo $telefone;
                                    echo '<br>';
                                    echo $corporativo;
                                ?>                                    
                            </span>
                            <br>
                            <span style="font-family: Verdana; font-size: 12px; color: rgb(0,47,135);" id="endereco" class="endereco">
                                <!-- AQUI SERÁ O SWITCH DE TOMADA DE DECISÃO PARA SABER QUAL UNIDADE E QUAL ENDEREÇO -->
                                <?php
                                    $unidade = $_POST['unidade'] ?? NULL;
                                    $andar = $_POST['andar'] == 1 || $_POST['andar'] == 3 || $_POST['andar'] == 5 ? $_POST['andar'] : NULL;

                                    switch($unidade) {
                                        case 'centro':
                                            echo "Rua Rio Grande do Sul, 620 - Barro Preto <br>
                                            Belo Horizonte/MG - Brasil";
                                            break;
                                        case 'contagem':
                                            echo "Praça José Olinto Fontes, 275 - 3° Andar - Eldorado <br>
                                            Contagem/MG - Brasil";
                                            break;
                                        case 'moc':
                                            echo "Rua Dr. Santos, 223 - Sala 204 - Centro <br>
                                            Montes Claros/MG - Brasil";
                                            break;
                                        case 'venda-nova':
                                            echo "Rua Dr. Álvaro Camargo, 2002 - São João Batista <br>
                                            Belo Horizonte/MG - Brasil ";
                                            break;
                                        case 'labbarreiro':
                                            echo "Rua Joaquim de Figueiredo, 140 - Barreiro <br>
                                            Belo Horizonte/MG - Brasil";
                                            break;
                                        case 'labcentro':
                                            echo "Rua Rio Grande do Sul, 620 - Barro Preto <br>
                                            Belo Horizonte/MG - Brasil";
                                            break;
                                        case 'labvendanova':
                                            echo "Rua Dr. Álvaro Camargo, 2002 - São João Batista <br>
                                            Belo Horizonte/MG - Brasil";
                                            break;
                                        case 'hbarreiro':
                                            echo "Rua Joaquim de Figueiredo, 140 - Barreiro <br>
                                            Belo Horizonte/MG - Brasil";
                                            break;
                                        case 'vitallis':
                                            if(isset($andar)) {
                                                echo "Rua dos Otoni, 742 - {$andar}º Andar - Santa Efigênia	<br>
                                                Belo Horizonte/MG - Brasil";
                                            }else {
                                                echo "Rua dos Otoni, 742 - Santa Efigênia <br>
                                                Belo Horizonte/MG - Brasil";
                                            }
                                            break;
                                        case 'vitallis-sp':
                                            echo "Rua Boa Vista, 254 - 11º Andar - Centro <br>
                                            São Paulo/SP - Brasil";
                                            break;
                                    }
                                ?>                                    
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3" style="font-family: Arial; font-size: 9px;  text-align: justify;" align="left">
                            <div class="disclaimer">
                                <br>
                                <p>Esta mensagem é destinada
                                    exclusivamente ao seu destinatário e as informações nela contidas são 
                                    confidenciais, protegidas por sigilo profissional ou por lei. É vedada a
                                    transmissão ou divulgação de seu conteúdo a terceiros, que não seus 
                                    destinatários. O uso não autorizado de tais informações, incluindo, mas 
                                    não se limitando a, qualquer divulgação, cópia, distribuição ou qualquer
                                    ação ou omissão, é proibido e sujeitará o agente às penalidades 
                                    cabíveis. Qualquer opinião que porventura esteja contida nesta mensagem 
                                    expressa única e exclusivamente a própria opinião do autor e não 
                                    representa a opinião da empresa.
                                </p>
                                <p>
                                <br>
                                    This message is intended solely for its addressee and 
                                    the information contained therein is confidential, and protected by 
                                    professional privilege or by law. The transmission or disclosure of its 
                                    contents to third parties other than its addressees is forbidden. 
                                    Unauthorized use of such information, including, but not limited to, any
                                    disclosure, copy, distribution or any action or omission, is prohibited
                                    and will subject the agent to the applicable penalties. The opinions 
                                    that may be contained in this message only and exclusively express the 
                                    opinion of the author and do not represent the opinion of the company.
                                </p>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </body>
</html>