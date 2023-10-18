@extends('admin.includes.contents')

@section('content')
<div class="content-body">
            <!-- row -->
			<div class="container-fluid">
                <div class="form-head d-md-flex mb-sm-4 mb-3 align-items-start">
					<div class="me-auto  d-lg-block">
						<h2 class="text-black font-w600">Dashboard</h2>
						<p class="mb-0">Welcome to Omah Property Admin</p>
					</div>
					<a href="{{route('dashboard')}}" class="btn btn-primary rounded light me-3">Refresh</a>
					<a href="javascript:void(0);" class="btn btn-primary rounded"><i class="fas fa-cog me-0"></i></a>
				</div>
				<div class="row">
					<div class="col-xl-6 col-xxl-12">
						<div class="row">
							<div class="col-xl-12">
								<div class="card bg-danger property-bx text-white">
									<div class="card-body">
										<div class="media d-sm-flex d-block align-items-center">
											<span class="me-4 d-block mb-sm-0 mb-3">
												<svg width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M31.8333 79.1667H4.16659C2.33325 79.1667 0.833252 77.6667 0.833252 75.8333V29.8333C0.833252 29 1.16659 28 1.83325 27.5L29.4999 1.66667C30.4999 0.833332 31.8333 0.499999 32.9999 0.999999C34.3333 1.66667 34.9999 2.83333 34.9999 4.16667V76C34.9999 77.6667 33.4999 79.1667 31.8333 79.1667ZM7.33325 72.6667H28.4999V11.6667L7.33325 31.3333V72.6667Z" fill="white"/>
													<path d="M75.8333 79.1667H31.6666C29.8333 79.1667 28.3333 77.6667 28.3333 75.8334V36.6667C28.3333 34.8334 29.8333 33.3334 31.6666 33.3334H75.8333C77.6666 33.3334 79.1666 34.8334 79.1666 36.6667V76C79.1666 77.6667 77.6666 79.1667 75.8333 79.1667ZM34.9999 72.6667H72.6666V39.8334H34.9999V72.6667Z" fill="white"/>
													<path d="M60.1665 79.1667H47.3332C45.4999 79.1667 43.9999 77.6667 43.9999 75.8334V55.5C43.9999 53.6667 45.4999 52.1667 47.3332 52.1667H60.1665C61.9999 52.1667 63.4999 53.6667 63.4999 55.5V75.8334C63.4999 77.6667 61.9999 79.1667 60.1665 79.1667ZM50.6665 72.6667H56.9999V58.8334H50.6665V72.6667Z" fill="white"/>
												</svg>
											</span>
											<div class="media-body mb-sm-0 mb-3 me-5">
												<h4 class="fs-22 text-white">Total Properties</h4>
												<div class="progress mt-3 mb-2" style="height:8px;">
													<div class="progress-bar bg-white progress-animated" style="width: 86%; height:8px;" role="progressbar">
														<span class="sr-only">86% Complete</span>
													</div>
												</div>
												<span class="fs-14">{{$difference}} more to break last month record</span>
											</div>
											<span class="fs-46 font-w500">{{$totalListings}}</span>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-12 col-md-6">
								<div class="card">
									<div class="card-body">
										<div class="media align-items-center">
											<div class="media-body me-3">
												<h2 class="fs-36 text-black font-w600">{{$listingsForSaleCount}}</h2>
												<p class="fs-18 mb-0 text-black font-w500">Properties for Sale</p>
												<span class="fs-13">Target 3k/month</span>
											</div>
											<div class="d-inline-block position-relative donut-chart-sale">
												<span class="donut1" data-peity='{ "fill": ["rgb(60, 76, 184)", "rgba(236, 236, 236, 1)"],   "innerRadius": 38, "radius": 10}'>{{$listingsForSaleCountPercent}}/100</span>
												<small class="text-primary">{{$listingsForSaleCountPercent}}%</small>
												<span class="circle bgl-primary"></span>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-12 col-md-6">
								<div class="card">
									<div class="card-body">
										<div class="media align-items-center">
											<div class="media-body me-3">
												<h2 class="fs-36 text-black font-w600">{{$listingsForRentCount}}</h2>
												<p class="fs-18 mb-0 text-black font-w500">Properties for Rent</p>
												<span class="fs-13">Target 3k/month</span>
											</div>
											<div class="d-inline-block position-relative donut-chart-sale">
												<span class="donut1" data-peity='{ "fill": ["rgb(55, 209, 90)", "rgba(236, 236, 236, 1)"],   "innerRadius": 38, "radius": 10}'>{{$listingsForRentCountPercent}}/100</span>
												<small class="text-success">{{$listingsForRentCountPercent}}%</small>
												<span class="circle bgl-success"></span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-6 col-xxl-12">
						<div class="card">
							<div class="card-header border-0 pb-0">
								<h3 class="fs-20 text-black">Total Revenue</h3>
								<div class="dropdown ms-auto">
									<div class="btn-link" data-bs-toggle="dropdown" >
										<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
									</div>
									<!-- <div class="dropdown-menu dropdown-menu-end" >
										<a class="dropdown-item" href="javascript:void(0);">Edit</a>
										<a class="dropdown-item" href="javascript:void(0);">Delete</a>
									</div> -->
								</div>
							</div>
							<div class="card-body pt-2 pb-4">
								<div class="d-flex flex-wrap align-items-center">
									<span class="fs-36 text-black font-w600 me-3">₦{{ number_format($totalRevenueCurrentMonth, 2) }}</span>
									<p class="me-sm-auto me-3 mb-sm-0 mb-3">last month ₦{{ number_format($totalRevenueLastMonth, 2) }}</p>
									<div class="d-flex align-items-center">
										<svg class="me-3" width="87" height="47" viewBox="0 0 87 47" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M29.8043 20.9254C15.2735 14.3873 5.88029 27.282 3 34.5466V46.2406H85V4.58005C70.8925 -0.868404 70.5398 8.66639 60.8409 19.5633C51.1419 30.4602 47.9677 29.0981 29.8043 20.9254Z" fill="url(#paint0_linear)"/>
											<path d="M3 35.2468C5.88029 27.9822 15.2735 15.0875 29.8043 21.6257C47.9677 29.7984 51.1419 31.1605 60.8409 20.2636C70.5398 9.36665 70.8925 -0.168147 85 5.28031" stroke="#37D159" stroke-width="6"/>
											<defs>
											<linearGradient id="paint0_linear" x1="44" y1="-36.4332" x2="44" y2="45.9686" gradientUnits="userSpaceOnUse">
											<stop stop-color="#37D159" offset="0"/>
											<stop offset="1" stop-color="#37D159" stop-opacity="0"/>
											</linearGradient>
											</defs>
										</svg>
										<span class="fs-22 text-success me-2">{{ number_format($percentageDifference, 2) }}%</span>
										<svg width="12" height="6" viewBox="0 0 12 6" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M0 6L6 2.62268e-07L12 6" fill="#37D159"/>
										</svg>
									</div>
								</div>
								<!-- <div id="chartTimeline"></div> -->
							</div>
						</div>
					</div>
					<div class="col-xl-9 col-xxl-8">
						<div class="row">
							<div class="col-xl-8 col-xxl-12">
								<div class="card">
									<div class="card-header border-0 pb-0">
										<h3 class="fs-20 text-black">Overview</h3>
										<div class="dropdown ms-auto">
											<div class="btn-link" data-bs-toggle="dropdown" >
												<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
											</div>
											<!-- <div class="dropdown-menu dropdown-menu-end" >
												<a class="dropdown-item" href="javascript:void(0);">Edit</a>
												<a class="dropdown-item" href="javascript:void(0);">Delete</a>
											</div> -->
										</div>
									</div>
									<div class="card-body">
										<div class="d-sm-flex flex-wrap  justify-content-around">
											<div class="d-flex mb-4 align-items-center">
												<span class="rounded me-3 bg-primary p-3">
													<svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M10.3458 25.7292H1.35412C0.758283 25.7292 0.270782 25.2417 0.270782 24.6458V9.69583C0.270782 9.42499 0.379116 9.09999 0.595783 8.93749L9.58745 0.541659C9.91245 0.270825 10.3458 0.162492 10.725 0.324992C11.1583 0.541659 11.375 0.920825 11.375 1.35416V24.7C11.375 25.2417 10.8875 25.7292 10.3458 25.7292ZM2.38328 23.6167H9.26245V3.79166L2.38328 10.1833V23.6167Z" fill="white"/>
														<path d="M24.6458 25.7292H10.2916C9.69578 25.7292 9.20828 25.2417 9.20828 24.6458V11.9167C9.20828 11.3208 9.69578 10.8333 10.2916 10.8333H24.6458C25.2416 10.8333 25.7291 11.3208 25.7291 11.9167V24.7C25.7291 25.2417 25.2416 25.7292 24.6458 25.7292ZM11.375 23.6167H23.6166V12.9458H11.375V23.6167Z" fill="white"/>
														<path d="M19.5541 25.7292H15.3833C14.7874 25.7292 14.2999 25.2417 14.2999 24.6458V18.0375C14.2999 17.4417 14.7874 16.9542 15.3833 16.9542H19.5541C20.1499 16.9542 20.6374 17.4417 20.6374 18.0375V24.6458C20.6374 25.2417 20.1499 25.7292 19.5541 25.7292ZM16.4666 23.6167H18.5249V19.1208H16.4666V23.6167Z" fill="white"/>
													</svg>
												</span>
												<div>
													<p class="fs-14 mb-1">Total Sale</p>
													<span class="fs-18 text-black font-w700">{{$listingsForSaleCount}} Unit</span>
												</div>
											</div>
											<div class="d-flex mb-4 align-items-center">
												<span class="rounded me-3 bg-success p-3">
													<svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M10.3458 25.7292H1.35412C0.758283 25.7292 0.270782 25.2417 0.270782 24.6458V9.69583C0.270782 9.42499 0.379116 9.09999 0.595783 8.93749L9.58745 0.541659C9.91245 0.270825 10.3458 0.162492 10.725 0.324992C11.1583 0.541659 11.375 0.920825 11.375 1.35416V24.7C11.375 25.2417 10.8875 25.7292 10.3458 25.7292ZM2.38328 23.6167H9.26245V3.79166L2.38328 10.1833V23.6167Z" fill="white"/>
														<path d="M24.6458 25.7292H10.2916C9.69578 25.7292 9.20828 25.2417 9.20828 24.6458V11.9167C9.20828 11.3208 9.69578 10.8333 10.2916 10.8333H24.6458C25.2416 10.8333 25.7291 11.3208 25.7291 11.9167V24.7C25.7291 25.2417 25.2416 25.7292 24.6458 25.7292ZM11.375 23.6167H23.6166V12.9458H11.375V23.6167Z" fill="white"/>
														<path d="M19.5541 25.7292H15.3833C14.7874 25.7292 14.2999 25.2417 14.2999 24.6458V18.0375C14.2999 17.4417 14.7874 16.9542 15.3833 16.9542H19.5541C20.1499 16.9542 20.6374 17.4417 20.6374 18.0375V24.6458C20.6374 25.2417 20.1499 25.7292 19.5541 25.7292ZM16.4666 23.6167H18.5249V19.1208H16.4666V23.6167Z" fill="white"/>
													</svg>
												</span>
												<div>
													<p class="fs-14 mb-1">Total Rent</p>
													<span class="fs-18 text-black font-w700">{{$listingsForRentCount}} Unit</span>
												</div>
											</div>
										</div>
										<div>
    <canvas id="chartBar"></canvas>
</div>

									</div>
								</div>
							</div>

							<div class="col-xl-12">
								<div class="card">
									<div class="card-header border-0 pb-0">
										<h3 class="fs-20 text-black">Properties Map Location</h3>
										<div class="dropdown ms-auto">
											<div class="btn-link" data-bs-toggle="dropdown" >
												<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
											</div>
											<div class="dropdown-menu dropdown-menu-end" >
												<a class="dropdown-item" href="javascript:void(0);">Edit</a>
												<a class="dropdown-item" href="javascript:void(0);">Delete</a>
											</div>
										</div>
									</div>
									<div class="card-body">
										<div class="row">
											<div class="col-lg-3">
												<p class="mb-2 d-flex align-items-center  fs-16 text-black font-w500">Europe
													<span class="pull-right text-dark fs-14 ms-2">653 Unit</span>
												</p>
												<div class="progress mb-4" style="height:10px">
													<div class="progress-bar bg-primary progress-animated" style="width:75%; height:10px;" role="progressbar">
														<span class="sr-only">75% Complete</span>
													</div>
												</div>
												<p class="mb-2 d-flex align-items-center  fs-16 text-black font-w500">Asia
													<span class="pull-right text-dark fs-14 ms-2">653 Unit</span>
												</p>
												<div class="progress mb-4" style="height:10px">
													<div class="progress-bar bg-primary progress-animated" style="width:100%; height:10px;" role="progressbar">
														<span class="sr-only">100% Complete</span>
													</div>
												</div>
												<p class="mb-2 d-flex align-items-center  fs-16 text-black font-w500">Africa
													<span class="pull-right text-dark fs-14 ms-2">653 Unit</span>
												</p>
												<div class="progress mb-4" style="height:10px">
													<div class="progress-bar bg-primary progress-animated" style="width:75%; height:10px;" role="progressbar">
														<span class="sr-only">75% Complete</span>
													</div>
												</div>
												<p class="mb-2 d-flex align-items-center  fs-16 text-black font-w500">Australia
													<span class="pull-right text-dark fs-14 ms-2">653 Unit</span>
												</p>
												<div class="progress mb-4" style="height:10px">
													<div class="progress-bar bg-primary progress-animated" style="width:50%; height:10px;" role="progressbar">
														<span class="sr-only">50% Complete</span>
													</div>
												</div>
												<p class="mb-2 d-flex align-items-center  fs-16 text-black font-w500">America
													<span class="pull-right text-dark fs-14 ms-2">653 Unit</span>
												</p>
												<div class="progress mb-4" style="height:10px">
													<div class="progress-bar bg-primary progress-animated" style="width:70%; height:10px;" role="progressbar">
														<span class="sr-only">70% Complete</span>
													</div>
												</div>
												<p class="mb-2 d-flex align-items-center  fs-16 text-black font-w500">USA
													<span class="pull-right text-dark fs-14 ms-2">653 Unit</span>
												</p>
												<div class="progress mb-4" style="height:10px">
													<div class="progress-bar bg-primary progress-animated" style="width:40%; height:10px;" role="progressbar">
														<span class="sr-only">40% Complete</span>
													</div>
												</div>
											</div>
											<div class="col-lg-9">
												<div id="world-map"></div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-xxl-4">
						<div class="row">
							<div class="col-xl-12 col-lg-6">
								<div class="card">
									<div class="card-header border-0 pb-0">
										<h3 class="fs-20 text-black">Customer Review</h3>
										<div class="dropdown ms-auto">
											<div class="btn-link" data-bs-toggle="dropdown" >
												<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
											</div>
											<div class="dropdown-menu dropdown-menu-end" >
												<a class="dropdown-item" href="javascript:void(0);">Edit</a>
												<a class="dropdown-item" href="javascript:void(0);">Delete</a>
											</div>
										</div>
									</div>
									<div class="card-body pb-0">
										<div class="pb-3 border-bottom mb-3">
											<div class="d-flex mb-3 flex-wrap align-items-end">
												<img class="rounded me-3" src="images/customers/1.jpg" width="58" alt="">
												<div>
													<h6 class="fs-16 text-black font-w600">John Doe</h6>
													<div class="star-icons">
														<i class="las la-star"></i>
														<i class="las la-star"></i>
														<i class="las la-star"></i>
														<i class="las la-star"></i>
														<i class="las la-star"></i>
													</div>
												</div>
												<span class="fs-14 ms-auto">5m ago</span>
											</div>
											<p class="fs-14 mb-0">Friendly service
											Josh, Lunar and everyone at Just Property in Hastings deserved a big Thank You from us for moving us from Jakarta to Medan during the lockdown.
											</p>
										</div>
										<div class="pb-3 border-bottom mb-3">
											<div class="d-flex mb-3 flex-wrap align-items-end">
												<img class="rounded me-3" src="images/customers/2.jpg" width="58" alt="">
												<div>
													<h6 class="fs-16 text-black font-w600">Amelia Tuner</h6>
													<div class="star-icons">
														<i class="las la-star"></i>
														<i class="las la-star"></i>
														<i class="las la-star"></i>
														<i class="las la-star"></i>
														<i class="las la-star"></i>
													</div>
												</div>
												<span class="fs-14 ms-auto">10h ago</span>
											</div>
											<p class="fs-14 mb-0">I viewed a number of properties with Just Property and found them to be professional, efficient, patient, courteous and helpful every time.
											</p>
										</div>
										<div class="pb-3">
											<div class="d-flex mb-3 flex-wrap align-items-end">
												<img class="rounded me-3" src="images/customers/3.jpg" width="58" alt="">
												<div>
													<h6 class="fs-16 text-black font-w600">Jessica Humb</h6>
													<div class="star-icons">
														<i class="las la-star"></i>
														<i class="las la-star"></i>
														<i class="las la-star"></i>
														<i class="las la-star"></i>
														<i class="las la-star"></i>
													</div>
												</div>
												<span class="fs-14 ms-auto">2d ago</span>
											</div>
											<p class="fs-14 mb-0">Dealing with Syamsudin and Bakri was a joy. I got in touch with Just Property after seeing a couple of properties that caught my eye. Both Syamsudin and Bakri strive to deliver a professional service and surpassed my expectations - they were not only helpful but extremely approachable and not at all bumptious...
											</p>
										</div>
									</div>
									<div class="card-footer border-0 p-0">
										<a href="review.html" class="btn d-block btn-primary rounded">See More Reviews</a>
									</div>
								</div>
							</div>
													</div>
					</div>
				</div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script>
    var ctx = document.getElementById('chartBar').getContext('2d');
    var chart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
            datasets: [{
                label: 'Sold',
                data: {!! json_encode($monthlySoldData->pluck('total_cost')->toArray()) !!},
                backgroundColor: 'rgba(255, 99, 132, 0.9)',
                borderColor: 'rgba(0, 0, 0, 0)',
                borderWidth: 1
            },
            {
                label: 'Rent',
                data: {!! json_encode($monthlyRentData->pluck('total_cost')->toArray()) !!},
                backgroundColor: 'rgba(0, 0, 139, 0.9)',
                borderColor: 'rgba(0, 0, 139, 1)',
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>



@endsection
