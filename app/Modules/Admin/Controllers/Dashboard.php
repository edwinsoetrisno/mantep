<?php namespace App\Modules\Admin\Controllers;

use App\Modules\Admin\Models\UserModel;
use CodeIgniter\Controller;

class Dashboard extends Controller
{
    private $userModel;

    /**
     * Constructor.
     */
    public function __construct()
    {
        $this->userModel = new UserModel();
    }

    /*public function index()
	{
		$data = [
		    'title' => 'Dashboard Page',
            'view' => 'admin/dashboard',
            'data' => $this->userModel->getUsers(),
        ];

		return view('template/layout', $data);
	}*/
    public function index()
    {
        $header['title']='Dashboard';
        echo view('partial/header',$header);
        echo view('partial/top_menu');
        echo view('partial/side_menu');
        echo view('dashboard');
        echo view('partial/footer');
    }

}
