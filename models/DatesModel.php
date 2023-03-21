<?php
class DatesModel extends Model
{
    public function set($date_data = array())
    {
        foreach ($date_data as $key => $value) {
            $$key = $value;
        }

        function test_input($data)
        {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        $id_date = test_input($_POST['id_date']);
        $date = test_input($_POST['date']);
        $year = test_input($_POST['year']);

        $this->query = "REPLACE INTO dates (id_date, date, year) VALUES ('$id_date', '$date', '$year')";

        $this->set_query();
    }

    public function get($date = '')
    {
        $this->query = ($date != '')
            ? "SELECT dt.id_date, dt.date, yr.year FROM dates AS dt INNER JOIN years AS yr ON dt.year = yr.id_year WHERE dt.date = '$date'"
            : "SELECT dt.id_date, dt.date, yr.year FROM dates AS dt INNER JOIN years AS yr ON dt.year = yr.id_year";

        $this->get_query();

        $num_rows = count($this->rows);

        $data = array();

        foreach ($this->rows as $key => $value) {
            array_push($data, $value);
        }

        return $data;
    }

    public function del($date = '')
    {
        $this->query = "DELETE FROM dates WHERE date = '$date'";
        $this->set_query();
    }

    public function __destruct()
    {
        unset($this->db_name);
    }
}