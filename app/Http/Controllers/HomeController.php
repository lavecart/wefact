<?php

namespace App\Http\Controllers;

use App\Constants\VariableList;
use App\Http\Traits\AuthUser;
use RealRashid\SweetAlert\Facades\Alert;

class HomeController extends Controller
{
    use AuthUser;

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware(function($request, $next){
            if(session('success_message')) {
                Alert::success('Success', session('success_message'));
            }
            else if(session('error_message')) {
                Alert::error('Error', session('error_message'));
            }
            return $next($request);
        });
    }

    public function index()
    {
        $productParams = [
            "status" => "4"
        ];
        
        $api = $this->getWeFactApi($this->getAuthUserSecretKey());
        $invoices = $api->sendRequest('invoice', 'list', $productParams);
        if($invoices['controller'] === 'invalid') 
        return redirect()->route('home')->withErrorMessage('Something Wrong! Please Contact with Ruby Finance Team!');
        $paidInvoices = $invoices['invoices'] ?? [];

        $productParams = [
            "status" => "2"
            ];

        $api = $this->getWeFactApi($this->getAuthUserSecretKey());
        $invoices = $api->sendRequest('invoice', 'list', $productParams);
        if($invoices['controller'] === 'invalid') 
        return redirect()->route('home')->withErrorMessage('Something Wrong! Please Contact with Ruby Finance Team!');
        $unPaidInvoices = $invoices['invoices'] ?? [];
        $invoice_status = VariableList::InvoiceStatus; 
        
        return view('home', compact('paidInvoices', 'unPaidInvoices', 'invoice_status'));
    }
}
