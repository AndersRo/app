<?php
class MarcasModel extends CI_Model
{

  function Listar($sidx,$sord,$attr)
	{
    $parameters=array($sidx,$sord,$attr["start"],$attr["limit"],$attr["filter"]);
		$sql = 'CALL sp_get_listamarcas(?,?,?,?,?)';
		$q = $this->db->query($sql, $parameters);
		if($q -> num_rows() >= 1)
		{
             mysqli_next_result($this->db->conn_id);
             $data = $q->result();
             $q->free_result();
             return $data;
		}
		else
		{
			return false;
		}
	}

  function guardar($valormarca)
	{

    	$parameters=array($valormarca);
		$sql = 'CALL sp_prueba(?)';
		$q = $this->db->query($sql, $parameters);

		if($q -> num_rows() >= 1)
        {
             mysqli_next_result($this->db->conn_id);
             $data = $q->result();
             $q->free_result();
             return $data;
        }
        else
        {
            return false;
        }

	}

}

?>
