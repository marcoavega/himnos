<?php
class LessonsModel extends Model
{
    public function set($ls_data = array())
    {
        foreach ($ls_data as $key => $value) {
            $$key = $value;
        }

        function test_input($data)
        {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        $id_lesson = test_input($_POST['id_lesson']);
        $number_lesson = test_input($_POST['number_lesson']);
        $id_year = test_input($_POST['id_year']);
        $id_trimester = test_input($_POST['id_trimester']);
        $id_date = test_input($_POST['id_date']);
        $id_lesson_title = test_input($_POST['id_lesson_title']);
        $id_verse = test_input($_POST['id_verse']);
        $id_verses_text = test_input($_POST['id_verses_text']);
        $id_bibles_reading = test_input($_POST['id_bibles_reading']);
        $id_bibles_reading_text = test_input($_POST['id_bibles_reading_text']);
        $id_objective = test_input($_POST['id_objective']);
        $id_comment = test_input($_POST['id_comment']);
        $id_question1 = test_input($_POST['id_question1']);
        $id_question2 = test_input($_POST['id_question2']);
        $id_question3 = test_input($_POST['id_question3']);
        $id_question4 = test_input($_POST['id_question4']);
        $id_question5 = test_input($_POST['id_question5']);
        $id_question6 = test_input($_POST['id_question6']);
        $id_question7 = test_input($_POST['id_question7']);
        $id_question8 = test_input($_POST['id_question8']);
        $id_title_bible_quote1 = test_input($_POST['id_title_bible_quote1']);
        $id_title_bible_quote2 = test_input($_POST['id_title_bible_quote2']);
        $id_title_bible_quote3 = test_input($_POST['id_title_bible_quote3']);
        $id_title_bible_quote4 = test_input($_POST['id_title_bible_quote4']);
        $id_title_bible_quote5 = test_input($_POST['id_title_bible_quote5']);
        $id_title_bible_quote6 = test_input($_POST['id_title_bible_quote6']);
        $id_title_bible_quote7 = test_input($_POST['id_title_bible_quote7']);
        $id_title_bible_quote8 = test_input($_POST['id_title_bible_quote8']);
        $id_bible_quote1 = test_input($_POST['id_bible_quote1']);
        $id_bible_quote2 = test_input($_POST['id_bible_quote2']);
        $id_bible_quote3 = test_input($_POST['id_bible_quote3']);
        $id_bible_quote4 = test_input($_POST['id_bible_quote4']);
        $id_bible_quote5 = test_input($_POST['id_bible_quote5']);
        $id_bible_quote6 = test_input($_POST['id_bible_quote6']);
        $id_bible_quote7 = test_input($_POST['id_bible_quote7']);
        $id_bible_quote8 = test_input($_POST['id_bible_quote8']);

        $this->query = "REPLACE INTO lessons SET id_lesson = '$id_lesson', number_lesson = '$number_lesson', year = '$id_year', trimester_title = '$id_trimester', date = '$id_date', name_lesson = '$id_lesson_title', title_verse = '$id_verse', verse_text = '$id_verses_text', title_reading = '$id_bibles_reading', reading = '$id_bibles_reading_text', objective = '$id_objective', comment = '$id_comment'
        , question1 = '$id_question1', question2 = '$id_question2', question3 = '$id_question3', question4 = '$id_question4', question5 = '$id_question5', question6 = '$id_question6', question7 = '$id_question7', question8 = '$id_question8'
        , title_bible_quote1 = '$id_title_bible_quote1', title_bible_quote2 = '$id_title_bible_quote2', title_bible_quote3 = '$id_title_bible_quote3', title_bible_quote4 = '$id_title_bible_quote4', title_bible_quote5 = '$id_title_bible_quote5', title_bible_quote6 = '$id_title_bible_quote6', title_bible_quote7 = '$id_title_bible_quote7', title_bible_quote8 = '$id_title_bible_quote8'
        , bible_quote1 = '$id_bible_quote1', bible_quote2 = '$id_bible_quote2', bible_quote3 = '$id_bible_quote3', bible_quote4 = '$id_bible_quote4', bible_quote5 = '$id_bible_quote5', bible_quote6 = '$id_bible_quote6',  bible_quote7= '$id_bible_quote7', bible_quote8 = '$id_bible_quote8'";

        $this->set_query();
    }

    public function get($ls = '')
    {
        $this->query = ($ls != '')
            ? "SELECT ls.id_lesson, ls.number_lesson, yr.year, tt.trimester_title, dt.date, nl.name_lesson, vs.title_verse, vt.verse_text, br.title_reading, brt.reading, obt.objective, cm.comment, q1.question1, q2.question2, q3.question3, q4.question4, q5.question5, q6.question6, q7.question7, q8.question8, tbq1.title_bible_quote1, tbq2.title_bible_quote2, tbq3.title_bible_quote3, tbq4.title_bible_quote4, tbq5.title_bible_quote5, tbq6.title_bible_quote6, tbq7.title_bible_quote7, tbq8.title_bible_quote8, bq1.bible_quote1, bq2.bible_quote2, bq3.bible_quote3, bq4.bible_quote4, bq5.bible_quote5, bq6.bible_quote6, bq7.bible_quote7, bq8.bible_quote8 
            FROM lessons AS ls 
            INNER JOIN years AS yr ON ls.year = yr.id_year 
            INNER JOIN trimesters AS tt ON ls.trimester_title = tt.id_trimester 
            INNER JOIN dates AS dt ON ls.date = dt.id_date 
            INNER JOIN lessons_title AS nl ON ls.name_lesson = nl.id_lesson_title
            INNER JOIN verses AS vs ON ls.title_verse = vs.id_verse
            INNER JOIN verses_text AS vt ON ls.verse_text = vt.id_verses_text
            INNER JOIN bibles_readings AS br ON ls.title_reading = br.id_bibles_reading
            INNER JOIN bibles_readings_text AS brt ON ls.reading = brt.id_bibles_reading_text
            INNER JOIN objectives AS obt ON ls.objective = obt.id_objective
            INNER JOIN comments AS cm ON ls.comment = cm.id_comment
            INNER JOIN questions1 AS q1 ON ls.question1 = q1.id_question1
            INNER JOIN questions2 AS q2 ON ls.question2 = q2.id_question2
            INNER JOIN questions3 AS q3 ON ls.question3 = q3.id_question3
            INNER JOIN questions4 AS q4 ON ls.question4 = q4.id_question4
            INNER JOIN questions5 AS q5 ON ls.question5 = q5.id_question5
            INNER JOIN questions6 AS q6 ON ls.question6 = q6.id_question6
            INNER JOIN questions7 AS q7 ON ls.question7 = q7.id_question7
            INNER JOIN questions8 AS q8 ON ls.question8 = q8.id_question8
            INNER JOIN titles_bibles_quotes1 AS tbq1 ON ls.title_bible_quote1 = tbq1.id_title_bible_quote1
            INNER JOIN titles_bibles_quotes2 AS tbq2 ON ls.title_bible_quote2 = tbq2.id_title_bible_quote2
            INNER JOIN titles_bibles_quotes3 AS tbq3 ON ls.title_bible_quote3 = tbq3.id_title_bible_quote3
            INNER JOIN titles_bibles_quotes4 AS tbq4 ON ls.title_bible_quote4 = tbq4.id_title_bible_quote4
            INNER JOIN titles_bibles_quotes5 AS tbq5 ON ls.title_bible_quote5 = tbq5.id_title_bible_quote5
            INNER JOIN titles_bibles_quotes6 AS tbq6 ON ls.title_bible_quote6 = tbq6.id_title_bible_quote6
            INNER JOIN titles_bibles_quotes7 AS tbq7 ON ls.title_bible_quote7 = tbq7.id_title_bible_quote7
            INNER JOIN titles_bibles_quotes8 AS tbq8 ON ls.title_bible_quote8 = tbq8.id_title_bible_quote8
            INNER JOIN bibles_quotes1 AS bq1 ON ls.bible_quote1 = bq1.id_bible_quote1
            INNER JOIN bibles_quotes2 AS bq2 ON ls.bible_quote2 = bq2.id_bible_quote2
            INNER JOIN bibles_quotes3 AS bq3 ON ls.bible_quote3 = bq3.id_bible_quote3
            INNER JOIN bibles_quotes4 AS bq4 ON ls.bible_quote4 = bq4.id_bible_quote4
            INNER JOIN bibles_quotes5 AS bq5 ON ls.bible_quote5 = bq5.id_bible_quote5
            INNER JOIN bibles_quotes6 AS bq6 ON ls.bible_quote6 = bq6.id_bible_quote6
            INNER JOIN bibles_quotes7 AS bq7 ON ls.bible_quote7 = bq7.id_bible_quote7
            INNER JOIN bibles_quotes8 AS bq8 ON ls.bible_quote8 = bq8.id_bible_quote8
            WHERE ls.id_lesson = '$ls'"
            : "SELECT ls.id_lesson, ls.number_lesson, yr.year, tt.trimester_title, dt.date, nl.name_lesson, vs.title_verse, vt.verse_text, br.title_reading, brt.reading, obt.objective, cm.comment, q1.question1, q2.question2, q3.question3, q4.question4, q5.question5, q6.question6, q7.question7, q8.question8, tbq1.title_bible_quote1, tbq2.title_bible_quote2, tbq3.title_bible_quote3, tbq4.title_bible_quote4, tbq5.title_bible_quote5, tbq6.title_bible_quote6, tbq7.title_bible_quote7, tbq8.title_bible_quote8, bq1.bible_quote1, bq2.bible_quote2, bq3.bible_quote3, bq4.bible_quote4, bq5.bible_quote5, bq6.bible_quote6, bq7.bible_quote7, bq8.bible_quote8 
            FROM lessons AS ls 
            INNER JOIN years AS yr ON ls.year = yr.id_year 
            INNER JOIN trimesters AS tt ON ls.trimester_title = tt.id_trimester 
            INNER JOIN dates AS dt ON ls.date = dt.id_date 
            INNER JOIN lessons_title AS nl ON ls.name_lesson = nl.id_lesson_title
            INNER JOIN verses AS vs ON ls.title_verse = vs.id_verse
            INNER JOIN verses_text AS vt ON ls.verse_text = vt.id_verses_text
            INNER JOIN bibles_readings AS br ON ls.title_reading = br.id_bibles_reading
            INNER JOIN bibles_readings_text AS brt ON ls.reading = brt.id_bibles_reading_text
            INNER JOIN objectives AS obt ON ls.objective = obt.id_objective
            INNER JOIN comments AS cm ON ls.comment = cm.id_comment
            INNER JOIN questions1 AS q1 ON ls.question1 = q1.id_question1
            INNER JOIN questions2 AS q2 ON ls.question2 = q2.id_question2
            INNER JOIN questions3 AS q3 ON ls.question3 = q3.id_question3
            INNER JOIN questions4 AS q4 ON ls.question4 = q4.id_question4
            INNER JOIN questions5 AS q5 ON ls.question5 = q5.id_question5
            INNER JOIN questions6 AS q6 ON ls.question6 = q6.id_question6
            INNER JOIN questions7 AS q7 ON ls.question7 = q7.id_question7
            INNER JOIN questions8 AS q8 ON ls.question8 = q8.id_question8
            INNER JOIN titles_bibles_quotes1 AS tbq1 ON ls.title_bible_quote1 = tbq1.id_title_bible_quote1
            INNER JOIN titles_bibles_quotes2 AS tbq2 ON ls.title_bible_quote2 = tbq2.id_title_bible_quote2
            INNER JOIN titles_bibles_quotes3 AS tbq3 ON ls.title_bible_quote3 = tbq3.id_title_bible_quote3
            INNER JOIN titles_bibles_quotes4 AS tbq4 ON ls.title_bible_quote4 = tbq4.id_title_bible_quote4
            INNER JOIN titles_bibles_quotes5 AS tbq5 ON ls.title_bible_quote5 = tbq5.id_title_bible_quote5
            INNER JOIN titles_bibles_quotes6 AS tbq6 ON ls.title_bible_quote6 = tbq6.id_title_bible_quote6
            INNER JOIN titles_bibles_quotes7 AS tbq7 ON ls.title_bible_quote7 = tbq7.id_title_bible_quote7
            INNER JOIN titles_bibles_quotes8 AS tbq8 ON ls.title_bible_quote8 = tbq8.id_title_bible_quote8
            INNER JOIN bibles_quotes1 AS bq1 ON ls.bible_quote1 = bq1.id_bible_quote1
            INNER JOIN bibles_quotes2 AS bq2 ON ls.bible_quote2 = bq2.id_bible_quote2
            INNER JOIN bibles_quotes3 AS bq3 ON ls.bible_quote3 = bq3.id_bible_quote3
            INNER JOIN bibles_quotes4 AS bq4 ON ls.bible_quote4 = bq4.id_bible_quote4
            INNER JOIN bibles_quotes5 AS bq5 ON ls.bible_quote5 = bq5.id_bible_quote5
            INNER JOIN bibles_quotes6 AS bq6 ON ls.bible_quote6 = bq6.id_bible_quote6
            INNER JOIN bibles_quotes7 AS bq7 ON ls.bible_quote7 = bq7.id_bible_quote7
            INNER JOIN bibles_quotes8 AS bq8 ON ls.bible_quote8 = bq8.id_bible_quote8";

        $this->get_query();

        $num_rows = count($this->rows);

        $data = array();

        foreach ($this->rows as $key => $value) {
            array_push($data, $value);
        }

        return $data;
    }

    public function del($ls = '')
    {
        $this->query = "DELETE FROM lessons WHERE id_lesson = '$ls'";
        $this->set_query();
    }


    public function gettrim($ls = '')
    {
        $this->query = "SELECT * FROM trimesters AS tm INNER JOIN years AS yr ON tm.year = yr.id_year";

        $this->get_query();

        $num_rows = count($this->rows);

        $data = array();

        foreach ($this->rows as $key => $value) {
            array_push($data, $value);
        }

        return $data;
    }

    public function getlesson($ls = '')
    {
        $this->query = "SELECT * FROM lessons AS ls
        INNER JOIN trimesters AS tm ON ls.trimester_title  = tm.id_trimester
        INNER JOIN lessons_title AS nl ON ls.name_lesson = nl.id_lesson_title
        WHERE ls.trimester_title = '$ls' ";

        $this->get_query();

        $num_rows = count($this->rows);

        $data = array();

        foreach ($this->rows as $key => $value) {
            array_push($data, $value);
        }

        return $data;
    }

    public function __destruct()
    {
        //unset($this);
    }
}
