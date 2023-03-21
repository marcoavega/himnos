<?php
class BiblesReadingsController
{
    private $model;

    public function __construct()
    {
        $this->model = new BiblesReadingsModel();
    }

    public function set($bible_reading_data = array())
    {
        return $this->model->set($bible_reading_data);
    }

    public function get($bible_reading_id = '')
    {
        return $this->model->get($bible_reading_id);
    }

    public function del($bible_reading_id = '')
    {
        return $this->model->del($bible_reading_id);
    }

    public function __destruct()
    {
        unset($this->db_name);
    }
}
