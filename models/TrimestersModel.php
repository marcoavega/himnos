<?php
class TrimestersModel extends Model
{
    public function set($trimester_data = array())
    {
        foreach ($trimester_data as $key => $value) {
            $$key = $value;
        }

        function test_input($data)
        {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        $id_trimester = test_input($_POST['id_trimester']);
        $trimester_number = test_input($_POST['trimester_number']);
        $trimester_title = test_input($_POST['trimester_title']);
        $year = test_input($_POST['year']);

        $this->query = "REPLACE INTO trimesters (id_trimester, trimester_number, trimester_title, year) VALUES ('$id_trimester', '$trimester_number', '$trimester_title', '$year')";
        $this->set_query();
    }

    public function get($trimester_title = '')
    {
        $this->query = ($trimester_title != '')
            ? "SELECT tm.id_trimester, tm.trimester_number, tm.trimester_title, yr.year FROM trimesters AS tm INNER JOIN years AS yr ON tm.year = yr.id_year WHERE tm.trimester_title = '$trimester_title'"
            : "SELECT tm.id_trimester, tm.trimester_number, tm.trimester_title, yr.year FROM trimesters AS tm INNER JOIN years AS yr ON tm.year = yr.id_year";

        $this->get_query();

        $num_rows = count($this->rows);

        $data = array();

        foreach ($this->rows as $key => $value) {
            array_push($data, $value);
        }

        return $data;
    }

    public function del($trimester_title = '')
    {
        $this->query = "DELETE FROM trimesters WHERE trimester_title = '$trimester_title'";
        $this->set_query();
    }

    public function __destruct()
    {
        unset($this->db_name);
    }
}