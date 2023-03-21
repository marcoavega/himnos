<?php
class HymnListController
{
    private $model;

    public function __construct()
    {
        $this->model = new HymnListModel();
    }

    public function get($hl = '')
    {
        return $this->model->get($hl);
    }

    public function __destruct()
    {
        //unset($this);
    }
}