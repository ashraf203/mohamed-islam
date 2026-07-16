<?php

class Contract{
    public $employeeName;
    public $managerName;
    public $position;
    public $salary;
    public $startDate;
    public $endDate;
    public $insurance = true;
}

$firstEmployee = new Contract();
$firstEmployee->employeeName = "ahmed";
$firstEmployee->managerName = "mohamed";
$firstEmployee->salary = 5000;
$firstEmployee->position = "backend";
$firstEmployee->startDate = "10/1/2022";
$firstEmployee->endDate = "10/1/2023";
print_r($firstEmployee);

$secondEmployee = new Contract();
$secondEmployee->employeeName = "seif";
$secondEmployee->managerName = "mohamed";
$secondEmployee->salary = 5000;
$secondEmployee->position = "backend";
$secondEmployee->startDate = "10/1/2022";
$secondEmployee->endDate = "10/1/2024";
print_r($secondEmployee);
