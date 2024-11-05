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
								<h4>Invoice Report	</h4>
								<h6>Manage Your Invoice Report</h6>
							</div>
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
										<option>25 9 23</option>
										<option>12 9 23</option>
									</select>
								</div>
							</div>
							<!-- /Filter -->
							<div class="card" id="filter_inputs">
								<div class="card-body pb-0">
									<div class="row">
										<div class="col-lg-3 col-sm-6 col-12">
											<div class="input-blocks">
												<i data-feather="user" class="info-img"></i>
												<select class="select">
													<option>Choose Name</option>
													<option value="Juan Dela Cruz">Juan Dela Cruz</option>
													<option value="Maria Clara Gonzales">Maria Clara Gonzales</option>
													<option value="Alvin Garcia">Alvin Garcia</option>
													<option value="Anna Patricia Ramos">Anna Patricia Ramos</option>
													<option value="Mark Anthony Reyes">Mark Anthony Reyes</option>
													<option value="Miguel Soriano">Miguel Soriano</option>
													<option value="Katrina Bautista">Katrina Bautista</option>
													<option value="Angelica Mendoza">Angelica Mendoza</option>
													<option value="Kristine Diaz">Kristine Diaz</option>
													<option value="Michelle Francisco">Michelle Francisco</option>
												</select>
											</div>
										</div>
										<div class="col-lg-3 col-sm-6 col-12">
											<div class="input-blocks">
												<i data-feather="stop-circle" class="info-img"></i>
												<select class="select">
													<option>Choose Status</option>
													<option>Paid</option>
													<option>Unpaid</option>
													<option>Overdue</option>
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
								<table class="table  datanew">
									<thead>
										<tr>
											<th class="no-sort">
												<label class="checkboxs">
													<input type="checkbox" id="select-all">
													<span class="checkmarks"></span>
												</label>
											</th>
											<th>Invoice No</th>
											<th>Customer</th>
											<th>Due Date</th>
											<th>Amount</th>
											<th>Paid</th>
											<th>Amount Due</th>
											<th>Status</th>
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
											<td>INV001</td>
											<td>Juan Dela Cruz</td>
											<td>5 Oct 2024</td>
											<td>₱0.00</td>
											<td>₱0.00</td>
											<td>₱0.00</td>
											<td><span class="badge badge-linesuccess">Paid</span></td>
										</tr>
										<tr>
											<td>
												<label class="checkboxs">
													<input type="checkbox">
													<span class="checkmarks"></span>
												</label>
											</td>
											<td>INV002</td>
											<td>Maria Clara Gonzales</td>
											<td>5 Oct 2024</td>
											<td>₱0.00</td>
											<td>₱0.00</td>
											<td>₱0.00</td>
											<td><span class="badge badge-linedanger">Unpaid</span></td>
										</tr>
										<tr>
											<td>
												<label class="checkboxs">
													<input type="checkbox">
													<span class="checkmarks"></span>
												</label>
											</td>
											<td>INV003</td>
											<td>Alvin Garcia</td>
											<td>5 Oct 2024</td>
											<td>₱0.00</td>
											<td>₱0.00</td>
											<td>$0.00</td>
											<td><span class="badge badge-linesuccess">Paid</span></td>
										</tr>
										<tr>
											<td>
												<label class="checkboxs">
													<input type="checkbox">
													<span class="checkmarks"></span>
												</label>
											</td>
											<td>INV004</td>
											<td>Anna Patricia Ramos</td>
											<td>5 Oct 2024</td>
											<td>₱0.00</td>
											<td>₱0.00</td>
											<td>₱0.00</td>
											<td><span class="badge badges-warning">Overdue</span></td>
										</tr>
										<tr>
											<td>
												<label class="checkboxs">
													<input type="checkbox">
													<span class="checkmarks"></span>
												</label>
											</td>
											<td>INV005</td>
											<td>Mark Anthony Reyes</td>
											<td>5 Oct 2024</td>
											<td>₱0.00</td>
											<td>₱0.00</td>
											<td>₱0.00</td>
											<td><span class="badge badge-linesuccess">Paid</span></td>
										</tr>
										<tr>
											<td>
												<label class="checkboxs">
													<input type="checkbox">
													<span class="checkmarks"></span>
												</label>
											</td>
											<td>INV006</td>
											<td>Miguel Soriano</td>
											<td>5 Oct 2024</td>
											<td>₱0.00</td>
											<td>₱0.00</td>
											<td>₱0.00</td>
											<td><span class="badge badge-linedanger">Unpaid</span></td>
										</tr>
										<tr>
											<td>
												<label class="checkboxs">
													<input type="checkbox">
													<span class="checkmarks"></span>
												</label>
											</td>
											<td>INV007</td>
											<td>Katrina Bautista</td>
											<td>5 Oct 2024</td>
											<td>₱0.00</td>
											<td>₱0.00</td>
											<td>₱0.00</td>
											<td><span class="badge badge-linesuccess">Paid</span></td>
										</tr>
										<tr>
											<td>
												<label class="checkboxs">
													<input type="checkbox">
													<span class="checkmarks"></span>
												</label>
											</td>
											<td>INV008</td>
											<td>Angelica Mendoza</td>
											<td>5 Oct 2024</td>
											<td>₱0.00</td>
											<td>₱0.00</td>
											<td>₱0.00</td>
											<td><span class="badge badge-linesuccess">Paid</span></td>
										</tr>
										<tr>
											<td>
												<label class="checkboxs">
													<input type="checkbox">
													<span class="checkmarks"></span>
												</label>
											</td>
											<td>INV009</td>
											<td>Kristine Diaz</td>
											<td>5 Oct 2024</td>
											<td>₱0.00</td>
											<td>₱0.00</td>
											<td>₱0.00</td>
											<td><span class="badge badge-linesuccess">Paid</span></td>
										</tr>
										<tr>
											<td>
												<label class="checkboxs">
													<input type="checkbox">
													<span class="checkmarks"></span>
												</label>
											</td>
											<td>INV010</td>
											<td>Michelle Francisco</td>
											<td>5 Oct 2024</td>
											<td>₱0.00</td>
											<td>₱0.00</td>
											<td>₱0.00</td>
											<td><span class="badge badge-linesuccess">Paid</span></td>
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