<?php

namespace App\Models;

use CodeIgniter\Model;

class AccountModel extends Model {
    $db = \Config\Database::connect();
    
    protected $table ='account';
    protected $primaryKey ='id';
    protected $allowedFields =['username', 'password'];
    
}
 
 