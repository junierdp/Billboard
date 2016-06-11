<?php
	class connection{
		public static $conn = null;
		public static $connectionObj = null;

		public static function getConnection(){
			if(self::$connectionObj == null){
				self::$connectionObj = new connection();
				self::$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
			}
			return self::$conn;
		}

		function __destruct(){
			mysqli_close(connection::getConnection());
		}
	}
?>