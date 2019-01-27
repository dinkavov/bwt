<?php
class Controller_Feedback extends Controller
{
	public function action_index()
	{
		$this->view->generate('feedback_view.php', 'template_view.php');
	}

}