<?php

namespace Application\Model;

class Data {

    private $data = array();

    function __construct($limit) {

        for($i = 0; $i < $limit; $i++) {

            $this->data[] = uniqid();

        }

        sleep(3);

    }

    public function getData() {

        return $this->data;

    }

}
