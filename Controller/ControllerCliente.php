<?php

require_once  'DAO/DAOCliente.php';
class ControllerCliente
{

    public function criptografarSenha($Cliente)
    {
        return password_hash($Cliente->getSenhaCliente(), PASSWORD_DEFAULT);
    }

    public function verificarCpfValido($Cliente)
    {

        $cpf = $Cliente->getCpfCliente();

        //removendo os pontos do cpf
        $cpf = str_replace(".", "", $cpf);
        //removendo o traço do cpf
        $cpf = str_replace("-", "", $cpf);

        // //criando um vetor
        $vetorCpf = array();

        //separando os dígitos do cpf um em cada posição do vetor

        //length = tamanho/elementos
        for ($i = 0; $i < (strlen($cpf)); $i++) {
            //substring = pega um pedaço da string
            $vetorCpf[$i] = substr($cpf, $i, 1);
        }

        //cálculo do 1º dígito do CPF
        $contador = 10;
        $soma1 = 0;
        for ($i = 0; $i < 9; $i++) {
            $soma1 = $soma1 + ($vetorCpf[$i] * $contador);
            $contador--;
        }
        $digito1 = ($soma1 % 11);
        if ($digito1 < 2) {
            $digito1 = 0;
        } else {
            $digito1 = 11 - $digito1;
        }

        //cálculo do 2º dígito do CPF
        $contador = 11;
        $soma2 = 0;
        for ($i = 0; $i < 9; $i++) {
            $soma2 = $soma2 + ($vetorCpf[$i] * $contador);
            $contador--;
        }

        $soma2 += $digito1 * 2;

        $digito2 = ($soma2 % 11);

        if ($digito2 < 2) {
            $digito2 = 0;
        } else {
            $digito2 = 11 - $digito2;
        }

        $blacklist = array(
            '00000000000', '11111111111', '22222222222', '33333333333', '44444444444', '55555555555', '66666666666', '77777777777', '88888888888', '99999999999'
        );

        if ($digito1 == $cpf[9] && $digito2 == $cpf[10] && !in_array($cpf, $blacklist)) {
            return true;
        } else {
            return false;
        }
    }
}
