<?php
class ClientesModel extends CI_Model
{

  function Listar($sidx,$sord,$attr,$idcliente)
	{
    $parameters=array($sidx,$sord,$attr["start"],$attr["limit"],$attr["filter"],$idcliente);
		$sql = 'CALL sp_get_listarclientes(?,?,?,?,?,?)';
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

	function guardar($valormarca,$valormodelo)
	{

    	$parameters=array($valormarca,$valormodelo);
		$sql = 'CALL sp_set_actor(?,?)';
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

  function lisgg($sidx)
	{
    $parameters=array($sidx);
		$sql = 'CALL sp_get_actor(?)';
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
		$parameters=array($data->opcion1
						 ,$data->opcion2
						 ,$data->idactor
						 ,$data->tipopersona
						 ,$data->apaterno
             ,$data->amaterno
             ,$data->primernombre
             ,$data->segundonombre
             ,$data->razonsocial
             ,$data->tipodocumento
             ,$data->codidentificacion
             ,$data->ruc
             ,$data->empresa
             ,$data->usuario
             ,$data->wks
             ,$data->direccion
             ,$data->ubigeo
             ,$data->telefono
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
