<?php namespace App\DB;



class DBExtension extends DB {

    public function __construct() {
        parent::__construct();
    }


    public function getRecord($param, $param2, $field2 = null, $val = null, $amount = null) {
        if(func_num_args() == 2) {
            return parent::getRecordByID($param, $param2);
        } else if (func_num_args() > 2) {
            return parent::getRecordByVal($param, $param2, $field2, $val);
        }
        return null;
    }

    public function getAllRecords($tableName)
    {
        return parent::getAllRecords($tableName);
    }
        public function getLoginbyUsername($table, $field1 = null, $field2 = null, $username = null, $password = null)
    {
        return parent::getLoginbyUsername($table, $field1, $field2, $username, $password); // TODO: Change the autogenerated stub
    }

    public function insertRecord($tableName, $fields) {
       return parent::insert($tableName, $fields);
    }

    public function paginate($page, $table, $amount) {
        return parent::paginate($page, $table, $amount);
    }

    public function Deletetable($id, $table)
    {
        parent::Deletetable($id, $table);
    }

    public function Updatetable($id, $table,$FirstName,$LastName,$Email,$Contact_Number,$Address){
        parent::Updatetable($id, $table,$FirstName,$LastName,$Email,$Contact_Number,$Address);
    }
}

/*
 *
 * USAGE
 * ==========================================
 *
 * $db = new ForumDB()
 * // get one record from the question table with ID 1
 * $result = $db->getRecord(1, "question");
 * // get  one record from the question table where created_by equals mark
 * $result2 = $db->getRecord("question", "created_by","created_by", "mark");
 * // insert on record into the question table with values for the question and created_by fields
 * $result3 = $db->insert("question", array("question" => "yo is my name is mark", "created_by "=> "mark" ));
 * $result4 = $db->paginate(1, "question", 30);
 */

