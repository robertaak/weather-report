<?php
namespace App\Models;

class HourlyReportsCollection
{
    private array $hourlyReports = [];

    public function __construct(array $hourlyReports)
    {
        foreach ($hourlyReports as $hourlyReport) {
            $this->add($hourlyReport);
        }
    }

    private function add(HourlyReport $hourlyReport): void
    {
        $this->hourlyReports[] = $hourlyReport;
    }

    public function getAll(): array
    {
        return $this->hourlyReports;
    }
}