<?php
class VehiculosModel extends CI_Model
{

  function Listar($sidx,$sord,$attr,$idempresa)
	{
    $parameters=array($sidx,$sord,$attr["start"],$attr["limit"],$attr["filter"],$idempresa);
		$sql = 'CALL sp_get_listarvehiculos(?,?,?,?,?,?)';
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
  function registra (VehiculosModel $data)
  {
    $parameters=array($data->opcion
             ,$data->idvehiculo
             ,$data->placa
             ,$data->chasis
             ,$data->motor
             ,$data->modelo
             ,$data->color
             ,$data->usuario
             ,$data->wks
             ,$data->rutaref
             ,$data->rutatar
             ,$data->idempresa
             ,$data->marca
            );
    $sql = 'CALL sp_set_registravehiculo(?,?,?,?,?,?,?,?,?,?,?,?,?)';
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

  function listveh($sidx)
	{
    $parameters=array($sidx);
		$sql = 'CALL sp_get_vehiculosid(?)';
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
  		$sql = 'call sp_get_vehiculos()';
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
