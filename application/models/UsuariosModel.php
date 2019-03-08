<?php
class UsuariosModel extends CI_Model
{

  function Listar($sidx,$sord,$attr,$idempresa)
	{
    $parameters=array($sidx,$sord,$attr["start"],$attr["limit"],$attr["filter"],$idempresa);
		$sql = 'CALL sp_get_listarusuarios(?,?,?,?,?,?)';
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

  function Listaropcuser($sidx,$sord,$attr,$idusuario)
	{
    $parameters=array($sidx,$sord,$attr["start"],$attr["limit"],$attr["filter"],$idusuario);
		$sql = 'CALL sp_get_opcionesuser(?,?,?,?,?,?)';
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

  function Listaropcion($sidx,$sord,$attr)
	{
    $parameters=array($sidx,$sord,$attr["start"],$attr["limit"],$attr["filter"]);
		$sql = 'CALL sp_get_listaropciones(?,?,?,?,?)';
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

  function lisidcon($sidx)
	{
    $parameters=array($sidx);
		$sql = 'CALL sp_get_obtuser(?)';
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

  function registra (UsuariosModel $data)
	{
		$parameters=array($data->opcion
             ,$data->idacceso
             ,$data->idcontrato
             ,$data->usuario
             ,$data->wks
						);
		$sql = 'CALL sp_set_registrapdetalle(?,?,?,?,?)';
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

  function registra_opc(UsuariosModel $data)
	{
		$parameters=array($data->opcion
             ,$data->idusuarioopciones
             ,$data->idopcion
             ,$data->idusuario
						);
		$sql = 'CALL sp_set_usuarioopcion(?,?,?,?)';
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
