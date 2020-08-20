<?php namespace App\Models;

use CodeIgniter\Model;

class MemberTypeModel extends Model{
  protected $table = 'membertype';
  protected $allowedFields = ['membertype',  'description',  'updated_at'];
 

}
