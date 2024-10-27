<?php
   session_start();
   $nomealuno = $_SESSION['nomealuno'];
   $atode = $_SESSION['atode'];
   $cep = $_SESSION['cep'];
   $pai = $_SESSION['pai'];
   $mae = $_SESSION['mae'];
   $nacionalidade = $_SESSION['nacionalidade'];
   $naturalidade = $_SESSION['naturalidade'];
   $estado = $_SESSION['estado'];
   $nascido = $_SESSION['nascido'];
   $ci = $_SESSION['ci'];
   $concluido = $_SESSION['concluido'];
   $tecnico = $_SESSION['tecnico'];
   $tecnologico = $_SESSION['tecnologico'];
   $titulado = $_SESSION['titulado'];
   $data = $_SESSION['data'];



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Certificado</title>

    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: center;
        }
        .full-width {
            width: 100%;
        }
    </style>
    
</head>
    <center>
           <body style="background-color: rgb(249, 244, 190);">
    
            <h5>
                  <div class="container-fluid">
                    <div style="background-color: white; margin-top: 30px; width: 1400px; border: solid 1px;">
        
        
                        <div class="justify" style="width: 1300px;">
                            <h2 style="padding-top: 20px;"> SENAC – UNIDADE DE ENSINO TÉCNICO DO CEP DE <span>  <?php echo $cep; ?>  </span></h2>
        
                               <div style="font-size: 17px;"> Endereço Av. JK, 1825 - Vila Bretas - Governador Valadares/MG <br>
                                Ato de criação: Portaria SEEMG nº 520/05, de 03 de Maio de 2005 <br>
                                Mudança de denominação: Resolução CR/SENACMG nº 709/12, de 29 de novembro de 2012 <br>
                                <span> <?php echo $atode; ?> </span> <br> </div>
        
        
                                <h1 style="margin-top: 25px;">DIPLOMA DE TÉCNICO DE NIVEL MÉDIO</h1>
                                <br>
        
                                <h7 style="font-size: 17px;"> O Diretor da unidade educacional </h7> <strong style="color: black; font-size: 18px;"> SENAC - UNIDADE DE ENSINO
                                    TÉCNICO DO
                                    CEP DE GOVERNADOR VALADARES, confere a </strong> <br>
                                <span style="font-size: 20px;"> <?php echo "<h1 style='font-size: 50 px;'>  $nomealuno ,</h1>"; ?></span>
                        </div>
                        <br><br>
        
        
        
                        <div class="justificado" style="margin-top: -15px; font-size: 19px;">
        
                            filho(a) de <span> <?php echo $pai; ?> </span> e de
                            <span> <?php echo $mae; ?> </span>, nacionalidade
                            <?php echo $nacionalidade; ?>, natural de <?php echo $naturalidade; ?> , Estado <?php echo $estado; ?>, <br>
                             nascido(a) em <?php echo $nascido; ?>, Carteira de Identidade nº <?php echo $ci; ?>
                            (órgão expedidor/UF), o presente Diploma por haver concluído em <?php echo $concluido; ?>, <br>
                            a Habilitação Profissional de <?php echo $tecnico; ?>, do Eixo Tecnológico
                            <?php echo $tecnologico; ?>. <br><br><br>

                             <div>Título profissional conferido: <?php echo $tecnico; ?> </div>


                            <h5>
                               <strong></strong> Fundamentação legal: <span style="color: rgb(62, 123, 220);"> Diploma expedido
                                    de
                                    acordo com o Art. 24, inc. VII e Art. 36D da Lei Federal
                                    n.º
                                    9.394, de 20 de dezembro de 1996 </span>
                            </h5>
                        </div>
                        Governador Valadares, <?php echo $data; ?>
        
        
        
        
                        <br><br><br>
                        <div style="justify-content:center;">
                            <table style="border: solid white 0px;">
                                <tr>
                                    <td style="width: 600px; padding-top: 30px; border:solid white 0px;">
        
                                        ____________________________________________________________ <br>
                                        Tamires Railane Pereira <br>
                                        SECRETÁRIO ESCOLAR <br>
                                        Portaria SENACMG nº 092/2017
        
                                    </td>
        
                                    <td style="width: 600px; border:solid white 0px;">
        
                                        ____________________________________________________________ <br>
                                        <?php echo $titulado; ?> <br>
                                        TITULADO (A)
        
        
                                    </td>
        
                                    <td style="width: 600px;  padding-top: 30px;  border:solid white 0px;">
        
                                        _____________________________________________________________ <br>
                                        Daniele Moura Soares Farias <br>
                                        DIRETOR DE ESCOLA <br>
                                        Portaria SENACMG nº 0106/2020
        
        
                                    </td>
                                </tr>
                            </table>
                        </div>
        
                    </div>
                </div>
            </h5>
    </center>

    <div class="container-fluid">
        <div class="jumbotron" style="background-color: white; width: 1400px; margin-left: 250px; margin-top: 2000px;">
        <table>
           <h5>
                <tr>
                    <div class="td" style="border-top: solid 1px; border-left: 1px solid;border-right: solid 1px;">
                      <h7 style="margin-left: 5px ;"> CURSO TÉCNICO EM ---------------------------------- </h7>
                    
                    </div>
                <tr>

                <tr>
                    <div class="col" style="border-top: solid 1px; border-left: 1px solid;border-right: solid 1px;">
                      <h7 style="margin-left: 5px;">  NOME DO ALUNO (A): </h7>
                    
                    </div>
                <tr>

                <tr>
                    <div class="col" style="border-top: solid 1px; border-left: 1px solid;border-right: solid 1px;">
                        <center>EDUCAÇÃO PROFISSIONAL TÉCNICA DE NIVEL MÉDIO</center>
                    
                    </div>
                </tr>

                <tr>
                    <div style="border-left: 1px solid;border-right: solid 1px;">
                     <td colspan="2"> <br>
                        <div style="margin-left: 180px;"> UNIDADES CURRICULARES </div>
                     </td> 
                     
                     <td> <br> <div style="text-align: center;"> CARGA HORÁRIA </div> </td>
                    <div>                  
                </tr>

                <tr>
                    <div style="border-left: 1px solid;border-right: solid 1px;">
                     <td colspan="2"> <br>
                        <div style="margin-left: 180px;">
                            <div id="unidade1">- </div>
                            <div id="unidade1">- </div>
                            <div id="unidade1">- </div>
                            <div id="unidade1"> -</div>
                            <div id="unidade1">- </div>
                          </div>
                     </td> 
                     
                     <td> <br> <div style="margin-top: px;"></div> </td>
                    <div>                  
                </tr>
           

                    <tr>
                        <div style="border-left: 1px solid;border-right: solid 1px;">
                         <td colspan="2">
                            <div style="text-align: right; height: 8px;"> CARGA HORÁRIA TOTAL </div>
                         </td> 
                             
                         <td> <div style="text-align: right; height: 8px;"> HORAS </div> </td>
                        <div> 
                         
                    </tr>
        

                    <tr>
                        <div>
                         <td colspan="2" style="border-bottom: 0px solid;"> 
                            <div style="margin-right: 80px;">ENSINO MÉDIO OU EQUIVALENTE</div>
                         </td> 
                         
                         <td style="border-bottom: 0px;">  <div style="text-align: left;"> OBSERVAÇÕES </div> </td>
                        <div> 
                     
                    </tr>
      
                
                <tr>
                    <div> 
                     <td colspan="2" style="border-left: 1px solid;border-right: 1px; border-top:solid white 0px; text-align: left ; border-bottom: 1px;"> <br>
                        <div style="margin-left: 1px;">
                            <div id="unidade1">ANO DE CONCLUSÃO: </div> <br>
                            <div id="unidade2">ESTABELECIMENTO: </div> <br>
                            <div id="unidade3">ENDEREÇO: </div> <br>
                            <div id="unidade4">MUNICÍPIO/UF: </div> <br>
                        </div>
                     </td> 
                     
                     <td style="border-top: 0px;"> <br> <div></div> </td>
                    <div>                  
                </tr>
         
                <tr>
  
                        <td>
                         <div>REGISTRO DE EXPEDIÇÃO <br> (Título expedido nos termos do Art. 38, da <br> Resolução CNE/CEB nº 06/12) <br> <br>
                             <div style="text-align: left;">
                                 <div>Registro n°</div> <br>
                                 <div>Folha n°</div> <br>
                                 <div>Livro n°</div> <br> 
                                 <div style="text-align: center;">....................,.....de...............de.............. <br><br>
                                    ............................................ <br><br>
                                              Diretor de Escola <br>
                                     Portaria SENACMG nº--------/----------
                                 </div>
                             </div>   
                         </div>
                        </td>
                       
                        
                        
                        <td>
                            <div>APROVAÇÃO DO PLANO DE CURSO <br>
                                (Art. 20, da Resolução CNE/CEB nº 06/12). <br> <br>
                                .......................nº------/----, de----/-----/------
                                </div> 
                            <hr style="border: solid 1px;">
                            <div>Curso cadastrado no SISTEC/MEC em .../.../.....,<br>
                                Nos termos do Inciso IX do Art.22, da Resolução <br> 
                                CNE/CEB nº 06/12, de 20.09.12.
                                </div> 
                            <hr style="border: solid 1px;">
                            <div>CÓDIGO AUTENTICADOR DO DIPLOMA <br>
                                (Art. 38, da Resolução CNE/CEB nº 06/2012). <br> <br>
                                ....................................................
                                <br><br><br><br>
                                </div> 
                        </td>
                         
                        <td>
                            <div >ORGÃO DE FISCALIZAÇÃO PROFISSIONAL</div>
                            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                             
                        </td>

                </tr>
         
         
            </h5>
          
        </table>

    </div>
    <br><br><br>    

</body>

</html>