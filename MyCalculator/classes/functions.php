<?php
    class oneLiner{
   

    public function evaluate($expression){
            $result = eval("return $expression;");
        // var_dump($this->expression.";");
        return $result;
        // var_dump($result);
    }

    public function concatOpe($result, $btn){
        $tresult = $result . $btn;
        return $tresult;
    }

    }
?>