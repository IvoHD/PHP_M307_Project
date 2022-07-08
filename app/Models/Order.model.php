<?php
    class OrderModel {
        public int $ID;
        public string $name;
        public string $email;
        public string $tel;
        public int $category;
        public bool $isDried;
        public int $elapsedDays;
        public int $fruitID;
        /**
         * @var PDO
         **/
        public $db;

        public function __construct()
        {
            $this->db = db();
            return $this;
        }

        public function FindOrderByID(int $id): ?self
        {
            $statement = $this->db->prepare('SELECT * FROM orders WHERE id = :id LIMIT 1');
            $statement->bindParam(':id', $id);
            $statement->execute();
            $result = $statement->fetch();
    
            if ($result) {
                $this->ID = $result['id'];
                $this->name = $result['name'];
                $this->email = $result['email'];
                $this->tel = $result['tel'];
                $this->category = $result['category'];
                $this->isDried = $result['isdried'];
                $this->elapsedDays = $result['elapseddays'];
                $this->fruitID = $result['fruitid'];
                return $this;
            }
            return null;
        }

        public function GetFruitStringByID(int $id): ?string{
            $statement = $this->db->prepare('SELECT * FROM fruits WHERE id = :id LIMIT 1');
            $statement->bindParam(':id', $id);
            $statement->execute();
            $result = $statement->fetch();
    
            if ($result) {
                return $result['name'];
            }
        }

        public function Add(string $name, string $mail, string $tel, int $category, bool $isDried, int $elapsedDays, int $fruitID) {
            $statement = $db->prepare('INSERT INTO `orders` (`name`, `email`, `tel`, `category`,`isdried`,`elapseddays`,`fruitid`) VALUES (`{$name}`, `{$mail}`, `{$tel}`, {$category}, {$isdried}, {$elapseddays}, {$fruitid})');
            $statement->execute();
            return $statement->fetch();
        }

        public function Edit (int $id, string $name, string $mail, string $tel, int $category, bool $isDried, int $elapsedDays, int $fruitID) {
            $statement = $db->prepare('UPDATE `orders` SET `name` = `$name`, `email` = `$email`, `tel` = `$tel`, `category` = `$category`,`isdried` = `$isdried`,`elapseddays` = `$elapseddays`,`fruitid` = `$fruitid` WHERE `id` = $id');
            $statement->execute();
            return $statement->fetch();
        }

        public function ListAll() {
            $statement = db()->prepare('SELECT * FROM orders');
            $statement->execute();
            return $statement->fetchall();
        }
    }
?>

