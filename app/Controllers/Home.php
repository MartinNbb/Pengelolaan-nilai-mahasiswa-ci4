<?php

namespace App\Controllers;

use App\Models\NilaiModel;

class Home extends BaseController
{
    protected $db;

    public function __construct()
    {
        $this->db = \Config\Database::connect();
    }

    public function index(){
        $query = $query = $this->db->table('nilai')
        ->where('type', 'UTS');
        
        $data['uts'] = $query->get()->getResult();
        return view('admin/dashboard', $data);
    }

    public function indexUAS(){
        $query = $query = $this->db->table('nilai')
        ->where('type', 'UAS');
        
        $data['uts'] = $query->get()->getResult();
        return view('admin/dashboardUAS', $data);
    }
    
    public function indexAkhir(){
            $query = $query = $this->db->table('nilai')
            ->where('type', 'nilai_akhir');
            
            $data['uts'] = $query->get()->getResult();
            return view('admin/dashboardAkhir', $data);
    }
    
    public function login(){
        return view('admin/login');
    }

    public function handleLogin(){
        $rules = [
            'username' => 'required',
            'password' => 'required',
        ];

        if($this->validate($rules)){
            $username = $this->request->getPost('username');
            $password = $this->request->getPost('password');

            if($username == 'dosen' && $password == 'polinela') return redirect()->route('admin.dashboard');
            return redirect()->back()->with('error', 'invalid credentials!');
        } else {
            $getError = $this->validator;
            $errors = $getError->getErrors();
            return redirect()->back()->with('error', reset($errors));
        }
    }

    public function insert(){
        return view('admin/insert');
    }

    public function handleInsert(){

        $rules = [
            'npm' => 'required',
            'nama' => 'required',
            'mata_kuliah' => 'required',
            'dosen' => 'required',
            'nilai' => 'required',
            'type' => 'required|not_equals[Tipe Nilai]',
        ];

        if($this->validate($rules)){
            $nilaiModel = new NilaiModel();
            $npm = $this->request->getPost('npm');
            $nama = $this->request->getPost('nama');
            $mata_kuliah = $this->request->getPost('mata_kuliah');
            $dosen = $this->request->getPost('dosen');
            $nilai = $this->request->getPost('nilai');
            $type = $this->request->getPost('type');
            $dataNilai = [
                'npm' => $npm,
                'nama' => $nama,
                'matakuliah' => $mata_kuliah,
                'dosen' => $dosen,
                'nilai' => $nilai,
                'type' => $type
            ];
            $nilaiModel->insert($dataNilai);
            return redirect()->route('admin.dashboard');
        } else {
            $getError = $this->validator;
            $errors = $getError->getErrors();
            return redirect()->back()->with('error', reset($errors));
        }
    }

    public function handleDelete($id){
        $model = new NilaiModel();
        $model->delete($id);
        return redirect()->route('admin.dashboard');
    }
    
}
