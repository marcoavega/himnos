<?php
class CommentsModel extends Model
{
    public function set($comment_data = array())
    {
        foreach ($comment_data as $key => $value) {
            $$key = $value;
        }

        function test_input($data)
        {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        $id_comment = test_input($_POST['id_comment']);
        $comment = test_input($_POST['comment']);
        $name_lesson = test_input($_POST['name_lesson']);

        $this->query = "REPLACE INTO comments (id_comment, comment, name_lesson) VALUES ('$id_comment', '$comment','$name_lesson')";
        $this->set_query();
    }

    public function get($comment = '')
    {
        $this->query = ($comment != '')
            ? "SELECT vrs.id_comment, vrs.comment, lt.name_lesson FROM comments AS vrs INNER JOIN lessons_title AS lt ON vrs.name_lesson = lt.id_lesson_title WHERE vrs.comment = '$comment'"
            : "SELECT vrs.id_comment, vrs.comment, lt.name_lesson FROM comments AS vrs INNER JOIN lessons_title AS lt ON vrs.name_lesson = lt.id_lesson_title";

        $this->get_query();

        $num_rows = count($this->rows);

        $data = array();

        foreach ($this->rows as $key => $value) {
            array_push($data, $value);
        }

        return $data;
    }

    public function del($comment = '')
    {
        $this->query = "DELETE FROM comments WHERE comment = '$comment'";
        $this->set_query();
    }

    public function __destruct()
    {
        unset($this->db_name);
    }
}