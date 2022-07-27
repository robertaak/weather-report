<?php
namespace App\Controllers;

use App\Services\ShowAllHourlyReportsService;
use App\View;

class HourlyReportController
{
    private ShowAllHourlyReportsService $service;

    public function __construct(ShowAllHourlyReportsService $service)
    {
        $this->service = $service;
    }

    public function show(): View
    {
        return new View('hourly-reports-index.twig', ['hourlyReports' => $this->service->execute()->getAll()]);
    }
}