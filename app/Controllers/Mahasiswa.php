<?php

namespace App\Controllers;

use App\Models\MahasiswaModel;

class Mahasiswa extends BaseController
{
    protected $mahasiswaModel;

    public function __construct()
    {
        $this->mahasiswaModel = new MahasiswaModel();
    }

    // Menampilkan semua data mahasiswa
    public function index()
    {
        $data = [
            'title'      => 'Data Mahasiswa',
            'mahasiswa'  => $this->mahasiswaModel->findAll(),
        ];
        return view('mahasiswa/index', $data);
    }

    // Menampilkan form tambah data
    public function create()
    {
        $data = ['title' => 'Tambah Mahasiswa'];
        return view('mahasiswa/create', $data);
    }

    // Menyimpan data baru ke database
    public function store()
    {
        $this->mahasiswaModel->save([
            'nim'     => $this->request->getPost('nim'),
            'nama'    => $this->request->getPost('nama'),
            'jurusan' => $this->request->getPost('jurusan'),
            'email'   => $this->request->getPost('email'),
        ]);
        return redirect()->to('/mahasiswa')->with('success', 'Data berhasil ditambahkan');
    }

    // Menampilkan form edit
    public function edit($id)
    {
        $data = [
            'title'     => 'Edit Mahasiswa',
            'mahasiswa' => $this->mahasiswaModel->find($id),
        ];
        return view('mahasiswa/edit', $data);
    }

    // Update data
    public function update($id)
    {
        $this->mahasiswaModel->update($id, [
            'nim'     => $this->request->getPost('nim'),
            'nama'    => $this->request->getPost('nama'),
            'jurusan' => $this->request->getPost('jurusan'),
            'email'   => $this->request->getPost('email'),
        ]);
        return redirect()->to('/mahasiswa')->with('success', 'Data berhasil diupdate');
    }

    // Hapus data
    public function delete($id)
    {
        $this->mahasiswaModel->delete($id);
        return redirect()->to('/mahasiswa')->with('success', 'Data berhasil dihapus');
    }
}