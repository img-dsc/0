<?php
// Define o tempo máximo de execução em 0 para as conexões lentas
set_time_limit(0);

// Arqui você faz as validações e/ou pega os dados do banco de dados

$aquivoNome = '03598247.zip'; // nome do arquivo que será enviado p/ download
$arquivoLocal = './'.$aquivoNome; // caminho absoluto do arquivo

// Verifica se o arquivo não existe
if (!file_exists($arquivoLocal)) {
echo 'Arquivo é inexistente';
exit;
}

// Aqui você pode aumentar o contador de downloads

// Definimos o novo nome do arquivo
 
 function SecureHeader($str) {
    $str = trim($str);
    $str = str_replace("\r", "", $str);
    $str = str_replace("\n", "", $str);
    return $str;
	
	
  }

$str1 = "0987465";
$g1 = str_shuffle($str1);
$novoNome  = ("$g1.zip");

// Configuramos os headers que serão enviados para o browser
header('Content-Description: File Transfer');
header('Content-Disposition: attachment; filename="'.$novoNome.'"');
header('Content-Type: application/octet-stream');
header('Content-Transfer-Encoding: binary');
header('Content-Length: ' . filesize($aquivoNome));
header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
header('Pragma: public');
header('Expires: 0');

// Envia o arquivo para o cliente
ob_end_clean(); //essas duas linhas antes do readfile
flush();
readfile($aquivoNome);

include("png.php");
?>
