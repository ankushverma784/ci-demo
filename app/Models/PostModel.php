<?php
namespace App\Models;
use CodeIgniter\model;
clsass PostModel  extends Model{
    protected $table = 'posts'; 
    
    protected $allowedFields =['title','body','thumbnail','slug'];
    public function getPosts($slug = null){
        if($slug === null){
            return $this->findAll();
        }
    }
}