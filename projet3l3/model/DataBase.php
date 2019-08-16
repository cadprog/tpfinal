 <?php 
class DataBase{
	
        private $dbname=DataBaseConstante::$DB_NAME;
        private $dbhost=DataBaseConstante::$DB_HOST;
        private $dblogin=DataBaseConstante::$DB_LOGIN;
        private $dbpass=DataBaseConstante::$DB_PASS;
        private $db;

        function __construct($dbname::DataBaseConstante::$DB_NAME,$dbhost::DataBaseConstante::$DB_HOST,$dblogin::DataBaseConstante::$DB_LOGIN,$dbpass::DataBaseConstante::$DB_PASS){
        	// $this->dbname=$dbname;
         //    $this->dbhost=$dbhost;
         //    $this->dblogin=$dblogin;
         //    $this->dbpass=$dbpass;
            $this->db=new PDO("mysql:dbname=".$this->dbname.";host=".$this->dbhost,$this->dblogin);
        }
       public function getDB(){
       	if ($this->db==null) {
       		echo "bd_init";
       		 $this->db=new PDO("mysql:dbname=".$this->dbname.";host=".$this->dbhost,$this->dblogin);
       	}
       	echo "bd_called";
       	return this->db;
       } 
        public function getAll($table_name){
       	$req="SELECT * from ".$table_name;
       	$int=$this->getDB()->query($req);

       	return $int->fetchAll();
       }
 }
 ?>
