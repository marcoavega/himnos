<?php
class TitlesVersesModel extends Model
{
    public function set($title_verses_data = array())
    {
        foreach ($title_verses_data as $key => $value) {
            $$key = $value;
        }

        function test_input($data)
        {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        $id_verse = test_input($_POST['id_verse']);
        $title_verse = test_input($_POST['title_verse']);
        $name_lesson = test_input($_POST['name_lesson']);

        $this->query = "REPLACE INTO verses (id_verse, title_verse, name_lesson) VALUES ('$id_verse', '$title_verse','$name_lesson')";
        $this->set_query();
    }

    public function get($title_verse = '')
    {
        $this->query = ($title_verse != '')
            ? "SELECT vrs.id_verse, vrs.title_verse, lt.name_lesson FROM verses AS vrs INNER JOIN lessons_title AS lt ON vrs.name_lesson = lt.id_lesson_title WHERE vrs.title_verse = '$title_verse'"
            : "SELECT vrs.id_verse, vrs.title_verse, lt.name_lesson FROM verses AS vrs INNER JOIN lessons_title AS lt ON vrs.name_lesson = lt.id_lesson_title";

        $this->get_query();

        $num_rows = count($this->rows);

        $data = array();

        foreach ($this->rows as $key => $value) {
            array_push($data, $value);
        }

        return $data;
    }

    public function del($title_verse = '')
    {
        $this->query = "DELETE FROM verses WHERE title_verse = '$title_verse'";
        $this->set_query();
    }

    public function __destruct()
    {
        unset($this->db_name);
    }
}