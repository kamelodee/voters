<?php namespace App\Controllers;
 
use CodeIgniter\Controller;
use App\Models\MemberTypeModel;
 
class MemberType extends Controller
{
 
    public function index()
    {    
        $model = new MemberTypeModel();
 
        $data['membertypes'] = $model->orderBy('id', 'DESC')->findAll();
        
        
        echo view('templates/header', $data);
		echo view('membertype/index');
		echo view('templates/footer');
    }    
 //create
    public function create()
    {  
        
		$data = [];  
        helper(['form']);
        
        echo view('templates/header');
		echo view('membertype/create');
		echo view('templates/footer');
    }
 
    public function store()
    {  
        
        helper(['form', 'url']);
         
        $model = new MemberTypeModel();
 
        $data = [
            'description'  => $this->request->getVar('description'),
            'membertype' => $this->request->getVar('membertype'),
            ];
 
         $model->insert($data);
 
        return redirect()->to('/membertypes');


    }
 
    public function edit($id = null)
    {
        helper(['form']);

        $model = new MemberTypeModel();
        
        $data['membertype'] = $model->where('id', $id)->first();
    
 

     echo view('templates/header', $data);
     echo view('membertype/edit');
     echo view('templates/footer');
    }
 
    public function update()
    {  
 
        helper(['form', 'url']);
         
        $model = new MemberTypeModel();
 
        $id = $this->request->getVar('id');
 
        $data = [
 
            'membertype' => $this->request->getVar('membertype'),
            'description'  => $this->request->getVar('description')
            ];
 
        $save = $model->update($id,$data);
 
        return redirect()->to( base_url('/membertypes') );
    }
 
    public function delete($id = null)
    {
 
     $model = new MemberTypeModel();
 
     $data['user'] = $model->where('id', $id)->delete();
      
     return redirect()->to( base_url('/membertypes') );
    }
}