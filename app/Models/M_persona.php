<?php 
namespace App\Models;

use CodeIgniter\Model;

class M_persona extends Model{
    protected $table      = 'cliente';
    // Uncomment below if you want add primary key
     protected $primaryKey = 'id';

    protected $allowedFields = ['nombre','usuario','correo','contraseña'];
}