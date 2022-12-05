<?php
    class oneLiner{
    public $expression;
    public function __construct($expression)
    {
        $this->expression = $expression;
    }

    public function evaluate(){
            $result = eval("return $this->expression;");
        // var_dump($this->expression.";");
        return $result;
        // var_dump($result);
    }

    }
?>