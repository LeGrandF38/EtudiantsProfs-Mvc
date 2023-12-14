<?php

 class Model {
    public $id=0;
    private static $pdo=null;

    public function __construct(){
        if(self::$pdo==null){
            $var_env = parse_ini_file(".env");
            $dbConnection =$var_env['DB_CONNECTION'];
            $dbHost =$var_env['DB_HOST'];
            $dbDatabase =$var_env['DB_DATABASE'];
            $dbUsername =$var_env['DB_USERNAME'];
            $dbPassword =$var_env['DB_PASSWORD'];
            self::$pdo=new PDO($dbConnection.':host='.$dbHost.';dbname='.$dbDatabase,$dbUsername,$dbPassword);

        }
    }

    public function save(){
    $data = get_object_vars($this);
    $req = "";
    if ($this->id == 0) {
        $req = "INSERT INTO " . get_class($this) . " (";
        $fields = $values = "";
        foreach ($data as $key => $value) {
            $fields .= $key . ",";
            $values .= ":$key,";
        }
        $fields = rtrim($fields, ",");
        $values = rtrim($values, ",");
        $req .= $fields . ") VALUES (" . $values . ")";

        $stm = self::$pdo->prepare($req);
        $stm->execute($data);
    }
}



   

    public static function find($id){
        $req="select * from ".get_called_class()." where id=?";
    $classe=get_called_class();

    $E=new $classe();

    $stm=self::$pdo->prepare($req);
    $stm->execute(array($id));

    $res=$stm->fetch(PDO:: FETCH_ASSOC);

    foreach($res as $key=>$value)
        $E->$key=$value;
    return $E;

}

public function delete(){
    if ($this->id != 0) {
        $req = "DELETE FROM " . get_class($this) . " WHERE id = :id";
        $stm = self::$pdo->prepare($req);
        $stm->execute(['id' => $this->id]);
    }
}

public static function all() {
    $req = "SELECT * FROM " . static::class;
    $pdo = (new self())->pdo;
    $stmt = $pdo->prepare($req);
    $stmt->execute();
    $res = $stmt->fetchAll();
    return $res;
}
}

?>