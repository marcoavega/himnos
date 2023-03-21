<?php
class BiblesReadingsTextModel extends Model
{
    public function set($bible_reading_text_data = array())
    {
        foreach ($bible_reading_text_data as $key => $value) {
            $$key = $value;
        }

        function test_input($data)
        {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        $id_bible_reading_text = test_input($_POST['id_bibles_reading_text']);
        $reading = test_input($_POST['reading']);
        $name_lesson = test_input($_POST['name_lesson']);

        $this->query = "REPLACE INTO bibles_readings_text (id_bibles_reading_text, reading, name_lesson) VALUES ('$id_bible_reading_text', '$reading','$name_lesson')";
        $this->set_query();
    }

    public function get($reading = '')
    {
        $this->query = ($reading != '')
            ? "SELECT vrs.id_bibles_reading_text, vrs.reading, lt.name_lesson FROM bibles_readings_text AS vrs INNER JOIN lessons_title AS lt ON vrs.name_lesson = lt.id_lesson_title WHERE vrs.reading = '$reading'"
            : "SELECT vrs.id_bibles_reading_text, vrs.reading, lt.name_lesson FROM bibles_readings_text AS vrs INNER JOIN lessons_title AS lt ON vrs.name_lesson = lt.id_lesson_title";

        $this->get_query();

        $num_rows = count($this->rows);

        $data = array();

        foreach ($this->rows as $key => $value) {
            array_push($data, $value);
        }

        return $data;
    }

    public function del($reading = '')
    {
        $this->query = "DELETE FROM bibles_readings_text WHERE reading = '$reading'";
        $this->set_query();
    }

    public function __destruct()
    {
        unset($this->db_name);
    }
}