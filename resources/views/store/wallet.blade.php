@extends('store.layouts.master')

@section('page_content')

<section class="content-main">
    <div class="content-header">
        <div>
            <h2 class="content-title card-title">wallet</h2>
            
        </div>
        <div>
            <ul class="menu-aside">

            <li class="menu-item has-submenu ">
                    <a class="menu-link btn btn-primary" href="page-orders-1.html"> <i class="fas fa-money-check-alt"></i>
                        <span class="text"> Request Payout </span>
                    </a>
                    <div class="submenu" style="">
                        <a href="page-orders-1.html " > Bank Account </a>
                        <a href="page-orders-2.html " > Paypal </a>
                        <a href="page-orders-detail.html "  > Vodafone cache </a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-4">
            <div class="card card-body mb-4">
                <article class="icontext">
                    <span class="icon icon-sm rounded-circle bg-primary-light"><i class="text-primary material-icons md-monetization_on"></i></span>
                    <div class="text">
                        <h6 class="mb-1 card-title">Current balance</h6>
                        <span>$1,456.5</span>
                        <span class="text-sm">
                            current balance , which could be withdrwalled
                        </span>
                    </div>
                </article>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card card-body mb-4">
                <article class="icontext">
                    <span class="icon icon-sm rounded-circle bg-primary-light"><i class="text-primary material-icons md-monetization_on"></i></span>
                    <div class="text">
                        <h6 class="mb-1 card-title">Total profit</h6>
                        <span>$13,456.5</span>
                        <span class="text-sm">
                            total income from the site
                        </span>
                    </div>
                </article>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-body mb-4">
                <article class="icontext">
                    <span class="icon icon-sm rounded-circle bg-primary-light"><i class="text-primary material-icons md-monetization_on"></i></span>
                    <div class="text">
                        <h6 class="mb-1 card-title">Pindding profilt</h6>
                        <span>$456.5</span>
                        <span class="text-sm">
                            the pidding profit balance
                        </span>
                    </div>
                </article>
            </div>
        </div>
    </div>

    
</section> 
@endsection