<?php
function kali($celcius1)
{
     return $celcius1;
}
function kelvin($bil1)
{
    return 273.15 + $bil1;
}
function farenheit($bil2)
{
    return 32 + (1.8 * $bil2);
}
if($_POST["hitung"]=="KONVERENSI")
    {
        $input = $_POST["celcius1"];

        echo "Derajat Celcius : " . $input . "<br>";
        echo "Derajat Kelvin : " . kelvin($input) . "<br>";
        echo "Derajat Fahrenheit : " . farenheit($input) . "<br>";
    }
        ?>