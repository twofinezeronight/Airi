<x-guest-layout>
	<!-- CONTENT WRAPPER -->
	<div class="ec-content-wrapper">
		<div class="content">
			<!-- Top Statistics -->
			<div class="row">
				<div class="col-xl-3 col-sm-6 p-b-15 lbl-card">
					<div class="card card-mini dash-card card-1">
						<div class="card-body">
							<h2 class="mb-1">1,503</h2>
							<p>Daily Signups</p>
							<span class="mdi mdi-account-arrow-left"></span>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-sm-6 p-b-15 lbl-card">
					<div class="card card-mini dash-card card-2">
						<div class="card-body">
							<h2 class="mb-1">79,503</h2>
							<p>Daily Visitors</p>
							<span class="mdi mdi-account-clock"></span>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-sm-6 p-b-15 lbl-card">
					<div class="card card-mini dash-card card-3">
						<div class="card-body">
							<h2 class="mb-1">15,503</h2>
							<p>Daily Order</p>
							<span class="mdi mdi-package-variant"></span>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-sm-6 p-b-15 lbl-card">
					<div class="card card-mini dash-card card-4">
						<div class="card-body">
							<h2 class="mb-1">$98,503</h2>
							<p>Daily Revenue</p>
							<span class="mdi mdi-currency-usd"></span>
						</div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-xl-8 col-md-12 p-b-15">
					<!-- Sales Graph -->
					<div id="user-acquisition" class="card card-default">
						<div class="card-header">
							<h2>Sales Report</h2>
						</div>
						<div class="card-body">
							<div class="tab-content pt-4" id="salesReport">
								<div class="tab-pane fade show active" id="source-medium" role="tabpanel">
									<div class="mb-6" style="max-height:247px">
										<canvas id="linechart"></canvas>
										<div id="acqLegend" class="customLegend mb-2"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-xl-4 col-md-12 p-b-15">
					<!-- Doughnut Chart -->
					<div class="card card-default">
						<div class="card-header justify-content-center">
							<h2>Orders Overview</h2>
						</div>
						<div class="card-body">
							<canvas id="polar"></canvas>
						</div>
						<a href="#" class="pb-5 d-block text-center text-muted"><i class="mdi mdi-download mr-2"></i> Download overall report</a>

					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-xl-8 col-md-12 p-b-15">
					<!-- User activity statistics -->
					<div class="card card-default" id="user-activity">
						<div class="no-gutters">
							<div>
								<div class="card-header justify-content-between">
									<h2>User Activity</h2>
									<div class="date-range-report ">
										<span></span>
									</div>
								</div>
								<div class="card-body">
									<div class="tab-content" id="userActivityContent">
										<div class="tab-pane fade show active" id="user" role="tabpanel">
											<canvas id="activity" class="chartjs"></canvas>
										</div>
									</div>
								</div>
								<div class="card-footer d-flex flex-wrap bg-white border-top">
									<a href="#" class="text-uppercase py-3">In-Detail Overview</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-md-12 p-b-15">
					<div class="card card-default">
						<div class="card-header flex-column align-items-start">
							<h2>Current Users</h2>
						</div>
						<div class="card-body">
							<canvas id="currentUser" class="chartjs"></canvas>
						</div>
						<div class="card-footer d-flex flex-wrap bg-white border-top">
							<a href="#" class="text-uppercase py-3">In-Detail Overview</a>
						</div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-12 p-b-15">
					<!-- Recent Order Table -->
					<div class="card card-table-border-none card-default recent-orders" id="recent-orders">
						<div class="card-header justify-content-between">
							<h2>Recent Orders</h2>
							<div class="date-range-report">
								<span></span>
							</div>
						</div>
						<div class="card-body pt-0 pb-5">
							<table class="table card-table table-responsive table-responsive-large" style="width:100%">
								<thead>
									<tr>
										<th>Order ID</th>
										<th>Photo</th>
										<th>Product Name</th>
										<th class="d-none d-lg-table-cell">Units</th>
										<th class="d-none d-lg-table-cell">Order Date</th>
										<th class="d-none d-lg-table-cell">Order Cost</th>
										<th>Status</th>
										<th></th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>24541</td>
										<td>
											<a class="text-dark" href="#"><img class="vendor-thumb" src="{{asset('layout_admin/assets/img/products/pro-1.png')}}" alt="user profile" style="    width: 45px;
														height: 45px;"></a>
										</td>
										<td>
											<a class="text-dark" href="#">Dinning table with chair</a>
										</td>
										<td class="d-none d-lg-table-cell">1 Unit</td>
										<td class="d-none d-lg-table-cell">Oct 20, 2018</td>
										<td class="d-none d-lg-table-cell">$230</td>
										<td>
											<span class="badge badge-success">Completed</span>
										</td>
										<td class="text-right">
											<div class="dropdown show d-inline-block widget-dropdown">
												<a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdown-recent-order1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static"></a>
												<ul class="dropdown-menu dropdown-menu-right">
													<li class="dropdown-item">
														<a href="#">View</a>
													</li>
													<li class="dropdown-item">
														<a href="#">Remove</a>
													</li>
												</ul>
											</div>
										</td>
									</tr>
									<tr>
										<td>24541</td>
										<td>
											<a class="text-dark" href="#"><img class="vendor-thumb" src="{{asset('layout_admin/assets/img/products/pro-2.png')}}" alt="user profile" style="    width: 45px;
														height: 45px;"></a>
										</td>
										<td>
											<a class="text-dark" href="#">Corporate office chair</a>
										</td>
										<td class="d-none d-lg-table-cell">2 Units</td>
										<td class="d-none d-lg-table-cell">Nov 15, 2018</td>
										<td class="d-none d-lg-table-cell">$550</td>
										<td>
											<span class="badge badge-primary">Delayed</span>
										</td>
										<td class="text-right">
											<div class="dropdown show d-inline-block widget-dropdown">
												<a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdown-recent-order2" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static"></a>
												<ul class="dropdown-menu dropdown-menu-right">
													<li class="dropdown-item">
														<a href="#">View</a>
													</li>
													<li class="dropdown-item">
														<a href="#">Remove</a>
													</li>
												</ul>
											</div>
										</td>
									</tr>
									<tr>
										<td>24541</td>
										<td>
											<a class="text-dark" href="#"><img class="vendor-thumb" src="{{asset('layout_admin/assets/img/products/pro-3.png')}}" alt="user profile" style="    width: 45px;
														height: 45px;"></a>
										</td>
										<td>
											<a class="text-dark" href="#">5 Set comfortable sofa</a>
										</td>
										<td class="d-none d-lg-table-cell">1 Unit</td>
										<td class="d-none d-lg-table-cell">Nov 18, 2018</td>
										<td class="d-none d-lg-table-cell">$325</td>
										<td>
											<span class="badge badge-warning">On Hold</span>
										</td>
										<td class="text-right">
											<div class="dropdown show d-inline-block widget-dropdown">
												<a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdown-recent-order3" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static"></a>
												<ul class="dropdown-menu dropdown-menu-right">
													<li class="dropdown-item">
														<a href="#">View</a>
													</li>
													<li class="dropdown-item">
														<a href="#">Remove</a>
													</li>
												</ul>
											</div>
										</td>
									</tr>
									<tr>
										<td>24541</td>
										<td>
											<a class="text-dark" href="#"><img class="vendor-thumb" src="{{asset('layout_admin/assets/img/products/pro-4.png')}}" alt="user profile" style="    width: 45px;
														height: 45px;"></a>
										</td>
										<td>
											<a class="text-dark" href="#">Full divan set red</a>
										</td>
										<td class="d-none d-lg-table-cell">5 Units</td>
										<td class="d-none d-lg-table-cell">Dec 13, 2018</td>
										<td class="d-none d-lg-table-cell">$200</td>
										<td>
											<span class="badge badge-success">Completed</span>
										</td>
										<td class="text-right">
											<div class="dropdown show d-inline-block widget-dropdown">
												<a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdown-recent-order4" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static"></a>
												<ul class="dropdown-menu dropdown-menu-right">
													<li class="dropdown-item">
														<a href="#">View</a>
													</li>
													<li class="dropdown-item">
														<a href="#">Remove</a>
													</li>
												</ul>
											</div>
										</td>
									</tr>
									<tr>
										<td>24541</td>
										<td>
											<a class="text-dark" href="#"><img class="vendor-thumb" src="{{asset('layout_admin/assets/img/products/pro-5.png')}}" alt="user profile" style="    width: 45px;
														height: 45px;"></a>
										</td>
										<td>
											<a class="text-dark" href="#"> Single chair</a>
										</td>
										<td class="d-none d-lg-table-cell">1 Unit</td>
										<td class="d-none d-lg-table-cell">Dec 23, 2018</td>
										<td class="d-none d-lg-table-cell">$150</td>
										<td>
											<span class="badge badge-danger">Cancelled</span>
										</td>
										<td class="text-right">
											<div class="dropdown show d-inline-block widget-dropdown">
												<a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdown-recent-order5" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static"></a>
												<ul class="dropdown-menu dropdown-menu-right">
													<li class="dropdown-item">
														<a href="#">View</a>
													</li>
													<li class="dropdown-item">
														<a href="#">Remove</a>
													</li>
												</ul>
											</div>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>

		</div> <!-- End Content -->
	</div> <!-- End Content Wrapper -->
</x-guest-layout>