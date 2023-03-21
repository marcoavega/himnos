<?php
class TextVersesModel extends Model
{
    public function set($verse_text_data = array())
    {
        foreach ($verse_text_data as $key => $value) {
            $$key = $value;
        }

        function test_input($data)
        {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        $id_verses_text = test_input($_POST['id_verses_text']);
        $verse_text = test_input($_POST['verse_text']);
        $name_lesson = test_input($_POST['name_lesson']);

        $this->query = "REPLACE INTO verses_text (id_verses_text, verse_text, name_lesson) VALUES ('$id_verses_text', '$verse_text','$name_lesson')";
        $this->set_query();
    }

    public function get($verse_text = '')
    {
        $this->query = ($verse_text != '')
            ? "SELECT vrs.id_verses_text, vrs.verse_text, lt.name_lesson FROM verses_text AS vrs INNER JOIN lessons_title AS lt ON vrs.name_lesson = lt.id_lesson_title WHERE vrs.verse_text = '$verse_text'"
            : "SELECT vrs.id_verses_text, vrs.verse_text, lt.name_lesson FROM verses_text AS vrs INNER JOIN lessons_title AS lt ON vrs.name_lesson = lt.id_lesson_title";

        $this->get_query();

        $num_rows = count($this->rows);

        $data = array();

        foreach ($this->rows as $key => $value) {
            array_push($data, $value);
        }

        return $data;
    }

    public function del($verse_text = '')
    {
        $this->query = "DELETE FROM verses_text WHERE verse_text = '$verse_text'";
        $this->set_query();
    }

    public function __destruct()
    {
        unset($this->db_name);
    }
}