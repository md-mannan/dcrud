<?php

include'Database.php';


class Student{

    public $db;
    public function __construct(){
        $this->db=new Database();
    }
    public function select($table,$data =array()){
        $sql='select';
        $sql.=array_key_exists('select',$data)?$data['select']:'*';
        $sql.=' from '.$table;
        
        if(array_key_exists('where',$data)){
            $sql.=' where ';
            $i=0;
            foreach ($data['where'] as $key => $value) {
                $add=($i>0)?' and ':'';
                $sql.="$add".":$key=$key";
                $i++;
            }
        }
        if(array_key_exists('order_by',$data)){
            $sql.=' order by '.$data['order_by'];
        }
        if(array_key_exists('start',$data) && array_key_exists('limit',$data)){
            $sql.=' limit '.$data['start'].','.$data['limit'];
        }elseif(!array_key_exists('start',$data) && array_key_exists('limit',$data)){
            $sql.=' limit '.$data['limit'];
        }
        $query=$this->db->pdo->prepare($sql);
        if(array_key_exists('where',$data)){
            foreach ($data['where'] as $key => $value) {
                $query->bindValue(":$key",$value);
            }
        }
        $query->execute();
        if(array_key_exists('return_type',$data)){
            switch ($data['return_type']) {
                case 'count':
                    $value=$query->rowCount();
                    break;
                
                case 'single':
                    $value=$query->fetch(PDO::FETCH_ASSOC);
                     break;

                default:
                    $value='';
                    break;
            }
        }else{
            if($query->rowCount()>0){
                $value=$query->fetchAll();
            }
        }
        return !empty($value)?$value:false;
    }
   

}
?>