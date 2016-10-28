<?php

namespace app\models\Usuario;

use yii\base\Model;

class PSFormularioSolicitarServcioRemiseriaModel extends Model {

    public $nombreAgencia;
    public $nombreUsuario;
    public $apellidoUsuario;
    public $origenUsuario;
    public $destinoUsuario;

    public function rules() {
        return[
            //([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i
            //(?:[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*|"(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21\x23-\x5b\x5d-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])*")@(?:(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?|\[(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?|[a-z0-9-]*[a-z0-9]:(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21-\x5a\x53-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])+)\])
            ['nombreAgencia', 'match', 'pattern' => '/^[a-zA-Z_ ]*$/', 'message' => 'Ingrese solo letras'],
            ['nombreUsuario', 'match', 'pattern' => '/^[a-zA-Z_ ]*$/', 'message' => 'Ingrese solo letras'],
            ['nombreUsuario', 'match', 'pattern' => '/^.{3,50}$/', 'message' => 'Ingrese como mínimo 3 y como máximo 50 letras'],
            ['apellidoUsuario', 'match', 'pattern' => '/^[a-zA-Z_ ]*$/', 'message' => 'Ingrese solo letras'],
            ['apellidoUsuario', 'match', 'pattern' => '/^.{3,50}$/', 'message' => 'Ingrese como mínimo 3 y como máximo 50 letras'],
            ['origenUsuario', 'required', 'message' => 'Campo obligatorio'],
            ['origenUsuario', 'match', 'pattern' => '/^[0-9]\d*$/', 'message' => 'Ingrese solo números'],
            ['origenUsuario', 'match', 'pattern' => '/^.{8,8}$/', 'message' => 'DNI inválido'],
            ['destinoUsuario', 'required', 'message' => 'Campo obligatorio'],
            ['destinoUsuario', 'match', 'pattern' => '/^[0-9]\d*$/', 'message' => 'Ingrese solo números'],
            ['destinoUsuario', 'match', 'pattern' => '/^.{8,20}/', 'message' => 'Ingrese como mínimo 8 y como máximo 20 números'],
        ];
    }

}

