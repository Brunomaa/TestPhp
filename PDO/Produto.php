<?php


class Produto implements IProduto {
    private $id;
    private $name;
    private $desc;
    
    function getId() {
        return $this->id;
    }

    function getName() {
        return $this->name;
    }

    function getDesc() {
        return $this->desc;
    }

    function setId($id) {
        $this->id = $id;
        return $this;
    }

    function setName($name) {
        $this->name = $name;
        return $this;
        
    }

    function setDesc($desc) {
        $this->desc = $desc;
        return $this;
        
    }



            
}
