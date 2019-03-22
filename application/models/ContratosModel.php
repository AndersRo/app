<?php
class ContratosModel extends CI_Model
{

  function Listar($sidx,$sord,$attr,$idempresa)
	{
    $parameters=array($sidx,$sord,$attr["start"],$attr["limit"],$attr["filter"],$idempresa);
		$sql = 'call sp_get_listarcontratos(?,?,?,?,?,?)';
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

  function registra (ContratosModel $data)
	{
		$parameters=array($data->opcion
						 ,$data->idcontrato
						 ,$data->tiposervicio
						 ,$data->idcliente
             ,$data->tipcontrato
             ,$data->idempresa
						 ,$data->idvehiculo
             ,$data->stdcontrato
             ,$data->idcontratoorden
             ,$data->idorden
             ,$data->usuario
             ,$data->wks
             ,$data->idcontratoanex
             ,$data->cadenadetalleanex
						);
		$sql = 'CALL sp_set_contrato(?,?,?,?,?,?,?,?,?,?,?,?,?,?)';
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

  function dataid($sidx)
	{
    $parameters=array($sidx);
		$sql = 'CALL sp_get_ordcli(?)';
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
