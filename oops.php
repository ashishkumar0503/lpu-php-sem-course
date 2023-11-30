<?php
class NamesArray {
    private $names;

    public function __construct()
    {
        $this->names = array();
    }
    public function addName($name) {
        if(count($this->names) < 10) {
            $this->names[] = $name;
            return true;
        } else {
            return false;
        }
    }
    public function getNames() {
        $sorted = $this->names;
        sort($sorted);
        $unique = array_unique($sorted);
        array_pop($unique); 
        return array_reverse($unique);
    }
    public function search($name) {
        $key = array_search($name, $this->names); 

        if ($key !== false) {
            return "The name '$name' exists at index/key: $key.";
        } else {
            return "The name '$name' does not exist in the array.";
        }

    }
}

$namesArray = new NamesArray();

$namesArray->addName("John");
$namesArray->addName("Alice");
$namesArray->addName("Bob");
$namesArray->addName("Emma");
$namesArray->addName("Emma");
$namesArray->addName("Sophia");
$namesArray->addName("Oliver");
$namesArray->addName("Charlotte");
$namesArray->addName("David");
$namesArray->addName("Ella");

$namesArrayList = $namesArray->getNames();

foreach($namesArrayList as $name) {
    echo $name . "\n";
}

$searchName = "Ella";
$searchResult = $namesArray->search($searchName);
echo $searchResult;
?>