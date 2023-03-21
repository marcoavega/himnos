<?php
class Router
{
    public $route;

    public function __construct($route)
    {
       

            $this->route = isset($_GET['r']) ? $_GET['r'] : 'home';

            $controller = new ViewController();

            switch ($this->route) {
                case 'home':
                    $controller->load_view('home');
                    break;
                case 'lessons':
                    if (!isset($_POST['r']))  $controller->load_view('lessons');
                    else if ($_POST['r'] == 'lesson-add')  $controller->load_view('lesson-add');
                    else if ($_POST['r'] == 'lesson-edit')  $controller->load_view('lesson-edit');
                    else if ($_POST['r'] == 'lesson-delete')  $controller->load_view('lesson-delete');
                    else if ($_POST['r'] == 'lessons-show')  $controller->load_view('lessons-show');
                    else if ($_POST['r'] == 'lesson-show')  $controller->load_view('lesson-show');
                    break;
                case 'capture-lessons':
                    if (!isset($_POST['r']))  $controller->load_view('capture-lessons');
                    else if ($_POST['r'] == 'capture-lessons-add-year')  $controller->load_view('capture-lessons-add-year');
                    else if ($_POST['r'] == 'capture-lessons-edit-year')  $controller->load_view('capture-lessons-edit-year');
                    else if ($_POST['r'] == 'capture-lessons-delete-year')  $controller->load_view('capture-lessons-delete-year');
                    else if ($_POST['r'] == 'capture-lessons-add-trimester')  $controller->load_view('capture-lessons-add-trimester');
                    else if ($_POST['r'] == 'capture-lessons-edit-trimester')  $controller->load_view('capture-lessons-edit-trimester');
                    else if ($_POST['r'] == 'capture-lessons-delete-trimester')  $controller->load_view('capture-lessons-delete-trimester');
                    else if ($_POST['r'] == 'capture-lessons-add-date')  $controller->load_view('capture-lessons-add-date');
                    else if ($_POST['r'] == 'capture-lessons-edit-date')  $controller->load_view('capture-lessons-edit-date');
                    else if ($_POST['r'] == 'capture-lessons-delete-date')  $controller->load_view('capture-lessons-delete-date');
                    else if ($_POST['r'] == 'capture-lessons-add-name_lesson')  $controller->load_view('capture-lessons-add-name_lesson');
                    else if ($_POST['r'] == 'capture-lessons-edit-name_lesson')  $controller->load_view('capture-lessons-edit-name_lesson');
                    else if ($_POST['r'] == 'capture-lessons-delete-name_lesson')  $controller->load_view('capture-lessons-delete-name_lesson');
                    else if ($_POST['r'] == 'capture-lessons-add-objective')  $controller->load_view('capture-lessons-add-objective');
                    else if ($_POST['r'] == 'capture-lessons-edit-objective')  $controller->load_view('capture-lessons-edit-objective');
                    else if ($_POST['r'] == 'capture-lessons-delete-objective')  $controller->load_view('capture-lessons-delete-objective');
                    else if ($_POST['r'] == 'capture-lessons-add-title_verse')  $controller->load_view('capture-lessons-add-title_verse');
                    else if ($_POST['r'] == 'capture-lessons-edit-title_verse')  $controller->load_view('capture-lessons-edit-title_verse');
                    else if ($_POST['r'] == 'capture-lessons-delete-title_verse')  $controller->load_view('capture-lessons-delete-title_verse');
                    else if ($_POST['r'] == 'capture-lessons-add-verse_text')  $controller->load_view('capture-lessons-add-verse_text');
                    else if ($_POST['r'] == 'capture-lessons-edit-verse_text')  $controller->load_view('capture-lessons-edit-verse_text');
                    else if ($_POST['r'] == 'capture-lessons-delete-verse_text')  $controller->load_view('capture-lessons-delete-verse_text');
                    else if ($_POST['r'] == 'capture-lessons-add-comment')  $controller->load_view('capture-lessons-add-comment');
                    else if ($_POST['r'] == 'capture-lessons-edit-comment')  $controller->load_view('capture-lessons-edit-comment');
                    else if ($_POST['r'] == 'capture-lessons-delete-comment')  $controller->load_view('capture-lessons-delete-comment');
                    else if ($_POST['r'] == 'capture-lessons-add-bible_reading')  $controller->load_view('capture-lessons-add-bible_reading');
                    else if ($_POST['r'] == 'capture-lessons-edit-bible_reading')  $controller->load_view('capture-lessons-edit-bible_reading');
                    else if ($_POST['r'] == 'capture-lessons-delete-bible_reading')  $controller->load_view('capture-lessons-delete-bible_reading');
                    else if ($_POST['r'] == 'capture-lessons-add-bible_reading_text')  $controller->load_view('capture-lessons-add-bible_reading_text');
                    else if ($_POST['r'] == 'capture-lessons-edit-bible_reading_text')  $controller->load_view('capture-lessons-edit-bible_reading_text');
                    else if ($_POST['r'] == 'capture-lessons-delete-bible_reading_text')  $controller->load_view('capture-lessons-delete-bible_reading_text');
                    else if ($_POST['r'] == 'capture-lessons-add-question1')  $controller->load_view('capture-lessons-add-question1');
                    else if ($_POST['r'] == 'capture-lessons-edit-question1')  $controller->load_view('capture-lessons-edit-question1');
                    else if ($_POST['r'] == 'capture-lessons-delete-question1')  $controller->load_view('capture-lessons-delete-question1');
                    else if ($_POST['r'] == 'capture-lessons-add-question2')  $controller->load_view('capture-lessons-add-question2');
                    else if ($_POST['r'] == 'capture-lessons-edit-question2')  $controller->load_view('capture-lessons-edit-question2');
                    else if ($_POST['r'] == 'capture-lessons-delete-question2')  $controller->load_view('capture-lessons-delete-question2');
                    else if ($_POST['r'] == 'capture-lessons-add-question3')  $controller->load_view('capture-lessons-add-question3');
                    else if ($_POST['r'] == 'capture-lessons-edit-question3')  $controller->load_view('capture-lessons-edit-question3');
                    else if ($_POST['r'] == 'capture-lessons-delete-question3')  $controller->load_view('capture-lessons-delete-question3');
                    else if ($_POST['r'] == 'capture-lessons-add-question4')  $controller->load_view('capture-lessons-add-question4');
                    else if ($_POST['r'] == 'capture-lessons-edit-question4')  $controller->load_view('capture-lessons-edit-question4');
                    else if ($_POST['r'] == 'capture-lessons-delete-question4')  $controller->load_view('capture-lessons-delete-question4');
                    else if ($_POST['r'] == 'capture-lessons-add-question5')  $controller->load_view('capture-lessons-add-question5');
                    else if ($_POST['r'] == 'capture-lessons-edit-question5')  $controller->load_view('capture-lessons-edit-question5');
                    else if ($_POST['r'] == 'capture-lessons-delete-question5')  $controller->load_view('capture-lessons-delete-question5');
                    else if ($_POST['r'] == 'capture-lessons-add-question6')  $controller->load_view('capture-lessons-add-question6');
                    else if ($_POST['r'] == 'capture-lessons-edit-question6')  $controller->load_view('capture-lessons-edit-question6');
                    else if ($_POST['r'] == 'capture-lessons-delete-question6')  $controller->load_view('capture-lessons-delete-question6');
                    else if ($_POST['r'] == 'capture-lessons-add-question7')  $controller->load_view('capture-lessons-add-question7');
                    else if ($_POST['r'] == 'capture-lessons-edit-question7')  $controller->load_view('capture-lessons-edit-question7');
                    else if ($_POST['r'] == 'capture-lessons-delete-question7')  $controller->load_view('capture-lessons-delete-question7');
                    else if ($_POST['r'] == 'capture-lessons-add-question8')  $controller->load_view('capture-lessons-add-question8');
                    else if ($_POST['r'] == 'capture-lessons-edit-question8')  $controller->load_view('capture-lessons-edit-question8');
                    else if ($_POST['r'] == 'capture-lessons-delete-question8')  $controller->load_view('capture-lessons-delete-question8');
                    else if ($_POST['r'] == 'capture-lessons-add-quote1')  $controller->load_view('capture-lessons-add-quote1');
                    else if ($_POST['r'] == 'capture-lessons-edit-quote1')  $controller->load_view('capture-lessons-edit-quote1');
                    else if ($_POST['r'] == 'capture-lessons-delete-quote1')  $controller->load_view('capture-lessons-delete-quote1');
                    else if ($_POST['r'] == 'capture-lessons-add-quote2')  $controller->load_view('capture-lessons-add-quote2');
                    else if ($_POST['r'] == 'capture-lessons-edit-quote2')  $controller->load_view('capture-lessons-edit-quote2');
                    else if ($_POST['r'] == 'capture-lessons-delete-quote2')  $controller->load_view('capture-lessons-delete-quote2');
                    else if ($_POST['r'] == 'capture-lessons-add-quote3')  $controller->load_view('capture-lessons-add-quote3');
                    else if ($_POST['r'] == 'capture-lessons-edit-quote3')  $controller->load_view('capture-lessons-edit-quote3');
                    else if ($_POST['r'] == 'capture-lessons-delete-quote3')  $controller->load_view('capture-lessons-delete-quote3');
                    else if ($_POST['r'] == 'capture-lessons-add-quote4')  $controller->load_view('capture-lessons-add-quote4');
                    else if ($_POST['r'] == 'capture-lessons-edit-quote4')  $controller->load_view('capture-lessons-edit-quote4');
                    else if ($_POST['r'] == 'capture-lessons-delete-quote4')  $controller->load_view('capture-lessons-delete-quote4');
                    else if ($_POST['r'] == 'capture-lessons-add-quote5')  $controller->load_view('capture-lessons-add-quote5');
                    else if ($_POST['r'] == 'capture-lessons-edit-quote5')  $controller->load_view('capture-lessons-edit-quote5');
                    else if ($_POST['r'] == 'capture-lessons-delete-quote5')  $controller->load_view('capture-lessons-delete-quote5');
                    else if ($_POST['r'] == 'capture-lessons-add-quote6')  $controller->load_view('capture-lessons-add-quote6');
                    else if ($_POST['r'] == 'capture-lessons-edit-quote6')  $controller->load_view('capture-lessons-edit-quote6');
                    else if ($_POST['r'] == 'capture-lessons-delete-quote6')  $controller->load_view('capture-lessons-delete-quote6');
                    else if ($_POST['r'] == 'capture-lessons-add-quote7')  $controller->load_view('capture-lessons-add-quote7');
                    else if ($_POST['r'] == 'capture-lessons-edit-quote7')  $controller->load_view('capture-lessons-edit-quote7');
                    else if ($_POST['r'] == 'capture-lessons-delete-quote7')  $controller->load_view('capture-lessons-delete-quote7');
                    else if ($_POST['r'] == 'capture-lessons-add-quote8')  $controller->load_view('capture-lessons-add-quote8');
                    else if ($_POST['r'] == 'capture-lessons-edit-quote8')  $controller->load_view('capture-lessons-edit-quote8');
                    else if ($_POST['r'] == 'capture-lessons-delete-quote8')  $controller->load_view('capture-lessons-delete-quote8');
                    else if ($_POST['r'] == 'capture-lessons-add-bquote1')  $controller->load_view('capture-lessons-add-bquote1');
                    else if ($_POST['r'] == 'capture-lessons-edit-bquote1')  $controller->load_view('capture-lessons-edit-bquote1');
                    else if ($_POST['r'] == 'capture-lessons-delete-bquote1')  $controller->load_view('capture-lessons-delete-bquote1');
                    else if ($_POST['r'] == 'capture-lessons-add-bquote2')  $controller->load_view('capture-lessons-add-bquote2');
                    else if ($_POST['r'] == 'capture-lessons-edit-bquote2')  $controller->load_view('capture-lessons-edit-bquote2');
                    else if ($_POST['r'] == 'capture-lessons-delete-bquote2')  $controller->load_view('capture-lessons-delete-bquote2');
                    else if ($_POST['r'] == 'capture-lessons-add-bquote3')  $controller->load_view('capture-lessons-add-bquote3');
                    else if ($_POST['r'] == 'capture-lessons-edit-bquote3')  $controller->load_view('capture-lessons-edit-bquote3');
                    else if ($_POST['r'] == 'capture-lessons-delete-bquote3')  $controller->load_view('capture-lessons-delete-bquote3');
                    else if ($_POST['r'] == 'capture-lessons-add-bquote4')  $controller->load_view('capture-lessons-add-bquote4');
                    else if ($_POST['r'] == 'capture-lessons-edit-bquote4')  $controller->load_view('capture-lessons-edit-bquote4');
                    else if ($_POST['r'] == 'capture-lessons-delete-bquote4')  $controller->load_view('capture-lessons-delete-bquote4');
                    else if ($_POST['r'] == 'capture-lessons-add-bquote5')  $controller->load_view('capture-lessons-add-bquote5');
                    else if ($_POST['r'] == 'capture-lessons-edit-bquote5')  $controller->load_view('capture-lessons-edit-bquote5');
                    else if ($_POST['r'] == 'capture-lessons-delete-bquote5')  $controller->load_view('capture-lessons-delete-bquote5');
                    else if ($_POST['r'] == 'capture-lessons-add-bquote6')  $controller->load_view('capture-lessons-add-bquote6');
                    else if ($_POST['r'] == 'capture-lessons-edit-bquote6')  $controller->load_view('capture-lessons-edit-bquote6');
                    else if ($_POST['r'] == 'capture-lessons-delete-bquote6')  $controller->load_view('capture-lessons-delete-bquote6');
                    else if ($_POST['r'] == 'capture-lessons-add-bquote7')  $controller->load_view('capture-lessons-add-bquote7');
                    else if ($_POST['r'] == 'capture-lessons-edit-bquote7')  $controller->load_view('capture-lessons-edit-bquote7');
                    else if ($_POST['r'] == 'capture-lessons-delete-bquote7')  $controller->load_view('capture-lessons-delete-bquote7');
                    else if ($_POST['r'] == 'capture-lessons-add-bquote8')  $controller->load_view('capture-lessons-add-bquote8');
                    else if ($_POST['r'] == 'capture-lessons-edit-bquote8')  $controller->load_view('capture-lessons-edit-bquote8');
                    else if ($_POST['r'] == 'capture-lessons-delete-bquote8')  $controller->load_view('capture-lessons-delete-bquote8');
                    break;
                    case 'hymn-list':
                        if (!isset($_POST['r']))  $controller->load_view('hymn-list');
                        else if ($_POST['r'] == 'hymn')  $controller->load_view('hymn');
                        break;
                    case 'hymn-list-young':
                        if (!isset($_POST['r']))  $controller->load_view('hymn-list-young');
                        else if ($_POST['r'] == 'hymn-young')  $controller->load_view('hymn-young');
                        break;
                    case 'hymn-list-young-new':
                        if (!isset($_POST['r']))  $controller->load_view('hymn-list-young-new');
                        else if ($_POST['r'] == 'hymn-young-new')  $controller->load_view('hymn-young-new');
                        break;
                    case 'hymn':
                        if (!isset($_POST['r']))  $controller->load_view('hymn');
                        break;
                    case 'hymn-young':
                        if (!isset($_POST['r']))  $controller->load_view('hymn-young');
                        break;
                    case 'hymn-young-new':
                        if (!isset($_POST['r']))  $controller->load_view('hymn-young-new');
                        break;
                    default:
                        $controller->load_view('error404');
                        break;
            }


    }

    public function __destruct()
    {
        unset($this->db_name);
    }
}