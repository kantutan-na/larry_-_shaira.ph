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
	<!-- main Wrapper-->
    <div class="main-wrapper">
    <?php include 'layouts/menu.php'; ?>

    <div class="page-wrapper">
				<div class="content">
					<div class="page-header">
						<div class="add-item d-flex">
							<div class="page-title">
								<h4>Customer Report</h4>
								<h6>Manage Your Customer Report</h6>
							</div>
						</div>
						<ul class="table-top-head">
							<li>
								<a data-bs-toggle="tooltip" data-bs-placement="top" title="pdf"><img src="assets/img/icons/pdf.svg" alt="img"></a>
							</li>
							<li>
								<a data-bs-toggle="tooltip" data-bs-placement="top" title="excel"><img src="assets/img/icons/excel.svg" alt="img"></a>
							</li>
							<li>
								<a data-bs-toggle="tooltip" data-bs-placement="top" title="print"><img src="assets/img/icons/printer.svg" alt="img"></a>
							</li>
							<li>
								<a data-bs-toggle="tooltip" data-bs-placement="top" title="rotate"><i data-feather="rotate-ccw" class="feather-rotate-ccw"></i></a>
							</li>
							<li>
								<a data-bs-toggle="tooltip" data-bs-placement="top" title="up"><i data-feather="chevron-up" class="feather-chevron-up"></i></a>
							</li>
						</ul>
					</div>
					

					<!-- /product list -->
					<div class="card table-list-card">
						<div class="card-body">
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
										
									</div>
									
								</div>
								<div class="form-sort">
									<i data-feather="sliders" class="info-img"></i>
									<select class="select">
										<option>Sort by Date</option>
										<option>27 9 23</option>
										<option>10 9 23</option>
									</select>
								</div>
							</div>
							<!-- /Filter -->
							<div class="card" id="filter_inputs">
								<div class="card-body pb-0">
									<div class="row">
										<div class="col-lg-2 col-sm-6 col-12">
											<div class="input-blocks">
												<i data-feather="user" class="info-img"></i>
												<select class="select">
													<option>Choose Name</option>
													<option>Rose</option>
													<option>Kaitlin</option>
												</select>
											</div>
										</div>
										<div class="col-lg-2 col-sm-6 col-12">
											<div class="input-blocks">
												<i data-feather="user" class="info-img"></i>
												<select class="select">
													<option>Choose ID</option>
													<option>CT_0001</option>
													<option>CT_0002</option>
													<option>CT_0003</option>
													<option>CT_0004</option>
												</select>
											</div>
										</div>
										<div class="col-lg-2 col-sm-6 col-12">
											<div class="input-blocks">
												<i data-feather="stop-circle" class="info-img"></i>
												<select class="select">
													<option>Choose Status</option>
													<option>Completed</option>
													<option>Incompleted</option>
												</select>
											</div>
										</div>
										<div class="col-lg-3 col-sm-6 col-12">
											<div class="input-blocks">
												<img src="assets/img/icons/payment-status.svg" class="info-img status-icon" alt="Icon">
												<select class="select">
													<option>Choose Payment Status</option>
													<option>Paid</option>
													<option>Unpaid</option>
													<option>Overdue</option>
												</select>
											</div>
										</div>
										<div class="col-lg-3 col-sm-6 col-12">
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
											<th class="no-sort">
												<label class="checkboxs">
													<input type="checkbox" id="select-all">
													<span class="checkmarks"></span>
												</label>
											</th>
											<th>Customer ID</th>
											<th>Customer Name</th>
											<th>Amount</th>
											<th>Paid</th>
											<th>Due Amount</th>
											<th>Status</th>
											<th>Payment Status</th>
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
											<td>CT_0001</td>
											<td>Pedro Santos</td>
											<td>₱0</td>
											<td>₱0</td>
											<td>₱0.00</td>
											<td><span class="badges status-badge">Completed</span></td>
											<td><span class="badge-linesuccess">Paid</span></td>
										</tr>
										<tr>
											<td>
												<label class="checkboxs">
													<input type="checkbox">
													<span class="checkmarks"></span>
												</label>
											</td>
											<td>CT_0002</td>
											<td>Maria Dela Cruz</td>
											<td>₱0</td>
											<td>₱0</td>
											<td>₱0.00</td>
											<td><span class="badges status-badge">Completed</span></td>
											<td><span class="badge badge-linedanger">Unpaid</span></td>
										</tr>
										<tr>
											<td>
												<label class="checkboxs">
													<input type="checkbox">
													<span class="checkmarks"></span>
												</label>
											</td>
											<td>CT_0003</td>
											<td>Jose Ramos</td>
											<td>₱0</td>
											<td>₱0</td>
											<td>₱0.00</td>
											<td><span class="badges status-badge">Completed</span></td>
											<td><span class="badge-linesuccess">Paid</span></td>
										</tr>
										<tr>
											<td>
												<label class="checkboxs">
													<input type="checkbox">
													<span class="checkmarks"></span>
												</label>
											</td>
											<td>CT_0004</td>
											<td>Juan Bautista</td>
											<td>₱0</td>
											<td>₱0</td>
											<td>₱0.00</td>
											<td><span class="badges status-badge">Completed</span></td>
											<td><span class="badges-warning">Overdue</span></td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
					<!-- /product list -->
				</div>
			</div>

    </div>
<!-- end main Wrapper-->
<?php include 'layouts/customizer.php'; ?>
<!-- JAVASCRIPT -->
<?php include 'layouts/vendor-scripts.php'; ?>
</body>
</html>