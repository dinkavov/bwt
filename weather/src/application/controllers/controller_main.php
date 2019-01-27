<?php
class Controller_Main extends Controller
{
	function action_index()
	{	
		$this->view->generate('main_view.php', 'template_view.php');
	}
	
	public function action_in()
		{
					var_dump(1);die;
			if($_SERVER['REQUEST_METHOD'] === 'POST')
			{
					$login = $_POST['Email'];
					$password = $_POST['Password'];
					$model_main = new Model_Main;
					$sign_in = $model_main->sign_in($login,$password);
					
					if($sign_in == true)
					{
						$this->view->generate('feedback_view.php', 'template_view.php');
					}else{
						$this->view->generate('main_view.php', 'template_view.php');
					}
			} 
		}
}