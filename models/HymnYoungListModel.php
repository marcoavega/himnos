<?php
class HymnYoungListModel extends Model
{
    public function set($hymn_list_data = array())
    {
    }

    public function get($hymn_name = '')
    {
        $this->query = ($hymn_name != '')
            ? "SELECT * FROM himnos_juveniles WHERE id_himno = '$hymn_name'"
            : "SELECT * FROM himnos_juveniles";

        $this->get_query();

        $num_rows = count($this->rows);

        $data = array();

        foreach ($this->rows as $key => $value) {
            array_push($data, $value);
        }

        return $data;
    }

    public function del($hymn_list = '')
    {
    }

    public function __destruct()
    {
        unset($this->db_name);
    }
}