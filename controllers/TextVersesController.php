<?php
class TextVersesController
{
    private $model;

    public function __construct()
    {
        $this->model = new TextVersesModel();
    }

    public function set($verse_text_data = array())
    {
        return $this->model->set($verse_text_data);
    }

    public function get($verse_text_id = '')
    {
        return $this->model->get($verse_text_id);
    }

    public function del($verse_text_id = '')
    {
        return $this->model->del($verse_text_id);
    }

    public function __destruct()
    {
        unset($this->db_name);
    }
}
