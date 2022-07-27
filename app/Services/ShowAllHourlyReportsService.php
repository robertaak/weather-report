<?php
namespace App\Services;

use App\Models\HourlyReportsCollection;
use App\Repositories\HourlyReportsRepository;

class ShowAllHourlyReportsService
{
    private HourlyReportsRepository $hourlyReportsRepository;

    public function __construct(HourlyReportsRepository $hourlyReportsRepository)
    {
        $this->hourlyReportsRepository = $hourlyReportsRepository;
    }

    public function execute(): HourlyReportsCollection
    {
        return $this->hourlyReportsRepository->getHourlyReports();
    }
}