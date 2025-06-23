<?php

namespace App\Services;

use App\Models\Booking;
use Illuminate\Support\Facades\DB;

class BookingService
{
    public function createBatchBookings(int $roomId, array $bookings): array
    {
        //complete this call

        return ['success' => true, 'conflicts' => []];
        return ['success' => false, 'conflicts' => ['error' => ""]];
    }
}
