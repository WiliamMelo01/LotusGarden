<?php

class Cliente
{

    private $idCliente;
    private $nomeCliente;
    private $cpfCliente;
    private $emailCliente;
    private $senhaCliente;
    private $logradouroCliente;
    private $numLogradouroCliente;
    private $compCliente;
    private $bairroCliente;
    private $cidadeCliente;
    private $ufCliente;
    private $cepCliente;

    public function getIdCliente()
    {
        return $this->idCliente;
    }

    public function setIdCliente($idCliente)
    {
        $this->idCliente = $idCliente;
    }

    public function getNomeCliente()
    {
        return $this->nomeCliente;
    }

    public function setNomeCliente($nomeCliente)
    {
        $this->nomeCliente = $nomeCliente;
    }

    public function getCpfCliente()
    {
        return $this->cpfCliente;
    }

    public function setCpfCliente($cpfCliente)
    {
        $this->cpfCliente = $cpfCliente;
    }

    public function getEmailCliente()
    {
        return $this->emailCliente;
    }

    public function setEmailCliente($emailCliente)
    {
        $this->emailCliente = $emailCliente;
    }

    public function getSenhaCliente()
    {
        return $this->senhaCliente;
    }

    public function setSenhaCliente($senhaCliente)
    {
        $this->senhaCliente = $senhaCliente;
    }

    public function getLogradouroCliente()
    {
        return $this->logradouroCliente;
    }

    public function setLogradouroCliente($logradouroCliente)
    {
        $this->logradouroCliente = $logradouroCliente;
    }

    public function getNumLogradouroCliente()
    {
        return $this->numLogradouroCliente;
    }

    public function setNumLogradouroCliente($numLogradouroCliente)
    {
        $this->numLogradouroCliente = $numLogradouroCliente;
    }

    public function getCompCliente()
    {
        return $this->compCliente;
    }

    public function setCompCliente($compCliente)
    {
        $this->compCliente = $compCliente;
    }

    public function getBairroCliente()
    {
        return $this->bairroCliente;
    }

    public function setBairroCliente($bairroCliente)
    {
        $this->bairroCliente = $bairroCliente;
    }

    public function getCidadeCliente()
    {
        return $this->cidadeCliente;
    }

    public function setCidadeCliente($cidadeCliente)
    {
        $this->cidadeCliente = $cidadeCliente;
    }

    public function getUfCliente()
    {
        return $this->ufCliente;
    }

    public function setUfCliente($ufCliente)
    {
        $this->ufCliente = $ufCliente;
    }

    public function getCepCliente()
    {
        return $this->cepCliente;
    }

    public function setCepCliente($cepCliente)
    {
        $this->cepCliente = $cepCliente;
    }
}
