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

        public function Add(string $name, string $email, string $tel, int $category, bool $isDried, string $fruitID) {
            $statement = $this->db->prepare('INSERT INTO orders (name, email, tel, category, isdried, elapseddays, fruitid) 
                                            VALUES (:name, :email, :tel, :category, :isdried, 0, :fruitid)');
            $statement->bindParam(':name', $name);
            $statement->bindParam(':email', $email);
            $statement->bindParam(':tel', $tel);
            $statement->bindParam(':category', $category);
            $statement->bindParam(':isdried', $isDried);
            $statement->bindParam(':fruitid', $fruitID);
            $statement->execute();
            return $statement->fetch();
        }

        public function Edit (int $id, string $name, string $email, string $tel, int $category, bool $isDried, string $fruitID) {
            $statement = $this->db->prepare('UPDATE orders SET name = :name, email = :email, tel = :tel, category = :category, isdried = :isdried, fruitid = :fruitid WHERE id = :id');
            $statement->bindParam('id', $id);
            $statement->bindParam(':name', $name);
            $statement->bindParam(':email', $email);
            $statement->bindParam(':tel', $tel);
            $statement->bindParam(':category', $category);
            $statement->bindParam(':isdried', $isDried);
            $statement->bindParam(':fruitid', $fruitID);
            $statement->execute();
            return $statement->fetch();
        }

        public function IncrementElapsedDays() {
            $allOrders = $this->ListAllOrders();
            foreach($allOrders as $order){
                $elapsedDays = $order['elapseddays'] + 1;
                var_dump($elapsedDays);
                $id = $order['id'];
                var_dump($id);
                $statement = $this->db->prepare('UPDATE orders SET elapseddays = :elapseddays WHERE id = :id');
                $statement->bindParam(':elapseddays', $elapsedDays);
                $statement->bindParam(':id', $id);
                $statement->execute();
            }
        }

        public function ListAllOrders() {
            $statement = $this->db->prepare('SELECT * FROM `orders` WHERE isDried = false');
            $statement->execute();
            return $statement->fetchall();
        }
        public function ListAllFruits() {
            $statement = $this->db->prepare('SELECT * FROM `fruits`');
            $statement->execute();
            return $statement->fetchall();
        }
    }
?>

