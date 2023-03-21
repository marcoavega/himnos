<?php
class YearsModel extends Model
{
    public function set($year_data = array())
    {
        foreach ($year_data as $key => $value) {
            $$key = $value;
        }

        function test_input($data)
        {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        $year = test_input($_POST['year']);

        $this->query = "REPLACE INTO years (id_year, year) VALUES ('$id_year', '$year')";
        $this->set_query();
    }

    public function get($year = '')
    {
        $this->query = ($year != '')
            ? "SELECT * FROM years WHERE year = '$year'"
            : "SELECT * FROM years";

        $this->get_query();

        $num_rows = count($this->rows);

        $data = array();

        foreach ($this->rows as $key => $value) {
            array_push($data, $value);
        }

        return $data;
    }

    public function del($year = '')
    {
        $this->query = "DELETE FROM years WHERE year = '$year'";
        $this->set_query();
    }

    public function __destruct()
    {
        unset($this->db_name);
    }
}