<?php

$str1 = 'Good';
$str2 = 'morning';

$welcomeStr = $str1 . ' ' . $str2 . '!';

echo "<br/>$welcomeStr";
echo "<br/>", join(' ', array($welcomeStr, 'Dear', 'friend', "<br/>"));

function printExploder($str){
    echo "<br/>printExploder: <br/>";
    $resArr = explode(' ', $str);
    for ($i = 0; $i < count($resArr); ++$i) {
        echo "    " . $i . " - " . $resArr[$i] . "</br>";
    }
}

function printImplode($kek)
{
    echo "<br/>printImplode: <br/>", implode(' ', $kek), "<br/>";
}

printExploder("Good morning! Dear friend");
printImplode(explode(' ', "Good morning! Dear friend"));


/*******************************************************************************/


$numFloat = 1.9838;
$numInt = 3;
$numStr = "9";
$numSF = "3" * $numFloat;
$numBool = true + 24;

echo "<br/>$numFloat" === (string)$numFloat ? "<br/>the same: $numFloat<br/>" : "<br/>not the same<br/>" . gettype($numFloat) . "<br/>";


function printType($data) {
    foreach ($data as $value) {
        echo var_dump($value) . "<br/>";
    }
}

printType(array($str1, $numInt, $numFloat, false, NULL, new stdClass));
printType(array((int)$numStr, (bool)$numStr, (float)$numStr, (object)$numStr));

echo "<br/>Int operation " . $numInt . " " . $numInt ** 2 . " " . ++$numInt . " " . --$numInt;


function compareInt($num1, $num2)
{
    return $num1 > $num2 ? "$num1 > $num2" : ($num1 < $num2 ? "$num1 < $num2" : "$num1 = $num2");
}

echo "<br/>Comparison result: " . compareInt(7, 5) . "<br/><br/>";


/*******************************************************************************/


$people = array("Ann" => 15, "John" => 26, "Mike" => 65, "Julia" => 30, "Kostya" => 5);

function associativeArr($arr)
{
    foreach ($arr as $name => $age) {
        echo $name . " age: " . $age . "<br/>";
    }
}

associativeArr($people);


/*******************************************************************************/


function sumArray(...$numbers) {
    return array_sum($numbers);
}

echo "<br/>sumArray: " . sumArray(1, 2, 3, 4, 5, 6, 7, 8, 9) . "<br/>";

$num1 = 2;
$num2 = 5;

$closure = function ($num) use ($num1, $num2) {
    return $num1 * $num2 * $num;
};

echo $closure(4);


/*******************************************************************************/

abstract class Building {

    protected $type, $floors, $rooms;

    function __construct($rooms, $type="building", $floors=1) {
        $this->rooms = $rooms;
        $this->type = $type;
        $this->floors = $floors;
    }

    function __destruct() {
        echo "<br/>People destructor call<br/>";
    }
}


class Shop extends Building {

    protected $name;
    protected $rental;

    /**
     * @throws Exception
     */
    function __construct($name, $floors, $rooms, $rental, $type="shop") {
        if (gettype($type) !=="string" || gettype($floors) !== "integer" || gettype($rooms) !== "integer"
            || $floors <= 0 || $rooms <= 0) {
            throw new Exception('Invalid constructor parameters');
        }
        parent::__construct($type, $floors, $rooms);

        if(gettype($name) !=="string" || gettype($rental) !== "integer" || $rental < 0) {
            throw new Exception('Invalid constructor parameters');
        }
        $this->name = $name;
        $this->rental = $rental;
    }

    public function getName() {
        return $this->name;
    }

    /**
     * @throws Exception
     */
    public function setName($name) {
        if (gettype($name) !== "string") {
            throw new Exception("Invalid name type");
        }
        $this->name = $name;
    }

    public function getType() {
        return $this->type;
    }

    /**
     * @throws Exception
     */
    public function setType($type) {
        if (gettype($type) !== "string") {
            throw new Exception("Invalid type parameter");
        }
        $this->name = $type;
    }

    public function getFloors() {
        return $this->floors;
    }

    /**
     * @throws Exception
     */
    public function setFloors($num) {
        if (gettype($num) !== "integer" || $num <= 0) {
            throw new Exception('Invalid floors parameter');
        }
        $this->floors = $num;
    }

    public function getRooms() {
        return $this->rooms;
    }

    /**
     * @throws Exception
     */
    public function setRooms($num) {
        if (gettype($num) !== "integer" || $num <= 0) {
            throw new Exception('Invalid rooms parameter');
        }
        $this->rooms = $num;
    }

    public function getRental() {
        return $this->rental;
    }

    /**
     * @throws Exception
     */
    public function setRental($num) {
        if (gettype($num) !== "integer" || $num <= 0) {
            throw new Exception('Invalid rooms parameter');
        }
        $this->rental = $num;
    }

    public function show() {
        echo "<br/>Type: $this->type<br/>Name: $this->name<br/>Rental: $this->rental<br/>Floors: $this->floors<br/>Rooms: $this->rooms";
    }

    function __destruct()
    {
        echo "<br/>Shop class destructor call<br/>";
    }
}

try {
    $shopInstance = new Shop('SkyMall', 20, 245, 25000, "mall");
    $shopInstance->show();
} catch (Exception $e) {
    echo "<br/>" . $e->getMessage() . "<br/>";
}


/*******************************************************************************/


class SingleTone
{
    private static $instance = null;
    private $field;

    protected function __construct() {}

    //створює копію об'єкта
    protected function __clone() {}

    //Функцию __wakeup предполагается использовать для пересоздания
    // соединений с базами данных, которые потеряются при сериализации и десериализации
    protected function __wakeup() {}

    //static дозволить без створення екземляру звернутися до методу
    public static function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function getField() {
        return $this->field;
    }

    public function setField($var) {
        $this->field = $var;
    }
}

$instance1 = SingleTone::getInstance();
$instance2 = SingleTone::getInstance();
$instance1->setField("Field");

$instance1 === $instance2 ? print_r($instance2) : printf("<br/>instances are different<br/>");
