<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use PDF;

class PDFController extends Controller
{
	public function pdf(){
		$orders = Order::all();
		$pdf = PDF::loadView('pdf', ['orders' => $orders]);
		return $pdf->download('order.pdf');
	}
    
}
