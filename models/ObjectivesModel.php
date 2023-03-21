<?php
class ObjectivesModel extends Model
{
    public function set($objectives_data = array())
    {
        foreach ($objectives_data as $key => $value) {
            $$key = $value;
        }

        function test_input($data)
        {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        $id_objective = test_input($_POST['id_objective']);
        $objective = test_input($_POST['objective']);
        $name_lesson = test_input($_POST['name_lesson']);

        $this->query = "REPLACE INTO objectives (id_objective, objective, name_lesson) VALUES ('$id_objective', '$objective','$name_lesson')";
        $this->set_query();
    }

    public function get($objective = '')
    {
        $this->query = ($objective != '')
            ? "SELECT ojt.id_objective, ojt.objective, lt.name_lesson FROM objectives AS ojt INNER JOIN lessons_title AS lt ON ojt.name_lesson = lt.id_lesson_title WHERE ojt.objective = '$objective'"
            : "SELECT ojt.id_objective, ojt.objective, lt.name_lesson FROM objectives AS ojt INNER JOIN lessons_title AS lt ON ojt.name_lesson = lt.id_lesson_title";

        $this->get_query();

        $num_rows = count($this->rows);

        $data = array();

        foreach ($this->rows as $key => $value) {
            array_push($data, $value);
        }

        return $data;
    }

    public function del($objective = '')
    {
        $this->query = "DELETE FROM objectives WHERE objective = '$objective'";
        $this->set_query();
    }

    public function __destruct()
    {
        unset($this->db_name);
    }
}