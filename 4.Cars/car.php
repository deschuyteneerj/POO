<?php
class Car
{
    private $registrationNumber, $dateOfCirculation, $mileage, $model, $brand, $color, $weight, $reserved, $country, $decay, $age, $image;

    public function __construct($registrationNumber, $dateOfCirculation, $mileage, $model, $brand, $color, $weight){
        $this->registrationNumber = $registrationNumber;
        $this->dateOfCirculation = $dateOfCirculation;
        $this->mileage = $mileage;
        $this->model = $model;
        $this->brand = $brand;
        $this->color = $color;
        $this->weight = $weight;
        $this->isReserved($brand);
        $this->categorizeWeight($weight);
        $this->belongToCountry($registrationNumber);
        $this->checkDecay($mileage);
        $this->checkAge($dateOfCirculation);
        $this->image = $image;
    }

    public function isReserved($brand){
        return $brand == "Audi" ? $this->reserved = "Reserved" : $this->reserved = "Free";
    }

    public function categorizeWeight($weight){
        return $weight > 3500 ? $this->model = "Utility" : $this->model = "Commercial";
    }

    public function belongToCountry($registrationNumber){
        switch (substr($this->registrationNumber, 0, 2)) {
            case "BE":
                $this->country = "Belgium";
                break;
            case "FR":
                $this->country = "France";
                break;
            case "DE":
                $this->country = "Deutschland";
                break;
                default;
        }
        return;
    }

    public function checkDecay($mileage){
        if (intval($mileage < 100000)){
            $this->decay = "Low";
        } else if (intval($mileage) >= 100001 && intval($mileage) < 200000){
            $this->decay = "Middle";
        } else {
            $this->decay = "High";
        }
    }

    public function checkAge($dateOfCirculation){
        $this->age = date("Y") - intval(explode("/", $dateOfCirculation)[2]);
    }

    private function addKilometers(){
        $this->km = $this->km + 100000;
        $this->decay = "High";
    }

    public function display(){
        echo "<tr>
        <td><img src='$this->image' alt='Car'></td>
        <td>$this->brand</td>
        <td>$this->model</td>
        <td>$this->color</td>
        <td>$this->weight</td>
        <td>$this->country</td>
        <td>$this->registrationNumber</td>
        <td>$this->dateOfCirculation</td>
        <td>$this->mileage</td>
        <td>$this->decay</td>
        <td>$this->age</td>
        <td>$this->reserved</td>
        </tr>";
    }

    public function setImage($imageLink){
        return $this->image = $imageLink;
    }
}