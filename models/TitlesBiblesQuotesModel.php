<?php
class  TitlesBiblesQuotesModel extends Model
{
    public function set($quote1_data = array())
    {
        foreach ($quote1_data as $key => $value) {
            $$key = $value;
        }

        function test_input($data)
        {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        $id_title_bible_quote1 = test_input($_POST['id_title_bible_quote1']);
        $title_bible_quote1 = test_input($_POST['title_bible_quote1']);
        $name_lesson = test_input($_POST['name_lesson']);
        $number_question = test_input($_POST['number_question']);

        $this->query = "REPLACE INTO titles_bibles_quotes1 (id_title_bible_quote1, title_bible_quote1, name_lesson, number_question) VALUES ('$id_title_bible_quote1', '$title_bible_quote1','$name_lesson','$number_question')";
        $this->set_query();
    }
    public function set1($quote1_data = array())
    {
        foreach ($quote1_data as $key => $value) {
            $$key = $value;
        }

        function test_input1($data)
        {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        $id_title_bible_quote1 = test_input1($_POST['id_title_bible_quote1']);
        $title_bible_quote1 = test_input1($_POST['title_bible_quote1']);
        $name_lesson = test_input1($_POST['name_lesson']);
        $number_question = test_input1($_POST['number_question']);

        $this->query = "REPLACE INTO titles_bibles_quotes1 (id_title_bible_quote1, title_bible_quote1, name_lesson, number_question) VALUES ('$id_title_bible_quote1', '$title_bible_quote1','$name_lesson','$number_question')";
        $this->set_query();
    }
    public function set2($quote2_data = array())
    {
        foreach ($quote2_data as $key => $value) {
            $$key = $value;
        }

        function test_input2($data)
        {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        $id_title_bible_quote2 = test_input2($_POST['id_title_bible_quote2']);
        $title_bible_quote2 = test_input2($_POST['title_bible_quote2']);
        $name_lesson = test_input2($_POST['name_lesson']);
        $number_question = test_input2($_POST['number_question']);

        $this->query = "REPLACE INTO titles_bibles_quotes2 (id_title_bible_quote2, title_bible_quote2, name_lesson, number_question) VALUES ('$id_title_bible_quote2', '$title_bible_quote2','$name_lesson','$number_question')";
        $this->set_query();
    }
    public function set3($quote3_data = array())
    {
        foreach ($quote3_data as $key => $value) {
            $$key = $value;
        }

        function test_input3($data)
        {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        $id_title_bible_quote3 = test_input3($_POST['id_title_bible_quote3']);
        $title_bible_quote3 = test_input3($_POST['title_bible_quote3']);
        $name_lesson = test_input3($_POST['name_lesson']);
        $number_question = test_input3($_POST['number_question']);

        $this->query = "REPLACE INTO titles_bibles_quotes3 (id_title_bible_quote3, title_bible_quote3, name_lesson, number_question) VALUES ('$id_title_bible_quote3', '$title_bible_quote3','$name_lesson','$number_question')";
        $this->set_query();
    }
    public function set4($quote4_data = array())
    {
        foreach ($quote4_data as $key => $value) {
            $$key = $value;
        }

        function test_input4($data)
        {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        $id_title_bible_quote4 = test_input4($_POST['id_title_bible_quote4']);
        $title_bible_quote4 = test_input4($_POST['title_bible_quote4']);
        $name_lesson = test_input4($_POST['name_lesson']);
        $number_question = test_input4($_POST['number_question']);

        $this->query = "REPLACE INTO titles_bibles_quotes4 (id_title_bible_quote4, title_bible_quote4, name_lesson, number_question) VALUES ('$id_title_bible_quote4', '$title_bible_quote4','$name_lesson','$number_question')";
        $this->set_query();
    }
    public function set5($quote5_data = array())
    {
        foreach ($quote5_data as $key => $value) {
            $$key = $value;
        }

        function test_input5($data)
        {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        $id_title_bible_quote5 = test_input5($_POST['id_title_bible_quote5']);
        $title_bible_quote5 = test_input5($_POST['title_bible_quote5']);
        $name_lesson = test_input5($_POST['name_lesson']);
        $number_question = test_input5($_POST['number_question']);

        $this->query = "REPLACE INTO titles_bibles_quotes5 (id_title_bible_quote5, title_bible_quote5, name_lesson, number_question) VALUES ('$id_title_bible_quote5', '$title_bible_quote5','$name_lesson','$number_question')";
        $this->set_query();
    }
    public function set6($quote6_data = array())
    {
        foreach ($quote6_data as $key => $value) {
            $$key = $value;
        }

        function test_input6($data)
        {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        $id_title_bible_quote6 = test_input6($_POST['id_title_bible_quote6']);
        $title_bible_quote6 = test_input6($_POST['title_bible_quote6']);
        $name_lesson = test_input6($_POST['name_lesson']);
        $number_question = test_input6($_POST['number_question']);

        $this->query = "REPLACE INTO titles_bibles_quotes6 (id_title_bible_quote6, title_bible_quote6, name_lesson, number_question) VALUES ('$id_title_bible_quote6', '$title_bible_quote6','$name_lesson','$number_question')";
        $this->set_query();
    }
    public function set7($quote7_data = array())
    {
        foreach ($quote7_data as $key => $value) {
            $$key = $value;
        }

        function test_input7($data)
        {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        $id_title_bible_quote7 = test_input7($_POST['id_title_bible_quote7']);
        $title_bible_quote7 = test_input7($_POST['title_bible_quote7']);
        $name_lesson = test_input7($_POST['name_lesson']);
        $number_question = test_input7($_POST['number_question']);

        $this->query = "REPLACE INTO titles_bibles_quotes7 (id_title_bible_quote7, title_bible_quote7, name_lesson, number_question) VALUES ('$id_title_bible_quote7', '$title_bible_quote7','$name_lesson','$number_question')";
        $this->set_query();
    }
    public function set8($quote8_data = array())
    {
        foreach ($quote8_data as $key => $value) {
            $$key = $value;
        }

        function test_input8($data)
        {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        $id_title_bible_quote8 = test_input8($_POST['id_title_bible_quote8']);
        $title_bible_quote8 = test_input8($_POST['title_bible_quote8']);
        $name_lesson = test_input8($_POST['name_lesson']);
        $number_question = test_input8($_POST['number_question']);

        $this->query = "REPLACE INTO titles_bibles_quotes8 (id_title_bible_quote8, title_bible_quote8, name_lesson, number_question) VALUES ('$id_title_bible_quote8', '$title_bible_quote8','$name_lesson','$number_question')";
        $this->set_query();
    }


    public function get($id_quote1 = '')
    {
        $this->query = ($id_quote1 != '')
            ? "SELECT tbq.id_title_bible_quote1, tbq.title_bible_quote1, lt.name_lesson, nq.number_question FROM titles_bibles_quotes1 AS tbq INNER JOIN lessons_title AS lt INNER JOIN number_questions AS nq ON tbq.name_lesson = lt.id_lesson_title AND tbq.number_question = nq.id_number_question WHERE tbq.id_title_bible_quote1 = '$id_quote1'"
            : "SELECT tbq.id_title_bible_quote1, tbq.title_bible_quote1, lt.name_lesson, nq.number_question FROM titles_bibles_quotes1 AS tbq INNER JOIN lessons_title AS lt INNER JOIN number_questions AS nq ON tbq.name_lesson = lt.id_lesson_title AND tbq.number_question = nq.id_number_question";

        $this->get_query();

        $num_rows = count($this->rows);

        $data = array();

        foreach ($this->rows as $key => $value) {
            array_push($data, $value);
        }

        return $data;
    }
    public function get1($id_quote1 = '')
    {
        $this->query = ($id_quote1 != '')
            ? "SELECT tbq.id_title_bible_quote1, tbq.title_bible_quote1, lt.name_lesson, nq.number_question FROM titles_bibles_quotes1 AS tbq INNER JOIN lessons_title AS lt INNER JOIN number_questions AS nq ON tbq.name_lesson = lt.id_lesson_title AND tbq.number_question = nq.id_number_question WHERE tbq.id_title_bible_quote1 = '$id_quote1'"
            : "SELECT tbq.id_title_bible_quote1, tbq.title_bible_quote1, lt.name_lesson, nq.number_question FROM titles_bibles_quotes1 AS tbq INNER JOIN lessons_title AS lt INNER JOIN number_questions AS nq ON tbq.name_lesson = lt.id_lesson_title AND tbq.number_question = nq.id_number_question";

        $this->get_query();

        $num_rows = count($this->rows);

        $data = array();

        foreach ($this->rows as $key => $value) {
            array_push($data, $value);
        }

        return $data;
    }
    public function get2($id_quote2 = '')
    {
        $this->query = ($id_quote2 != '')
            ? "SELECT tbq.id_title_bible_quote2, tbq.title_bible_quote2, lt.name_lesson, nq.number_question FROM titles_bibles_quotes2 AS tbq INNER JOIN lessons_title AS lt INNER JOIN number_questions AS nq ON tbq.name_lesson = lt.id_lesson_title AND tbq.number_question = nq.id_number_question WHERE tbq.id_title_bible_quote2 = '$id_quote2'"
            : "SELECT tbq.id_title_bible_quote2, tbq.title_bible_quote2, lt.name_lesson, nq.number_question FROM titles_bibles_quotes2 AS tbq INNER JOIN lessons_title AS lt INNER JOIN number_questions AS nq ON tbq.name_lesson = lt.id_lesson_title AND tbq.number_question = nq.id_number_question";

        $this->get_query();

        $num_rows = count($this->rows);

        $data = array();

        foreach ($this->rows as $key => $value) {
            array_push($data, $value);
        }

        return $data;
    }
    public function get3($id_quote3 = '')
    {
        $this->query = ($id_quote3 != '')
            ? "SELECT tbq.id_title_bible_quote3, tbq.title_bible_quote3, lt.name_lesson, nq.number_question FROM titles_bibles_quotes3 AS tbq INNER JOIN lessons_title AS lt INNER JOIN number_questions AS nq ON tbq.name_lesson = lt.id_lesson_title AND tbq.number_question = nq.id_number_question WHERE tbq.id_title_bible_quote3 = '$id_quote3'"
            : "SELECT tbq.id_title_bible_quote3, tbq.title_bible_quote3, lt.name_lesson, nq.number_question FROM titles_bibles_quotes3 AS tbq INNER JOIN lessons_title AS lt INNER JOIN number_questions AS nq ON tbq.name_lesson = lt.id_lesson_title AND tbq.number_question = nq.id_number_question";

        $this->get_query();

        $num_rows = count($this->rows);

        $data = array();

        foreach ($this->rows as $key => $value) {
            array_push($data, $value);
        }

        return $data;
    }
    public function get4($id_quote4 = '')
    {
        $this->query = ($id_quote4 != '')
            ? "SELECT tbq.id_title_bible_quote4, tbq.title_bible_quote4, lt.name_lesson, nq.number_question FROM titles_bibles_quotes4 AS tbq INNER JOIN lessons_title AS lt INNER JOIN number_questions AS nq ON tbq.name_lesson = lt.id_lesson_title AND tbq.number_question = nq.id_number_question WHERE tbq.id_title_bible_quote4 = '$id_quote4'"
            : "SELECT tbq.id_title_bible_quote4, tbq.title_bible_quote4, lt.name_lesson, nq.number_question FROM titles_bibles_quotes4 AS tbq INNER JOIN lessons_title AS lt INNER JOIN number_questions AS nq ON tbq.name_lesson = lt.id_lesson_title AND tbq.number_question = nq.id_number_question";

        $this->get_query();

        $num_rows = count($this->rows);

        $data = array();

        foreach ($this->rows as $key => $value) {
            array_push($data, $value);
        }

        return $data;
    }
    public function get5($id_quote5 = '')
    {
        $this->query = ($id_quote5 != '')
            ? "SELECT tbq.id_title_bible_quote5, tbq.title_bible_quote5, lt.name_lesson, nq.number_question FROM titles_bibles_quotes5 AS tbq INNER JOIN lessons_title AS lt INNER JOIN number_questions AS nq ON tbq.name_lesson = lt.id_lesson_title AND tbq.number_question = nq.id_number_question WHERE tbq.id_title_bible_quote5 = '$id_quote5'"
            : "SELECT tbq.id_title_bible_quote5, tbq.title_bible_quote5, lt.name_lesson, nq.number_question FROM titles_bibles_quotes5 AS tbq INNER JOIN lessons_title AS lt INNER JOIN number_questions AS nq ON tbq.name_lesson = lt.id_lesson_title AND tbq.number_question = nq.id_number_question";

        $this->get_query();

        $num_rows = count($this->rows);

        $data = array();

        foreach ($this->rows as $key => $value) {
            array_push($data, $value);
        }

        return $data;
    }
    public function get6($id_quote6 = '')
    {
        $this->query = ($id_quote6 != '')
            ? "SELECT tbq.id_title_bible_quote6, tbq.title_bible_quote6, lt.name_lesson, nq.number_question FROM titles_bibles_quotes6 AS tbq INNER JOIN lessons_title AS lt INNER JOIN number_questions AS nq ON tbq.name_lesson = lt.id_lesson_title AND tbq.number_question = nq.id_number_question WHERE tbq.id_title_bible_quote6 = '$id_quote6'"
            : "SELECT tbq.id_title_bible_quote6, tbq.title_bible_quote6, lt.name_lesson, nq.number_question FROM titles_bibles_quotes6 AS tbq INNER JOIN lessons_title AS lt INNER JOIN number_questions AS nq ON tbq.name_lesson = lt.id_lesson_title AND tbq.number_question = nq.id_number_question";

        $this->get_query();

        $num_rows = count($this->rows);

        $data = array();

        foreach ($this->rows as $key => $value) {
            array_push($data, $value);
        }

        return $data;
    }
    public function get7($id_quote7 = '')
    {
        $this->query = ($id_quote7 != '')
            ? "SELECT tbq.id_title_bible_quote7, tbq.title_bible_quote7, lt.name_lesson, nq.number_question FROM titles_bibles_quotes7 AS tbq INNER JOIN lessons_title AS lt INNER JOIN number_questions AS nq ON tbq.name_lesson = lt.id_lesson_title AND tbq.number_question = nq.id_number_question WHERE tbq.id_title_bible_quote7 = '$id_quote7'"
            : "SELECT tbq.id_title_bible_quote7, tbq.title_bible_quote7, lt.name_lesson, nq.number_question FROM titles_bibles_quotes7 AS tbq INNER JOIN lessons_title AS lt INNER JOIN number_questions AS nq ON tbq.name_lesson = lt.id_lesson_title AND tbq.number_question = nq.id_number_question";

        $this->get_query();

        $num_rows = count($this->rows);

        $data = array();

        foreach ($this->rows as $key => $value) {
            array_push($data, $value);
        }

        return $data;
    }
    public function get8($id_quote8 = '')
    {
        $this->query = ($id_quote8 != '')
            ? "SELECT tbq.id_title_bible_quote8, tbq.title_bible_quote8, lt.name_lesson, nq.number_question FROM titles_bibles_quotes8 AS tbq INNER JOIN lessons_title AS lt INNER JOIN number_questions AS nq ON tbq.name_lesson = lt.id_lesson_title AND tbq.number_question = nq.id_number_question WHERE tbq.id_title_bible_quote8 = '$id_quote8'"
            : "SELECT tbq.id_title_bible_quote8, tbq.title_bible_quote8, lt.name_lesson, nq.number_question FROM titles_bibles_quotes8 AS tbq INNER JOIN lessons_title AS lt INNER JOIN number_questions AS nq ON tbq.name_lesson = lt.id_lesson_title AND tbq.number_question = nq.id_number_question";

        $this->get_query();

        $num_rows = count($this->rows);

        $data = array();

        foreach ($this->rows as $key => $value) {
            array_push($data, $value);
        }

        return $data;
    }

    public function del($id_title_bible_quote1 = '')
    {
        $this->query = "DELETE FROM titles_bibles_quotes1 WHERE id_title_bible_quote1 = '$id_title_bible_quote1'";
        $this->set_query();
    }
    public function del1($id_title_bible_quote1 = '')
    {
        $this->query = "DELETE FROM titles_bibles_quotes1 WHERE id_title_bible_quote1 = '$id_title_bible_quote1'";
        $this->set_query();
    }
    public function del2($id_title_bible_quote2 = '')
    {
        $this->query = "DELETE FROM titles_bibles_quotes2 WHERE id_title_bible_quote2 = '$id_title_bible_quote2'";
        $this->set_query();
    }
    public function del3($id_title_bible_quote3 = '')
    {
        $this->query = "DELETE FROM titles_bibles_quotes3 WHERE id_title_bible_quote3 = '$id_title_bible_quote3'";
        $this->set_query();
    }
    public function del4($id_title_bible_quote4 = '')
    {
        $this->query = "DELETE FROM titles_bibles_quotes4 WHERE id_title_bible_quote4 = '$id_title_bible_quote4'";
        $this->set_query();
    }
    public function del5($id_title_bible_quote5 = '')
    {
        $this->query = "DELETE FROM titles_bibles_quotes5 WHERE id_title_bible_quote5 = '$id_title_bible_quote5'";
        $this->set_query();
    }
    public function del6($id_title_bible_quote6 = '')
    {
        $this->query = "DELETE FROM titles_bibles_quotes6 WHERE id_title_bible_quote6 = '$id_title_bible_quote6'";
        $this->set_query();
    }
    public function del7($id_title_bible_quote7 = '')
    {
        $this->query = "DELETE FROM titles_bibles_quotes7 WHERE id_title_bible_quote7 = '$id_title_bible_quote7'";
        $this->set_query();
    }
    public function del8($id_title_bible_quote8 = '')
    {
        $this->query = "DELETE FROM titles_bibles_quotes8 WHERE id_title_bible_quote8 = '$id_title_bible_quote8'";
        $this->set_query();
    }


    public function __destruct()
    {
        unset($this->db_name);
    }
}
