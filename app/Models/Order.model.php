<?php
    class OderModel {
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
        public $db = db();

        public function __construct(int $id = null)
        {
            if($id === null)
                return $this;
            $this->Find($id);
        }

        public function Find(int $id): ?self
        {
            $statement = $db->prepare('SELECT * FROM Order WHERE id = {$id} LIMIT 1');
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

        public function Add(string $name, string $mail, string $tel, int $category, bool $isDried, int $elapsedDays, int $fruitID) {
            $statement = $db->prepare('INSERT INTO `orders` (`name`, `email`, `tel`, `category`,`isdried`,`elapseddays`,`fruitid`) VALUES ('Hans', 'hans@muster.ch', '0111111111', 0, true, 3, 29),');
            $statement->execute();
            return $statement->fetch();
        }

        public function SelectQuery(string $columns, string $table, string $conditon, string $amount) {
            $statement = $db->prepare('SELECT * FROM {$table} WHERE {$condition} LIMIT {$amount}');
            $statement->execute();
            return $statement->fetch();
        }
    }
?>

