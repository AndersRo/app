<?php
class OrdenesModel extends CI_Model
{

  function Listar($sidx,$sord,$attr,$idempresa)
	{
    $parameters=array($sidx,$sord,$attr["start"],$attr["limit"],$attr["filter"],$idempresa);
		$sql = 'CALL sp_get_listarordenes(?,?,?,?,?,?)';
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

  function Listardet($sidx,$sord,$attr,$idempresa)
	{
    $parameters=array($sidx,$sord,$attr["start"],$attr["limit"],$attr["filter"],$idempresa);
		$sql = 'CALL sp_get_detorden(?,?,?,?,?,?)';
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

  function Listordpdf($idord)
	{
    $parameters=array($idord);
		$sql = 'CALL sp_get_idordenpdf(?)';
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

  function registra (OrdenesModel $data)
	{
		$parameters=array($data->opcion1
						 ,$data->idorden
						 ,$data->idempresa
						 ,$data->idmecanico
             ,$data->idcliente
             ,$data->idvehiculo
             ,$data->usuario
             ,$data->wks
             ,$data->estado
             ,$data->observacion
             ,$data->datepicker
             ,$data->idtaller
             ,$data->cadenadetalle
             //,$data->iddispositivo
             //,$data->tipotrabajo
             //,$data->nrosim
             //,$data->idn
						);
		$sql = 'CALL sp_set_registraorden(?,?,?,?,?,?,?,?,?,?,?,?,?)';
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

  function lisid($sidx)
	{
    $parameters=array($sidx);
		$sql = 'CALL sp_get_idorden(?)';
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

  function detidord($sidx)
	{
    $parameters=array($sidx);
		$sql = 'CALL sp_get_iddetord(?)';
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

  function lisidord($sidx)
	{
    $parameters=array($sidx);
		$sql = 'CALL sp_get_detordenes(?)';
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
