<?php

class ConnectionCreator
{
    public static function createConnection():PDO
    {
        $servidor="localhost";
        $banco= "vendas";
        $usuario="lukas";
        $senha="1A2b3c4d@";
        $porta=3306;
        $dsn="mysql:host=$servidor;port=$porta;dbname=$banco;charset=utf8";

        $opcoes=[
            PDO::ATTR_ERRMODE=> PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES
        ];

        return new PDO($dsn,$usuario,$senha,$opcoes);


        
    }


}
