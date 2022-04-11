<?php
/**En la clase Cuota:
1. Se registra la siguiente información: número ,monto_cuota , monto_interes y cancelada (atributo que va a
contener un valor true, si la cuota esta paga y false en caso contrario)
2. Método constructor que recibe como parámetros los valores iniciales para los atributos: número,
monto_cuota y monto_interes definidos en la clase. Por defecto todas las cuotas deben ser generadas
como canceladas = false.
3. Los métodos de acceso de cada uno de los atributos de la clase.
4. Redefinir el método _toString para que retorne la información de los atributos de la clase.
5. Implementar el método darMontoFinalCuota() que retorna el importe total de la cuota mas los intereses
que deben ser aplicados. */


class Cuota
{
    private $numero;
    private $monto_cuota;
    private $monto_interes;
    private $cancela=  false;
    //
    public function __construct($numero,$monto_cuota,$monto_interes,$cancela) {
        $this->numero = $numero;
        $this->monto_cuota = $monto_cuota;
        $this->monto_interes = $monto_interes;
        $this->cancela = $cancela;//Por defecto todas las cuotas deben ser generadas como canceladas = false.
    }
    //

    /**
     * Get the value of numero
     */ 
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set the value of numero
     *
     * @return  self
     */ 
    public function setNumero($numero)
    {
        $this->numero = $numero;
    }

    /**
     * Get the value of monto_cuota
     */ 
    public function getMonto_cuota()
    {
        return $this->monto_cuota;
    }

    /**
     * Set the value of monto_cuota
     *
     * @return  self
     */ 
    public function setMonto_cuota($monto_cuota)
    {
        $this->monto_cuota = $monto_cuota;
    }

    /**
     * Get the value of monto_interes
     */ 
    public function getMonto_interes()
    {
        return $this->monto_interes;
    }

    /**
     * Set the value of monto_interes
     *
     * @return  self
     */ 
    public function setMonto_interes($monto_interes)
    {
        $this->monto_interes = $monto_interes;
    }

    /**
     * Get the value of cancela
     */ 
    public function getCancela()
    {
        return $this->cancela;
    }

    /**
     * Set the value of cancela
     *
     * @return  self
     */ 
    public function setCancela($cancela)
    {
        $this->cancela = $cancela;

    }
    //metodos de la clase
    //4. Redefinir el método _toString para que retorne la información de los atributos de la clase.
    public function  __toString()
    {
        $cadena= "Numero: ". $this->getNumero()."\nEl monto de la cuota es: ". $this->getMonto_cuota()."\nMonto interes: ". $this->getMonto_interes()."\nEstado de la deuda: ". $this->getCancela();
        return $cadena;
    }


    /**5. Implementar el método darMontoFinalCuota() que retorna el importe total de la cuota mas los intereses
que deben ser aplicados. */
    
    public function darMontoFinalCuota()
    {
        $montoFinal=$this->getMonto_cuota()+ $this->getMonto_interes();
        if ($montoFinal>0) {
            echo" -Existe deuda- ";
        } else {
            echo"-Deuda cancelada: ";
        }
        

        $montoSaldoFinal= $montoFinal;
        return $montoSaldoFinal;
    }


}

$objCuota= new Cuota(0001,10000,300,false);


echo $objCuota;
echo $objCuota->darMontoFinalCuota();