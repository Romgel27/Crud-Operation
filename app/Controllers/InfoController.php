<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\InfoModel;

class InfoController extends BaseController
{
    public function index()
    {
        $fetchInfo = new InfoModel();
        $data['information'] = $fetchInfo->findAll();
        return view ('information/list', $data);
    }
    public function createInforamtion()
    {
        $data['InfoNumber'] = '2024_'.uniqid();
        return view('information/add', $data);

    }
    public function storeInformation()
    {
        $insertInformation = new InfoModel();
        
        $data = array(
            'name' => $this->request->getPost('Name'),
            'birthdate' => $this->request->getPost('Birthdate'),
            'contact' => $this->request->getPost('Contact'),
            'gender' => $this->request->getPost('Gender')
            
        );
    
        $insertInformation->insert($data);
    
        return redirect()->to('/information')->with('success', 'Information Added Successfully!');
    }
    
    public function editInforamtion($id)
    {
        $fetchInfo =new InfoModel();
        $data['information'] = $fetchInfo->where('Id', $id)->first();
        return view ('information/edit', $data);
    }
    public function updateInformation($id)
    {
        $updateInfo = new InfoModel();
    
        $data = array(
            'name' => $this->request->getPost('Name'),
            'birthdate' => $this->request->getPost('Birthdate'),
            'contact' => $this->request->getPost('Contact'),
            'gender' => $this->request->getPost('Gender')
        );
    
        // Assuming 'id' is the primary key field in your InfoModel
        $updateInfo->update($id, $data);
    
        return redirect()->to('/information')->with('success', 'Information Updated Successfully!');
    }
    



    public function deleteInforamtion($id)
    {
        $deleteInfo = new InfoModel ();
        $deleteInfo->delete($id);
        return redirect()->to('/information')->with('success', 'Information Deleted Successfully!');
    }
}
