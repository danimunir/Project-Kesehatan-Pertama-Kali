<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class sehatkontrol extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('sehatmodel');
        $this->load->helper('url');
    }

    public function index()
    {
        
        $this->load->view('projectweb');
    }
    
    public function login()
    {
        $data['login'] = true;
        $this->load->view('login',$data);
    }

    public function register()
    {
        $data['login'] = false;
        $this->load->view('registrasi',$data);
    }

    public function create(){
        $data = [ 
            'username'=>$this->input->post('username',true),
            'password'=>password_hash($this->input->post('password',true),PASSWORD_DEFAULT),
        ];
        $user_id = $this->sehatmodel->tambah($data);
        $data = [
            'user_id'=>$user_id,
            'username'=>$this->input->post('username',true)
        ];
        $this->sehatmodel->addProfil($data);
        $this->session->set_flashdata('success','Anda berhasil membuat akun, silahkan masuk dengan akun yang didaftarkan');
        redirect('sehatkontrol');
    }

    public function check_login(){
        $username = $this->input->post('username',true);
        $password = $this->input->post('password',true);

        $cek = $this->sehatmodel->check_username($username);
        
        if($cek){
            if(password_verify($password,$cek['password'])){
                $data = [
                    'iduser'=>$cek['idusers'],
                    'username'=>$cek['username'],
                ];
                $this->session->set_userdata($data);
                $this->session->set_flashdata('success','Selamat datang, silahkan gunakan sistem ini dengan bijak');
                redirect('dashboard/profil_saya');
            }else{
                $this->session->set_flashdata('error','Maaf, password anda salah');
            }
        }else{
            $this->session->set_flashdata('error','Maaf, username anda belum terdaftar');
        }
        redirect('sehatkontrol');
    }
    
    public function mata(){
        $this->load->view('mata');
    }
    public function mata1(){
        $this->load->view('mata1');
    }

    public function mata2(){
        $this->load->view('mata2');
    }
    public function wajah(){
        $this->load->view('wajah');
    }
    public function wajah1(){
        $this->load->view('wajah1');
    }
    public function wajah2(){
        $this->load->view('wajah2');
    }
    public function kulit(){
        $this->load->view('kulit');
    }
    public function kulit1(){
        $this->load->view('kulit1');
    }
    public function kulit2(){
        $this->load->view('kulit2');
    }
    public function ginjal(){
        $this->load->view('ginjal');
    }
    public function ginjal1(){
        $this->load->view('ginjal1');
    }
    public function mulut(){
        $this->load->view('mulut');
    }
    public function mulut1(){
        $this->load->view('mulut1');
    }
    public function mulut2(){
        $this->load->view('mulut2');
    }
    public function dayatahantubuh(){
        $this->load->view('dayatahantubuh');
    }
    public function dayatahantubuh1(){
        $this->load->view('dayatahantubuh1');
    }
    public function dayatahantubuh2(){
        $this->load->view('dayatahantubuh2');
    }
    public function projecttentang(){
        $this->load->view('projecttentang');
    }
    public function projectkontak(){
        $this->load->view('projectkontak');
    }
    



    public function gambarasep() {
        $this->load->view('asep.jpg');
    }

    public function gambardoni() {
       $this->load->view('doni.jpg');

    }

    public function gambarmutia() {
        $this->load->view('mutia.jpg');

    }

    public function gambarwahyu() {
        $this->load->view('wahyu.jpg');

    }

    public function gambardani() {
        $this->load->view('daniss1.jpg');

    }

    public function gambarsharingan() {
        $this->load->view('sharingann.jpg');

    }

    public function gambarmata1() {
        $this->load->view('mata.jpg');

    }

    public function gambarbro() {
        $this->load->view('gambarbro.jpg');

    }

    public function gambarkucing() {
        $this->load->view('kucing.jpg');

    }

    public function gambarbuahsayur() {
        $this->load->view('buahsayur.jpg');

    }

    public function gambarginjal() {
        $this->load->view('ginjal.jpg');

    }

    public function gambarginjalpic() {
        $this->load->view('ginjalpic.jpg');

    }

    public function gambarwajahkusam() {
        $this->load->view('wajahkusam.jpg');

    }

    public function gambarmilos() {
        $this->load->view('milos.jpg');

    }

    public function gambarmulut() {
        $this->load->view('mulut.jpg');

    }

    public function gambarmulut2() {
        $this->load->view('mulut2.jpg');

    }

    public function gambarmulutartikel() {
        $this->load->view('mulutartikel.jpg');

    }

    public function gambarkulit1() {
        $this->load->view('kulit1.jpg');

    }

    public function gambarkulit() {
        $this->load->view('kulit.jpg');

    }

    public function gambarwajah1() {
        $this->load->view('wajah1.jpg');
    }

    public function gambardayatahantubuh() {
        $this->load->view('dayatahantubuh.jpg');
    }

    public function gambardayatahantubuh2() {
        $this->load->view('dayatahantubuh2.jpg');
    }

    public function gambarsayapkanan() {
        $this->load->view('sayapkanan.png');
    }

    public function gambarsayapkiri() {
        $this->load->view('sayapkiri.png');
    }

    public function logout(){
        $id = __session('iduser');
        $this->session->sess_destroy($id);
        redirect('sehatkontrol');
    }

}
