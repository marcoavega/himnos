<?php
class TitlesVersesController
{
    private $model;

    public function __construct()
    {
        $this->model = new TitlesVersesModel();
    }

    public function set($titles_verses_data = array())
    {
        return $this->model->set($titles_verses_data);
    }

    public function get($titles_verses_id = '')
    {
        return $this->model->get($titles_verses_id);
    }

    public function del($titles_verses_id = '')
    {
        return $this->model->del($titles_verses_id);
    }

    public function __destruct()
    {
        unset($this->db_name);
    }
}
