<?php namespace App\Models;

use CodeIgniter\Model;

class PollingStationModel extends Model{
  protected $table = 'polling_station';
  protected $allowedFields = ['name',  'location',  'updated_at'];
 

}
