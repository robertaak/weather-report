<?php
namespace App\Repositories;

use App\Models\HourlyReport;
use App\Models\HourlyReportsCollection;
use GuzzleHttp\Client;

class WeatherApiHourlyReportsRepository implements HourlyReportsRepository
{
    private const API_URL = 'https://api.weatherapi.com/v1/';

    private Client $httpClient;

    public function __construct()
    {
        $this->httpClient = new Client([
            'base_uri' => self::API_URL
        ]);
    }

    public function getHourlyReports(): HourlyReportsCollection
    {
        $url = 'forecast.json?key=' . $_ENV['API_KEY'] . '&q=Riga&days=1&aqi=no&alerts=no';

        $response = $this->httpClient->get($url);

        $response = (json_decode($response->getBody()));
        //echo'<pre>';
        //var_dump($response->forecast->forecastday[0]->hour->time); die;

        $hourlyReports = [];

        foreach ($response->forecast->forecastday[0]->hour as $hourlyReport)
        {
            $hourlyReports[] = new HourlyReport(
                $hourlyReport->temp_c,
                $hourlyReport->feelslike_c,
                $hourlyReport->condition->icon,
                $hourlyReport->time
            );
        }
        return new HourlyReportsCollection($hourlyReports);
    }
}