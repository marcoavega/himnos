<?php
class LessonsTitlesModel extends Model
{
    public function set($lessons_title_data = array())
    {
        foreach ($lessons_title_data as $key => $value) {
            $$key = $value;
        }

        function test_input($data)
        {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        $id_lesson_title = test_input($_POST['id_lesson_title']);
        $name_lesson = test_input($_POST['name_lesson']);
        $date = test_input($_POST['date']);

        $this->query = "REPLACE INTO lessons_title (id_lesson_title, name_lesson, date) VALUES ('$id_lesson_title', '$name_lesson','$date') ";
        $this->set_query();
    }

    public function get($name_lesson = '')
    {
        $this->query = ($name_lesson != '')
            ? "SELECT lt.id_lesson_title, lt.name_lesson, dt.date FROM lessons_title AS lt INNER JOIN dates AS dt ON lt.date = dt.date WHERE lt.name_lesson = '$name_lesson'"
            : "SELECT lt.id_lesson_title, lt.name_lesson, dt.date FROM lessons_title AS lt INNER JOIN dates AS dt ON lt.date = dt.date";

        $this->get_query();

        $num_rows = count($this->rows);

        $data = array();

        foreach ($this->rows as $key => $value) {
            array_push($data, $value);
        }

        return $data;
    }

    public function del($name_lesson = '')
    {
        $this->query = "DELETE FROM lessons_title WHERE name_lesson = '$name_lesson'";
        $this->set_query();
    }

    public function __destruct()
    {
        unset($this->db_name);
    }
}