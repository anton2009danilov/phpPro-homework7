<?php

namespace app\model;

use app\engine\Db;
use app\interfaces\IModel;


abstract class DbModel extends Models implements IModel
{


    /**
     * @var Db
     */
    /*
    protected $db;


    public function __construct()
    {
        $this->db = Db::getInstance();
    }
 */



    public static function getOne($id)
    {
        $tableName = static::getTableName();
        $sql = "SELECT * FROM {$tableName} WHERE id = :id";
        return Db::getInstance()->queryObject($sql, ['id' => $id], static::class);
    }

    public static function getAll()
    {
        $tableName = static::getTableName();
        $sql = "SELECT * FROM {$tableName}";
        return Db::getInstance()->queryAll($sql);

    }
    
        public static function getCountWhere($field, $value) {
            $tableName = static::getTableName();
            $sql = "SELECT count(*) as count FROM {$tableName} WHERE `$field`=:$field";
    
            return Db::getInstance()->queryOne($sql, ["$field"=>$value])['count'];
        }
    
        public static function getOneWhere($field, $value) {
            $tableName = static::getTableName();
            $sql = "SELECT * FROM {$tableName} WHERE `$field`=:$field";
    
            return Db::getInstance()->queryObject($sql, ["$field"=>$value], static::class);
        }
    
    public function insert() {

        $params = [];
        $columns = [];

        foreach ($this as $key => $value) {
            if ($key == "id") continue;
            $params[":{$key}"] = $value;
            $columns[] = $key;
        }

        $columns = implode(", ", $columns);
        $values = implode(", ", array_keys($params));
        $tableName = static::getTableName();


       $sql = "INSERT INTO {$tableName} ({$columns}) VALUES ({$values})";

       Db::getInstance()->execute($sql, $params);

       $this->id = Db::getInstance()->LastInsertId();
    }


    public function update() {
        $tableName = static::getTableName();
        $params = [];
        $columns = [];
        foreach ($this as $key => $value) {
            if ($key == "id") continue;
            $params[":{$key}"] = $value;
            $columns["{$key}"] = $value;
        }
        $columns = implode(', ', array_map(
            function ($v, $k) { return sprintf("%s = '%s'", $k, $v); },
            $columns,
            array_keys($columns)
        ));

        $sql = "UPDATE `{$tableName}` SET  {$columns} WHERE id={$this->id}";

        Db::getInstance()->execute($sql, $params);
    }

    public function save() {
        if (is_null($this->id))
            $this->insert();
        else
            $this->update();

    }
    public function delete() {
        $tableName = static::getTableName();
        $sql = "DELETE FROM {$tableName} WHERE id = :id";
        return Db::getInstance()->execute($sql, ['id'=>$this->id]);
    }



    abstract public static function getTableName();
}