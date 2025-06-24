<?php

namespace App\Services;

use App\Models\Booking;
use App\Models\Room;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use function Carbon\Traits\createFromFormat;

class BookingService
{
    private $conflicts = [];

    public function createBatchBookings(int $roomId, array $bookings): array
    {
        //complete this call

        // Using database transaction for easy rollback
        try{
            DB::beginTransaction();

            foreach($bookings as $booking){
                if($this->bookingExists($roomId, $booking)){
                    throw new \Exception('Booking exists');
                }
            }

            // No conflict found
            DB::commit();

            return [
                'success' => true,
                'conflicts' => $this->conflicts
            ];
        }
        catch(\Exception $e){
            return [
                'success' => false,
                'conflicts' => $this->conflicts
            ];
        }
    }

    private function bookingExists(int $roomId, array $booking){
        // Create datetime instances from incoming data
        $newStartTime = $this->formatDateTime($booking['start_time']);
        $newEndTime = $this->formatDateTime($booking['end_time']);

        // Get existing bookings
        $existingBookings = $this->getBookingsByRoom($roomId);

        foreach($existingBookings as $existingBooking){
            // Create datetime instance for comparison
            $existingStartTime = $this->formatDateTime($existingBooking->start_time);
            $existingEndTime = $this->formatDateTime($existingBooking->end_time);

            // Compare datetime
            $bookingExists = $this->compareDateTime(
                $existingStartTime, $existingEndTime, $newStartTime, $newEndTime
            );

            if($bookingExists){
                array_push($this->conflicts, $booking);
                return false;
            }

            return true;
        }
    }

    private function getBookingsByRoom(int $roomId){
        return Booking::query()->where('roomId', $roomId)->get();
    }

    private function formatDateTime(string $dateTimeString) {
        return Carbon::createFromFormat('Y-m-d H:i:s', $dateTimeString);
    }

    private function compareDateTime($startTime, $endTime, $newStartTime, $newEndTime){
        return !$newStartTime >= $startTime
            && !$newEndTime <= $endTime
            && $newStartTime != $endTime
            && $newEndTime != $startTime;

    }

}
