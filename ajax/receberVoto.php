<?php 

function cripto_ssl($action, $text) {
        $encrypt = "AES-256-CBC";
        $chaveSecreta = '423a2e1df25a3044c58591dc430aee5dc8510475df90eb1d7a96f2b7f06256b7';
        $salt = '92c134742af7c0caaf500037216d9bbc';
        $chave = hash('sha256', $chaveSecreta);
        $yi = substr(hash('sha256', $salt), 0, 16);
        if ($action == 'criptografar') {
            $saida = openssl_encrypt($text, $encrypt, $chave, 0, $yi);
            $saida = base64_encode($saida);
        } else if( $action == 'descriptografar' ) {
            $saida = openssl_decrypt(base64_decode($text), $encrypt, $chave, 0, $yi);
        }
        return $saida;
}

function PDO($query, $params){
    $pdo = new PDO('mysql:host=www.db4free.net;dbname=dburnow', 'dburnow', 'dburnow12345');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $conn = $pdo->prepare($query);
    $conn->execute($params);
    $result = $conn->fetch(PDO::FETCH_ASSOC);

    return $result;
}

if ($_POST['votoPresidente'] == 1){
    $totalPresidente = PDO("UPDATE nulos_e_brancos SET nulos_e_brancos WHERE idPartido = :ID", array(':ID' => $_POST['votoPresidente']));
} else if ($_POST['votoPresidente'] == 0){
    $totalGovSSL = cripto_ssl("criptografar", (cripto_ssl("descriptografar", $totalPresidente['vpresidente']) + 1));
}

$totalPresidenteSSL = cripto_ssl("criptografar", (cripto_ssl("descriptografar", $totalPresidente['nulosPresidente']) + 1));
$totalGov = PDO("SELECT gov FROM votos WHERE idPartido = :ID", array(':ID' => $_POST['votoGov']));
$totalDep = PDO("SELECT deputado FROM votos WHERE idPartido = :ID", array(':ID' => $_POST['votoDep']));
$totalSen = PDO("SELECT senador FROM votos WHERE idPartido = :ID", array(':ID' => $_POST['votoSen']));

$totalPresidenteSSL = cripto_ssl("criptografar", (cripto_ssl("descriptografar", $totalPresidente['vpresidente']) + 1));
$totalGovSSL = cripto_ssl("criptografar", (cripto_ssl("descriptografar", $totalGov['gov']) + 1));
$totalDepSSL = cripto_ssl("criptografar", (cripto_ssl("descriptografar", $totalDep['deputado']) + 1));
$totalSenSSL = cripto_ssl("criptografar", (cripto_ssl("descriptografar", $totalSen['senador']) + 1));

PDO("UPDATE votos SET vpresidente = :PRES WHERE idPartido = :ID", array(':PRES' => $totalPresidenteSSL, ':ID' => $_POST['votoPresidente']));
PDO("UPDATE votos SET gov = :GOV WHERE idPartido = :ID", array(':PRES' => $totalGovSSL, ':ID' => $_POST['gov']));
PDO("UPDATE votos SET deputado = :DEP WHERE idPartido = :ID", array(':PRES' => $totalDepSSL, ':ID' => $_POST['deputado']));
PDO("UPDATE votos SET senador = :SEN WHERE idPartido = :ID", array(':PRES' => $totalSenSSL, ':ID' => $_POST['senador']));

