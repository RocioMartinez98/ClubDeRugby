<?php

namespace Config;

use CodeIgniter\Validation\CreditCardRules;
use CodeIgniter\Validation\FileRules;
use CodeIgniter\Validation\FormatRules;
use CodeIgniter\Validation\Rules;

class Validation
{
    //--------------------------------------------------------------------
    // Setup
    //--------------------------------------------------------------------

    /**
     * Stores the classes that contain the
     * rules that are available.
     *
     * @var string[]
     */
    public $ruleSets = [
        Rules::class,
        FormatRules::class,
        FileRules::class,
        CreditCardRules::class,
    ];

    /**
     * Specifies the views that are used to display the
     * errors.
     *
     * @var array<string, string>
     */
    public $templates = [
        'list'   => 'CodeIgniter\Validation\Views\list',
        'single' => 'CodeIgniter\Validation\Views\single',
    ];

    public $socio = [
        'nombre' => 'required|alpha_space',
        'apellido' => 'required|alpha_space',
        'dni' => 'required|decimal|exact_length[8]|is_unique[socio.dni]',
        'categoria' => 'required',
        'direccion' => 'required|max_length[50]',
        'telefono' => 'required|numeric|max_length[10]',
        'nombretutor' => 'permit_empty|alpha_space',
        'dnitutor' => 'permit_empty|decimal|exact_length[8]|is_unique[socio.dnitutor]'
        
    ];

    //--------------------------------------------------------------------
    // Rules
    //--------------------------------------------------------------------

    
}
