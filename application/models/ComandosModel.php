<?php
class ComandosModel extends CI_Model
{

  function Listar($sidx,$sord,$attr)
	{
    $parameters=array($sidx,$sord,$attr["start"],$attr["limit"],$attr["filter"]);
		$sql = 'call sp_get_listarcomandos()';
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

  function registra (ComandosModel $data)
  {
    $parameters=array($data->opcion
             ,$data->idcomando
             ,$data->codtipocomando
             ,$data->comandos
             ,$data->idmodelo
            );
    $sql = 'CALL sp_set_registracomando(?,?,?,?,?)';
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

  function listcom($sidx)
	{
    $parameters=array($sidx);
		$sql = 'CALL sp_get_comandosid(?)';
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
