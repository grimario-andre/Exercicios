<?php

interface Icaneta {
    public function escrever():bool;
    public function tampar():bool;
    public function destampar():bool;
}

?>

<?php 

class Caneta implements Icaneta {
    private float $ponta;
    private string $corTinta;
    private int $nivelCarga;
    private string $marca;


    public function __construct($ponta, $corTinta, $nivelCarga, $marca )
    {
        self::setPonta($ponta);
        if (!self::verificaCorTinta($corTinta)) {
            die;
        }
        self::setNivelCarga($nivelCarga);
        self::setMarca($marca);
    }

    public function escrever():bool
    {
        return true;
    }


    public function tampar():bool
    {
        return false;
    }


    public function destampar():bool
    {
        return true;
    }
    

    private function verificaCorTinta($corTinta): bool
    {
        $value = [
            'azul',
            'preta',
            'vermelha'
        ];
        
        if (!in_array($corTinta, $value)) {
            return false;
        }

        self::setCorTinta($corTinta);

        return true;
    }


    #region GETTERS & SETTERS
    /**
     * Get the value of ponta
     */ 
    public function getPonta()
    {
        return $this->ponta;
    }

    /**
     * Set the value of ponta
     *
     * @return  self
     */ 
    public function setPonta($ponta)
    {
        $this->ponta = $ponta;

        return $this;
    }

    /**
     * Get the value of corTinta
     */ 
    public function getCorTinta()
    {
        return $this->corTinta;
    }

    /**
     * Set the value of corTinta
     *
     * @return  self
     */ 
    public function setCorTinta($corTinta)
    {
        $this->corTinta = $corTinta;

        return $this;
    }

    /**
     * Get the value of nivelCarga
     */ 
    public function getNivelCarga()
    {
        return $this->nivelCarga;
    }

    /**
     * Set the value of nivelCarga
     *
     * @return  self
     */ 
    public function setNivelCarga($nivelCarga)
    {
        $this->nivelCarga = $nivelCarga;

        return $this;
    }

    /**
     * Get the value of marca
     */ 
    public function getMarca()
    {
        return $this->marca;
    }

    /**
     * Set the value of marca
     *
     * @return  self
     */ 
    public function setMarca($marca)
    {
        $this->marca = $marca;

        return $this;
    }

    #endregion
}

?>

<?php 

    $caneta = new Caneta(0.5, 'preta', 100, 'Bic');

    echo '<pre>';
    var_dump($caneta);
    echo '</pre>';
    exit;

?>