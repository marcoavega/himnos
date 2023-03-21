<?php
class NumberQuestionsController
{
    private $model;

    public function __construct()
    {
        $this->model = new NumberQuestionsModel();
    }

    public function set($number_question_data = array())
    {
        return $this->model->set($number_question_data);
    }

    public function get($number_question_id = '')
    {
        return $this->model->get($number_question_id);
    }

    public function del($number_question_id = '')
    {
        return $this->model->del($number_question_id);
    }

    public function __destruct()
    {
        unset($this->db_name);
    }
}