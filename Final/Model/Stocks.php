 <?php

    class Stock{

        private $id;
        public $stock_company;
        public $stock_ticker;
        public $stock_price;
        public $stock_eps;

        public function getId() {
            return $this->id;
        }
        public function setId($x) {
            $this->id = $x;
        }
        public function getStockCompany() {
            return $this->stock_company;
        }
        public function setStockCompany($x) {
            $this->stock_company = $x;
        }
        public function getStockTicker() {
            return $this->stock_ticker;
        }
        public function setStockTicker($x) {
            $this->stock_ticker = $x;

        }
    }