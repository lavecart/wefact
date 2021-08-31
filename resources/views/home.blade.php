@extends('layouts.app')
@section('content')

@php
$current_month = date('m');
@endphp

<!-- Start of HubSpot Embed Code -->
<script type="text/javascript" id="hs-script-loader" async defer src="//js.hs-scripts.com/7738074.js"></script>
<!-- End of HubSpot Embed Code -->

<div class="content-w">
    <div class="content-panel-toggler">
        <i class="os-icon os-icon-grid-squares-22"></i><span>Sidebar</span>
    </div>
    <div class="content-i">
        <div class="content-box">
            <div class="row">
                <div class="col-md-8 col-lg-8">
                    <div class="element-balances justify-content-between mobile-full-width">
                        <div class="balance balance-v2">
                            <div class="balance-title">Winst voor dit kwartaal</div>
                            <div class="balance-value">
                                {{-- @if(($quarterResult['earning']) > 0)
                                <span>{{ european_format($quarterResult['earning']) }}</span>
                                @else
                                <span class="text-danger">{{ european_format($quarterResult['earning']) }}</span>
                                @endif --}}
                            </div>
                        </div>
                    </div>

                    <div class="element-wrapper pb-4 mb-4 border-bottom">
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-2 text-center">
                            <a href="{{ route('invoice.create') }}"><img src="https://img.icons8.com/color/72/4a90e2/bill.png"/> <br>
                                New invoice</a>
                        </div>
                        <div class="col-md-2 text-center">
                            <a href="javascript:void(0)"><img src="https://img.icons8.com/color/72/4a90e2/estimate.png"/> <br>
                                New quote</a>
                        </div>
                        <div class="col-md-2 text-center">
                            <a href="{{ route('debtors.create') }}"><img src="https://img.icons8.com/color/72/4a90e2/men-age-group-5.png"/> <br>
                                New debtor</a>
                        </div>

                        <div class="col-md-2 text-center">
                            <a href="{{ route('incoming.create')}}"><img src="https://img.icons8.com/color/72/4a90e2/order-history.png"/> <br>
                                New purchase invoice</a>
                        </div>

                        <div class="col-md-2 text-center">
                            <a href="{{ route('creditors.create')}}"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                width="72" height="72"
                                viewBox="0 0 226 226"
                                style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,226v-226h226v226z" fill="none"></path><g><path d="M113,51.79167c12.98558,0 23.54167,-10.55608 23.54167,-23.54167c0,-12.98558 -10.55608,-23.54167 -23.54167,-23.54167c-12.98558,0 -23.54167,10.55608 -23.54167,23.54167c0,12.98558 10.55608,23.54167 23.54167,23.54167" fill="#e74c3c"></path><path d="M155.375,103.58333c0,11.70021 0,42.375 0,42.375l-14.125,9.41667l-4.70833,65.91667h-47.08333l-4.70833,-65.91667l-14.125,-9.41667c0,0 0,-18.96987 0,-42.375c0,-23.40512 18.96987,-42.375 42.375,-42.375c23.40513,0 42.375,18.96988 42.375,42.375z" fill="#607d8b"></path></g></g></svg><br>
                                New creditor</a>
                        </div>

                    </div>
                </div>

                <div class="col-sm-4 d-none d-lg-block">
                    <div class="cta-w cta-with-media purple">
                        <div class="cta-content" style="width: 85%">
                            <h3 class="cta-header">Nodig andere ondernemers uit</h3><br><br><br>
                            <form action="">
                                <div class="newsletter-field-w"><input placeholder="Email address..."><button class="btn btn-sm btn-primary">Verstuur</button></div>
                            </form>
                            <div class="cta-media" style="bottom: -20px; width: 65%;">
                                <img alt="" src="https://irtech.biz/tf/oxo/assets/img/contact/02.png">
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row mt-2">
                <div class="col-sm-12">
                    <div class="element-wrapper">
                        <h6 class="element-header">
                            Factuur overzicht
                        </h6>
                            <div class="element-box">
                                <div class="table-responsive mb-5">
                                    <h5 class="form-header mb-0 pt-0">Paid Invoice</h5>
                                    <div class="form-desc"></div>
                                    <table class="table table-lightborder">
                                        <thead>
                                            <tr>
                                                <th>
                                                    {{ trans('cruds.outgoing.fields.invoice') }}
                                                </th>
                                                <th>
                                                    {{ trans('cruds.outgoing.fields.companyName') }}
                                                </th>
                                                <th>
                                                    {{ trans('cruds.outgoing.fields.date') }}
                                                </th>
                                                <th class="text-center">
                                                    {{ trans('cruds.outgoing.fields.invoiceStatus') }}
                                                </th>
                                                <th class="text-right">
                                                    {{ trans('cruds.outgoing.fields.order_total') }}
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($paidInvoices as $key => $invoice)
                                            <tr data-entry-id="{{ $invoice['Identifier'] }}">
                                                <td>
                                                <a href="{{ route('invoice.show', $invoice['Identifier']) }}">
                                                    {{ $invoice['InvoiceCode'] ?? '' }}
                                                </a>

                                                </td>
                                                <td>{{ $invoice['CompanyName'] ?? '' }}</td>
                                                <td>{{ $invoice['Date'] ?? '' }}</td>
                                                <td class="text-center">
                                                    @if($invoice_status[$invoice['Status']] == 'Paid')
                                                    <div class="status-pill green" data-title="Complete" data-toggle="tooltip" data-original-title="" title=""></div>
                                                    @endif
                                                </td>
                                                <td class="text-right">{{ european_format($invoice['AmountIncl']) ?? '' }}</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="element-box">
                                <div class="table-responsive">
                                    <h5 class="form-header mb-0 pt-0">Sent Invoice</h5>
                                    <div class="form-desc"></div>
                                    <table class="table table-lightborder">
                                        <thead>
                                            <tr>
                                                <th>
                                                    {{ trans('cruds.outgoing.fields.invoice') }}
                                                </th>
                                                <th>
                                                    {{ trans('cruds.outgoing.fields.companyName') }}
                                                </th>
                                                <th>
                                                    {{ trans('cruds.outgoing.fields.date') }}
                                                </th>

                                                <th class="text-center">
                                                    {{ trans('cruds.outgoing.fields.invoiceStatus') }}
                                                </th>
                                                <th class="text-right">
                                                    {{ trans('cruds.outgoing.fields.order_total') }}
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($unPaidInvoices as $key => $invoice)
                                            <tr data-entry-id="{{ $invoice['Identifier'] }}">
                                                <td>{{ $invoice['InvoiceCode'] ?? '' }}</td>
                                                <td>{{ $invoice['CompanyName'] ?? '' }}</td>
                                                <td>{{ $invoice['Date'] ?? '' }}</td>
                                                <td class="text-center">
                                                    @if($invoice_status[$invoice['Status']] == 'Sent')
                                                    <div class="status-pill yellow" data-title="Pending" data-toggle="tooltip" data-original-title="" title="" aria-describedby="tooltip393151"></div>
                                                    @endif
                                                </td>
                                                <td class="text-right">{{ european_format($invoice['AmountIncl']) ?? '' }}</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
<div class="display-type"></div>

@endsection
@section('scripts')

@endsection
