<?php
abstract class ClaseAbstracta
{
    //metodo con los argumentos requeridos
    abstract protected function nombrePrefijo($nombre);

}

class ClaseConcreta extends ClaseAbstracta
{

    public function nombrePrefijo($nombre) {
        if ($nombre == "Carlos") {
            $prefijo = "Mr";
        } elseif ($nombre == "Carlota") {
            $prefijo = "Mrs";
        } else {
            $prefijo = "";
        }
        return "{$prefijo} {$nombre}";
    }
}

$clase = new ClaseConcreta;
echo $clase->nombrePrefijo("Carlos"), "\n";
echo $clase->nombrePrefijo("Carlota"), "\n";



//aquí lo hizo alejo

//..teamo



?>