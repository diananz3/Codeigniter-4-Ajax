<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Data_model;
use App\Models\Dropdown_model;

class Data extends Controller
{

    public function __construct()
    {
        require_once APPPATH . 'ThirdParty/ssp.php';
        $this->db = db_connect();
    }

    public function index()
    {
        $session = session();
        $uname['user_name'] = $session->get('user_name');

        $model = new Dropdown_model();
        $data['area'] = $model->getarea();
        $data['daya'] = $model->getdaya();
        $data['olt'] = $model->getolt();
        $data['tipe_project'] = $model->get_tipe_project();
        $data['tipe_cluster'] = $model->get_tipe_cluster();
        $data['survey_harga'] = $model->get_survey_harga();
        $data['survey_net'] = $model->get_survey_net();
        $data['survey_budget'] = $model->get_survey_budget();
        $data['survey_minat'] = $model->get_survey_minat();
        $data['status_drawing'] = $model->get_status_drawing();

        // $model = new Employee_model;
        // $data['title']     = 'Data Vaksin Karyawan';
        // $data['getKaryawan'] = $model->getKaryawan();

        echo view('header', $uname);
        echo view('data_view', $data);
        echo view('footer');
    }

    public function addEmployee()
    {
        $employeeModel = new \App\Models\Data_model();
        $wilayahModel = new \App\Models\Dropdown_model();

        $validation = \Config\Services::validation();
        $this->validate([
            'nama_karyawan' => [
                'rules' => 'required|max_length[50]',
                'errors' => [
                    'required' => 'Nama Karyawan is required',
                    'max_length' => 'Your name is too long'
                ]
            ],
            'usia' => [
                'rules' => 'required|integer|greater_than_equal_to[10]|less_than_equal_to[100]',
                'errors' => [
                    'required' => 'Usia is required',
                ]
            ],
            'status_vaksin_1' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Status Vaksin 1 is required'
                ]
            ],
            'status_vaksin_2' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Status Vaksin 2 is required'
                ]
            ]
        ]);

        if ($validation->run() == FALSE) {
            $errors = $validation->getErrors();
            echo json_encode(['code' => 0, 'error' => $errors]);
        } else {
            // $prov = array(
            //     'prov' => $this->request->getPost('prov'),
            // );
            // $nameprov = $wilayahModel->getnamaprov($prov);

            //Insert data into db
            $data = [
                'nama_karyawan'     => $this->request->getPost('nama_karyawan'),
                'usia'              => $this->request->getPost('usia'),
                'status_vaksin_1'   => $this->request->getPost('status_vaksin_1'),
                'status_vaksin_2'   => $this->request->getPost('status_vaksin_2'),
                'desa'              => $this->request->getPost('desa')

            ];
            
            $query = $employeeModel->insert($data);
            if ($query) {
                echo json_encode(['code' => 1, 'msg' => 'Data karyawan behasil ditambahkan']);
            } else {
                echo json_encode(['code' => 0, 'msg' => 'Data karyawan gagal ditambahkan']);
            }
        }
    }

    public function getKota() {
 
        $model = new Dropdown_model();
 
        $postData = array(
            'area' => $this->request->getPost('area'),
        );
 
        $data = $model->getkota($postData);
        
        // var_dump($data);
        echo json_encode($data);
    }    

    public function getKecamatan() {
 
        $model = new Dropdown_model();
 
        $postData = array(
            'kota' => $this->request->getPost('kota'),
        );
 
        $data = $model->getkecamatan($postData);
        
        // var_dump($data);
        echo json_encode($data);
    }    

    public function getDesa() {
 
        $model = new Dropdown_model();
 
        $postData = array(
            'kec' => $this->request->getPost('kec'),
        );
 
        $data = $model->getdesa($postData);
        
        // var_dump($data);
        echo json_encode($data);
    }    

    public function getAllData()
    {
        //DB Details
        $dbDetails = array(
            "host" => $this->db->hostname,
            "user" => $this->db->username,
            "pass" => $this->db->password,
            "db" => $this->db->database,
        );

        // $table = "employees"; //langsung dr tabel employees
        $table = 'data';//dari tabel view tp data tidak otomatis update
        $primaryKey = "id";

        $columns = array(
            array("db" => "id",                     "dt" => 0),
            array("db" => "tipe_project",           "dt" => 1),
            array("db" => "nama_cluster",           "dt" => 2),
            array("db" => "tipe_cluster",           "dt" => 3),
            array("db" => "area",                   "dt" => 4),
            array("db" => "kabupaten",              "dt" => 5),
            array("db" => "kecamatan",              "dt" => 6),
            array("db" => "kelurahan",              "dt" => 7),
            array("db" => "olt",                    "dt" => 8),
            array("db" => "longi_lati",             "dt" => 9),
            array("db" => "perizinan",              "dt" => 10),
            array("db" => "kompetitor",             "dt" => 11),
            array("db" => "lokal_operator",         "dt" => 12),
            array("db" => "tiang_listrik",          "dt" => 13),
            array("db" => "jumlah_rumah",           "dt" => 14),
            array("db" => "rumah_kosong",           "dt" => 15),
            array("db" => "fasil_umum",             "dt" => 16),
            array("db" => "rata_daya",              "dt" => 17),
            array("db" => "anak_kecil",             "dt" => 18),
            array("db" => "kendaraan",              "dt" => 19),
            array("db" => "ac",                     "dt" => 20),
            array("db" => "internet_bisnis",        "dt" => 21),
            array("db" => "jumlah_peminat",         "dt" => 22),
            array("db" => "harga_iconnet",          "dt" => 23),
            array("db" => "penggunaan_internet",    "dt" => 24),
            array("db" => "jml_perangkat",          "dt" => 25),
            array("db" => "alokasi_budget",         "dt" => 26),
            array("db" => "sampling_minat",         "dt" => 27),
            array("db" => "harga_iconnet_2",        "dt" => 28),
            array("db" => "penggunaan_internet_2",  "dt" => 29),
            array("db" => "jml_perangkat_2",        "dt" => 30),
            array("db" => "alokasi_budget_2",       "dt" => 31),
            array("db" => "sampling_minat_2",       "dt" => 32),
            array("db" => "harga_iconnet_3",        "dt" => 33),
            array("db" => "penggunaan_internet_3",  "dt" => 34),
            array("db" => "jml_perangkat_3",        "dt" => 35),
            array("db" => "alokasi_budget_3",       "dt" => 36),
            array("db" => "sampling_minat_3",       "dt" => 37),
            array("db" => "jumlah_fat",             "dt" => 38),
            array("db" => "daftar_fat",             "dt" => 39),
            array("db" => "ket",                    "dt" => 40),
            array("db" => "nilai_roi",              "dt" => 41),
            array("db" => "score",                  "dt" => 42),
            array("db" => "kelayakan",              "dt" => 43),
            array("db" => "status_drawing",         "dt" => 44),
            array("db" => "maps",                   "dt" => 45),
            array("db" => "jml_fat_ploating",       "dt" => 46),
            array("db" => "home_pass",              "dt" => 47),
            array("db" => "approval",               "dt" => 48),
            array("db" => "no_pa",                  "dt" => 49),
            array("db" => "status_pembangunan",     "dt" => 50),
            array("db" => "plan_pembangunan",       "dt" => 51),
            array("db" => "created_at",              "dt" => 52),
            array(
                "db" => "id",
                "dt" => 53,
                "formatter" => function ($d, $row) {
                    return "<div class='btn-group'>
                                  <a class='btn btn-success btn-edit kota' data-id='" . $row['id'] . "' data-bs-toggle='modal' data-bs-target='#editModal' id='updateBtn' style='margin-right: 10px'><i class='ti ti-edit'></i></a>
                                  <button class='btn btn btn-danger' data-id='" . $row['id'] . "' id='deleteEmployeeBtn'> <i class='ti ti-trash'></i></button>
                             </div>";
                }
            ),
        );

        echo json_encode(
            \SSP::simple($_GET, $dbDetails, $table, $primaryKey, $columns)
        );
    }

    //menampilkan data ke modal edit berdasarkan id 
    // public function getEmployeeInfo()
    // {
    //     $employeeModel = new \App\Models\Employee_model();
    //     $employeeId = $this->request->getPost('id');
    //     $info = $employeeModel->find($employeeId);
    //     if ($info) {
    //         echo json_encode(['code' => 1, 'msg' => '', 'results' => $info]);
    //     } else {
    //         echo json_encode(['code' => 0, 'msg' => 'No results found', 'results' => null]);
    //     }
    // }

    public function deleteEmployee()
    {
        $employeeModel = new \App\Models\Employee_model();
        $employee_id = $this->request->getPost('employee_id');
        $query = $employeeModel->delete($employee_id);

        if ($query) {
            echo json_encode(['code' => 1, 'msg' => 'Data karyawan behasil dihapus']);
        } else {
            echo json_encode(['code' => 0, 'msg' => 'Data karyawan gagal dihapus']);
        }
    }

    public function edit()
    {
        $model = new Employee_model();
        $id = $this->request->getPost("edit_id");

        $data['employee'] = $model->getKaryawan($id);
        // echo json_encode($data);
        // $data['employee'] = $model->getEmployee($id)->getResult();
        return $this->response->setJSON($data);
        // var_dump($data);
    }

    public function update()
    {
        $validation = \Config\Services::validation();
        $model = new Employee_model;

        $this->validate([
            'nama_karyawan' => [
                'rules' => 'required|max_length[50]',
                'errors' => [
                    'required' => 'Nama Karyawan is required'
                ]
            ],
            'usia' => [
                'rules' => 'required|integer|greater_than_equal_to[10]|less_than_equal_to[100]',
                'errors' => [
                    'required' => 'Usia is required'
                ]
            ],
            'status_vaksin_1' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Status Vaksin 1 is required'
                ]
            ],
            'status_vaksin_2' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Status Vaksin 2 is required'
                ]
            ]
        ]);

        if ($validation->run() == FALSE) {
            $errors = $validation->getErrors();
            echo json_encode(['code' => 0, 'error' => $errors]);
        } else {
            $id = $this->request->getPost("edit_id");
            $data = [
                'nama_karyawan' => $this->request->getPost('nama_karyawan'),
                'usia'         => $this->request->getPost('usia'),
                'status_vaksin_1'  => $this->request->getPost('status_vaksin_1'),
                'status_vaksin_2'  => $this->request->getPost('status_vaksin_2'),
                'alamat'              => $this->request->getPost('alamat')
            ];
            $update = $model->update($id, $data);

            if ($update) {
                $output = ['status' => 'Data berhasil diupdate'];
                return $this->response->setJSON($output);
            } else {
                $output = ['status' => 'Data gagal diupdate'];
                return $this->response->setJSON($output);
            }
        }
    }


    //----------------------- Import csv -----------------------//
    public function importCsvToDb()
    {
        $input = $this->validate([
            'file' => 'uploaded[file]|max_size[file,8024]|ext_in[file,csv],'
        ]);
        if (!$input) {
            $data['validation'] = $this->validator;
            return view('index', $data); 
        }else{
            if($file = $this->request->getFile('file')) {
            if ($file->isValid() && ! $file->hasMoved()) {
                $newName = $file->getRandomName();
                $file->move('../public/csvfile', $newName);
                $file = fopen("../public/csvfile/".$newName,"r");
                $i = 0;
                $numberOfFields = 6;
                $csvArr = array();
                
                while (($filedata = fgetcsv($file, 1000, ",")) !== FALSE) {
                    $num = count($filedata);
                    if($i > 0 && $num == $numberOfFields){ 
                        
                        // $csvArr[$i]['No.'] = $filedata[0];
                        // $csvArr[$i]['Nama Kayawan'] = $filedata[1];
                        // $csvArr[$i]['Usia'] = $filedata[2];
                        // $csvArr[$i]['Status Vaksin 1'] = $filedata[3];
                        // $csvArr[$i]['Status Vaksin 2'] = $filedata[4];
                        // $csvArr[$i]['Aksi'] = $filedata[5];

                        // $csvArr[$i]['id' || 'No'] = $filedata[0];
                        // $csvArr[$i]['nama_karyawan' || 'Nama Karyawan'] = $filedata[1];
                        // $csvArr[$i]['usia' || 'Usia'] = $filedata[2];
                        // $csvArr[$i]['status_vaksin_1' || 'Status Vaksin 1'] = $filedata[3];
                        // $csvArr[$i]['status_vaksin_2' || 'Status Vaksin 2'] = $filedata[4];
                        // $csvArr[$i]['aksi' || 'Aksi'] = $filedata[5];

                        $csvArr[$i]['id'] = $filedata[0];
                        $csvArr[$i]['nama_karyawan'] = $filedata[1];
                        $csvArr[$i]['usia'] = $filedata[2];
                        $csvArr[$i]['status_vaksin_1'] = $filedata[3];
                        $csvArr[$i]['status_vaksin_2'] = $filedata[4];
                        $csvArr[$i]['aksi'] = $filedata[5];
                    }
                    $i++;
                }
                fclose($file);
                $count = 0;
                foreach($csvArr as $userdata){
                    $employee = new Employee_model();
                    $findRecord = $employee->where('id', $userdata['id'])->countAllResults();
                    if($findRecord == 0){
                        if($employee->insert($userdata)){
                            $count++;
                        }
                    }
                }
                session()->setFlashdata('message', $count.' rows successfully added.');
                session()->setFlashdata('alert-class', 'alert-success');
            }
            else{
                session()->setFlashdata('message', 'CSV file coud not be imported.');
                session()->setFlashdata('alert-class', 'alert-danger');
            }
            }else{
            session()->setFlashdata('message', 'CSV file coud not be imported.');
            session()->setFlashdata('alert-class', 'alert-danger');
            }
        }
        return redirect()->route('/');         
    }

    public function uploadEmployee()
    {
        if ($this->request->getMethod() == "post") {

            $file = $this->request->getFile("file");
            $file_name = $file->getTempName();
            $employee = array();
            $csv_data = array_map('str_getcsv', file($file_name));

            if (count($csv_data) > 0) {

                $index = 0;

                foreach ($csv_data as $data) {
                    if ($index > 0) {
                        $employee[] = array(
                            "nama_karyawan" => $data[1],
                            "usia" => $data[2],
                            "status_vaksin_1" => $data[3],
                            "status_vaksin_2" => $data[4],
                        );
                    }
                    $index++;
                }

                $builder = $this->db->table('employees');
                $builder->insertBatch($employee);
                $session = session();
                $session->setFlashdata("success", "Data saved successfully");
                return redirect()->to(base_url('/'));
            }
        }
    return redirect()->route('/');    }
}