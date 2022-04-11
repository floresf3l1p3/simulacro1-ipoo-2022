<?php

/**En la clase Persona:
1. Se registra la siguiente información: nombre, apellido, dni, direccion, mail, telefono y neto.
2. Método constructor que recibe como parámetros los valores iniciales para los atributos definidos en la
clase.
3. Los métodos de acceso de cada uno de los atributos de la clase.
4. Redefinir el método _toString para que retorne la información de los atributos de la clase. */
class Person
{
    private $name;
    private $lastName;
    private $dni;
    private $direccion;
    private $mail;
    private $phone;
    private $neto;

    //constructor
    public function __construct($name, $lastName, $dni, $direccion, $mail, $phone,$neto)
    {
        $this->name = $name;
        $this->lastName = $lastName;
        $this->dni = $dni;
        $this->direccion = $direccion;
        $this->mail = $mail;
        $this->phone = $phone;
        $this->neto = $neto;
    }
    //metodos de acceso


    /**
     * Get the value of name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Get the value of lastName
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set the value of lastName
     *
     * @return  self
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    /**
     * Get the value of dni
     */
    public function getDni()
    {
        return $this->dni;
    }

    /**
     * Set the value of dni
     *
     * @return  self
     */
    public function setDni($dni)
    {
        $this->dni = $dni;
    }

    /**
     * Get the value of direccion
     */
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * Set the value of direccion
     *
     * @return  self
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;
    }

    /**
     * Get the value of mail
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Set the value of mail
     *
     * @return  self
     */
    public function setMail($mail)
    {
        $this->mail = $mail;
    }

    /**
     * Get the value of phone
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set the value of phone
     *
     * @return  self
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }
    
        /**
         * Get the value of neto
         */ 
        public function getNeto()
        {
                return $this->neto;
        }

        /**
         * Set the value of neto
         *
         * @return  self
         */ 
        public function setNeto($neto)
        {
                $this->neto = $neto;

        }
    
    //toString
    public function __toString()
    {
        $cadena = "Nombre:\n" . $this->getName() . "\nApellido:\n" . $this->getLastName() . "\nDNI:\n" . $this->getDni() . "\nDireccion:\n" . $this->getDireccion() . "\nMail@:\n" . $this->getMail() . "\nTelefono:\n" . $this->getPhone()."\nNeto: ". $this->getNeto();
        return $cadena;
    }

    

}

