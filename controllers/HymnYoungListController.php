<?php
class HymnYoungListController
{
    private $model;

    public function __construct()
    {
        $this->model = new HymnYoungListModel();
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