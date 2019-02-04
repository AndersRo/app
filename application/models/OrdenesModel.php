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
             ,$data->idatepicker
             ,$data->idtaller
             ,$data->cadenadetalle
             //,$data->iddispositivo
             //,$data->tipotrabajo
             //,$data->nrosim
             //,$data->idn
						);
		$sql = 'CALL sp_set_registraorden(?,?,?,?,?,?,?,?,?,?,?,?,?,?)';
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
