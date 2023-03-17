// <?php
// // $q = $this->db->query("SELECT * FROM `WebCustomer` WHERE `User_Name` = 'Jagdhane'AND `Password`= 'Patil'");  
// class UserModel extends CI_Model 
// {
//     public function loginUser($data)
//     {
//         $this->db->select('*');
//         $this->db->where('email',$data['username']);
//         $this->db->where('password',$data['password']);
//         $this->db->from('WebCustomer');
//         $this->db->limit(1);
//         $q = $this->db->get();
//         if($q->num_rows()==1){
//             return $q->row();
//         } else {
//             return false;
//         }
//     }
// }

// ?>

<?php

    class UserModel extends CI_model
    {
        public function login_model($username,$password)
        {
          $q = $this->db->query("SELECT * FROM `WebCustomer` WHERE `User_Name` = '$username' AND `Password`= '$password'");
          
          $row = $q->num_rows();
          
          if($row > 0) {
          echo "Login Successful User";
          }
          else
          { 
            echo "Error git"
            redirect('Login');
          }
        }
    }
?>