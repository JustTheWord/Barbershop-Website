<?php

class Model_Price extends Model
{
    public array $prices = array(

        "Farian" => array(
            'Haircut' => '600',
            'Haircut & Shave' => '900',
            'Haircut & Beard' => '900',
            'Haircut Long Hair' => '650',
            'Long Hair & Beard' => '950',
            'Father & Son' => '1000'),

        "Kirill" => array(
            'Haircut' => '550',
            'Haircut & Shave' => '800',
            'Haircut & Beard' =>'800',
            'Haircut Long Hair' => '600',
            'Long Hair & Beard' => '900',
            'Father & Son' =>'900'),

        "Ivan" => array(
            'Haircut' =>'550',
            'Haircut & Shave' => '800',
            'Haircut & Beard' =>'800',
            'Haircut Long Hair' => '600',
            'Long Hair & Beard' => '900',
            'Father & Son' => '900')
    );
    public function get_data(array $data): ?string
    {
        $barberName = $data['barberName'];
        $serviceName = $data['serviceName'];

        if ($barberName && $serviceName)
        {
            return $this->prices[$barberName][$serviceName];
        }

        else
        {
            return null;
        }
    }
}