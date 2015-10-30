<?php
// Array with names
$a[] = "Anna";
$a[] = "Brittany";
$a[] = "Cinderella";
$a[] = "Diana";
$a[] = "Eva";
$a[] = "Fiona";
$a[] = "Gunda";
$a[] = "Hege";
$a[] = "Inga";
$a[] = "Johanna";
$a[] = "Kitty";
$a[] = "Linda";
$a[] = "Nina";
$a[] = "Ophelia";
$a[] = "Petunia";
$a[] = "Amanda";
$a[] = "Raquel";
$a[] = "Cindy";
$a[] = "Doris";
$a[] = "Eve";
$a[] = "Evita";
$a[] = "Sunniva";
$a[] = "Tove";
$a[] = "Unni";
$a[] = "Violet";
$a[] = "Liza";
$a[] = "Elizabeth";
$a[] = "Ellen";
$a[] = "Wenche";
$a[] = "Vicky";

$a[] = "Albania";
             $a[] =    "Algeria";
             $a[] =    "Andorra";
             $a[] =    "Angola";
             $a[] =    "Australia";
             $a[] =    "Austria";
             $a[] =    "Bahamas";
             $a[] =    "Bahrain";
              $a[] =   "Bangladesh";
              $a[] =   "Barbados";
              $a[] =   "Belarus";
              $a[] =   "Belgium";
              $a[] =   "Belize";
              $a[] =   "Benin";
              $a[] =   "Botswana";
              $a[] =   "Brazil";
              $a[] =   "Burma";
              $a[] =   "Burundi";
               $a[] =  "Cambodia";
              $a[] =   "Cameroon";
              $a[] =   "Canada";
              $a[] =   "Chad";
              $a[] =   "Chile";
              $a[] =   "China";
              $a[] =   "Colombia";
              $a[] =   "Comoros";
              $a[] =   "Congo";


$content=file_get_contents("http://country.io/names.json");
$data=json_decode($content);

//do whatever with $data now
$data = $array;    



// get the q parameter from URL
$q = $_REQUEST["q"];

$hint = "";

// lookup all hints from array if $q is different from "" 
if ($q !== "") {
    $q = strtolower($q);
    $len=strlen($q);
    foreach($a as $name) {
        if (stristr($q, substr($name, 0, $len))) {
            if ($hint === "") {
                $hint = $name;
            } else {
                $hint .= ", $name";
            }
        }
    }
}

// Output "no suggestion" if no hint was found or output correct values 
echo $hint === "" ? "no suggestion" : $hint;
?>