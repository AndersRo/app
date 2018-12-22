<?php
class EmpresasModel extends CI_Model
{

  function Listar($sidx,$sord,$attr)
	{
    $parameters=array($sidx,$sord,$attr["start"],$attr["limit"],$attr["filter"]);
		$sql = 'CALL sp_get_listarempresa(?,?,?,?,?)';
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
      $sql = 'call sp_get_empresas()';
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

    function registra (EmpresasModel $data)
  {
    $parameters=array($data->opcion
             ,$data->idempresa
             ,$data->ruc
             ,$data->razon
             ,$data->nombrecomercial
             ,$data->imagen
             ,$data->usuario
             ,$data->wks
             ,$data->representante
          );
    $sql = 'CALL sp_get_registraempresas(?,?,?,?,?,?,?,?,?)';
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

  function listemp($sidx)
  {
    $parameters=array($sidx);
    $sql = 'CALL sp_get_empresaid(?)';
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
