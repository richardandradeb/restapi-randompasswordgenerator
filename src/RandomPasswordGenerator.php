<?php

namespace Richard\RandomPasswordGeneratorApi;

class RandomPasswordGenerator
{
    private string $requestMethod;
    public function __construct(string $requestMethod)
    {
        $this->requestMethod = $requestMethod;
    }

    public function generateRandomPassword() : string
    {
        if($this->requestMethod === 'GET'){

            $length = null;
            $keyspace = null;
            if(isset($_GET['length'])){
                $length = $_GET['length'];
            }
            if(isset($_GET['keyspace'])){
                $keyspace = $_GET['keyspace'];
            }

            $password = $this->solveParams($length,$keyspace);

            return json_encode([
                'password' => "$password",
                'error' => 'false'
            ]);
        }

        return json_encode([
            'error' => 'true'
        ]);
    }

    private function solveParams(?int $length, ?string $keyspace) : string
    {
        $passwordLength = 8;
        if($length !== null && $length <= 64 && $length >= 6){
            $passwordLength = $length;
        }

        $passwordKeyspace = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        if($keyspace !== null && !str_contains(' ',$keyspace) && strlen($keyspace) >= 1){
            $passwordKeyspace = $keyspace;
        }
        $passwordKeyspaceLength = strlen($passwordKeyspace);

        $password = '';
        for ($i = 1; $i <= $passwordLength; $i++){
            $password .= $passwordKeyspace[random_int(0, $passwordKeyspaceLength - 1)];
        }
        return $password;
    }
}