<?php
class YearsController
{
    private $model;

    public function __construct()
    {
        $this->model = new YearsModel();
    }

    public function set($year_data = array())
    {
        return $this->model->set($year_data);
    }

    public function get($year_id = '')
    {
        return $this->model->get($year_id);
    }

    public function del($year_id = '')
    {
        return $this->model->del($year_id);
    }

    public function __destruct()
    {
        unset($this->db_name);
    }
}