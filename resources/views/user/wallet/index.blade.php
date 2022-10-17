@extends('layouts.user.app')

@section('content')
<!--**********************************
            Content body start
        ***********************************-->
<style>
	#example2_filter {
		display: none !important;
	}
</style>
<div class="content-body" style="min-height: 796px;">
	<div class="container-fluid">
		<div class="form-head mb-sm-5 mb-3 d-flex align-items-center flex-wrap">
			<h2 class="font-w600 mb-0 mr-auto mb-2 text-black">My Wallet</h2>
			<a href="/withdraw" class="btn btn-secondary mb-2">+ Withdraw</a>
		</div>
		<div class="row">
			<div class="col-xl-12 col-xxl-12">
				<div class="swiper-box">
					<div class="swiper-container card-swiper swiper-container-initialized swiper-container-vertical swiper-container-pointer-events swiper-container-free-mode">
						<div class="swiper-wrapper" style="transform: translate3d(0px, 0px, 0px);" id="swiper-wrapper-0a7812a3110a99a5d" aria-live="polite">
							<div class="row">
								<div class="col-md-6 col-sm-6 col-xs-12">
									<div class="swiper-slide" role="group" aria-label="3 / 8">
										<div class="card-bx stacked card">
											<img src="images/card/card3.jpg" alt="">
											<div class="card-info">
												<p class="mb-1 text-white fs-14">Total Rewards</p>
												<div class="d-flex justify-content-between">
													<h5 class="num-text text-white mb-5 font-w200">Total - ${{ all_wallet_commision()->wallet_balance }}</h5></br>
													
													<svg width="55" height="34" viewBox="0 0 55 34" fill="none" xmlns="http://www.w3.org/2000/svg">
														<circle cx="38.0091" cy="16.7788" r="16.7788" fill="white" fill-opacity="0.67"></circle>
														<circle cx="17.4636" cy="16.7788" r="16.7788" fill="white" fill-opacity="0.67"></circle>
													</svg>
												</div>
												<div class="d-flex justify-content-between">
													@if (left_right_side_direct(Auth::user()->uid) == 0)
													<h5 class="num-text text-white mb-5 font-w200">Available - ${{ all_wallet_commision()->available_balance - all_wallet_commision()->binary_balance }}<span class="h4 text-red"> (Hold)</span> </h5>
													@else
													<h5 class="num-text text-white mb-5 font-w200">Available - ${{ all_wallet_commision()->available_balance }}</h5>
													@endif
														
												</div>
												
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-6 col-sm-6 col-xs-12">
									<div class="swiper-slide swiper-slide-active" role="group" aria-label="1 / 8">
										<div class="card-bx stacked card">
											<img src="images/card/card1.jpg" alt="">
											<div class="card-info">
												<p class="mb-1 text-white fs-14">Daily Rewards</p>
												<div class="d-flex justify-content-between">
													
													<h2 class="num-text text-white mb-5 font-w600">${{ package_log_sum() }}</h2>
													
													
													
													<svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M19.2744 18.8013H16.0334V23.616H19.2744C19.9286 23.616 20.5354 23.3506 20.9613 22.9053C21.4066 22.4784 21.672 21.8726 21.672 21.1989C21.673 19.8813 20.592 18.8013 19.2744 18.8013Z" fill="white"></path>
														<path d="M18 0C8.07429 0 0 8.07429 0 18C0 27.9257 8.07429 36 18 36C27.9257 36 36 27.9247 36 18C36 8.07531 27.9247 0 18 0ZM21.6627 26.3355H19.5398V29.6722H17.3129V26.3355H16.0899V29.6722H13.8528V26.3355H9.91954V24.2414H12.0898V11.6928H9.91954V9.59863H13.8528V6.3288H16.0899V9.59863H17.3129V6.3288H19.5398V9.59863H21.4735C22.5535 9.59863 23.5491 10.044 24.2599 10.7547C24.9706 11.4655 25.416 12.4611 25.416 13.5411C25.416 15.6549 23.7477 17.3798 21.6627 17.4744C24.1077 17.4744 26.0794 19.4647 26.0794 21.9096C26.0794 24.3453 24.1087 26.3355 21.6627 26.3355Z" fill="white"></path>
														<path d="M20.7062 15.8441C21.095 15.4553 21.3316 14.9338 21.3316 14.3465C21.3316 13.1812 20.3842 12.2328 19.2178 12.2328H16.0334V16.4695H19.2178C19.7959 16.4695 20.3266 16.2226 20.7062 15.8441Z" fill="white"></path>
													</svg>
												</div>

											</div>
										</div>
									</div>
								</div>
								<div class="col-md-6 col-sm-6 col-xs-12">
									<div class="swiper-slide" role="group" aria-label="3 / 8">
										<div class="card-bx stacked card">
											<img src="images/card/card3.jpg" alt="">
											<div class="card-info">
												<p class="mb-1 text-white fs-14">Referrel Rewards</p>
												<div class="d-flex justify-content-between">
													<h2 class="num-text text-white mb-5 font-w600">${{ direct_log_sum()}}</h2>
													<svg width="55" height="34" viewBox="0 0 55 34" fill="none" xmlns="http://www.w3.org/2000/svg">
														<circle cx="38.0091" cy="16.7788" r="16.7788" fill="white" fill-opacity="0.67"></circle>
														<circle cx="17.4636" cy="16.7788" r="16.7788" fill="white" fill-opacity="0.67"></circle>
													</svg>
												</div>

											</div>
										</div>
									</div>
								</div>
								<div class="col-md-6 col-sm-6 col-xs-12">
									<div class="swiper-slide" role="group" aria-label="4 / 8">
										<div class="card-bx stacked card">
											<img src="images/card/card4.jpg" alt="">
											<div class="card-info">
												<p class="mb-1 text-white fs-14">Business Volume Rewards</p>
												<div class="d-flex justify-content-between">
												
													<h2 class="num-text text-white mb-5 font-w600">${{ binary_log_sum() }} </h2>
													
													
													
													<svg width="55" height="34" viewBox="0 0 55 34" fill="none" xmlns="http://www.w3.org/2000/svg">
														<circle cx="38.0091" cy="16.7788" r="16.7788" fill="white" fill-opacity="0.67"></circle>
														<circle cx="17.4636" cy="16.7788" r="16.7788" fill="white" fill-opacity="0.67"></circle>
													</svg>
												</div>

											</div>
										</div>
									</div>
								</div>
								<div class="col-md-6 col-sm-6 col-xs-12">
									<div class="swiper-slide" role="group" aria-label="4 / 8">
										<div class="card-bx stacked card">
											<img src="images/card/card2.jpg" alt="">
											<div class="card-info">
												<p class="mb-1 text-white fs-14">Holding Balance</p>
												<div class="d-flex justify-content-between">
												
													<h2 class="num-text text-white mb-5 font-w600">${{ holding_log_sum() }} </h2>
													
													
													
													<svg width="55" height="34" viewBox="0 0 55 34" fill="none" xmlns="http://www.w3.org/2000/svg">
														<circle cx="38.0091" cy="16.7788" r="16.7788" fill="white" fill-opacity="0.67"></circle>
														<circle cx="17.4636" cy="16.7788" r="16.7788" fill="white" fill-opacity="0.67"></circle>
													</svg>
												</div>

											</div>
										</div>
									</div>
								</div>
							</div>


						</div>
						<!-- Add Scroll Bar -->

						<span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
					</div>
				</div>
			</div>






		</div>
		<div class="col-xl-12">
			<div class="card">
				<div class="card-body">
					<div class="row align-items-end">
						<div class="col-xl-12 col-lg-12 col-xxl-12">
							<div class="card">
								<div class="card-header">
									<h4 class="card-title">Transection History</h4>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table id="example2" class="display table table-bordered" style="width:100%">
											<thead>
												<tr>
													<th>Amount</th>
													<th>P2P/Crypto/Buy Package</th>
													<th>Currency Type</th>
													<th>Network</th>
													<th>Wallet Address</th>
													<th>Status</th>
													<th>Update Date</th>
												</tr>
											</thead>
											<tbody>
												@php
												$data = transection();
												@endphp
												@if ($data == NULL)

												@else
												@foreach ($data as $package)
												<tr>
													<td>${{ $package->amount}}</td>												
													<td>{{ $package->p2p_id  }} </td>
													<td>{{ $package->currency_type  }} </td>
													<td>{{ $package->network  }} </td>
													<td>{{ $package->wallet_address  }} </td>
													@if ($package->status == 0)
													<td>{{ 'Pending'  }} </td>
													@elseif ($package->status == 1)
													<td>{{ 'Approve'  }} </td>
													@else
													<td>{{ 'Reject'  }} </td>
													@endif


													<td>{{ $package->updated_at  }} </td>
												</tr>
												@endforeach
												@endif

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
				</div>
			</div>
		</div>
		

	</div>
</div>


<!--**********************************
            Content body end
        ***********************************-->
@endsection