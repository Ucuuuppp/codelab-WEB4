<?php

namespace Controller;

include "Traits/responseFormatter.php";
include "Controller/Controller.php";

use Traits\ResponseFormatter;

class ProductController extends Controller {
    use ResponseFormatter;
    public function __construct() {
        $this -> controllerName = "Get All Product";
        $this -> controllerMethod = "Get";
    }
    public function getAllProduct(){
        $dummyData = [
            "Air Mineral",
            "Kebab",
            "Spageti",
            "Jus Jambu"
        ];
        $response =[
            "controller_attribute" => $this -> getControllerAtribut(),
        ];
        return $this-> ResponseFormatter(200, "Success", $response);
    }
}