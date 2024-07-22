<?php
namespace App\Validation;
use App\Models\UserModel;
class UserRules
{
    public function categoriaEdad($fecha): bool
    {
        $stringFecha = date_format($fecha,'Y-m-d');

        $fechaA = substr($fecha, 0, 4);

        

    }
}