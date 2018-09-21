<<<<<<< HEAD
<?php namespace AppData\Config;
  class Request{
    private $Controlador;
    private $Metodo;
		private $Argumento;
		public function __construct(){
      if(isset($_GET['url'])){
        $ruta = filter_input(INPUT_GET,'url',FILTER_SANITIZE_URL);
			  $ruta = explode("/",$ruta); //Se empieza a crear el array utilizando explode para delimitar y dividirlo en un array
				$ruta = array_filter($ruta);//Se crea otro filtro
	      if($ruta[0]=="index.php" || $ruta[0]=="index")
          $this->Controlador="Login";
			  else
				  $this->Controlador = strtolower(array_shift($ruta));
				  $this->Metodo = strtolower(array_shift($ruta));
				if(!$this->Metodo)
					$this->Metodo = "index";
				$this->Argumento = $ruta;
			}
			else{
				$this->Controlador="Home";//Archivo llamado HomeController.php
				$this->Metodo="index";
			}
    }
		public function getControlador(){
      return $this->Controlador;
		}
		public function getMetodo(){
			return $this->Metodo;
		}
		public function getArgumento(){
			return $this->Argumento;
		}
	}
?>
=======
<?php
namespace AppData\Config;
class Request
{
    private $controlador;
    private $metodo;
    private $argumento;
    public function __construct()
    {

        if (isset($_GET['url'])) {
            $ruta = filter_input(INPUT_GET, 'url', FILTER_SANITIZE_URL);
            $ruta = explode("/", $ruta);
            $ruta = array_filter($ruta);
            if ($ruta[0] == "index.php" || $ruta[0]=="index") {
                $this->controlador = "Login";
            } else
                $this->controlador = strtolower(array_shift($ruta));
                $this->metodo = strtolower(array_shift($ruta));
            if (!$this->metodo)
                $this->metodo = "index";
            $this->argumento = $ruta;
        }else {
            $this->controlador = "Home";
            $this->metodo = "index";
        }
      }

    public function getControlador()
    {
        return $this->controlador;
    }
    public function getMetodo()
    {
        return $this->metodo;
    }
    public function getArgumento()
    {
        return $this->argumento;
    }
}
>>>>>>> d524746c72f1ccf38173422e80f518b64958b51c
