<?php
class TablasModel extends CI_Model
{

  function Listar($cod)
	{
    $parameters=array($cod);
		$sql = 'CALL sp_get_tablas(?)';
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
