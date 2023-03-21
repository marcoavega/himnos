<?php
class HymnYoungListNewController
{
    private $model;

    public function __construct()
    {
        $this->model = new HymnYoungListNewModel();
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