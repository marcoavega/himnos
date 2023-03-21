<?php
class BiblesReadingsTextController
{
    private $model;

    public function __construct()
    {
        $this->model = new BiblesReadingsTextModel();
    }

    public function set($bible_reading__text_data = array())
    {
        return $this->model->set($bible_reading__text_data);
    }

    public function get($bible_reading_text_id = '')
    {
        return $this->model->get($bible_reading_text_id);
    }

    public function del($bible_reading_text_id = '')
    {
        return $this->model->del($bible_reading_text_id);
    }

    public function __destruct()
    {
        unset($this->db_name);
    }
}