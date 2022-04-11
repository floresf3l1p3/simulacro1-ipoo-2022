<?php

/**En la clase Prestamo:
1. Se registra la siguiente información: identificación, código del electrodoméstico, fecha otorgamiento,
monto, cantidad_de_cuotas, taza de interés, la colección de cuotas y la referencia a la persona que solicito el préstamo.
2. Método constructor que recibe como parámetros los siguientes valores: identificación, monto, cantidad
de cuotas, taza de interés y la referencia a la persona que solicito el préstamo. El constructor debe asignar los valores recibidos a las variables instancias que corresponda.
3. Los métodos de acceso de cada uno de los atributos de la clase.
4. Redefinir el método _toString para que retorne la información de los atributos de la clase.
5. Implementar el método privado calcularInteresPrestamo(numCuota) que recibe por parámetro el numero de la cuota y calcula el importe del interés sobre el saldo deudor.
Por ejemplo si el préstamo tiene 5 cuotas, el monto total = 50000 y el interés 0.1% entonces el monto del
interés sobre saldo deudor que debe calcularse para cada una de las cuotas deben ser los siguientes:
 interés cuota 1: 50 000 * 0.01 = 500
 interés cuota 2: ( 50 000- (50 000 /5) ) * 0.01 = 400
 interés cuota 3: ( 50 000 - ( (50 000 /5)*2) ) * 0.01 = 300
 interés cuota 4: (50 000 - ( (50 000 /5)*3 )) * 0.01 = 200
 interés cuota 5: (50 000 - ( (50 000 /5)*4 )) * 0.01 = 100 */

class Prestamo
{

    private $identificacion;
    private $codigoElectrodomestico;
    private $fechaOtorgamiento;
    private $monto;
    private $cantidad_de_cuotas;
    private $tazaDeInteres;
    private $coleccionCuotas;
    private $objPerson;
    //

    public function __construct($identificacion, $codigoElectrodomestico, $fechaOtorgamiento, $monto, $cantidad_de_cuotas, $tazaDeInteres, $coleccionCuotas, $objPerson)
    {
        $this->identificacion = $identificacion;
        $this->codigoElectrodomestico = $codigoElectrodomestico;
        $this->fechaOtorgamiento = $fechaOtorgamiento;
        $this->monto = $monto;
        $this->cantidad_de_cuotas = $cantidad_de_cuotas;
        $this->tazaDeInteres = $tazaDeInteres;
        $this->coleccionCuotas = $coleccionCuotas;
        $this->objPerson = $objPerson;
    }


    /**
     * Get the value of identificacion
     */
    public function getIdentificacion()
    {
        return $this->identificacion;
    }

    /**
     * Set the value of identificacion
     *
     * @return  self
     */
    public function setIdentificacion($identificacion)
    {
        $this->identificacion = $identificacion;
    }

    /**
     * Get the value of codigoElectrodomestico
     */
    public function getCodigoElectrodomestico()
    {
        return $this->codigoElectrodomestico;
    }

    /**
     * Set the value of codigoElectrodomestico
     *
     * @return  self
     */
    public function setCodigoElectrodomestico($codigoElectrodomestico)
    {
        $this->codigoElectrodomestico = $codigoElectrodomestico;
    }

    /**
     * Get the value of fechaOtorgamiento
     */
    public function getFechaOtorgamiento()
    {
        return $this->fechaOtorgamiento;
    }

    /**
     * Set the value of fechaOtorgamiento
     *
     * @return  self
     */
    public function setFechaOtorgamiento($fechaOtorgamiento)
    {
        $this->fechaOtorgamiento = $fechaOtorgamiento;
    }

    /**
     * Get the value of monto
     */
    public function getMonto()
    {
        return $this->monto;
    }

    /**
     * Set the value of monto
     *
     * @return  self
     */
    public function setMonto($monto)
    {
        $this->monto = $monto;
    }

