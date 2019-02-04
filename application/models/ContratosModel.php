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

  function registra (ClientesModel $data)
	{
		$parameters=array($data->opcion
						 ,$data->idcontrato
						 ,$data->tiposervicio
						 ,$data->idcliente
						 ,$data->idvehiculo
             ,$data->tipcontrato
             ,$data->idempresa
             ,$data->stdcontrato
             ,$data->cadenadetalleanex
             ,$data->idcontratoorden
             ,$data->idcontratoanex
             ,$data->usuario
             ,$data->wks
						);
		$sql = 'CALL sp_set_registraactor(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)';
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
