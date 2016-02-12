<?php 

class db{

public $hi = "hello word"; 
public $config = array(
	'username' => 'root',
	'password' => 'root',
	'database' => 'personal_website'
);

public function connect($config)
{
	try {
   $conn = new \PDO('mysql:host=localhost;dbname=' . $config['database'],
						$config['username'],
						$config['password']);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Connected successfully"; 
    return $conn;
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
}


function query($query, $bindings, $conn)
{
	$stmt = $conn->prepare($query);
	$stmt->execute($bindings);

	return ($stmt->rowCount() > 0) ? $stmt : false;
}

function get($tableName, $conn, $limit = 10)
{
	try {
		$result = $conn->query("SELECT * FROM $tableName ORDER BY id DESC LIMIT $limit");

		return ( $result->rowCount() > 0 )
			? $result
			: false;
	} catch(Exception $e) {
		return false;
	}
}


function get_by_id($id, $conn)
{
	$query = query(
		'SELECT * FROM posts WHERE id = :id LIMIT 1',
		array('id' => $id),
		$conn
	);

	if ( $query ) $query->fetchAll();
	// else
	}
}
?>