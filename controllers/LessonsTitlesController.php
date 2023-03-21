<?php
class LessonsTitlesController
{
    private $model;

    public function __construct()
    {
        $this->model = new LessonsTitlesModel();
    }

    public function set($LessonsTitlesdata = array())
    {
        return $this->model->set($LessonsTitlesdata);
    }

    public function get($LessonsTitlesid = '')
    {
        return $this->model->get($LessonsTitlesid);
    }

    public function del($LessonsTitlesid = '')
    {
        return $this->model->del($LessonsTitlesid);
    }

    public function __destruct()
    {
        unset($this->db_name);
    }
}