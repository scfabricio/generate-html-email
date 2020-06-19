<?php

//pega os elementos do post
$nomeEmail = $_POST['nomeEmail'];
$diretorioEmail = $_POST['diretorioEmail'];
$topoEmail = $_POST['topoEmail'];
$alturaTopoEmail = $_POST['alturaTopoEmail'];
$rodapeEmail = $_POST['rodapeEmail'];
$alturaRodapeEmail = $_POST['alturaRodapeEmail'];
$conteudoEmail = $_POST['conteudoEmail'];
$estiloEmail = $_POST['estiloEmail'];

$conteudoReplace = str_replace("<p>&nbsp;</p>"," ",$conteudoEmail);
$conteudoReplace = str_replace("<p style=\"text-align: center;\">&nbsp;</p>"," ",$conteudoReplace);
$conteudoReplace = str_replace("<p style=\"text-align: right;\">&nbsp;</p>"," ",$conteudoReplace);
$conteudoReplace = str_replace("<p>","<p $estiloEmail >",$conteudoReplace);

//replaces nos estilos
$estiloEmailli = str_replace("padding:0 40px 0 40px;","padding:0 40px 0 15px;",$estiloEmail);
$estiloEmailh6 = str_replace(" font-size:14px;","",$estiloEmail);
$estiloEmailcenter = str_replace("font-size:14px;","font-size:14px; text-align: center;",$estiloEmail);
$estiloEmailright = str_replace("font-size:14px;","font-size:14px; text-align: right;",$estiloEmail);

//ultimo conteudo
$conteudoReplace = str_replace("<h6>","<h6 $estiloEmailh6 >",$conteudoReplace);
$conteudoReplace = str_replace("<li>","<li $estiloEmailli >",$conteudoReplace);
$conteudoReplace = str_replace("<p style=\"text-align: center;\">","<p $estiloEmailcenter >",$conteudoReplace);
$conteudoReplace = str_replace("<p style=\"text-align: right;\">","<p $estiloEmailright >",$conteudoReplace);


$arquivo = $nomeEmail.'.html';

$conteudo ='<body style="background:#efefef">
            <center>
                <table width="600" border="0" cellspacing="0" style="background:#fff">
                    <tr>
                        <td height="'.$alturaTopoEmail.'" colspan="5" style="padding: 10px;">
                            <img src="'.$topoEmail.'" alt="" width="600" height="'.$alturaTopoEmail.'" border="0">
                        </td>
                    </tr>
                    <tr>
                      <td colspan="5" style="background:#fff" height="100%">
                          <br>
                          '.$conteudoReplace.'
                          <br>
                      </td>
                    </tr>
                    <tr>
                        <td height="'.$alturaRodapeEmail.'" colspan="5" style="padding: 10px;">
                            <img alt="" width="600" height="'.$alturaRodapeEmail.'" border="0" src="'.$rodapeEmail.'" usemap="#Map">
                        </td>
                    </tr>
                </table>
		    </center>';

//verifica se o diretorio existe e cria o dir
if (!file_exists(dirname(dirname(__FILE__)).'/emails/'.$diretorioEmail)){
    mkdir(dirname(dirname(__FILE__)).'/emails/'.$diretorioEmail, 0700);
}

//cria o arquivo
file_put_contents(dirname(dirname(__FILE__)).'/emails/'.$diretorioEmail.'/'.$arquivo , $conteudo);

header('Location: /gerador-de-emails/');

?>