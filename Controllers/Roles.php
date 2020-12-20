<?php 

	class Roles extends Controllers{
		public function __construct()
		{
			parent::__construct();
		}

		public function roles()
		{
			$data['page_id'] = 3;
			$data['page_tag'] = "Roles Usuarios";
			$data['page_title'] = "rol_usuario";
			$data['page_name'] = "Roles usuario <small>Bohemia botiquite</small>";
			
			$this->views->getView($this,"roles",$data);
		}
         public function getRoles(){
			 $arrData = $this->model->selectRoles();
		 }
	}
 ?>