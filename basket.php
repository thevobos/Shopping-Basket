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
     * @ Param Basket Max
     *
     * */
    public $basket_max = 10;

    /*
     *
     * @ Param Basket Min
     *
     * */
    public $basket_min = 0;

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

        if(is_array($par)){

            $this->basket_all[] = array_merge( $par, [ "item_number" => rand(0,999999) ] );

        }

        return $this;
    }


    /*
     *
     * @ Param Basket İtems List Array
     *
     *
     * */
    public function basket_list(){

        return $this->basket_all;

    }


    /*
     *
     * @ Param Basket Plus Many İs Number
     * @ Mix Array İtem Price
     * */
    public function basket_plus_many($par = ""){

        if($par !== ""){

            $zero = 0;

            foreach($this->basket_all as $pro){

                $zero += $pro[$par];

            }

            return $zero;

        }

    }

    /*
     *
     * @ Param Basket İtems Remove
     * @ Mix Basket Remove List İtems For Array
     *
     * */
    public function basket_remove_item($par = []){

       if(is_array($par)){

           foreach($par as $un){

               unset($this->basket_all[$un]);

           }

       }

        return $this->basket_all;

    }

    /*
     *
     * @ Param Basket İtems All Count
     * @ Mix  Array Return Echo Mode
     *
     * */
    public function basket_plus_items(){

        return count($this->basket_all);

    }


}