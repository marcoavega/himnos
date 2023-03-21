<?php
class LessonsController
{
    private $model;

    public function __construct()
    {
        $this->model = new LessonsModel();
    }

    public function set($ls_data = array())
    {
        return $this->model->set($ls_data);
    }

    public function get($ls = '')
    {
        return $this->model->get($ls);
    }

    public function gettrim($ls = '')
    {
        return $this->model->gettrim($ls);
    }

    public function getlesson($ls = '')
    {
        return $this->model->getlesson($ls);
    }

    public function del($ls = '')
    {
        return $this->model->del($ls);
    }

    public function __destruct()
    {
        //unset($this);
    }
}
