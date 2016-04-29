<?php
/*
*   Proje : Fix Cms
*   Autor : Cengiz Akcan
**/

class basket
{


    /*
     *
     * @ Param Basket Name
     *
     * */
    public $basket_name = "fix";

    /*
     *
     * @ Param Basket Min
     *
     * */
    public $basket_all = array();


    /*
     *
     * @ Param Basket Add İtesms
     * @ Mix Array
     *
     * */
    public function basket_add( $par = [] ){

        if(is_array($par)){ $this->basket_all[$this->basket_name][] = array_merge( $par, [ "item_number" => rand(0,999999) ] ); }

        return $this;
    }


    /*
     *
     * @ Param Basket İtems List Array
     *
     *
     * */
    public function basket_name($par = ""){

        $this->basket_name = $par;
        return $this;

    }


    /*
     *
     * @ Param Basket İtems List Array
     *
     *
     * */
    public function basket_list($par = ""){

        return $this->basket_all[$par];

    }


    /*
     *
     * @ Param Basket Plus Many İs Number
     * @ Mix Array İtem Price
     * */
    public function basket_plus_many($par1 = "", $par2 = ""){

        if($par1 !== "" and $par2 !== ""){

            $zero = 0;

            foreach($this->basket_all[$par1] as $pro){ $zero += $pro[$par2]; }

            return $zero;

        }

    }

    /*
     *
     * @ Param Basket İtems Remove
     * @ Mix Basket Remove List İtems For Array
     *
     * */
    public function basket_remove_item($par1 = "",$par2 = []){

       if(is_array($par2) and $par1 !== ""){

           foreach($par2 as $un){ unset($this->basket_all[$par1][$un]); }

       }

        return $this;

    }

    /*
     *
     * @ Param Basket İtems All Count
     * @ Mix  Array Return Echo Mode
     *
     * */
    public function basket_plus_items($par = ""){

        if($par == ""){ return count($this->basket_all); }else{ return count($this->basket_all[$par]); }

    }


}