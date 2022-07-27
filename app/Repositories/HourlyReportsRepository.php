<?php

namespace App\Repositories;

use App\Models\HourlyReportsCollection;

interface HourlyReportsRepository
{
    public function getHourlyReports(): HourlyReportsCollection;
}