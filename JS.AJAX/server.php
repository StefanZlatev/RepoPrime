<?php

$dogs = array("affenpinscher", "african","airedale","akita","appenzeller","basenji","beagle","bluetick","borzoi","bouvier", "boxer", "brabancon", "briard", "bulldog","bullterrier","cairn","chihuahua","chow", "clumber", "collie", "coonhound", "corgi", "dachshund", "dane", "deerhound", "dhole", "dingo", "doberman", "elkhound", "entlebucher", "eskimo", "germanshepherd", "greyhound", "groenendael", "hound", "husky", "keeshond", "kelpie", "komondor", "kuvasz","labrador", "leonberg", "lhasa", "malamute", "malinois", "maltese", "mastiff", "mexicanhairless", "mountain", "newfoundland", "otterhound", "papillon", "pekinese", "pembroke", "pinscher", "pointer", "pomeranian", "poodle", "pug", "pyrenees", "redbone", "retriever", "ridgeback", "rottweiler", "saluki", "samoyed", "schipperke", "schnauzer", "setter", "sheepdog", "shiba", "shihtzu", "spaniel", "springer", "stbernard", "terrier", "vizsla", "weimaraner", "whippet", "wolfhound");

if(isset($_GET["search"])){
    $criteria = $_GET["search"];
    $result = array();
    $counter = 0;
    foreach ($dogs as $dog){
        if(stristr($dog, $criteria) !== false){
            $result[] = $dog;
            $counter++;
            if($counter == 5){
                break;
            }
        }
    }
    echo json_encode($result);
}

if(isset($_GET["picture"])){
    $result = array();
    $picture = file_get_contents("https://dog.ceo/api/breed/" . $_GET["picture"] . "/images/random");
    $picture = json_decode($picture, true);
    $result["pic"] = $picture["message"];
    echo json_encode($result);
    //var_dump($result);
}