<?php namespace App\DB;

use App\Config\Config;


class DB {

    /**
     * The database array containing all relevant
     * data such as table name.
     *
     * @var $dbData
     */
    private $dbData;
    /**
     * The database instance.
     *
     * @var $databaseConnection
     */
    private $dbConnection;

    /**
     * Singleton instance
     *
     * @var $instance
     */
    private static $instance = null;

    public function __construct() {
        $config = new Config();
        $this->dbData = $config->getDBArray();
        $this->dbConnection = $this->connect();
        $this->dbConnection->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

    }

    /**
     * Instantiates a new connection  for the Database class
     *
     * @return  $con_db  object
     */
    public function connect(){
        $data = $this->dbData;
        $db = $data['DB_NAME'];
        $con_db = new \PDO("mysql:host=localhost;dbname=$db", $data['DB_USER'], $data['DB_PASS']);
        $con_db->setAttribute(\PDO::ATTR_ERRMODE,\PDO::ERRMODE_EXCEPTION);

        return $con_db;
    }

    /**
     * Returns a specific record from given table
     *
     * @param  string  $id
     * @param  string  $table
     * @return  array  $view
     */
    public function getRecordByID($id, $table){
    $id = addslashes(htmlspecialchars($id));
    try{
        $stmt = $this->dbConnection->prepare("SELECT * FROM  $table  " .
            " WHERE user_id =:id LIMIT 1");
        $stmt->bindParam(':id',$id,\PDO::PARAM_INT);
        $stmt->execute();
        $result = $stmt->fetch_array();

        return $result;
    }catch(\PDOException $e){
        die('Error!: '.$e->getMessage());
    }
}


    public function getAllRecords($table){
        try{
            $stmt = $this->dbConnection->prepare("SELECT * FROM  $table");
            $stmt->execute();
            $result = $stmt->fetchAll();

            return $result;
        }catch(\PDOException $e){
            die('Error!: '.$e->getMessage());
        }
    }
    /**
     * Returns specific record obtained by value
     *
     * @param  	string  $val
     * @param  	string  $table
     * @param  	string  $field1
     * @param  	string  $field2
     */
    public function getRecordByVal($table, $field1 = null, $field2 = null, $val){
        $val=addslashes(htmlspecialchars($val));
        try{
            $stmt = $this->dbConnection->prepare("SELECT * FROM $table " .
                " WHERE ".$field1." =:val or ".$field2." =:val "); //.($page*10).", 10"
            $stmt->bindParam(':val',$val,\PDO::PARAM_STR,12);
            $stmt->execute();
            $result = $stmt->fetchAll();

     return $result;
        }catch(PDOException $e){
            die('Error!: '.$e->getMessage());
        }
    }

    public function getLoginbyUsername($table, $field1 = null, $field2 = null, $username, $password){
        $username=addslashes(htmlspecialchars($username));
        try{
            $stmt = $this->dbConnection->prepare("SELECT * FROM $table " .
                " WHERE ".$field1." =:username and ".$field2." =:password "); //.($page*10).", 10"
            $stmt->bindParam(':username',$username,\PDO::PARAM_STR,12);
            $stmt->bindParam(':password',$password,\PDO::PARAM_STR,12);

            $stmt->execute();
            $result = $stmt->fetchAll();

            return $result;
        }catch(PDOException $e){
            die('Error!: '.$e->getMessage());
        }
    }

    public function Deletetable($id, $table){

    try{
        $stmt = $this->dbConnection->prepare("DELETE FROM $table WHERE user_id =:id LIMIT 1");
        $stmt->bindParam(':id',$id,\PDO::PARAM_INT);
        $stmt->execute();

    }catch (PDOException $ex){
        die('Error: ' .$ex->getMessage());
    }
}

    public function Updatetable($id, $table,$FirstName,$LastName,$Email,$Contact_Number,$Address){

        try{
            $sql = "UPDATE $table SET First_Name = :FirstName ,Last_Name = :LastName ,Email = :Email_add ,Contact_Number = :ContactNumber ,Address = :Address 
        WHERE user_id= :id ";



            $stmt = $this->dbConnection ->prepare($sql);

            $stmt->bindParam(':FirstName',$FirstName,\PDO::PARAM_STR,50);
            $stmt->bindParam(':LastName',$LastName,\PDO::PARAM_STR,50);
            $stmt->bindParam(':Email_add',$Email,\PDO::PARAM_STR,100);
            $stmt->bindParam(':ContactNumber',$Contact_Number,\PDO::PARAM_STR,20);
            $stmt->bindParam(':Address',$Address,\PDO::PARAM_STR,100);
            $stmt->bindParam(':id',$id,\PDO::PARAM_STR,10);

            $stmt->execute();

            echo $stmt->rowCount() . " records UPDATED successfully";


        }catch (PDOException $ex){
            die('Error: ' .$ex->getMessage());
        }
    }
    /**
     * Returns amount of records of a given table
     *
     * @param  string  $table
     * @return  array  $number
     */
    public function getPageCount($table){
        $stmt = $this->dbConnection->prepare("SELECT COUNT(*) AS total FROM $table ");
        $stmt->execute();
        $number = $stmt->fetchAll();

        return $number;
    }



    /**
     * Inserts a single record into a given table
     *
     * @param  string  $table
     * @param  array  $fields
     * @return  array  mixed
     */

    public function insert($table, array $fields){
        if(count($fields)){
            $keys = array_keys($fields);
            $sql = "INSERT INTO {$table} (".implode(',', $keys).") ";
            $pholder = $this->getPlaceHolder($fields);
            $sql .= " VALUES({$pholder}) ";
            try{
                $stmt = $this->dbConnection->prepare($sql);
                $pos = 1;

                if(count($fields)){
                    foreach ($fields as $param) {
                        $stmt->bindValue($pos, $param);
                        $pos++;
                    }
                }

                $post = $stmt->execute();
                if($post){
                    return  'Post sent';
                }
            }catch(PDOException $e){
                die('Error!: '.$e->getMessage());
            }
        }
    }


    public static function getInstance() {
        if(!isset(self::$instance)) {
            self::$instance = new Database;
        }
        return self::$instance;
    }

    /**
     * Creates placeholders for db query
     *
     * @param  array  $fields
     * @return  array  string
     */
    public function getPlaceHolder($fields = array()){
        $pholder = str_repeat ( "?, " , count($fields)-1 );

        return $pholder."?";
    }


    /**
     * Returns a list obtained from a given table
     *
     * @param  	int  	$page
     * @param  	string  $table
     * @return  array  	$con_db
     */
    public function paginate($page,$table, $amount){
        $page=htmlspecialchars($page);
        $stmt = $this->dbConnection->prepare("SELECT * FROM $table ORDER BY user_id ASC LIMIT ".($page * $amount).", $amount");
        $stmt->execute();
        $result = $stmt -> fetchAll();
//        this section of the function is not being used yet
//        if(!$disp){
//            $this->lim_reached = true;
//            $page--;
//            header("location:$table?page=$page");
//        }

        return $result;
    }

}

