<?php
abstract class FabricaEscrever
{
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

    abstract public function create(): ObjetoEscrever;
    abstract public function read();
    abstract public function update($arg);

}

interface ObjetoEscrever
{
    public function escrever(): bool;
}

class Caneta extends FabricaEscrever implements ObjetoEscrever
{
    public function __construct($nome,$marca)
    {
        parent::setNome($nome);
        parent::setMarca($marca);
    }

    public function __destruct()
    {
        Caneta::class;
    }

    public function create(): ObjetoEscrever
    {
        return new Caneta(parent::getNome(),parent::getMarca());
    }

    public function read()
    {
        return Caneta::class;
    }


    public function update($arg)
    {
        parent::setNome($arg);

    }

    public function escrever(): bool
    {
        return true;
    }
   
}


class CanetaAzul extends FabricaEscrever implements ObjetoEscrever
{
    public function __construct($nome, $marca)
    {
        parent::setNome($nome);
        parent::setMarca($marca);
    }

    public function __destruct()
    {
        CanetaAzul::class;
    }

    public function create(): ObjetoEscrever
    {
        return new Caneta(parent::getNome(), parent::getMarca());
    }

    public function read()
    {
        return Caneta::class;
    }


    public function update($arg)
    {
        parent::setNome($arg);

    }

    public function escrever(): bool
    {
        return true;
    }

}


$caneta = new Caneta("Caneta Vermelha", 'Bic');

$caneta->create();
// $caneta->update('Caneta Preta');

$canetaAzul = new CanetaAzul("Caneta Azul", "Faber Castel");

$canetaAzul->create();

echo '<pre>';
print_r($caneta->read());

echo '</pre>';



echo '<pre>';

print_r($canetaAzul->read(0));
echo '</pre>';
die;