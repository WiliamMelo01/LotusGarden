<?php
class Conexao
{

    public static function conectar()
    {

        $conexao = new PDO('mysql:dbname=4184430_lotusgarden;host=fdb30.awardspace.net;port=3306;charset=utf8', '4184430_lotusgarden', 'B4d@md2TvvAA#vvua');

        $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        return $conexao;
    }
}
