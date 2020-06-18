<?php

class Database{
    private $db_host = "localhost";  // Change as required
    private $db_user = "wwwbijoy_bengal";  // Change as required
    private $db_pass = "ckk(F)K@L!]u";  // Change as required
    private $db_name = "new_bijoy_bangla";	// Change as required

    private $con = false;
    private $myconn = "";
    private $result = array();
    private $myQuery = "";
    private $numResults = "";

    public function connect(){
        if(!$this->con){
            @$this->myconn = new mysqli($this->db_host,$this->db_user,$this->db_pass,$this->db_name);
            if($this->myconn->connect_errno > 0){
                array_push($this->result,$this->myconn->connect_error);
                return false;
            }else{
                $this->con = true;
                return true;
            }
        }else{
            return true;
        }
    }

    public function disconnect(){

        if($this->con){
            if($this->myconn->close()){
                $this->con = false;
                return true;
            }else{
                return false;
            }
        }
    }

    public function escapeString($data){
        return $this->myconn->real_escape_string($data);
    }

    public function sql($sql){
        $query = $this->myconn->query($sql);
        $this->myQuery = $sql;
        if($query){

            $this->numResults = $query->num_rows;

            for($i = 0; $i < $this->numResults; $i++){
                $r = $query->fetch_array();
                $key = array_keys($r);
                for($x = 0; $x < count($key); $x++){

                    if(!is_int($key[$x])){
                        if($query->num_rows >= 1){
                            $this->result[$i][$key[$x]] = $r[$key[$x]];
                        }else{
                            $this->result = null;
                        }
                    }
                }
            }
            return true;
        }else{
            array_push($this->result,$this->myconn->error);
            return false;
        }
    }

    public function insert($table,$params=array()){

        if($this->tableExists($table)){
            $sql='INSERT INTO `'.$table.'` (`'.implode('`, `',array_keys($params)).'`) VALUES ("' . implode('", "', $params) . '")';
            $this->myQuery = $sql;

            if($ins = $this->myconn->query($sql)){
                array_push($this->result,$this->myconn->insert_id);
                return true;
            }else{
                array_push($this->result,$this->myconn->error);
                return false;
            }
        }else{
            return false;
        }
    }

    //Function to delete table or row(s) from database
    public function delete($table,$where = null){
        if($this->tableExists($table)){
            if($where == null){
                $delete = 'DROP TABLE '.$table;
            }else{
                $delete = 'DELETE FROM '.$table.' WHERE '.$where;
            }

            if($del = $this->myconn->query($delete)){
                array_push($this->result,$this->myconn->affected_rows);
                $this->myQuery = $delete;
                return true;
            }else{
                array_push($this->result,$this->myconn->error);
                return false;
            }
        }else{
            return false;
        }
    }

    // Function to update row in database
    public function update($table,$params=array(),$where){
        if($this->tableExists($table)){
            $args=array();
            foreach($params as $field=>$value){
                $args[]=$field.'="'.$value.'"';
            }
            $sql='UPDATE '.$table.' SET '.implode(',',$args).' WHERE '.$where;
            // create query to database
            $this->myQuery = $sql;
            if($query = $this->myconn->query($sql)){
                array_push($this->result,$this->myconn->affected_rows);
                return true;
            }else{
                array_push($this->result,$this->myconn->error);
                return false;
            }
        }else{
            return false;
        }
    }

    // Private function to check if table exists for use with queries
    private function tableExists($table){
        $tablesInDb = $this->myconn->query('SHOW TABLES FROM '.$this->db_name.' LIKE "'.$table.'"');
        if($tablesInDb){
            if($tablesInDb->num_rows == 1){
                return true;
            }else{
                array_push($this->result,$table." does not exist in this database");
                return false;
            }
        }
    }

    // Public function to return the data to the user
    public function getResult(){
        $val = $this->result;
        $this->result = array();
        return $val;
    }

    //Pass the SQL back for debugging
    public function getSql(){
        $val = $this->myQuery;
        $this->myQuery = array();
        return $val;
    }

    //Pass the number of rows back
    public function numRows(){
        $val = $this->numResults;
        $this->numResults = array();
        return $val;
    }


}


?>