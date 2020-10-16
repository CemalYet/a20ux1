<?php


class Database_model {
    private $db;

    /**
     * EventModel constructor.
     */
    public function __construct() {
        $this->db = \Config\Database::connect();
    }

    public function get_data() {
        $query_text = 'SELECT DISTINCT name FROM a20ux1.TestTable;';
        $query = $this->db->query($query_text);
        return $query->getResult();
    }

    public function get_data_limit($nr_of_titles = 3) {
        $query_text = 'SELECT DISTINCT name FROM a20ux1.TestTable limit' . $nr_of_titles;
        $query = $this->db->query($query_text);
        return $query->getResult();
    }

}