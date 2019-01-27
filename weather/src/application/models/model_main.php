<?php
class Model_Main extends Model
{
	public function sign_in($login, $password)
	{
		$conn=DB::getInstanceDB();
        $data = $conn->query('select * from user where email = :login');
		if($data[0]['password'] === $password)
		{
			$result = true;
		}else{
			$result = false;
		}
		return $result;
	}
}