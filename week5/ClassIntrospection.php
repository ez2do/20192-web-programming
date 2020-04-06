<?php
function display_classes(){
  $classes = get_declared_classes();
  foreach($classes as $class){
    echo "Showing information about $class<br>\n";
    echo "$class methods:\n";
    $methods = get_class_methods($class);
    print_list($methods);
    echo "$class properties:";
    $properties = get_class_vars($class);
    print_list($properties);
  }
}

function print_list($items){
  if(!count($items)){
    echo "None<br>\n";
  } else {
    foreach($items as $item){
      echo "$item<br>\n";
    }
  }
}

display_classes();