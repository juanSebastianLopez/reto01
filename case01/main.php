<?php

$name = strip_tags(($_POST['name']));
$surname = strip_tags(($_POST['surname']));
$age = strip_tags(($_POST['age']));


class Person{
    // Propiedades
    public $name;
    public $surname;
    public $age;
    // Metodo Constructor
    public function __construct($name,$surname,$age)
    {
        $this->nombre = $name;
        $this->apellido = $surname;
        $this->edad = $age;
       
    }
    public function getNombre():string{
        return $this->nombre;
    }
    public function getApellido():string{
        return $this->apellido;
    }
    public function getEdad(){
        return $this->edad;
    }
    public function setNombre(string $nuevoNombre){
         $this->nombre = $nuevoNombre;
    }
    public function setApellido(string $nuevoApellido){
         $this->apellido = $nuevoApellido;
    }
    public function setEdad($nuevaEdad){
         $this->edad = $nuevaEdad;
    }
    
    function validarEdad($edad){
            $texto =  '';
        if ($edad >= 18){
            $texto = "Sos mayor de edad papu!";
        }else{
            $texto = "Sos un chiquitin pete!";
        }
        return $texto;
    }
    
    function Info(){
        echo "Datos del paciente<br>";
        echo "Nombre: ".$this->nombre."<br>";
        echo "Apellido: ".$this->apellido."<br>";
        echo "Edad: ".$this->edad."<br><br>";
    }
}





$user01 = new Person($name,$surname,$age);

//echo $user01->getEdad();
$resultEdad =  $user01->validarEdad($user01->getEdad());
// echo "<br>";
// $user01->info();
// echo $user01->Info();
/*
$user01->setNombre("Jaimito");
$user01->setApellido("Rodas");
$user01->setEdad(15);
echo '<br><br>';
echo $user01->Info();

echo $user01->getApellido();
echo $user01->getEdad();
$modificarNombre = ($user01->setNombre("Sebastian <br>"));
$modificarApellido = ($user01->setApellido("Rodas <br>"));
$modificarEdad = ($user01->setEdad(50));

// echo 'Hola, que tal? <br> Soy '.$name.' '.$surname.' Y tengo '.$age.' años de edad.'; */