<?php
class Latihan3 extends CI_Controller
{
    public function index()
    {
        echo "selamat datang.. selamat blajar web programing";
    }
    public function penjumlahan($n1, $n2)
    {
        $this->load->Model('Model_latihan');

        $data['nilai1'] = $n1;
        $data['nilai2'] = $n2;
        $data['hasil'] = $this->Model_latihan->penjumlahan($n1, $n2);
        
        $this->load->view('latihan1', $data);
    }
}