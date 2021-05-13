<?php
const PERCENT = 0.1;
const DAYS_PER_YEAR = 365;

function arithmetic_p($value, $mod, $count) {
    for($i = 1; $i < $count + 1; $i++ ) {
        $value += $value * $mod;
    }
    return $value;
}

if(isset($_POST)) {
    $date = DateTime::createFromFormat("d.m.Y", $_POST["calc_date"]) or die("Неверный формат даты."); //дата оформления вклада
    $amount = $_POST["calc_amount"]; //сумма вклада: int
    $term = $_POST["calc_term"]; //срок вклада (лет): int
    $replenishment_amount = $_POST["calc_r"] == true && !empty($_POST["calc_r-amount"]) ? $_POST["calc_r-amount"] : 0; //сумма пополнения вклада: int

    $percent_per_day = (PERCENT / DAYS_PER_YEAR);
    $date_now = new DateTime();
    if($date > $date_now)
        die("Дата вклада из будущего.");
    $days = $date_now->format('d'); //дней в этом месяце
    $previous_date = $date_now->sub(new DateInterval("P{$days}D")); //конец предыдущего месяца
    $interval = $date->diff($previous_date)->format('%a'); //дней с момента вклада до конца пред. мес.
    $previous_amount = arithmetic_p($amount, $percent_per_day, $interval); //сумма на счету на конец предыдущего месяца

    //прибавляем ко всей сумме за предыдущий месяц накопленный процент от текущего месяца
    //не совсем понятно почему сумма пополнения к изначальной сумме не прибавляется в формуле, но оставлю как было написано
    $result = $previous_amount + (($previous_amount + $replenishment_amount) * ($days * $percent_per_day));
    echo ceil($result);
}