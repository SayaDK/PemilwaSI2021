<?php

namespace App\Models;

use CodeIgniter\Model;

class pemilwaModel extends Model
{
    protected $table = 'suara';
    protected $allowedFields = ['email','nama','emsi','bpmsi'];

    public function getCalonEMSI()
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('calon');
        return $builder->where(['role' => 1]);
    }
    public function getCalonBPMSI()
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('calon');
        return $builder->where(['role' => 2]);
    }
    public function voteEmsi($id)
    {
        
    }
}
?>