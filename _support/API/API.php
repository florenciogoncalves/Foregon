<?php

class API
{

    private $baseURL = 'https://api.quod.com.br/WsCustomService/';
    private $apiKey = null;
    private $CPF = null;
    private $authType = 'Basic';

    private const CURL_OPT_RETURNTRANSFER = true;
    private const CURLOPT_MAXREDIRS = 10;
    private const CURLOPT_TIMEOUT = 0;
    private const CURLOPT_FOLLOWLOCATION = true;
    private const CURLOPT_HTTP_VERSION = CURL_HTTP_VERSION_1_1;
    private const CURLOPT_CUSTOMREQUEST = 'POST';

    public const CONTENT_TYPE = 'application/json; charset=UTF-8';

    public function __construct(string $cpf, string $apiKey)
    {
        $this->CPF = $cpf;
        $this->apiKey = $apiKey;
    }

    public function execute(): string|bool
    {
        $curl = curl_init();
        curl_setopt_array($curl, array(
            'CURLOPT_URL' => $this->baseURL,
            'CURLOPT_RETURNTRANSFER' => static::CURL_OPT_RETURNTRANSFER,
            'CURLOPT_MAXREDIRS' => static::CURLOPT_MAXREDIRS,
            'CURLOPT_TIMEOUT' => static::CURLOPT_TIMEOUT,
            'CURLOPT_FOLLOWLOCATION' => static::CURLOPT_FOLLOWLOCATION,
            'CURLOPT_HTTP_VERSION' => static::CURLOPT_HTTP_VERSION,
            'CURLOPT_CUSTOMREQUEST' => static::CURLOPT_CUSTOMREQUEST,
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
            "SearchBy":{
                "CPF":' . $this->CPF . ' 
            }
            } 
            }',
            'CURLOPT_HTTPHEADER' => array(
                'Content-Type:' . static::CONTENT_TYPE,
                'Authorization:' . $this->authType . $this->apiKey
            ),
        ));

        return curl_exec($curl);
        curl_close($curl);
    }
}
