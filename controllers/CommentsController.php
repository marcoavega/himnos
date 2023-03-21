<?php
class CommentsController
{
    private $model;

    public function __construct()
    {
        $this->model = new CommentsModel();
    }

    public function set($comment_data = array())
    {
        return $this->model->set($comment_data);
    }

    public function get($comment_id = '')
    {
        return $this->model->get($comment_id);
    }

    public function del($comment_id = '')
    {
        return $this->model->del($comment_id);
    }

    public function __destruct()
    {
        unset($this->db_name);
    }
}