<?php
require_once 'config/db.php';
?>
    <?php
    class Zona
    {
        private $db;

        public function __construct()
        {
            $this->db = Database::DBconexion();
        }

        public function getdb()
        {
            return $this->db;
        }

        
    }
    ?>