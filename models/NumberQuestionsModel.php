<?php
class NumberQuestionsModel extends Model
{
    public function set($number_question_data = array())
    {
        foreach ($number_question_data as $key => $value) {
            $$key = $value;
        }

        function test_input($data)
        {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        $id_number_question = test_input($_POST['id_number_question']);
        $number_question = test_input($_POST['number_question']);

        $this->query = "REPLACE INTO number_questions (id_number_question, number_question) VALUES ('$id_number_question', '$number_question')";
        $this->set_query();
    }

    public function get($id_number_question = '')
    {
        $this->query = ($id_number_question != '')
            ? "SELECT ojt.id_number_question, ojt.number_question FROM number_questions AS ojt WHERE ojt.id_number_question = '$id_number_question'"
            : "SELECT ojt.id_number_question, ojt.number_question FROM number_questions AS ojt";

        $this->get_query();

        $num_rows = count($this->rows);

        $data = array();

        foreach ($this->rows as $key => $value) {
            array_push($data, $value);
        }

        return $data;
    }

    public function del($number_question = '')
    {
        $this->query = "DELETE FROM number_question WHERE number_question = '$number_question'";
        $this->set_query();
    }

    public function __destruct()
    {
        unset($this->db_name);
    }
}