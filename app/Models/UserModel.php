<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table      = 'socio';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['nombre', 'apellido','dni','fecha', 'categoria', 'direccion', 'telefono', 'nombretutor', 'dnitutor', 'enfermedad'];

    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [
        'nombre' => 'required|alpha_space',
        'apellido' => 'required|alpha_space',
        'dni' => 'required|decimal|exact_length[8]|is_unique[socio.dni]',
        'categoria' => 'required',
        'direccion' => 'required|max_length[50]',
        'telefono' => 'required|numeric|max_length[10]',
        'nombretutor' => 'permit_empty|alpha_space',
        'dnitutor' => 'permit_empty|decimal|exact_length[8]|is_unique[socio.dnitutor]'
        
    ];
    protected $validationMessages = [
    ];
    protected $skipValidation     = false;

    ////Consultas

    public function dniFind($dni){
        $data = $this->db->query("SELECT   *  FROM socio WHERE dni = '$dni'");
        if(isset($data)){
            return 1;
        }
        else{
            return 0;
        }
        // return $data->getResultArray();
    }
}