    /**
     * Get the value of cantidad_de_cuotas
     */
    public function getCantidad_de_cuotas()
    {
        return $this->cantidad_de_cuotas;
    }

    /**
     * Set the value of cantidad_de_cuotas
     *
     * @return  self
     */
    public function setCantidad_de_cuotas($cantidad_de_cuotas)
    {
        $this->cantidad_de_cuotas = $cantidad_de_cuotas;
    }

    /**
     * Get the value of tazaDeInteres
     */
    public function getTazaDeInteres()
    {
        return $this->tazaDeInteres;
    }

    /**
     * Set the value of tazaDeInteres
     *
     * @return  self
     */
    public function setTazaDeInteres($tazaDeInteres)
    {
        $this->tazaDeInteres = $tazaDeInteres;
    }

    /**
     * Get the value of coleccionCuotas
     */
    public function getColeccionCuotas()
    {
        return $this->coleccionCuotas;
    }

    /**
     * Set the value of coleccionCuotas
     *
     * @return  self
     */
    public function setColeccionCuotas($coleccionCuotas)
    {
        $this->coleccionCuotas = $coleccionCuotas;
    }

    /**
     * Get the value of objPerson
     */
    public function getObjPerson()
    {
        return $this->objPerson;
    }

    /**
     * Set the value of objPerson
     *
     * @return  self
     */
    public function setObjPerson($objPerson)
    {
        $this->objPerson = $objPerson;
    }

    public function __toString()
    {
        $objPerson = $this->getObjPerson();
        $str = "\nDatos del cliente:\n" . $objPerson . "\n" . "Id del producto: " . $this->getIdentificacion() . "\nCodigo Producto: " . $this->getCodigoElectrodomestico() . "\nFecha otorgamiento: " . $this->getFechaOtorgamiento() . "\nCant. Cuotas: " . $this->getCantidad_de_cuotas() . "\nTaza de interez aplicada: " . $this->getTazaDeInteres() . "\nMonto: $" . $this->getMonto();
        return $str;
    }

    /**5. Implementar el método privado calcularInteresPrestamo(numCuota) que recibe por parámetro el numero de la cuota y calcula el importe del interés sobre el saldo deudor.
Por ejemplo si el préstamo tiene 5 cuotas, el monto total = 50000 y el interés 0.1% entonces el monto del
interés sobre saldo deudor que debe calcularse para cada una de las cuotas deben ser los siguientes:
 interés cuota 1: 50 000 * 0.01 = 500
 interés cuota 2: ( 50 000- (50 000 /5) ) * 0.01 = 400
 interés cuota 3: ( 50 000 - ( (50 000 /5)*2) ) * 0.01 = 300
 interés cuota 4: (50 000 - ( (50 000 /5)*3 )) * 0.01 = 200
 interés cuota 5: (50 000 - ( (50 000 /5)*4 )) * 0.01 = 100 
interes cuota numCuota = ( monto - (( monto/ cantidad_de_cuotas) * numCuota -1)) * taza_de_interés/0.01*/

    public function calcularInteresPrestamo($numCuota)
    {
        $interes = $numCuota . ($this->getMonto() - ($this->getMonto() / $this->getCantidad_de_cuotas()) * $numCuota - 1) * $this->getTazaDeInteres() / 0.01;
        return $interes;
    }

    /**6. Implementar el método otorgarPrestamo que setea la variable instancia fecha otorgamiento, con la
fecha actual (puede utilizar el valor retornado por la función de PHP getdate()) y genera cada una de las
cuotas dependiendo el valor almacenado en la variable instancia “cantidad_de_cuotas” y monto. El
importe total de la cuota debe ser calculado de la siguiente manera: (monto / cantidad_de_cuotas )
y el monto correspondiente al interés debe ser el valor retornado por el método calcularInteresPrestamo(numeroCuota) implementado en el inciso anterior.
     */
    public function otorgarPrestamo()
    {
        $this->setFechaOtorgamiento("");
    }


}
