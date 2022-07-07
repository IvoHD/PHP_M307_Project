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

        public function __construct(int $id = null)
        {
            $db = db();
            return $this;
        }

        public function FindOrderByID(int $id): ?self
        {
            $statement = db()->prepare('SELECT * FROM order WHERE id = {$id} LIMIT 1');
            $statement->execute();
            $result = $statement->fetch();
    
            if ($result) {
                $this->id = $result['id'];
                $this->name = $result['name'];
                $this->email = $result['email'];
                $this->tel = $result['tel'];
                $this->category = $result['amount'];
                $this->fruitID = $result['fruitid'];
                return $this;
            }
            return null;
        }

        public function GetFruitStringByID(int $id): ?string
        {
            $statement = db()->prepare('SELECT * FROM fruits WHERE id = {$id} LIMIT 1');
            $statement->execute();
            $result = $statement->fetch();
    
            if ($result) {
                return $result['name'];
            }
        }

        public function Add(string $name, string $mail, string $tel, int $category, bool $isDried, int $elapsedDays, int $fruitID) {
            $statement = db()->prepare('INSERT INTO `orders` (`name`, `email`, `tel`, `category`,`isdried`,`elapseddays`,`fruitid`) VALUES (`{$name}`, `{$mail}`, `{$tel}`, {$category}, {$isdried}, {$elapseddays}, {$fruitid})');
            $statement->execute();
            return $statement->fetch();
        }

        public function ListAll() {
            $statement = db()->prepare('SELECT * FROM `orders` INNER JOIN `fruits` ON `orders`.`id` = `fruits`.`id`;');
            $statement->execute();
            var_dump($statement->fetchall());
            return $statement->fetch();
        }
    }
?>

