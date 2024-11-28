<?php
    class Persona{
        private $dni;
        private $nombre;
        private $email;

        public function __construct($dni, $nom, $email){
            $this -> dni = $dni;
            $this -> nombre = $nom;
            $this -> email = $email;
        }
        
       
        public function getDni() : string{
            return $this -> dni;
        }
        public function getNombre() : string{
            return $this -> nombre;
        }
        public function getEmail() : string{
            return $this -> email;
        }
        public function setDni($dni){
            $this -> dni = $dni;
        }
        public function setNombre($nombre){
            $this -> nombre = $nombre;
        }
        public function setEmail($email){
            $this -> email = $email;
        }   

        public function mostrar(){
            print "Dni: " . $this -> dni . " - Nombre: " . $this -> nombre . " - Email: " . $this -> email;
        }
    }

    $persona1 = new Persona("53754340M", "Jose", "jose@gmail.com");
    
    echo $persona1 -> mostrar();

    class Estudiante extends Persona{
        private $expediente;
        public function __construct($dni, $nombre, $email, $expediente){
            parent::__construct($dni, $nombre, $email);
            $this -> expediente = $expediente;
        }
        public function getExpediente() : int{
            return $this -> expediente;
        }
        public function setExpediente($expediente){
            $this -> expediente = $expediente;
        }
        public function mostrar(){
            echo"<br>";
            print parent::mostrar(). " - Expediente: " . $this -> expediente;
        }
    }
    $estudiante1 = new Estudiante("53754340M", "Jose", "jose@gmail.com", 10);
    echo $estudiante1 -> mostrar();
?>