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
function guardar($IdVehiculo,$Placa,$Chasis,$Motor,$Modelo,$Color,$txtopciones)
	{

    	$parameters=array($IdVehiculo,$Placa,$Chasis,$Motor,$Modelo,$Color,$txtopciones);
		$sql = 'CALL sp_get_taller(?,?,?,?,?,?,?)';
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
