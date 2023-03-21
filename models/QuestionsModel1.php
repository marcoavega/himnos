<?php
class QuestionsModel1 extends Model
{
    public function set($question1_data = array())
    {
        foreach ($question1_data as $key => $value) {
            $$key = $value;
        }

        function test_input($data)
        {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        $id_question1 = test_input($_POST['id_question1']);
        $question1 = test_input($_POST['question1']);
        $name_lesson = test_input($_POST['name_lesson']);

        $this->query = "REPLACE INTO questions1 (id_question1, question1, name_lesson) VALUES ('$id_question1', '$question1','$name_lesson')";
        $this->set_query();
    }
    public function set1($question1_data = array())
    {
        foreach ($question1_data as $key => $value) {
            $$key = $value;
        }

        function test_input1($data)
        {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        $id_question1 = test_input1($_POST['id_question1']);
        $question1 = test_input1($_POST['question1']);
        $name_lesson = test_input1($_POST['name_lesson']);

        $this->query = "REPLACE INTO questions1 (id_question1, question1, name_lesson) VALUES ('$id_question1', '$question1','$name_lesson')";
        $this->set_query();
    }
    public function set2($question1_data = array())
    {
        foreach ($question1_data as $key => $value) {
            $$key = $value;
        }

        function test_input2($data)
        {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        $id_question2 = test_input2($_POST['id_question2']);
        $question2 = test_input2($_POST['question2']);
        $name_lesson = test_input2($_POST['name_lesson']);

        $this->query = "REPLACE INTO questions2 (id_question2, question2, name_lesson) VALUES ('$id_question2', '$question2','$name_lesson')";
        $this->set_query();
    }
    public function set3($question1_data = array())
    {
        foreach ($question1_data as $key => $value) {
            $$key = $value;
        }

        function test_input3($data)
        {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        $id_question3 = test_input3($_POST['id_question3']);
        $question3 = test_input3($_POST['question3']);
        $name_lesson = test_input3($_POST['name_lesson']);

        $this->query = "REPLACE INTO questions3 (id_question3, question3, name_lesson) VALUES ('$id_question3', '$question3','$name_lesson')";
        $this->set_query();
    }
    public function set4($question1_data = array())
    {
        foreach ($question1_data as $key => $value) {
            $$key = $value;
        }

        function test_input4($data)
        {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        $id_question4 = test_input4($_POST['id_question4']);
        $question4 = test_input4($_POST['question4']);
        $name_lesson = test_input4($_POST['name_lesson']);

        $this->query = "REPLACE INTO questions4 (id_question4, question4, name_lesson) VALUES ('$id_question4', '$question4','$name_lesson')";
        $this->set_query();
    }
    public function set5($question1_data = array())
    {
        foreach ($question1_data as $key => $value) {
            $$key = $value;
        }

        function test_input5($data)
        {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        $id_question5 = test_input5($_POST['id_question5']);
        $question5 = test_input5($_POST['question5']);
        $name_lesson = test_input5($_POST['name_lesson']);

        $this->query = "REPLACE INTO questions5 (id_question5, question5, name_lesson) VALUES ('$id_question5', '$question5','$name_lesson')";
        $this->set_query();
    }
    public function set6($question1_data = array())
    {
        foreach ($question1_data as $key => $value) {
            $$key = $value;
        }

        function test_input6($data)
        {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        $id_question6 = test_input6($_POST['id_question6']);
        $question6 = test_input6($_POST['question6']);
        $name_lesson = test_input6($_POST['name_lesson']);

        $this->query = "REPLACE INTO questions6 (id_question6, question6, name_lesson) VALUES ('$id_question6', '$question6','$name_lesson')";
        $this->set_query();
    }
    public function set7($question1_data = array())
    {
        foreach ($question1_data as $key => $value) {
            $$key = $value;
        }

        function test_input7($data)
        {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        $id_question7 = test_input7($_POST['id_question7']);
        $question7 = test_input7($_POST['question7']);
        $name_lesson = test_input7($_POST['name_lesson']);

        $this->query = "REPLACE INTO questions7 (id_question7, question7, name_lesson) VALUES ('$id_question7', '$question7','$name_lesson')";
        $this->set_query();
    }
    public function set8($question1_data = array())
    {
        foreach ($question1_data as $key => $value) {
            $$key = $value;
        }

        function test_input8($data)
        {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        $id_question8 = test_input8($_POST['id_question8']);
        $question8 = test_input8($_POST['question8']);
        $name_lesson = test_input8($_POST['name_lesson']);

        $this->query = "REPLACE INTO questions8 (id_question8, question8, name_lesson) VALUES ('$id_question8', '$question8','$name_lesson')";
        $this->set_query();
    }


    public function get($question1 = '')
    {
        $this->query = ($question1 != '')
            ? "SELECT vrs.id_question1, vrs.question1, lt.name_lesson FROM questions1 AS vrs INNER JOIN lessons_title AS lt ON vrs.name_lesson = lt.id_lesson_title WHERE vrs.question1 = '$question1'"
            : "SELECT vrs.id_question1, vrs.question1, lt.name_lesson FROM questions1 AS vrs INNER JOIN lessons_title AS lt ON vrs.name_lesson = lt.id_lesson_title";

        $this->get_query();

        $num_rows = count($this->rows);

        $data = array();

        foreach ($this->rows as $key => $value) {
            array_push($data, $value);
        }

        return $data;
    }
    public function get1($question1 = '')
    {
        $this->query = ($question1 != '')
            ? "SELECT vrs.id_question1, vrs.question1, lt.name_lesson FROM questions1 AS vrs INNER JOIN lessons_title AS lt ON vrs.name_lesson = lt.id_lesson_title WHERE vrs.question1 = '$question1'"
            : "SELECT vrs.id_question1, vrs.question1, lt.name_lesson FROM questions1 AS vrs INNER JOIN lessons_title AS lt ON vrs.name_lesson = lt.id_lesson_title";

        $this->get_query();

        $num_rows = count($this->rows);

        $data = array();

        foreach ($this->rows as $key => $value) {
            array_push($data, $value);
        }

        return $data;
    }
    public function get2($question1 = '')
    {
        $this->query = ($question1 != '')
            ? "SELECT vrs.id_question2, vrs.question2, lt.name_lesson FROM questions2 AS vrs INNER JOIN lessons_title AS lt ON vrs.name_lesson = lt.id_lesson_title WHERE vrs.question2 = '$question1'"
            : "SELECT vrs.id_question2, vrs.question2, lt.name_lesson FROM questions2 AS vrs INNER JOIN lessons_title AS lt ON vrs.name_lesson = lt.id_lesson_title";

        $this->get_query();

        $num_rows = count($this->rows);

        $data = array();

        foreach ($this->rows as $key => $value) {
            array_push($data, $value);
        }

        return $data;
    }
    public function get3($question1 = '')
    {
        $this->query = ($question1 != '')
            ? "SELECT vrs.id_question3, vrs.question3, lt.name_lesson FROM questions3 AS vrs INNER JOIN lessons_title AS lt ON vrs.name_lesson = lt.id_lesson_title WHERE vrs.question3 = '$question1'"
            : "SELECT vrs.id_question3, vrs.question3, lt.name_lesson FROM questions3 AS vrs INNER JOIN lessons_title AS lt ON vrs.name_lesson = lt.id_lesson_title";

        $this->get_query();

        $num_rows = count($this->rows);

        $data = array();

        foreach ($this->rows as $key => $value) {
            array_push($data, $value);
        }

        return $data;
    }
    public function get4($question1 = '')
    {
        $this->query = ($question1 != '')
            ? "SELECT vrs.id_question4, vrs.question4, lt.name_lesson FROM questions4 AS vrs INNER JOIN lessons_title AS lt ON vrs.name_lesson = lt.id_lesson_title WHERE vrs.question4 = '$question1'"
            : "SELECT vrs.id_question4, vrs.question4, lt.name_lesson FROM questions4 AS vrs INNER JOIN lessons_title AS lt ON vrs.name_lesson = lt.id_lesson_title";

        $this->get_query();

        $num_rows = count($this->rows);

        $data = array();

        foreach ($this->rows as $key => $value) {
            array_push($data, $value);
        }

        return $data;
    }
    public function get5($question1 = '')
    {
        $this->query = ($question1 != '')
            ? "SELECT vrs.id_question5, vrs.question5, lt.name_lesson FROM questions5 AS vrs INNER JOIN lessons_title AS lt ON vrs.name_lesson = lt.id_lesson_title WHERE vrs.question5 = '$question1'"
            : "SELECT vrs.id_question5, vrs.question5, lt.name_lesson FROM questions5 AS vrs INNER JOIN lessons_title AS lt ON vrs.name_lesson = lt.id_lesson_title";

        $this->get_query();

        $num_rows = count($this->rows);

        $data = array();

        foreach ($this->rows as $key => $value) {
            array_push($data, $value);
        }

        return $data;
    }
    public function get6($question1 = '')
    {
        $this->query = ($question1 != '')
            ? "SELECT vrs.id_question6, vrs.question6, lt.name_lesson FROM questions6 AS vrs INNER JOIN lessons_title AS lt ON vrs.name_lesson = lt.id_lesson_title WHERE vrs.question6 = '$question1'"
            : "SELECT vrs.id_question6, vrs.question6, lt.name_lesson FROM questions6 AS vrs INNER JOIN lessons_title AS lt ON vrs.name_lesson = lt.id_lesson_title";

        $this->get_query();

        $num_rows = count($this->rows);

        $data = array();

        foreach ($this->rows as $key => $value) {
            array_push($data, $value);
        }

        return $data;
    }
    public function get7($question1 = '')
    {
        $this->query = ($question1 != '')
            ? "SELECT vrs.id_question7, vrs.question7, lt.name_lesson FROM questions7 AS vrs INNER JOIN lessons_title AS lt ON vrs.name_lesson = lt.id_lesson_title WHERE vrs.question7 = '$question1'"
            : "SELECT vrs.id_question7, vrs.question7, lt.name_lesson FROM questions7 AS vrs INNER JOIN lessons_title AS lt ON vrs.name_lesson = lt.id_lesson_title";

        $this->get_query();

        $num_rows = count($this->rows);

        $data = array();

        foreach ($this->rows as $key => $value) {
            array_push($data, $value);
        }

        return $data;
    }
    public function get8($question1 = '')
    {
        $this->query = ($question1 != '')
            ? "SELECT vrs.id_question8, vrs.question8, lt.name_lesson FROM questions8 AS vrs INNER JOIN lessons_title AS lt ON vrs.name_lesson = lt.id_lesson_title WHERE vrs.question8 = '$question1'"
            : "SELECT vrs.id_question8, vrs.question8, lt.name_lesson FROM questions8 AS vrs INNER JOIN lessons_title AS lt ON vrs.name_lesson = lt.id_lesson_title";

        $this->get_query();

        $num_rows = count($this->rows);

        $data = array();

        foreach ($this->rows as $key => $value) {
            array_push($data, $value);
        }

        return $data;
    }

    public function del($question1 = '')
    {
        $this->query = "DELETE FROM questions1 WHERE question1 = '$question1'";
        $this->set_query();
    }
    public function del1($question1 = '')
    {
        $this->query = "DELETE FROM questions1 WHERE question1 = '$question1'";
        $this->set_query();
    }
    public function del2($question2 = '')
    {
        $this->query = "DELETE FROM questions2 WHERE question2 = '$question2'";
        $this->set_query();
    }
    public function del3($question3 = '')
    {
        $this->query = "DELETE FROM questions3 WHERE question3 = '$question3'";
        $this->set_query();
    }
    public function del4($question4 = '')
    {
        $this->query = "DELETE FROM questions4 WHERE question4 = '$question4'";
        $this->set_query();
    }
    public function del5($question5 = '')
    {
        $this->query = "DELETE FROM questions5 WHERE question1 = '$question5'";
        $this->set_query();
    }
    public function del6($question6 = '')
    {
        $this->query = "DELETE FROM questions6 WHERE question6 = '$question6'";
        $this->set_query();
    }
    public function del7($question7 = '')
    {
        $this->query = "DELETE FROM questions7 WHERE question7 = '$question7'";
        $this->set_query();
    }
    public function del8($question8 = '')
    {
        $this->query = "DELETE FROM questions8 WHERE question8 = '$question8'";
        $this->set_query();
    }

    public function __destruct()
    {
        unset($this->db_name);
    }
}