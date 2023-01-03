



<?php

$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => 'https://api.empresas.quod.com.br/WsQuodAPI/
QuodReport?&ver_=2.0',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'POST ',
    CURLOPT_POSTFIELDS => '{
        "QuodReportRequest": {
        "Options": {
        "IncludeBestInfo": 1,
        "IncludeCreditRiskIndicators": 1,
        "IncludeCreditRiskData": 1,
        "IncludeQuodScore": 1,
        "IncludeCreditLinesData": 1,
        "IncludeInterpretaData": 1,
        "IncludeLawSuitData": 1,
        "IncludePartnershipData": 1
},
"SearchBy": {
"CPF": "44920988443"

}
}
}',
    CURLOPT_HTTPHEADER => array(
        'Content -Type: application/json; charset=UTF -8',
        'Authorization: Basic dGVzdF9yZXNwb25kZXJAZXNwOlF1b2
QyMDIw '
    ),
));

$response = curl_exec($curl);

var_dump($response);

curl_close($curl);
echo $response;

















// require __DIR__ . "/_app/models/Model.php";
// require __DIR__ . "/_app/boot/helpers.php";
// require __DIR__ . "/_app/core/Session.php";
// require __DIR__ . "/_support/API/API.php";

// $API = new API('0076784612', 'a3rfh9hrfjj0fj02j0d0d9j9d88hd9jd');

// var_dump([
//     "execute" => $API->execute()
// ]);

// echo generateToken();
// echo codeGenerator();

// class UserModel extends Model
// {
//     public function __construct()
//     {
//         parent::__construct("users", ['nome', 'email', 'celular', 'senha']);
//     }

//     public function CreateAccount()
//     {
//         $user = [];
//         $user['nome'] = 'Silvio';
//         $user['email'] = 'silviosi794@gmail.com';
//         $user['celular'] = '940989200';
//         $user['senha'] = '123456';

//         $nome = $user['nome'];
//         // $this->update($user, 'nome = :nome', 'nome = {$nome}');

//         if ($this->delete('id = :id', 'id=15')) {
//             echo "Pass";
//         } else {
//             echo "fail";
//         }
//     }
// }

// $model = new UserModel();
// $model->CreateAccount();
