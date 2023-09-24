@extends('layouts.template')

@section('title', "Nos packs")


@section('contenu')

<div class="row">
    <div class="col-lg-12 mb-3">
        @include('userView.packs.mon_abonnement')
    </div>
    <div class="col-lg-4">
        <div class="card">
            <div class="card-body">
                <div class="pricingTable1 text-center">
                    <h6 class="title1 pt-3 pb-2 m-0">Basic plan</h6>
                    <p class="text-muted p-3 mb-0">It is a long established fact that a reader will be distracted by the readable.</p>
                    <div class="p-3">
                        <h3 class="amount amount-border d-inline-block">$39.00</h3>
                        <small class="font-12 text-muted">/month</small>
                    </div>
                   <hr class="hr-dashed">
                    <ul class="list-unstyled pricing-content-2 text-left py-3 border-0 mb-0">
                        <li>30GB Disk Space</li>
                        <li>30 Email Accounts</li>
                        <li>30GB Monthly Bandwidth</li>
                        <li>06 Subdomains</li>
                        <li>10 Domains</li>
                    </ul>

                    <a href="#" class="btn btn-dark py-2 px-5 font-16"><span>Choisir</span></a>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-4">
        <div class="card">
            <div class="card-body">
                <span class="badge bg-pink a-animate-blink mt-0">POPULAIRE</span>
                <div class="pricingTable1 text-center">
                    <h6 class="title1 pt-3 pb-2 m-0">Premium Plan</h6>
                    <p class="text-muted p-3 mb-0">It is a long established fact that a reader will be distracted by the readable.</p>
                    <div class="p-3">
                        <h3 class="amount amount-border d-inline-block">$49.00</h3>
                        <small class="font-12 text-muted">/month</small>
                    </div>
                   <hr class="hr-dashed">
                    <ul class="list-unstyled pricing-content-2 text-left py-3 border-0 mb-0">
                        <li>30GB Disk Space</li>
                        <li>30 Email Accounts</li>
                        <li>30GB Monthly Bandwidth</li>
                        <li>06 Subdomains</li>
                        <li>10 Domains</li>
                    </ul>
                    <a href="#" class="btn btn-dark py-2 px-5 font-16"><span>Choisir</span></a>
                </div><!--end pricingTable-->
            </div><!--end card-body-->
        </div>
    </div>



    <div class="col-lg-4">
        <div class="card">
            <div class="card-body">
                <div class="pricingTable1 text-center">
                    <h6 class="title1 pt-3 pb-2 m-0">Plus Plan</h6>
                    <p class="text-muted p-3 mb-0">It is a long established fact that a reader will be distracted by the readable.</p>
                    <div class="p-3">
                        <h3 class="amount amount-border d-inline-block">$69.00</h3>
                        <small class="font-12 text-muted">/month</small>
                    </div>
                   <hr class="hr-dashed">
                    <ul class="list-unstyled pricing-content-2 text-left py-3 border-0 mb-0">
                        <li>30GB Disk Space</li>
                        <li>30 Email Accounts</li>
                        <li>30GB Monthly Bandwidth</li>
                        <li>06 Subdomains</li>
                        <li>10 Domains</li>
                    </ul>

                    <a href="#" class="btn btn-dark py-2 px-5 font-16"><span>Choisir</span></a>
                </div><!--end pricingTable-->
            </div><!--end card-body-->
        </div> <!--end card-->
    </div>

</div>

@endsection
