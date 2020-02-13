@extends('layouts.default')

@section('contenu')
    <div class="container">
        <div data-size="A4">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="fw-300 display-4 fw-500 color-primary-600 keep-print-font pt-4 l-h-n m-0">
                       <i>Payment Details</i>
                    </h3>
                    <div class="text-dark fw-700 h1 mb-g keep-print-font">
                        # 1
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4 d-flex">
                    <div class="table-responsive">
                        <table class="table table-clean table-sm align-self-end">
                            <tbody>
                            <tr>
                                <td>
                                    Issue Date:
                                </td>
                                <td>
                                    05/04/2019
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <strong>Due Date:</strong>
                                </td>
                                <td>
                                    05/25/2019
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Net:
                                </td>
                                <td>
                                    21
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Currency:
                                </td>
                                <td>
                                    USD
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    P.O. #
                                </td>
                                <td>
                                    1/3-147
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-sm-4 ml-sm-auto">
                    <div class="table-responsive">
                        <table class="table table-sm table-clean text-right">
                            <tbody>
                            <tr>
                                <td>
                                    <strong>Bill to:</strong>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <strong>Slate Rock and Gravel Company</strong>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    222 Rocky Way
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    30000 Bedrock, Cobblestone County
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    +555 7 123-5555
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    fred@slaterockgravel.bed
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Attn: Fred Flintstone
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="table-responsive">
                        <table class="table mt-5">
                            <thead>
                            <tr>
                                <th class="text-center border-top-0 table-scale-border-bottom fw-700"></th>
                                <th class="border-top-0 table-scale-border-bottom fw-700">Item</th>
                                <th class="border-top-0 table-scale-border-bottom fw-700">Description</th>
                                <th class="text-right border-top-0 table-scale-border-bottom fw-700">Unit Cost</th>
                                <th class="text-center border-top-0 table-scale-border-bottom fw-700">Qty</th>
                                <th class="text-right border-top-0 table-scale-border-bottom fw-700">Total</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="text-center fw-700">1</td>
                                <td class="text-left strong">Origin License</td>
                                <td class="text-left">Extended License</td>
                                <td class="text-right">$999.00</td>
                                <td class="text-center">1</td>
                                <td class="text-right">$999.00</td>
                            </tr>
                            <tr>
                                <td class="text-center fw-700">2</td>
                                <td class="text-left">Custom Services</td>
                                <td class="text-left">Instalation and Customization (cost per hour)</td>
                                <td class="text-right">$150.00</td>
                                <td class="text-center">20</td>
                                <td class="text-right">$3,000.00</td>
                            </tr>
                            <tr>
                                <td class="text-center fw-700">3</td>
                                <td class="text-left">Hosting</td>
                                <td class="text-left">1 year subcription</td>
                                <td class="text-right">$499.00</td>
                                <td class="text-center">1</td>
                                <td class="text-right">$499.00</td>
                            </tr>
                            <tr>
                                <td class="text-center fw-700">4</td>
                                <td class="text-left">Platinum Support</td>
                                <td class="text-left">1 year subcription 24/7</td>
                                <td class="text-right">$3,999.00</td>
                                <td class="text-center">1</td>
                                <td class="text-right">$3,999.00</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4 ml-sm-auto">
                    <table class="table table-clean">
                        <tbody>
                        <tr>
                            <td class="text-left">
                                <strong>Subtotal</strong>
                            </td>
                            <td class="text-right">$8,497.00</td>
                        </tr>
                        <tr>
                            <td class="text-left">
                                <strong>Discount (20%)</strong>
                            </td>
                            <td class="text-right">$1,699.40</td>
                        </tr>
                        <tr>
                            <td class="text-left">
                                <strong>VAT (10%)</strong>
                            </td>
                            <td class="text-right">$679.76</td>
                        </tr>
                        <tr class="table-scale-border-top border-left-0 border-right-0 border-bottom-0">
                            <td class="text-left keep-print-font">
                                <h4 class="m-0 fw-700 h2 keep-print-font color-primary-700">Total</h4>
                            </td>
                            <td class="text-right keep-print-font">
                                <h4 class="m-0 fw-700 h2 keep-print-font">$7,477.36</h4>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-left">
                                <strong>Paid</strong>
                            </td>
                            <td class="text-right">
                                <strong>$0</strong>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-left keep-print-font">
                                <h4 class="m-0 fw-700 h2 keep-print-font color-primary-700">Amount Due</h4>
                            </td>
                            <td class="text-right keep-print-font">
                                <h4 class="m-0 fw-700 h2 keep-print-font text-danger">$7,477.36</h4>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <h4 class="py-5 text-primary">
                        Fred, thank you very much. We really appreciate your business.
                        <br>
                        Please send payments before the due date.
                    </h4>
                    <p class="mt-2 text-muted mb-0">
                        Payment details: ACC:123006705 IBAN:US100000060345 SWIFT:BOA447
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection




@section('script')
    <script src="{{asset('theme')}}/js/datagrid/datatables/datatables.bundle.js"></script>

    <script>
        $(document).ready(function() {

        });
        });
    </script>
@endsection

