<?php
class TrimestersController
{
    private $model;

    public function __construct()
    {
        $this->model = new TrimestersModel();
    }

    public function set($trimester_data = array())
    {
        return $this->model->set($trimester_data);
    }

    public function get($trimester_id = '')
    {
        return $this->model->get($trimester_id);
    }

    public function del($trimester_id = '')
    {
        return $this->model->del($trimester_id);
    }

    public function __destruct()
    {
        unset($this->db_name);
    }
}