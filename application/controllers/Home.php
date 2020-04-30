<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Home extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('m_visi_misi');
		$this->load->model('m_struktur');
		$this->load->model('m_mahasiswa');
		$this->load->model('m_programKerja');
		$this->load->model('m_berita');
		$this->load->model('m_galeri');
		$this->load->model('m_asrama');
		// $this->load->model('m_count');

	}
	public function index()
	{
		$data['title'] = 'IKPMKU-DIY | Ikatan Keluarga Pelajar Mahasiswa Kalimantan Utara';
		$data['visi_misi'] = $this->m_visi_misi->GetVisiMisi();

		$data['galeri'] = $this->m_galeri->GetGaleri();
		$data['struktur'] = $this->m_struktur->GetStruktur();
		$data['mahasiswa'] = $this->m_mahasiswa->GetMahasiswa();
		$data['programkerja'] = $this->m_programKerja->GetprogramKerja();
		$data['berita'] = $this->m_berita->GetBerita();
		$data['asrama'] = $this->m_asrama->GetAsrama();
		$this->load->view('blog_template/header', $data);
		$this->load->view('beranda', $data);
		$this->load->view('blog_template/footer');
	}
	// public function readmore()
	// {
	// 	$data['title'] = 'Berita';
	// 	$id = $this->uri->segment(3);
	// 	$data['berita'] = $this->m_berita->BeritaSingle($id);

	// 	$this->load->view('blog_template/header', $data);
	// 	$this->load->view('readmore', $data);
	// 	$this->load->view('blog_template/footer');
	// }
}