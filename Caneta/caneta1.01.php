<?php
interface ObjetoEscrever1
{
    public function escrever(): bool;
}


abstract class FabricaEscrever1 implements ObjetoEscrever1
{

    #region GETTERS & SETTERS
    private string $nome;

    /**
     * Get the value of marca
     */ 
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     *
     * @return  self
     */ 
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }


    private string $marca;

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

    private string $modelo;

    /**
     * Get the value of modelo
     */ 
    public function getModelo()
    {
        return $this->modelo;
    }

    /**
     * Set the value of modelo
     *
     * @return  self
     */ 
    public function setModelo($modelo)
    {
        $this->modelo = $modelo;

        return $this;
    }

    #endregion


}

class Caneta1 extends FabricaEscrever1
{
    private float $pontaCaneta;

    private string $corTintaCaneta;

    private int $nivelCargaCaneta;

    private Tampa $componenteCaneta;

    protected function createTampa()
    {
        return self::setComponenteCaneta(new Tampa());
    }

    public function __construct($nome, $marca, $modelo, $pontaCaneta, $corTintaCaneta, $nivelCargaCaneta, $nomeComponente, $materiaPrima)
    {
        parent::setNome($nome);
        parent::setMarca($marca);
        parent::setModelo($modelo);
        self::setPontaCaneta($pontaCaneta);
        self::setCorTintaCaneta($corTintaCaneta);
        self::setNivelCargaCaneta($nivelCargaCaneta);
        self::createTampa();
        self::getComponenteCaneta()->setNomeComponente($nomeComponente);
        self::getComponenteCaneta()->setMateriaPrima($materiaPrima);
    }

    public function __destruct()
    {
        Caneta::class;
    }

    public function escrever(): bool
    {
        return true;
    }
   

    #region GETTERS & SETTERS
    /**
     * Get the value of pontaCaneta
     */ 
    public function getPontaCaneta()
    {
        return $this->pontaCaneta;
    }

    /**
     * Set the value of pontaCaneta
     *
     * @return  self
     */ 
    public function setPontaCaneta($pontaCaneta)
    {
        $this->pontaCaneta = $pontaCaneta;

        return $this;
    }

    /**
     * Get the value of corTintaCaneta
     */ 
    public function getCorTintaCaneta()
    {
        return $this->corTintaCaneta;
    }

    /**
     * Set the value of corTintaCaneta
     *
     * @return  self
     */ 
    public function setCorTintaCaneta($corTintaCaneta)
    {
        $this->corTintaCaneta = $corTintaCaneta;

        return $this;
    }

    /**
     * Get the value of nivelCargaCaneta
     */ 
    public function getNivelCargaCaneta()
    {
        return $this->nivelCargaCaneta;
    }

    /**
     * Set the value of nivelCargaCaneta
     *
     * @return  self
     */ 
    public function setNivelCargaCaneta($nivelCargaCaneta)
    {
        $this->nivelCargaCaneta = $nivelCargaCaneta;

        return $this;
    }

    /**
     * Get the value of componenteCaneta
     */ 
    public function getComponenteCaneta()
    {
        return $this->componenteCaneta;
    }

    /**
     * Set the value of componenteCaneta
     *
     * @return  self
     */ 
    public function setComponenteCaneta($componenteCaneta)
    {   
        $this->componenteCaneta = $componenteCaneta;
        return $this;
    }

    #endregion

}


interface ObjetoComponente
{
    public function executaTarefa(): bool;
}

abstract class FabricaComponente implements ObjetoComponente
{
    private string $nomeComponente;

    // private string $marcaComponete;
    
    // private string $modeloComponente;
     
    // private string $formaComponente;
    
    // private string $corComponente;

    // private string $tamanhoComponente; 

    #region GETTERS & SETTERS
    /**
     * Get the value of nomeComponente
     */ 
    public function getNomeComponente()
    {
        return $this->nomeComponente;
    }

    /**
     * Set the value of nomeComponente
     *
     * @return  self
     */ 
    public function setNomeComponente($nomeComponente)
    {
        $this->nomeComponente = $nomeComponente;

        return $this;
    }

    /**
     * Get the value of marcaComponete
     */ 
    public function getMarcaComponete()
    {
        return $this->marcaComponete;
    }

    /**
     * Set the value of marcaComponete
     *
     * @return  self
     */ 
    public function setMarcaComponete($marcaComponete)
    {
        $this->marcaComponete = $marcaComponete;

        return $this;
    }

    /**
     * Get the value of modeloComponente
     */ 
    public function getModeloComponente()
    {
        return $this->modeloComponente;
    }

    /**
     * Set the value of modeloComponente
     *
     * @return  self
     */ 
    public function setModeloComponente($modeloComponente)
    {
        $this->modeloComponente = $modeloComponente;

        return $this;
    }

    /**
     * Get the value of formaComponente
     */ 
    public function getFormaComponente()
    {
        return $this->formaComponente;
    }

    /**
     * Set the value of formaComponente
     *
     * @return  self
     */ 
    public function setFormaComponente($formaComponente)
    {
        $this->formaComponente = $formaComponente;

        return $this;
    }

    /**
     * Get the value of corComponente
     */ 
    public function getCorComponente()
    {
        return $this->corComponente;
    }

    /**
     * Set the value of corComponente
     *
     * @return  self
     */ 
    public function setCorComponente($corComponente)
    {
        $this->corComponente = $corComponente;

        return $this;
    }

    /**
     * Get the value of tamanhoComponente
     */ 
    public function getTamanhoComponente()
    {
        return $this->tamanhoComponente;
    }

    /**
     * Set the value of tamanhoComponente
     *
     * @return  self
     */ 
    public function setTamanhoComponente($tamanhoComponente)
    {
        $this->tamanhoComponente = $tamanhoComponente;

        return $this;
    }


    #endregion
}


class Tampa extends FabricaComponente
{
    private string $materiaPrima;

    public function __construct()
    {
        
    }

    public function __destruct()
    {
        self::class;
    }
    
    public function executaTarefa(): bool
    {
        return true;
    }

    /**
     * Get the value of materiaPrima
     */ 
    public function getMateriaPrima()
    {
        return $this->materiaPrima;
    }

    /**
     * Set the value of materiaPrima
     *
     * @return  self
     */ 
    public function setMateriaPrima($materiaPrima)
    {
        $this->materiaPrima = $materiaPrima;

        return $this;
    }
}

// $tampa = new Tampa('Tampa Bic', 'Plastico');
$caneta = new Caneta1('Caneta', 'Bic', 'Esferografica', 0.5, 'Azul', 100, 'Tampa Bic', 'Plastico');
// $canetaPreta = new Caneta1();
// $canetaVermelha = new Caneta1();


echo '<pre>';
print_r($caneta->getComponenteCaneta()->executaTarefa());

echo '</pre>';
