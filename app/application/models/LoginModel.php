<?php

  /**
   *
   */
  class LoginModel extends CI_Model
  {

    function getcredenciales($login, $password)
    {
        $sql = 'CALL sp_get_validarcredenciales(?,?)';
        $parameters = array($login,$password);
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

    function getusuariomenu($login)
    {
      $sql = 'CALL sp_get_listaopcionesmenu(?)';
      $parameters = array($login);
      $q = $this->db->query($sql, $parameters);
      if($q -> num_rows() >= 1)
      {
           mysqli_next_result($this->db->conn_id);
           $data = $q->result_array();
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
