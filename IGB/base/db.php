<?PHP
###################################################
# Intranet: Class for the Database                #
###################################################
# Purpose: Provides an interface for the database #
#          to make it easier to work with.        #
###################################################
# Created by: hypereon.net                        #
###################################################

	class MySQL_Service
	{
		var $conn;
		var $db_host = "mysql.feeditout.com";
		var $db_username = "strobelix";
		var $db_password = "bGn7YnQx";
		var $db_database = "heroes";
		var $db_table_prefix = "phpbb_"; 
	

		function getLink()
		{
			return $this->conn;
		}

		function initConnection()
		{
			$this->conn = mysql_connect($this->db_host, $this->db_username, $this->db_password) or die("Cannot Connect: ".mysql_connect_error());
			return 1;
		}

		function useDatabase($in_db)
		{
			return mysql_select_db($in_db, $this->conn) or die("Cannot Connect to DB");
		}

		function runInsert($sql_query)
		{
			return mysql_query($sql_query, $this->conn);
		}

		function getError()
		{
			return mysql_error($this->conn);
		}

		function lastID()
		{
			return mysql_insert_id($this->conn);
		}

		function getNum($result)
		{
			//$result = mysql_query($sql_query, $this->conn);
			return mysql_num_rows($result);
		}

		function runSelect($sql_query)
		{
			$result = mysql_query($sql_query, $this->conn);
			if(mysql_num_rows($result))
			{
				$row = mysql_fetch_array($result);
			}
			return $row;
		}

		function runSelectResult($sql_query)
		{
			$result = mysql_query($sql_query, $this->conn);
			return $result;
		}

		function getField($result, $index)
		{
			//return mysql_field_name($result, $index);
		}

		function getArray($result)
		{
			return mysql_fetch_array($result);
		}

		function runCheck($sql_query)
		{
			$result = mysql_query($sql_query, $this->conn);
			//echo $sql_query;
			$tmpTest = mysql_num_rows($result);
			if($tmpTest)
			{ $row = $tmpTest; }
			else
			{ $row = 0; }
			return $row;
		}

		function runExecute($sql_query)
		{
			return mysql_query($sql_query, $this->conn);
		}

		function fetchTop($table)
		{
			$result = mysql_query("SELECT * FROM $table ORDER BY ID DESC LIMIT 1", $this->conn);
			if(mysql_num_rows($result))
			{
				$row = mysql_fetch_array($result);
			}
			return $row[0];
		}

		function closeConnection()
		{
			return mysql_close($this->conn);
		}
	}
?>





















