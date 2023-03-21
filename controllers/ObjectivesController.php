<?php
class ObjectivesController
{
    private $model;

    public function __construct()
    {
        $this->model = new ObjectivesModel();
    }

    public function set($objectives_data = array())
    {
        return $this->model->set($objectives_data);
    }

    public function get($objectives_id = '')
    {
        return $this->model->get($objectives_id);
    }

    public function del($objectives_id = '')
    {
        return $this->model->del($objectives_id);
    }

    public function __destruct()
    {
        unset($this->db_name);
    }
}