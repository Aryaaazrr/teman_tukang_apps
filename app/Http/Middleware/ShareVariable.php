<?php

namespace App\Http\Middleware;

use App\Models\Setting;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ShareVariable
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // $newBookingCount = Booking::whereNull('read_at')->count();
        // $newBookingInvoiceCount = BookingInvoice::whereNull('read_at')->count();
        // $logo = @Setting::key(Setting::LOGO)->first()->value;
        // $title = @Setting::key(Setting::TITLE)->first()->value;
        // $keyword = @Setting::key(Setting::KEYWORD)->first()->value;
        // $description = @Setting::key(Setting::DESCRIPTION)->first()->value;

        // $basicInfo = (object) compact('logo', 'title', 'keyword', 'description');

        // view()->share(compact('newBookingCount', 'newBookingInvoiceCount', 'basicInfo'));

        return $next($request);
    }
}