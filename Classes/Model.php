<?php

class Model
{
    public function sfiPlanos($limit = null)
    {
               
        $conn = Connection::getMySQL();
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $empresa = '002';
        
        $sql =  "select * from sfi040_002 where fldesabilita = 0 limit 5 ";
        
        if (!$limit == null):
            $sql =  "SELECT * FROM sfi040_002 where fldesabilita = 0 LIMIT $limit, 5";
        endif;
                       
        $sql = $conn->prepare($sql);  
        $sql->execute();
        $resultado = [];
        while ($row = $sql->fetchObject()) {
            $resultado[] = $row;
        }
        return $resultado;  
        
    }
}

 