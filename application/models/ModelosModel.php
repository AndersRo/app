<?php
class ModelosModel extends CI_Model
{

  function Listar($sidx,$sord,$attr)
	{
    $parameters=array($sidx,$sord,$attr["start"],$attr["limit"],$attr["filter"]);
		$sql = 'CALL sp_get_listamodelos(?,?,?,?,?)';
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

  function listmodel(){
      $parameters=array();
  		$sql = 'call sp_get_modelos()';
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

  function registra (ModelosModel $data)
	{
		$parameters=array($data->opcion
						 ,$data->idmodelo
						 ,$data->idmarca
						 ,$data->descripcion
             ,$data->wks
             ,$data->file
             ,$data->usuario
						);
		$sql = 'CALL sp_set_registramodelo(?,?,?,?,?,?,?)';
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
