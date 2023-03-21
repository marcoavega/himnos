<?php
abstract class Model
{

    //Atributos con datos necesarios.
    private static $db_host = 'localhost';
    private static $db_user = 'root';
    private static $db_pass = '';
    private static $db_name = 'blog';
    //Protected $db_name;
    private static $db_charset = 'utf8';
    //
    private $conn;
    //
    protected $query;
    //
    protected $rows = array();
    //

    //Metodos abstactos de las consultas.
    abstract protected function set();
    abstract protected function get();
    abstract protected function del();

    //Metodo para abrir conexion con msqli.
    private function db_open()
    {
        $this->conn = new mysqli(
            self::$db_host,
            self::$db_user,
            self::$db_pass,
            self::$db_name
        );

        $this->conn->set_charset(self::$db_charset);
    }

    //Metodo para cerrar conexion.
    private function db_close()
    {
        $this->conn->close();
    }

    //Metodo que ejecuta set_query que viene de controlador.
    protected function set_query()
    {
        $this->db_open();
        $this->conn->query($this->query);
        $this->db_close();
    }

    //Metodo que ejecuta get_query que viene de controlador, este metodo obtiene las filas
    //y las ordena con el while en el arreglo.
    protected function get_query()
    {
        $this->db_open();
        $result = $this->conn->query($this->query);
        while ($this->rows[] = $result->fetch_assoc());
        $result->close();
        $this->db_close();
        return array_pop($this->rows);
    }
}