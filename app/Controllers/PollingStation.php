<?php namespace App\Controllers;
 
use CodeIgniter\Controller;
use App\Models\PollingStationModel;
 
class PollingStation extends Controller
{
 
    public function index()
    {    
        $model = new PollingStationModel();
 
        $data['pollingstations'] = $model->orderBy('id', 'DESC')->findAll();
        
        
        echo view('templates/header', $data);
		echo view('pollingstations/index');
		echo view('templates/footer');
    }    
 //create
    public function create()
    {    
        helper(['form']);
        
        echo view('templates/header');
		echo view('pollingstations/create');
		echo view('templates/footer');
    }
 
    public function store()
    {  
 
        helper(['form', 'url']);
         
        $model = new PollingStationModel();
 
        $data = [
 
            'name' => $this->request->getVar('name'),
            'location'  => $this->request->getVar('location'),
            ];
 
        $save = $model->insert($data);
 
        return redirect()->to( base_url('/polling-stations'));
    }
 
    public function edit($id=null)
    {
        helper(['form']);
      
        $model = new PollingStationModel();

        $data['station'] = $model->where('id',$id)->first();
    
        

     echo view('templates/header', $data);
     echo view('pollingstations/edit');
     echo view('templates/footer');
    }
 
    public function update()
    {  
 
        helper(['form', 'url']);
         
        $model = new PollingStationModel();
 
        $id = $this->request->getVar('id');
 
        $data = [
            
            'name' => $this->request->getVar('name'),
            'location'  => $this->request->getVar('location'),
            ];
  
            $save = $model->update($id,$data);
 
        return redirect()->to( base_url('/polling-stations') );
    }
 
    public function delete($id = null)
    {
 
     $model = new PollingStationModel();
 
     $data['user'] = $model->where('id', $id)->delete();
      
     return redirect()->to( base_url('/polling-stations') );
    }
}