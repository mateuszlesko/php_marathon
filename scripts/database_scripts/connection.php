<?php
class ConnectionDB{

    
   public function connectDB($DataDB,$user,$password){
        $pdo = new PDO($DataDB,$user,$password);

        return $pdo;
    }
    public function isExistDB($DataDB,$user,$password){
        try{
            $pdo = new PDO($DataDB,$user,$password);
            return true;
        }
        catch(PDOException $e){
            return false;
        }
        
    }

}
?>