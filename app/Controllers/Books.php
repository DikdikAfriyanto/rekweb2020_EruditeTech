<?php

namespace App\Controllers;

use App\Models\BooksModel;
use CodeIgniter\HTTP\Request;

class Books extends BaseController
{
    protected $booksModel;
    public function __construct()
    {
        $this->booksModel = new BooksModel();
    }
    public function index()
    {


        $data = [
            'title' => 'List Books',
            'books' => $this->booksModel->getBooks()
        ];

        // $booksModel = new BooksModel();


        return view('books/index', $data);
    }
    public function detail($slug)
    {
        $data = [
            'title' => 'Detail Book',
            'books' => $this->booksModel->getBooks($slug)
        ];

        //jika buku tidak ada di tabel
        if (empty($data['books'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Judul buku ' . $slug . ' tidak ditemukan.');
        }
        return view('books/detail', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'form tambah data buku',
            'validation' => \Config\Services::validation()
        ];
        return view('books/create', $data);
    }

    public function save()
    {
        //validasi input

        if (!$this->validate([

            'judul' => [
                'rules' => 'required|is_unique[books.judul]',
                'errors' => [
                    'required' => '{field} buku harus diisi.',
                    'is_unique' => '{field} buku sudah ada.'
                ]
            ],
            'sampul' => [
                'rules' => 'max_size[sampul,5120]|is_image[sampul]|mime_in[sampul,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max_size' => 'Ukuran gambar terlalu besar',
                    'is_image' => 'Yang anda pilih bukan gambar',
                    'mime_in' => 'Yang anda pilih bukan gambar'
                ]
            ],
            'penulis' => [
                'rules' => 'required[books.penulis]',
                'errors' => [
                    'required' => '{field} buku harus diisi.'
                ]
            ],
            'penerbit' => [
                'rules' => 'required[books.penerbit]',
                'errors' => [
                    'required' => '{field} buku harus diisi.'
                ]
            ],
        ])) {
            //$validation = \Config\Services::validation();
            //return redirect()->to('/books/create')->withInput()->with('validation', $validation);
            return redirect()->to('/books/create')->withInput();
        }

        //ambil gambar
        $fileSampul = $this->request->getFile('sampul');

        //apakah tidak ada gambar di upload
        if ($fileSampul->getError() == 4) {
            $namaSampul = 'default.png';
        } else {

            //generate nama sampul random
            $namaSampul = $fileSampul->getRandomName();

            //pindahkan ke folder img
            $fileSampul->move('img', $namaSampul);
        }
        $slug = url_title($this->request->getVar('judul'), '-', true);
        $this->booksModel->save([
            'judul' => $this->request->getVar('judul'),
            'slug' => $slug,
            'penulis' => $this->request->getVar('penulis'),
            'penerbit' => $this->request->getVar('penerbit'),
            'sampul' => $namaSampul

        ]);

        session()->setFlashdata('pesan', 'Data buku berhasil ditambahkan.');

        return redirect()->to('/books');
    }

    public function delete($id)
    {
        //cari gambar berdasarka id
        $books = $this->booksModel->find($id);

        //cek jiga gambarnya default
        if ($books['sampul'] != 'default.png') {
            //hapus gambar
            unlink('img/' . $books['sampul']);
        }
        $this->booksModel->delete($id);
        session()->setFlashdata('pesan', 'Data berhasil dihapus.');
        return redirect()->to('/books');
    }

    public function edit($slug)
    {
        $data = [
            'title' => 'Form edit data buku',
            'validation' => \Config\Services::validation(),
            'books' => $this->booksModel->getBooks($slug)
        ];
        return view('books/edit', $data);
    }
    public function update($id)
    {
        //cek judul
        $booksLama = $this->booksModel->getBooks($this->request->getVar('slug'));
        if ($booksLama['judul'] == $this->request->getVar('judul')) {
            $rule_judul = 'required';
        } else {
            $rule_judul = 'required|is_unique[books.judul]';
        }
        if (!$this->validate([
            'judul' => [
                'rules' => $rule_judul,
                'errors' => [
                    'required' => '{field} komik harus diisi.',
                    'is_unique' => '{field} komik sudah ada.'
                ]
            ],
            'sampul' => [
                'rules' => 'max_size[sampul,5120]|is_image[sampul]|mime_in[sampul,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max_size' => 'Ukuran gambar terlalu besar',
                    'is_image' => 'Yang anda pilih bukan gambar',
                    'mime_in' => 'Yang anda pilih bukan gambar'
                ]
            ],
            'penulis' => [
                'rules' => 'required[books.penulis]',
                'errors' => [
                    'required' => '{field} buku harus diisi.'
                ]
            ],
            'penerbit' => [
                'rules' => 'required[books.penerbit]',
                'errors' => [
                    'required' => '{field} buku harus diisi.'
                ]
            ],
        ])) {
            return redirect()->to('/books/edit/' . $this->request->getVar('slug'))->withInput();
        }

        $fileSampul = $this->request->getFile('sampul');

        // cek gambar, apakah tetap gambar lama
        if ($fileSampul->getError() == 4) {
            $namaSampul = $this->request->getVar('sampulLama');
        } else {
            //generate nama file random
            $namaSampul = $fileSampul->getRandomName();

            //pindahkan gambar
            $fileSampul->move('img', $namaSampul);

            //hapus file yang lama
            unlink('img/' . $this->request->getVar('sampulLama'));
        }

        $slug = url_title($this->request->getVar('judul'), '-', true);
        $this->booksModel->save([
            'id' => $id,
            'judul' => $this->request->getVar('judul'),
            'slug' => $slug,
            'penulis' => $this->request->getVar('penulis'),
            'penerbit' => $this->request->getVar('penerbit'),
            'sampul' => $namaSampul
        ]);

        session()->setFlashdata('pesan', 'Data berhasil diedit.');
        return redirect()->to('/books');
    }
}
