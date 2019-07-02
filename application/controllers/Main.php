<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function __construct()
	{
		return parent::__construct();
	}

	public function index()
	{
		$this->load->model("Proyect_Model", "proyect");
		
		$data["titulo"] = "BACKYARD";
		$data["datos"] = $this->proyect->getAllProperties();

		if (@$_GET["cat"]) {
			
			if ($_GET["cat"] == "eventos") {
				$this->load->model("Eventos_Model", "eventos");
				$data["eventos"] = $this->eventos->getAllProperties();
				$data["selectmenu"] = "eventos";
				$data["d"] = "evento";
				$data["texto_principal"] = $data["datos"]->texto_principal;
				$data["estilo"] = "style='color:#DC2872'";
			}
			else if ($_GET["cat"] == "construcciones") {
				$this->load->model("Construcciones_Model", "construcciones");
				$data["eventos"] = $this->construcciones->getAllProperties();
				$data["selectmenu"] = "construcciones";
				$data["d"] = "construccion";
				$data["texto_principal"] = $data["datos"]->texto_construcciones;
				$data["estilo"] = "style='color:#42B4C6'";
			}
			else if ($_GET["cat"] == "tacticas") {
				$this->load->model("Tacticas_Model", "tacticas");
				$data["eventos"] = $this->tacticas->getAllProperties();
				$data["selectmenu"] = "tacticas";
				$data["d"] = "tacticas";
				$data["texto_principal"] = $data["datos"]->texto_tacticas;
				$data["estilo"] = "style='color:#7A6B99'";
			}
			else if ($_GET["cat"] == "activaciones") {
				$this->load->model("Activaciones_Model", "activaciones");
				$data["eventos"] = $this->activaciones->getAllProperties();
				$data["selectmenu"] = "activaciones";
				$data["d"] = "activacion";
				$data["texto_principal"] = $data["datos"]->texto_activaciones;
				$data["estilo"] = "style='color:#A9C554'";
			}
			else if ($_GET["cat"] == "tecnologia") {
				$this->load->model("Tecnologia_Model", "tecnologia");
				$data["eventos"] = $this->tecnologia->getAllProperties();
				$data["selectmenu"] = "tecnologia";
				$data["d"] = "tecnologia";
				$data["texto_principal"] = $data["datos"]->texto_tecnologia;
				$data["estilo"] = "style='color:#42B4C6'";
			}
			else if ($_GET["cat"] == "contenidos") {
				$this->load->model("Contenidos_Model", "contenidos");
				$data["eventos"] = $this->contenidos->getAllProperties();
				$data["selectmenu"] = "contenidos";
				$data["d"] = "contenidos";
				$data["texto_principal"] = $data["datos"]->texto_contenidos;
				$data["estilo"] = "style='color:#DC2871'";
			}
		}
		else {
			$this->load->model("Eventos_Model", "eventos");
			$data["eventos"] = $this->eventos->getAllProperties();
			$data["selectmenu"] = "eventos";
			$data["d"] = "evento";
			$data["texto_principal"] = $data["datos"]->texto_principal;
			$data["estilo"] = "style='color:#DC2872'";
		}

		

		// var_dump($data["eventos"]);
		// exit();

		$this->load->view('site/layouts/header', $data);
		$this->load->view('site/index');
	}

	public function single($slug, $categoria)
	{

		$slug = urldecode($slug);

		$this->load->model("Eventos_Model", "eventos");
		$datos = $this->eventos->validateDataPost($slug, $categoria);

		if ($datos) {

			if ($categoria == "evento") {
				$data["url"] = base_url(). "uploads/post/eventos/";
				$data["cat"] = "EVENTOS";
			}
			if ($categoria == "activacion") {
				$data["url"] = base_url(). "uploads/post/activaciones/";
				$data["cat"] = "ACTIVACIONES";
			}
			if ($categoria == "construccion") {
				$data["url"] = base_url(). "uploads/post/construcciones/";
				$data["cat"] = "CONSTRUCCIONES";
			}
			if ($categoria == "tecnologia") {
				$data["url"] = base_url(). "uploads/post/tecnologia/";
				$data["cat"] = "TECNOLOGIA";
			}
			if ($categoria == "tacticas") {
				$data["url"] = base_url(). "uploads/post/tacticas/";
				$data["cat"] = "TACTICAS";
			}
			if ($categoria == "contenidos") {
				$data["url"] = base_url(). "uploads/post/contenidos/";
				$data["cat"] = "CONTENIDOS";
			}


			$data["titulo"] = "SINGLE";
			$data["data"] = $datos;

			$this->load->model("Proyect_Model", "proyect");
			$data["datosp"] = $this->proyect->getAllProperties();


			return $this->load->view('site/single', $data);
		}

		$data["message"] = " The page you requested was not found. ";
        $data["heading"] = " 404 Page Not Found ";
        return $this->load->view("errors/html/error_404", $data);
		
	}

	public function nosotros()
	{
		$this->load->model("Nosotros_Model", "nosotros");

		$data["titulo"] = "Nosotros";
		$data["datos"] = $this->nosotros->getAllProperties();

		$this->load->view('site/layouts/header', $data);
		$this->load->view('site/nosotros');
	}

	public function contacto()
	{
		$this->load->model("Contacto_Model", "contacto");

		$data["titulo"] = "Contacto";
		$data["datos"] = $this->contacto->getAllProperties();

		$this->load->view('site/layouts/header', $data);
		$this->load->view('site/contacto');
	}

	public function aviso_privacidad()
	{
		$this->load->model("Aviso_Model", "aviso");
        $data["datos"] = $this->aviso->getAllProperties();
		$data["titulo"] = "Aviso";

		$this->load->view('site/layouts/header', $data);
		$this->load->view('site/aviso');
	}


	public function logout()
	{
		$this->load->library('session');
		$this->session->unset_userdata('id');
		$this->session->sess_destroy();
		redirect(base_url("admin"));
	}


}
