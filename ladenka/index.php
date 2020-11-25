<?php

include("vendor/autoload.php");
include("class_numbers_k.php");

use Tracy\Debugger;

Debugger::enable();

dump(numbersBarboraKozena::round_BarboraKozena(420.69185436, 2));
dump(numbersBarboraKozena::ceil_BarboraKozena(4.44));
dump(numbersBarboraKozena::floor_BarboraKozena(66.6));
dump(numbersBarboraKozena::sqrt_BarboraKozena(16));
dump(numbersBarboraKozena::pow_BarboraKozena(2, 2));
dump(numbersBarboraKozena::sin_BarboraKozena(90));
dump(numbersBarboraKozena::cos_BarboraKozena(360));
dump(numbersBarboraKozena::tan_BarboraKozena(0));
dump(numbersBarboraKozena::asin_BarboraKozena(30));
dump(numbersBarboraKozena::acos_BarboraKozena(60));
dump(numbersBarboraKozena::atan_BarboraKozena(45));
dump(numbersBarboraKozena::fmod_BarboraKozena(18.19, 3.3));
dump(numbersBarboraKozena::max_BarboraKozena([11,22,444,666]));
dump(numbersBarboraKozena::min_BarboraKozena([11,22,444,666]));
dump(numbersBarboraKozena::abs_BarboraKozena(-6));
dump(numbersBarboraKozena::odcitani_BarboraKozena(666, 222));
dump(numbersBarboraKozena::scitani_BarboraKozena(222, 444));
dump(numbersBarboraKozena::celociselne_deleni_BarboraKozena(22, 2));
dump(numbersBarboraKozena::nasobeni_BarboraKozena(11, 2));
dump(numbersBarboraKozena::number_format_BarboraKozena(6422.345, 2, ",", " "));

?>

