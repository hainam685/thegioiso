<?php 
	require_once'model.php';
	class listuser extends modelTGS{
		public $tablename = 'user';
		public $columns = ['id','name','email','phone','password','address','create'];
	}

 ?>