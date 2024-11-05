<?php include 'layouts/session.php'; ?>
<!DOCTYPE html>
<html lang="en">
    <head>
	<?php include 'layouts/title-meta.php'; ?>
    <?php include 'layouts/head-css.php'; ?>		
    </head>
	<body>
		
		<div id="global-loader" >
			<div class="whirly-loader"> </div>
		</div>
	
		 
		<!-- Main Wrapper -->
        <div class="main-wrapper">
			
		<?php include 'layouts/menu.php'; ?>

			<div class="page-wrapper">
				<div class="content">
					<div class="page-header justify-content-between">
						<div class="page-title">
							<h4>Tax Reports</h4>
							<h6>Manage your Tax Reports</h6>
						</div>
						<ul class="table-top-head">
							<li>
								<a data-bs-toggle="tooltip" data-bs-placement="top" title="Pdf"><img src="assets/img/icons/pdf.svg" alt="img"></a>
							</li>
							<li>
								<a data-bs-toggle="tooltip" data-bs-placement="top" title="Excel"><img src="assets/img/icons/excel.svg" alt="img"></a>
							</li>
							<li>
								<a data-bs-toggle="tooltip" data-bs-placement="top" title="Print"><i data-feather="printer" class="feather-rotate-ccw"></i></a>
							</li>
							<li>
								<a data-bs-toggle="tooltip" data-bs-placement="top" title="Refresh"><i data-feather="rotate-ccw" class="feather-rotate-ccw"></i></a>
							</li>
							<li>
								<a data-bs-toggle="tooltip" data-bs-placement="top" title="Collapse" id="collapse-header"><i data-feather="chevron-up" class="feather-chevron-up"></i></a>
							</li>
						</ul>
					</div>
					

					<!-- /product list -->
					<div class="card table-list-card">
						<div class="card-body">
							<div class="tabs-set">
								<ul class="nav nav-tabs" id="myTab" role="tablist">
									<li class="nav-item" role="presentation">
									  <button class="nav-link active" id="purchase-tab" data-bs-toggle="tab" data-bs-target="#purchase2" type="button" role="tab" aria-controls="purchase2" aria-selected="true">Purchase Tax Report</button>
									</li>
									<li class="nav-item" role="presentation">
									  <button class="nav-link" id="sales-tab" data-bs-toggle="tab" data-bs-target="#sales2" type="button" role="tab" aria-controls="sales2" aria-selected="false">Sales Tax Report</button>
									</li>
								</ul>
								  <div class="tab-content" id="myTabContent">
									<div class="tab-pane fade show active" id="purchase2" role="tabpanel" aria-labelledby="purchase-tab">
										<div class="table-top">
											<div class="search-set">
												<div class="search-input">
													<a href="" class="btn btn-searchset"><i data-feather="search" class="feather-search"></i></a>
												</div>
											</div>
											<div class="search-path">
												<div class="d-flex align-items-center">
													<a class="btn btn-filter" id="filter_search">
														<i data-feather="filter" class="filter-icon"></i>
														<span><img src="assets/img/icons/closes.svg" alt="img"></span>
													</a>
													<a href="" class="me-3 layout-box"><i data-feather="layout" class="feather-search"></i></a>
												</div>
												
											</div>
											<div class="form-sort">
												<i data-feather="sliders" class="info-img"></i>
												<select class="select">
													<option>Sort by Date</option>
													<option>Newest</option>
													<option>Oldest</option>
												</select>
											</div>
										</div>
										<!-- /Filter -->
										<div class="card" id="filter_inputs">
											<div class="card-body pb-0">
												<div class="row">
													<div class="col-lg-2 col-sm-6 col-12">
														<div class="input-blocks">
															<i data-feather="zap" class="info-img"></i>
															<select class="select">
																<option>Choose Category</option>
																<option>Computers</option>
															</select>
														</div>
													</div>
													<div class="col-lg-2 col-sm-6 col-12">
														<div class="input-blocks">
															<i data-feather="credit-card" class="info-img"></i>
															<select class="select">
																<option>Payment Method</option>
																<option>Complete</option>
																<option>Inprogress</option>
															</select>
														</div>
													</div>
													<div class="col-lg-3 col-sm-6 col-12">
														<div class="input-blocks">
															<div class="position-relative daterange-wraper">
																<input type="text" class="form-control" name="datetimes" placeholder="From Date - To Date" >
																<i data-feather="calendar" class="feather-14 info-img"></i>
															</div>
														</div>
													</div>
													<div class="col-lg-3 col-sm-6 col-12 ms-auto">
														<div class="input-blocks">
															<a class="btn btn-filters ms-auto"> <i data-feather="search" class="feather-search"></i> Search </a>
														</div>
													</div>
												</div>
											</div>
										</div>
										<!-- /Filter -->
										<div class="table-responsive">
											<table class="table datanew">
												<thead>
													<tr>
														<th>
															<label class="checkboxs">
																<input type="checkbox">
																<span class="checkmarks"></span>
															</label>
														</th>
														<th>Supplier</th>
														<th>Date</th>
														<th>Ref No</th>
														<th>Total Amount</th>
														<th>Payment Method</th>
														<th>Discount</th>
														<th>Tax Amount</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>
															<label class="checkboxs">
																<input type="checkbox">
																<span class="checkmarks"></span>
															</label>
														</td>
														<td>PMFTC Inc.</td>
														<td>12 Oct 2024</td>
														<td class="ref-number">#4237300</td>
														<td>₱0.00</td>
														<td class="payment-info">
															<a href="javascript:void(0);"> <img src="assets/img/icons/cash.svg" alt="Pay"> </a>
														</td>
														<td>0</td>
														<td>₱0.00</td>
													</tr>
													<tr>
														<td>
															<label class="checkboxs">
																<input type="checkbox">
																<span class="checkmarks"></span>
															</label>
														</td>
														<td>Unilever</td>
														<td>12 Oct 2024</td>
														<td class="ref-number">#5628954</td>
														<td>₱0.00</td>
														<td class="payment-info">
															<a href="javascript:void(0);"> <img src="assets/img/icons/gcash.png" alt="Pay"> </a>
														</td>
														<td>0</td>
														<td>₱0.00</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
									<div class="tab-pane fade" id="sales2" role="tabpanel" aria-labelledby="sales-tab">
										<div class="table-top">
											<div class="search-set">
												<div class="search-input">
													<a href="" class="btn btn-searchset"><i data-feather="search" class="feather-search"></i></a>
												</div>
											</div>
											<div class="search-path">
												<a class="btn btn-filter" id="filter_search2">
													<i data-feather="filter" class="filter-icon"></i>
													<span><img src="assets/img/icons/closes.svg" alt="img"></span>
												</a>
											</div>
											<div class="form-sort">
												<i data-feather="sliders" class="info-img"></i>
												<select class="select">
													<option>Sort by Date</option>
													<option>Newest</option>
													<option>Oldest</option>
												</select>
											</div>
										</div>
										<!-- /Filter -->
										<div class="card" id="filter_inputs2">
											<div class="card-body pb-0">
												<div class="row">
													<div class="col-lg-2 col-sm-6 col-12">
														<div class="input-blocks">
															<i data-feather="zap" class="info-img"></i>
															<select class="select">
																<option>Choose Category</option>
																<option>Computers</option>
															</select>
														</div>
													</div>
													<div class="col-lg-2 col-sm-6 col-12">
														<div class="input-blocks">
															<i data-feather="credit-card" class="info-img"></i>
															<select class="select">
																<option>Payment Method</option>
																<option>Complete</option>
																<option>Inprogress</option>
															</select>
														</div>
													</div>
													<div class="col-lg-3 col-sm-6 col-12">
														<div class="input-blocks">
															<i data-feather="calendar" class="info-img"></i>
															<div class="input-groupicon">
																<input type="text" class="datetimepicker" placeholder="From Date - To Date" >
															</div>
														</div>
													</div>
													<div class="col-lg-3 col-sm-6 col-12 ms-auto">
														<div class="input-blocks">
															<a class="btn btn-filters ms-auto"> <i data-feather="search" class="feather-search"></i> Search </a>
														</div>
													</div>
												</div>
											</div>
										</div>
										<!-- /Filter -->
										<div class="table-responsive">
											<table class="table datanew">
												<thead>
													<tr>
														<th>
															<label class="checkboxs">
																<input type="checkbox">
																<span class="checkmarks"></span>
															</label>
														</th>
														<th>Customer</th>
														<th>Date</th>
														<th>Invoice Number</th>
														<th>Total Amount</th>
														<th>Payment Method</th>
														<th>Discount</th>
														<th>Tax Amount</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>
															<label class="checkboxs">
																<input type="checkbox">
																<span class="checkmarks"></span>
															</label>
														</td>
														<td class="userimgname">
															<a href="javascript:void(0);" class="product-img">
																<img src="assets/img/users/user-01.jpg" alt="product">
															</a>
															<a href="javascript:void(0);">Pedro Santos</a>
														</td>
														<td>12 Oct 2024</td>
														<td class="ref-number">INV4237300</td>
														<td>₱0</td>
														<td class="payment-info">
															<a href="javascript:void(0);"> <img src="assets/img/icons/cash.svg" alt="Pay"> </a>
														</td>
														<td>0</td>
														<td>₱0.00</td>
													</tr>
													<tr>
														<td>
															<label class="checkboxs">
																<input type="checkbox">
																<span class="checkmarks"></span>
															</label>
														</td>
														<td class="userimgname">
															<a href="javascript:void(0);" class="product-img">
																<img src="assets/img/users/user-02.jpg" alt="product">
															</a>
															<a href="javascript:void(0);">Maria Dela Cruz</a>
														</td>
														<td>12 Oct 2024</td>
														<td class="ref-number">INV5385083</td>
														<td>₱0</td>
														<td class="payment-info">
															<a href="javascript:void(0);"> <img src="assets/img/icons/cash.svg" alt="Pay"> </a>
														</td>
														<td>0</td>
														<td>₱0.00</td>
													</tr>
													<tr>
														<td>
															<label class="checkboxs">
																<input type="checkbox">
																<span class="checkmarks"></span>
															</label>
														</td>
														<td class="userimgname">
															<a href="javascript:void(0);" class="product-img">
																<img src="assets/img/users/user-03.jpg" alt="product">
															</a>
															<a href="javascript:void(0);">Jose Ramos</a>
														</td>
														<td>12 Oct 2024</td>
														<td class="ref-number">INV7609368</td>
														<td>₱0</td>
														<td class="payment-info">
															<a href="javascript:void(0);"> <img src="assets/img/icons/cash.svg" alt="Pay"> </a>
														</td>
														<td>0</td>
														<td>₱0.00</td>
													</tr>
													<tr>
														<td>
															<label class="checkboxs">
																<input type="checkbox">
																<span class="checkmarks"></span>
															</label>
														</td>
														<td class="userimgname">
															<a href="javascript:void(0);" class="product-img">
																<img src="assets/img/users/user-04.jpg" alt="product">
															</a>
															<a href="javascript:void(0);">Juan Bautista</a>
														</td>
														<td>12 Oct 2024</td>
														<td class="ref-number">INV2750916</td>
														<td>₱0</td>
														<td class="payment-info">
															<a href="javascript:void(0);"> <img src="assets/img/icons/cash.svg" alt="Pay"> </a>
														</td>
														<td>0</td>
														<td>₱0.00</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>	
							</div>
						</div>
					</div>
					<!-- /product list -->
				</div>
			</div>
        </div>
		<!-- /Main Wrapper -->
		 
		<?php include 'layouts/customizer.php'; ?>

		<?php include 'layouts/vendor-scripts.php'; ?>
	
    </body>
</html>