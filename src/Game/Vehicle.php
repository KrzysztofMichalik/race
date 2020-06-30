<?php

namespace Race\Game;

// w ramach interfejsu możemy definiować wszystkie metody publiczne, oraz publiczne stałe. Interfejs opisuje jak dany obiekt widziany jest z zewnatrz i jak mozemy się z nim komunikować wysyłać i pobierać info. Zawiera tylko i wyłącznie same definicje metod bez ich implememtacji. 

// główne różnice pomiędzy klasami abstrakcyjnymi a interfejsami:
// - nie można stworzyć jego instancji. 
// - można implementować wiele interfejsów
// - w klasie abstrakcyjnej mozemy stworzyć metody abstrakcyjne czyli takie które nie posiadają definicji. Różnią się od metod zadeklarowanych w interfejsie widocznością. W interfejsie używamy tylko widocznośći publicznej, zaś w metodzie abstakcyjnej możemy ograniczyc jej widoczność!


interface Vehicle 
{
    public function move() : void;
}