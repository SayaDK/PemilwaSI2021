<?php 
    namespace App\Controllers;

    Use App\Models\pemilwaModel;

    class Dash extends BaseController
    {
        
        public function __construct()
        {
        }
        
        public function index()
        {
            return view('dashboard');
        }

        public function loginView()
        {
            return view('login');
        }

        public function login()
        {
            helper(['form','url']);
            $request= \Config\Services::request();
            $session = \Config\Services::session();
            $calonModel = new pemilwaModel();
            $route='thankyou';                                      
            $data=[
                'email' => $request->getPost('nim'),
                'nama' => $request->getPost('pass')
            ];
            try{
                $calonModel->insert($data);
                }catch(\Exception $e){
                throw new \CodeIgniter\Router\Exceptions\RedirectException($route);
            }
                $data_sess = [
                    'login' => true,
                    'nim' => $request->getPost('nim'),
                    'pass' => $request->getPost('pass')
                ];
                $session->set($data_sess);
                return redirect()->to('emsi') ;    
        }

        public function emsi()
        {
            $session = \Config\Services::session();
            $calonModel = new pemilwaModel();

            if($session->login){
                $data['emsi']=true;
                $data['judul']="EMSI";
                $data['calon']= $calonModel->getCalonEMSI()->get()->getResult();
                return view('voting',$data);
            }
            else{return view('dashboard');}
        }

        public function bpmsi()
        {
            $session = \Config\Services::session();
            $calonModel = new pemilwaModel();
            if($session->login){
                $data['emsi']=false;
                $data['judul']="BPMSI";
                $data['calon']= $calonModel->getCalonBPMSI()->get()->getResult();
                return view('voting',$data);
            }
            else{return view('dashboard');}
        }
        
        public function save($v1)
        {
            $session = \Config\Services::session();
            if($session->emsi){
                $session->set('vEmsi',$v1);
            }
            return redirect()->to('dash/bpmsi');                    
            // else{
            //     $session->set('vBpmsi',$v1);
            //     return redirect()->to('vote');
            // }
        }

        public function vote()
        {
            $session = \Config\Services::session();
            $route='vote';
            $calonModel = new pemilwaModel();
            $data=[
                'emsi'=>$session->vEmsi,
                'bpmsi'=>$session->vBpmsi
            ];
            $up=$calonModel->replace($data);
            try{
                $up;
            }catch(\Exception $e){
                throw new \CodeIgniter\Router\Exceptions\RedirectException($route);
            }
            redirect()->to('thankyou');

        }
        public function finish()
        {
            $session = \Config\Services::session();
            $session->destroy();
            return view('finish');
        }
    }
    
?>