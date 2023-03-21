<?php
class BiblesReadingsModel extends Model
{
    public function set($bible_reading_data = array())
    {
        foreach ($bible_reading_data as $key => $value) {
            $$key = $value;
        }

        function test_input($data)
        {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        $id_bible_reading = test_input($_POST['id_bibles_reading']);
        $title_reading = test_input($_POST['title_reading']);
        $name_lesson = test_input($_POST['name_lesson']);

        $this->query = "REPLACE INTO bibles_readings (id_bibles_reading, title_reading, name_lesson) VALUES ('$id_bible_reading', '$title_reading','$name_lesson')";
        $this->set_query();
    }

    public function get($title_reading = '')
    {
        $this->query = ($title_reading != '')
            ? "SELECT vrs.id_bibles_reading, vrs.title_reading, lt.name_lesson FROM bibles_readings AS vrs INNER JOIN lessons_title AS lt ON vrs.name_lesson = lt.id_lesson_title WHERE vrs.title_reading = '$title_reading'"
            : "SELECT vrs.id_bibles_reading, vrs.title_reading, lt.name_lesson FROM bibles_readings AS vrs INNER JOIN lessons_title AS lt ON vrs.name_lesson = lt.id_lesson_title";

        $this->get_query();

        $num_rows = count($this->rows);

        $data = array();

        foreach ($this->rows as $key => $value) {
            array_push($data, $value);
        }

        return $data;
    }

    public function del($title_reading = '')
    {
        $this->query = "DELETE FROM bibles_readings WHERE title_reading = '$title_reading'";
        $this->set_query();
    }

    public function __destruct()
    {
        unset($this->db_name);
    }
}
