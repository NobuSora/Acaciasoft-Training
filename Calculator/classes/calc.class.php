<?php
class Calc
{
    public $Operator;
    public $Value1;
    public $Value2;
     public function __construct(string $Op, int $Val1, int $Val2)
     {
        $this->Operator = $Op;
        $this->Value1 = $Val1;
        $this->Value2 = $Val2;
     }
     public function Calculate()
     {
        switch ($this->Operator) {
            case 'add':
                $result = $this->Value1 + $this->Value2;
                break;
            case 'sub':
                $result = $this->Value1 - $this->Value2;
                break;
            case 'div':
                $result = $this->Value1 / $this->Value2;
                break;
            case 'mul':
                $result = $this->Value1 * $this->Value2;
                break;
            default:
                echo "Error in cacl.class.php";
                break;
        }
        return $result;
     }
}
?>