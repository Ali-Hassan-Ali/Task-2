@extends('dashboard.layouts.master')

@section('page_content')

<section class="content-main">
    <div class="content-header">
        <h2 class="content-title">sellers show</h2>
    </div>

	<div class="col-lg-12">
        <div class="card mb-4">
            <article class="card-body">
                <ul class="verti-timeline list-unstyled font-sm" style="font-size: 20px;">
                    <li class="event-list col-12">
                        <div class="event-timeline-dot">
                            <i class="material-icons md-play_circle_outline font-xxl"></i>
                        </div>
                        <div class="media col-12">
                            <div class="me-3 col-6">
                                <h6>
                                    <span style="font-size: 20px;">user name</span>
                                </h6>
                            </div>
                            <div class="media-body col-6">
                                 {{ $seller->name }}
                            </div>
                        </div>
                    </li>
                    <hr>
                    <li class="event-list col-12">
                        <div class="event-timeline-dot">
                            <i class="material-icons md-play_circle_outline font-xxl"></i>
                        </div>
                        <div class="media col-12">
                            <div class="me-3 col-6">
                                <h6>
                                    <span style="font-size: 20px;">email</span>
                                </h6>
                            </div>
                            <div class="media-body col-6">
                                 {{ $seller->email }}
                            </div>
                        </div>
                    </li>
                    <hr>
                    <li class="event-list col-12">
                        <div class="event-timeline-dot">
                            <i class="material-icons md-play_circle_outline font-xxl"></i>
                        </div>
                        <div class="media col-12">
                            <div class="me-3 col-6">
                                <h6>
                                    <span style="font-size: 20px;">phone</span>
                                </h6>
                            </div>
                            <div class="media-body col-6">
                                 {{ $seller->phone }}
                            </div>
                        </div>
                    </li>
                    <hr>
                    <li class="event-list col-12">
                        <div class="event-timeline-dot">
                            <i class="material-icons md-play_circle_outline font-xxl"></i>
                        </div>
                        <div class="media col-12">
                            <div class="me-3 col-6">
                                <h6>
                                    <span style="font-size: 20px;">country</span>
                                </h6>
                            </div>
                            <div class="media-body col-6">
                                 {{ $seller->country }}
                            </div>
                        </div>
                    </li>
                    <hr>
                    <li class="event-list col-12">
                        <div class="event-timeline-dot">
                            <i class="material-icons md-play_circle_outline font-xxl"></i>
                        </div>
                        <div class="media col-12">
                            <div class="me-3 col-6">
                                <h6>
                                	<span style="font-size: 20px;">Have you worked in the Print On Demand business before ?</span>
                                </h6>
                            </div>
                            <div class="media-body col-6">
                                   {{ $seller->printing_field == 0 ? 'no' : 'yes'}}
                            </div>
                        </div>
                    </li>
                    <hr>
	                <li class="event-list col-12">
                        <div class="event-timeline-dot">
                            <i class="material-icons md-play_circle_outline font-xxl"></i>
                        </div>
                        <div class="media col-12">
                            <div class="me-3 col-6">
                                <h6>
                                	<span style="font-size: 20px;">I have a store on</span>
                                </h6>
                            </div>
                            <div class="media-body col-6">
                                {{ $seller->redbubble   == '0'  ? '' : $seller->redbubble }} 
                                {{ $seller->merch_by_amazon == '0'  ? '' : $seller->merch_by_amazon . '|' }}
                                {{ $seller->etsy        == '0'  ? '' : $seller->etsy . '|' }}
                                {{ $seller->teespring   == '0'  ? '' : $seller->teespring . '|' }} 
                                {{ $seller->spreadshirt == '0'  ? '' : $seller->spreadshirt . '|' }}
                                {{ $seller->zazzle      == '0'  ? '' : $seller->zazzle . '|'}}
                                {{ $seller->teepublic   == '0'  ? '' : $seller->teepublic . '|'}} 
                                {{ $seller->others      == '0'  ? '' : $seller->others . '|' }} 
                            </div>
                        </div>
                    </li>
                    <hr>
	                <li class="event-list col-12">
                        <div class="event-timeline-dot">
                            <i class="material-icons md-play_circle_outline font-xxl"></i>
                        </div>
                        <div class="media col-12">
                            <div class="me-3 col-6">
                                <h6>
                                	<span style="font-size: 20px;">To work online, I use .. ?</span>
                                </h6>
                            </div>
                            <div class="media-body col-6">
                                {{ $seller->work_online_lap == '0'  ? '' : $seller->work_online_lap}} <br>
                                {{ $seller->work_online_mobile == '0'  ? '' : $seller->work_online_mobile}} <br>
                            </div>
                        </div>
                    </li>
                    <hr>
                    <li class="event-list col-12">
                        <div class="event-timeline-dot">
                            <i class="material-icons md-play_circle_outline font-xxl"></i>
                        </div>
                        <div class="media col-12">
                            <div class="me-3 col-6">
                                <h6>
                                	<span style="font-size: 20px;">I usually get traffic ?</span>
                                </h6>
                            </div>
                            <div class="media-body col-6">
                                {{ $seller->make_designs_from_social == '0'  ? '' : $seller->make_designs_from_social}} <br>
                                {{ $seller->make_designs_from_paid_ad == '0'  ? '' : $seller->make_designs_from_paid_ad}} <br>
                                {{ $seller->make_designs_from_organically == '0'  ? '' : $seller->make_designs_from_organically}} <br>
                            </div>
                        </div>
                    </li>
                    <hr>
                    <li class="event-list col-12">
                        <div class="event-timeline-dot">
                            <i class="material-icons md-play_circle_outline font-xxl"></i>
                        </div>
                        <div class="media col-12">
                            <div class="me-3 col-6">
                                <h6>
                                	<span style="font-size: 20px;">Please add your stores’ links</span>
                                </h6>
                            </div>
                            <div class="media-body col-6">
                                 {{ $seller->stores_links }}
                            </div>
                        </div>
                    </li>
                    <hr>

					<li class="event-list col-12">
                        <div class="event-timeline-dot">
                            <i class="material-icons md-play_circle_outline font-xxl"></i>
                        </div>
                        <div class="media col-12">
                            <div class="me-3 col-6">
                                <h6>
                                	<span style="font-size: 20px;">Tell us more about yourself</span>
                                </h6>
                            </div>
                            <div class="media-body col-6">
                                 {{ $seller->about_yourself }}
                            </div>
                        </div>
                    </li>
                </ul>
                @if ($seller->status == 'false')

                    <form action="{{ route('status.sellering') }}" method="POST"> 
                        @csrf

                        <input type="text" name="status" value="true" hidden>
                        <input type="number" name="id" value="{{ $seller->id }}" hidden>
                        <button type="submit" class="btn btn-primary col-12 my-5">
                            <i class="fas fa-toggle-on"></i>
                            active
                        </button>
                        
                    </form>
                    
                @else

                    <form action="{{ route('status.sellering') }}" method="POST"> 
                        @csrf

                        <input type="text" name="status" value="false" hidden>
                        <input type="number" name="id" value="{{ $seller->id }}" hidden>
                        <button type="submit" class="btn btn-danger col-12 my-5">
                            <i class="fas fa-toggle-off"></i>
                            inactive
                        </button>
                        
                    </form>

                @endif

				<div class="my-4">
				    <label class="form-label ml-5">Description</label>
				    <textarea placeholder="Type here" class="form-control" style="margin-top: 0px; margin-bottom: 0px; height: 100px;"></textarea>
				    <button type="submit" class="btn btn-primary col-12 my-2">Submit</button>
				</div>
            </article>
        </div>
    </div>
</section>

@endsection

@section('scripts')


@endsection