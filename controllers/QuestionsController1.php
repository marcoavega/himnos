<?php
class QuestionsController1
{
    private $model;

    public function __construct()
    {
        $this->model = new QuestionsModel1();
    }

    public function set($questions1_data = array())
    {
        return $this->model->set($questions1_data);
    }
    public function set1($questions1_data = array())
    {
        return $this->model->set1($questions1_data);
    }
    public function set2($questions1_data = array())
    {
        return $this->model->set2($questions1_data);
    }
    public function set3($questions1_data = array())
    {
        return $this->model->set3($questions1_data);
    }
    public function set4($questions1_data = array())
    {
        return $this->model->set4($questions1_data);
    }
    public function set5($questions1_data = array())
    {
        return $this->model->set5($questions1_data);
    }
    public function set6($questions1_data = array())
    {
        return $this->model->set6($questions1_data);
    }
    public function set7($questions1_data = array())
    {
        return $this->model->set7($questions1_data);
    }
    public function set8($questions1_data = array())
    {
        return $this->model->set8($questions1_data);
    }

    public function get($questions1_id = '')
    {
        return $this->model->get($questions1_id);
    }

    public function get1($questions1_id = '')
    {
        return $this->model->get1($questions1_id);
    }
    public function get2($questions1_id = '')
    {
        return $this->model->get2($questions1_id);
    }
    public function get3($questions1_id = '')
    {
        return $this->model->get3($questions1_id);
    }
    public function get4($questions1_id = '')
    {
        return $this->model->get4($questions1_id);
    }
    public function get5($questions1_id = '')
    {
        return $this->model->get5($questions1_id);
    }
    public function get6($questions1_id = '')
    {
        return $this->model->get6($questions1_id);
    }
    public function get7($questions1_id = '')
    {
        return $this->model->get7($questions1_id);
    }
    public function get8($questions1_id = '')
    {
        return $this->model->get8($questions1_id);
    }

    public function del($questions1_id = '')
    {
        return $this->model->del($questions1_id);
    }
    public function del1($questions1_id = '')
    {
        return $this->model->del1($questions1_id);
    }
    public function del2($questions1_id = '')
    {
        return $this->model->del2($questions1_id);
    }
    public function del3($questions1_id = '')
    {
        return $this->model->del3($questions1_id);
    }
    public function del4($questions1_id = '')
    {
        return $this->model->del4($questions1_id);
    }
    public function del5($questions1_id = '')
    {
        return $this->model->del5($questions1_id);
    }
    public function del6($questions1_id = '')
    {
        return $this->model->del6($questions1_id);
    }
    public function del7($questions1_id = '')
    {
        return $this->model->del7($questions1_id);
    }
    public function del8($questions1_id = '')
    {
        return $this->model->del8($questions1_id);
    }

    public function __destruct()
    {
        unset($this->db_name);
    }
}