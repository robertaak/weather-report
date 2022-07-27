<?php
namespace App\Models;

class HourlyReport
{
    private float $tempC;
    private float $feelsLikeC;
    private string $icon;
    private string $time;

    public function __construct(float $tempC, float $feelsLikeC, string $icon, string $time)
    {

        $this->tempC = $tempC;
        $this->feelsLikeC = $feelsLikeC;
        $this->icon = $icon;
        $this->time = $time;
    }

    public function getIcon(): string
    {
        return $this->icon;
    }

    public function getTime(): string
    {
        return $this->time;
    }

    public function getFeelsLikeC(): float
    {
        return $this->feelsLikeC;
    }

    public function getTempC(): float
    {
        return $this->tempC;
    }

}