<?php
class DatesController
{
    private $model;

    public function __construct()
    {
        $this->model = new DatesModel();
    }

    public function set($date_data = array())
    {
        return $this->model->set($date_data);
    }

    public function get($date_id = '')
    {
        return $this->model->get($date_id);
    }

    public function del($date_id = '')
    {
        return $this->model->del($date_id);
    }

    public function __destruct()
    {
        unset($this->db_name);
    }
}
