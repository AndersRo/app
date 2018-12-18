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

 function guardar($IdEmpresa,$RUC,$RazonSocial,$NombreComercial,$Representante)
  {

      $parameters=array($IdEmpresa,$RUC,$RazonSocial,$NombreComercial,$Representante,$txt);
    $sql = 'CALL sp_get_empresas(?,?,?,?,?)';
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


