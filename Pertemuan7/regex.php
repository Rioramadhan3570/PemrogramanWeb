<?php

$pattern = '/[a-z]/'; // Cocokan huruf kecil
$text = 'This is a sample text.';
if(preg_match($pattern,$text)){
    echo "huruf kecil ditemukan !";
}else{
    echo "tidak ada huruf kecil !";
}

$pattern = '/[0-9]+/'; // Cocokkan satu atau lebih digit.
$text = 'There are 123 apples.';
if(preg_match($pattern,$text,$matches)){
    echo "cocokan : ".$matches[0];
}else{
    echo "Tidak ada yang cocok!";
}

$pattern = '/apple/';
$replacement = 'banana';
$text = 'i like apple pie.';
$new_text = preg_replace($pattern,$replacement,$text);
echo $new_text; // Output: "I like banana pie.

$pattern = '/go*d/'; // Cocokkan "god", "good", "gooood", dll.
$text = 'god is good';
if(preg_match($pattern,$text,$matches)){
    echo "cocokan : ".$matches[0];
}else{
    echo "tidak ada yang cocok!";
}

$pattern = '/go?d/'; // Cocokkan "god", "good", "gooood", dll.
$text = 'god is good';
if(preg_match($pattern,$text,$matches)){
    echo "cocokan : ".$matches[0];
}else{
    echo "tidak ada yang cocok!";
}

$pattern = '/go{2,3}d/'; // Cocokkan "god", "good", "gooood", dll.
$text = 'god is good';
if(preg_match($pattern,$text,$matches)){
    echo "cocokan : ".$matches[0];
}else{
    echo "tidak ada yang cocok!";
}
?>