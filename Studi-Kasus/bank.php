<?php
class BankAccount {
    private $balance;

    public function __construct($initialBalance) {
        $this->balance = $initialBalance;
    }

    public function deposit($amount) {
        if ($amount > 0) {
            $this->balance += $amount;
        }
    }

    public function withdraw($amount) {
        if ($amount > 0 && $amount <= $this->balance) {
            $this->balance -= $amount;
        }
    }

    public function getBalance() {
        return $this->balance;
    }
}

$account = new BankAccount(1000);
echo "Isi saldo Sekarang : Rp.".$account->getBalance()."<br>";
$account->deposit(500);
echo "Isi saldo Sekarang : Rp.".$account->getBalance()." (Menambah Rp.500) <br>";
$account->withdraw(200);
echo "Isi saldo Sekarang : Rp.".$account->getBalance()." (Mengambil Rp.200) <br>";
echo "Isi saldo Sekarang : Rp.".$account->getBalance();