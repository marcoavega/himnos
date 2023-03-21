<?php
class TitlesBiblesQuotesController
{
    private $model;

    public function __construct()
    {
        $this->model = new TitlesBiblesQuotesModel();
    }

    public function set($quote_data = array())
    {
        return $this->model->set($quote_data);
    }
    public function set1($quote_data = array())
    {
        return $this->model->set1($quote_data);
    }
    public function set2($quote_data = array())
    {
        return $this->model->set2($quote_data);
    }
    public function set3($quote_data = array())
    {
        return $this->model->set3($quote_data);
    }
    public function set4($quote_data = array())
    {
        return $this->model->set4($quote_data);
    }
    public function set5($quote_data = array())
    {
        return $this->model->set5($quote_data);
    }
    public function set6($quote_data = array())
    {
        return $this->model->set6($quote_data);
    }
    public function set7($quote_data = array())
    {
        return $this->model->set7($quote_data);
    }
    public function set8($quote_data = array())
    {
        return $this->model->set8($quote_data);
    }

    public function get($quote_id = '')
    {
        return $this->model->get($quote_id);
    }
    public function get1($quote_id = '')
    {
        return $this->model->get1($quote_id);
    }
    public function get2($quote_id = '')
    {
        return $this->model->get2($quote_id);
    }
    public function get3($quote_id = '')
    {
        return $this->model->get3($quote_id);
    }
    public function get4($quote_id = '')
    {
        return $this->model->get4($quote_id);
    }
    public function get5($quote_id = '')
    {
        return $this->model->get5($quote_id);
    }
    public function get6($quote_id = '')
    {
        return $this->model->get6($quote_id);
    }
    public function get7($quote_id = '')
    {
        return $this->model->get7($quote_id);
    }
    public function get8($quote_id = '')
    {
        return $this->model->get8($quote_id);
    }

    public function del($quote_id = '')
    {
        return $this->model->del($quote_id);
    }
    public function del1($quote_id = '')
    {
        return $this->model->del1($quote_id);
    }
    public function del2($quote_id = '')
    {
        return $this->model->del2($quote_id);
    }
    public function del3($quote_id = '')
    {
        return $this->model->del3($quote_id);
    }
    public function del4($quote_id = '')
    {
        return $this->model->del4($quote_id);
    }
    public function del5($quote_id = '')
    {
        return $this->model->del5($quote_id);
    }
    public function del6($quote_id = '')
    {
        return $this->model->del6($quote_id);
    }
    public function del7($quote_id = '')
    {
        return $this->model->del7($quote_id);
    }
    public function del8($quote_id = '')
    {
        return $this->model->del8($quote_id);
    }

    public function __destruct()
    {
        unset($this->db_name);
    }
}