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
					<div class="page-header">
						<div class="add-item d-flex">
							<div class="page-title">
								<h4>Sales List</h4>
								<h6>Manage Your Sales</h6>
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
						<div class="page-btn">
							<a href="#" class="btn btn-added" data-bs-toggle="modal" data-bs-target="#add-sales-new"><i data-feather="plus-circle" class="me-2"></i> Add New Sales</a>
						</div>
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
										<option>07 09 23</option>
										<option>21 09 23</option>
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
													<option>Choose Customer Name</option>
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
										<div class="col-lg-2 col-sm-6 col-12">
											<div class="input-blocks">
												<i data-feather="stop-circle" class="info-img"></i>
												<select class="select">
													<option>Choose Status</option>
													<option value="Completed">Completed</option>
													<option value="Pending">Pending</option>
												</select>
											</div>
										</div>
										<div class="col-lg-2 col-sm-6 col-12">
											<div class="input-blocks">
												<i data-feather="file-text" class="info-img"></i>
												<input type="text" placeholder="Enter Reference" class="form-control">
											</div>
										</div>
										<div class="col-lg-3 col-sm-6 col-12">
											<div class="input-blocks">
												<i data-feather="stop-circle" class="info-img"></i>
												<select class="select">
													<option>Choose Payment Status</option>
													<option value="Paid">Paid</option>
													<option value="Due">Due</option>
													<option value="Overdue">Overdue</option>  
												</select>
											</div>
										</div>
										<div class="col-lg-2 col-sm-6 col-12">
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
											<th>Customer Name</th>
											<th>Reference</th>
											<th>Date</th>
											<th>Status</th>
											<th>Grand Total</th>
											<th>Paid</th>
											<th>Due</th>
											<th>Payment Status</th>
											<th>Biller</th>
											<th class="text-center">Action</th>
										</tr>
									</thead>
									<tbody class="sales-list">
										<tr>
											<td>
												<label class="checkboxs">
													<input type="checkbox">
													<span class="checkmarks"></span>
												</label>
											</td>
											<td>Juan Dela Cruz</td>
											<td>SL0101</td>
											<td>5 Oct 2024</td>
											<td><span class="badge badge-bgsuccess">Completed</span></td>
											<td>₱0.00</td>
											<td>₱0.00</td>
											<td>₱0.00</td>
											<td><span class="badge badge-linesuccess">Paid</span></td>
											<td>Admin</td>
											<td class="text-center">
												<a class="action-set" href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="true">
													<i class="fa fa-ellipsis-v" aria-hidden="true"></i>
												</a>
												<ul class="dropdown-menu">
													<li>
														<a href="javascript:void(0);" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#sales-details-new"><i data-feather="eye" class="info-img"></i>Sale Detail</a>
													</li>
													<li>
														<a href="javascript:void(0);" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#edit-sales-new"><i data-feather="edit" class="info-img"></i>Edit Sale</a>
													</li>
													<li>
														<a href="javascript:void(0);" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#showpayment"><i data-feather="dollar-sign" class="info-img"></i>Show Payments</a>
													</li>
													<li>
														<a href="javascript:void(0);" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#createpayment"><i data-feather="plus-circle" class="info-img"></i>Create Payment</a>
													</li>
													<li>
														<a href="javascript:void(0);" class="dropdown-item"><i data-feather="download" class="info-img"></i>Download pdf</a>
													</li>	
													<li>
														<a href="javascript:void(0);" class="dropdown-item confirm-text mb-0"><i data-feather="trash-2" class="info-img"></i>Delete Sale</a>
													</li>								
												</ul>
											</td>
										</tr>
										<tr>
											<td>
												<label class="checkboxs">
													<input type="checkbox">
													<span class="checkmarks"></span>
												</label>
											</td>
											<td>Maria Clara Gonzales</td>
											<td>SL0102</td>
											<td>5 Oct 2024</td>
											<td><span class="badge badge-bgsuccess">Completed</span></td>
											<td>₱0.00</td>
											<td>₱0.00</td>
											<td>₱0.00</td>
											<td><span class="badge badge-linesuccess">Paid</span></td>
											<td>Admin</td>
											<td class="text-center">
												<a class="action-set" href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="true">
													<i class="fa fa-ellipsis-v" aria-hidden="true"></i>
												</a>
												<ul class="dropdown-menu">
													<li>
														<a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#sales-details-new"><i data-feather="eye" class="info-img"></i>Sale Detail</a>
													</li>
													<li>
														<a href="edit-sales.php" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#edit-sales-new" ><i data-feather="edit" class="info-img"></i>Edit Sale</a>
													</li>
													<li>
														<a href="javascript:void(0);" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#showpayment"><i data-feather="dollar-sign" class="info-img"></i>Show Payments</a>
													</li>
													<li>
														<a href="javascript:void(0);" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#createpayment"><i data-feather="plus-circle" class="info-img"></i>Create Payment</a>
													</li>
													<li>
														<a href="javascript:void(0);" class="dropdown-item"><i data-feather="download" class="info-img"></i>Download pdf</a>
													</li>	
													<li>
														<a href="javascript:void(0);" class="dropdown-item confirm-text mb-0"><i data-feather="trash-2" class="info-img"></i>Delete Sale</a>
													</li>								
												</ul>
											</td>
										</tr>
										<tr>
											<td>
												<label class="checkboxs">
													<input type="checkbox">
													<span class="checkmarks"></span>
												</label>
											</td>
											<td>Alvin Garcia</td>
											<td>SL0103</td>
											<td>5 Oct 2024</td>
											<td><span class="badge badge-bgsuccess">Completed</span></td>
											<td>₱0.00</td>
											<td>₱0.00</td>
											<td>₱0.00</td>
											<td><span class="badge badge-linesuccess">Paid</span></td>
											<td>Admin</td>
											<td class="text-center">
												<a class="action-set" href="javascript:void(0);"  data-bs-toggle="dropdown" aria-expanded="true">
													<i class="fa fa-ellipsis-v" aria-hidden="true"></i>
												</a>
												<ul class="dropdown-menu">
													<li>
														<a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#sales-details-new"><i data-feather="eye" class="info-img"></i>Sale Detail</a>
													</li>
													<li>
														<a href="edit-sales.php" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#edit-sales-new"><i data-feather="edit" class="info-img"></i>Edit Sale</a>
													</li>
													<li>
														<a href="javascript:void(0);" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#showpayment"><i data-feather="dollar-sign" class="info-img"></i>Show Payments</a>
													</li>
													<li>
														<a href="javascript:void(0);" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#createpayment"><i data-feather="plus-circle" class="info-img"></i>Create Payment</a>
													</li>
													<li>
														<a href="javascript:void(0);" class="dropdown-item"><i data-feather="download" class="info-img"></i>Download pdf</a>
													</li>	
													<li>
														<a href="javascript:void(0);" class="dropdown-item confirm-text mb-0"><i data-feather="trash-2" class="info-img"></i>Delete Sale</a>
													</li>								
												</ul>
											</td>
										</tr>
										<tr>
											<td>
												<label class="checkboxs">
													<input type="checkbox">
													<span class="checkmarks"></span>
												</label>
											</td>
											<td>Anna Patricia Ramos</td>
											<td>SL0104</td>
											<td>5 Oct 2024</td>
											<td><span class="badge badge-bgdanger">Pending</span></td>
											<td>₱0.00</td>
											<td>₱0.00</td>
											<td>₱0.00</td>
											<td><span class="badge badge-linedanger">Due</span></td>
											<td>Admin</td>
											<td class="text-center">
												<a class="action-set" href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="true">
													<i class="fa fa-ellipsis-v" aria-hidden="true"></i>
												</a>
												<ul class="dropdown-menu">
													<li>
														<a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#sales-details-new"><i data-feather="eye" class="info-img"></i>Sale Detail</a>
													</li>
													<li>
														<a href="edit-sales.php" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#edit-sales-new"><i data-feather="edit" class="info-img"></i>Edit Sale</a>
													</li>
													<li>
														<a href="javascript:void(0);" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#showpayment"><i data-feather="dollar-sign" class="info-img"></i>Show Payments</a>
													</li>
													<li>
														<a href="javascript:void(0);" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#createpayment"><i data-feather="plus-circle" class="info-img"></i>Create Payment</a>
													</li>
													<li>
														<a href="javascript:void(0);" class="dropdown-item"><i data-feather="download" class="info-img"></i>Download pdf</a>
													</li>	
													<li>
														<a href="javascript:void(0);" class="dropdown-item confirm-text mb-0"><i data-feather="trash-2" class="info-img"></i>Delete Sale</a>
													</li>								
												</ul>
											</td>
										</tr>
										<tr>
											<td>
												<label class="checkboxs">
													<input type="checkbox">
													<span class="checkmarks"></span>
												</label>
											</td>
											<td>Mark Anthony Reyes</td>
											<td>SL0105</td>
											<td>5 Oct 2024</td>
											<td><span class="badge badge-bgdanger">Pending</span></td>
											<td>₱$0.00</td>
											<td>₱0.00</td>
											<td>₱0.00</td>
											<td><span class="badge badge-linedanger">Due</span></td>
											<td>Admin</td>
											<td class="text-center">
												<a class="action-set" href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="true">
													<i class="fa fa-ellipsis-v" aria-hidden="true"></i>
												</a>
												<ul class="dropdown-menu">
													<li>
														<a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#sales-details-new"><i data-feather="eye" class="info-img"></i>Sale Detail</a>
													</li>
													<li>
														<a href="edit-sales.php" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#edit-sales-new"><i data-feather="edit" class="info-img"></i>Edit Sale</a>
													</li>
													<li>
														<a href="javascript:void(0);" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#showpayment"><i data-feather="dollar-sign" class="info-img"></i>Show Payments</a>
													</li>
													<li>
														<a href="javascript:void(0);" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#createpayment"><i data-feather="plus-circle" class="info-img"></i>Create Payment</a>
													</li>
													<li>
														<a href="javascript:void(0);" class="dropdown-item"><i data-feather="download" class="info-img"></i>Download pdf</a>
													</li>	
													<li>
														<a href="javascript:void(0);" class="dropdown-item confirm-text mb-0"><i data-feather="trash-2" class="info-img"></i>Delete Sale</a>
													</li>								
												</ul>
											</td>
										</tr>
										<tr>
											<td>
												<label class="checkboxs">
													<input type="checkbox">
													<span class="checkmarks"></span>
												</label>
											</td>
											<td>Miguel Soriano</td>
											<td>SL0106</td>
											<td>5 Oct 2024</td>
											<td><span class="badge badge-bgsuccess">Completed</span></td>
											<td>₱0.00</td>
											<td>₱0.00</td>
											<td>₱0.00</td>
											<td><span class="badge badge-linesuccess">Paid</span></td>
											<td>Admin</td>
											<td class="text-center">
												<a class="action-set" href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="true">
													<i class="fa fa-ellipsis-v" aria-hidden="true"></i>
												</a>
												<ul class="dropdown-menu">
													<li>
														<a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#sales-details-new"><i data-feather="eye" class="info-img"></i>Sale Detail</a>
													</li>
													<li>
														<a href="edit-sales.php" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#edit-sales-new"><i data-feather="edit" class="info-img"></i>Edit Sale</a>
													</li>
													<li>
														<a href="javascript:void(0);" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#showpayment"><i data-feather="dollar-sign" class="info-img"></i>Show Payments</a>
													</li>
													<li>
														<a href="javascript:void(0);" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#createpayment"><i data-feather="plus-circle" class="info-img"></i>Create Payment</a>
													</li>
													<li>
														<a href="javascript:void(0);" class="dropdown-item"><i data-feather="download" class="info-img"></i>Download pdf</a>
													</li>	
													<li>
														<a href="javascript:void(0);" class="dropdown-item confirm-text mb-0"><i data-feather="trash-2" class="info-img"></i>Delete Sale</a>
													</li>								
												</ul>
											</td>
										</tr>
										<tr>
											<td>
												<label class="checkboxs">
													<input type="checkbox">
													<span class="checkmarks"></span>
												</label>
											</td>
											<td>Katrina Bautista</td>
											<td>SL0107</td>
											<td>5 Oct 2024</td>
											<td><span class="badge badge-bgdanger">Pending</span></td>
											<td>₱0.00</td>
											<td>₱0.00</td>
											<td>₱0.00</td>
											<td><span class="badge badge-linedanger">Due</span></td>
											<td>Admin</td>
											<td class="text-center">
												<a class="action-set" href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="true">
													<i class="fa fa-ellipsis-v" aria-hidden="true"></i>
												</a>
												<ul class="dropdown-menu">
													<li>
														<a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#sales-details-new"><i data-feather="eye" class="info-img"></i>Sale Detail</a>
													</li>
													<li>
														<a href="edit-sales.php" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#edit-sales-new"><i data-feather="edit" class="info-img"></i>Edit Sale</a>
													</li>
													<li>
														<a href="javascript:void(0);" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#showpayment"><i data-feather="dollar-sign" class="info-img"></i>Show Payments</a>
													</li>
													<li>
														<a href="javascript:void(0);" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#createpayment"><i data-feather="plus-circle" class="info-img"></i>Create Payment</a>
													</li>
													<li>
														<a href="javascript:void(0);" class="dropdown-item"><i data-feather="download" class="info-img"></i>Download pdf</a>
													</li>	
													<li>
														<a href="javascript:void(0);" class="dropdown-item confirm-text mb-0"><i data-feather="trash-2" class="info-img"></i>Delete Sale</a>
													</li>								
												</ul>
											</td>
										</tr>
										<tr>
											<td>
												<label class="checkboxs">
													<input type="checkbox">
													<span class="checkmarks"></span>
												</label>
											</td>
											<td>Angelica Mendoza</td>
											<td>SL0108</td>
											<td>5 Oct 2024</td>
											<td><span class="badge badge-bgsuccess">Completed</span></td>
											<td>₱0.00</td>
											<td>₱0.00</td>
											<td>₱0.00</td>
											<td><span class="badge badge-linesuccess">Paid</span></td>
											<td>Admin</td>
											<td class="text-center">
												<a class="action-set" href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="true">
													<i class="fa fa-ellipsis-v" aria-hidden="true"></i>
												</a>
												<ul class="dropdown-menu">
													<li>
														<a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#sales-details-new"><i data-feather="eye" class="info-img"></i>Sale Detail</a>
													</li>
													<li>
														<a href="edit-sales.php" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#edit-sales-new"><i data-feather="edit" class="info-img"></i>Edit Sale</a>
													</li>
													<li>
														<a href="javascript:void(0);" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#showpayment"><i data-feather="dollar-sign" class="info-img"></i>Show Payments</a>
													</li>
													<li>
														<a href="javascript:void(0);" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#createpayment"><i data-feather="plus-circle" class="info-img"></i>Create Payment</a>
													</li>
													<li>
														<a href="javascript:void(0);" class="dropdown-item"><i data-feather="download" class="info-img"></i>Download pdf</a>
													</li>	
													<li>
														<a href="javascript:void(0);" class="dropdown-item confirm-text mb-0"><i data-feather="trash-2" class="info-img"></i>Delete Sale</a>
													</li>								
												</ul>
											</td>
										</tr>
										<tr>
											<td>
												<label class="checkboxs">
													<input type="checkbox">
													<span class="checkmarks"></span>
												</label>
											</td>
											<td>Kristine Diaz</td>
											<td>SL0109</td>
											<td>5 Oct 2024</td>
											<td><span class="badge badge-bgdanger">Pending</span></td>
											<td>₱0.00</td>
											<td>₱0.00</td>
											<td>₱0.00</td>
											<td><span class="badge badge-linedanger">Due</span></td>
											<td>Admin</td>
											<td class="text-center">
												<a class="action-set" href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="true">
													<i class="fa fa-ellipsis-v" aria-hidden="true"></i>
												</a>
												<ul class="dropdown-menu">
													<li>
														<a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#sales-details-new"><i data-feather="eye" class="info-img"></i>Sale Detail</a>
													</li>
													<li>
														<a href="edit-sales.php" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#edit-sales-new"><i data-feather="edit" class="info-img"></i>Edit Sale</a>
													</li>
													<li>
														<a href="javascript:void(0);" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#showpayment"><i data-feather="dollar-sign" class="info-img"></i>Show Payments</a>
													</li>
													<li>
														<a href="javascript:void(0);" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#createpayment"><i data-feather="plus-circle" class="info-img"></i>Create Payment</a>
													</li>
													<li>
														<a href="javascript:void(0);" class="dropdown-item"><i data-feather="download" class="info-img"></i>Download pdf</a>
													</li>	
													<li>
														<a href="javascript:void(0);" class="dropdown-item confirm-text mb-0"><i data-feather="trash-2" class="info-img"></i>Delete Sale</a>
													</li>								
												</ul>
											</td>
										</tr>
										<tr>
											<td>
												<label class="checkboxs">
													<input type="checkbox">
													<span class="checkmarks"></span>
												</label>
											</td>
											<td>Michelle Francisco</td>
											<td>SL0110</td>
											<td>5 Oct 2024</td>
											<td><span class="badge badge-bgsuccess">Completed</span></td>
											<td>₱0.00</td>
											<td>₱0.00</td>
											<td>₱0.00</td>
											<td><span class="badge badge-linesuccess">Paid</span></td>
											<td>Admin</td>
											<td class="text-center">
												<a class="action-set" href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="true">
													<i class="fa fa-ellipsis-v" aria-hidden="true"></i>
												</a>
												<ul class="dropdown-menu">
													<li>
														<a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#sales-details-new"><i data-feather="eye" class="info-img"></i>Sale Detail</a>
													</li>
													<li>
														<a href="edit-sales.php" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#edit-sales-new"><i data-feather="edit" class="info-img"></i>Edit Sale</a>
													</li>
													<li>
														<a href="javascript:void(0);" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#showpayment"><i data-feather="dollar-sign" class="info-img"></i>Show Payments</a>
													</li>
													<li>
														<a href="javascript:void(0);" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#createpayment"><i data-feather="plus-circle" class="info-img"></i>Create Payment</a>
													</li>
													<li>
														<a href="javascript:void(0);" class="dropdown-item"><i data-feather="download" class="info-img"></i>Download pdf</a>
													</li>	
													<li>
														<a href="javascript:void(0);" class="dropdown-item confirm-text mb-0"><i data-feather="trash-2" class="info-img"></i>Delete Sale</a>
													</li>								
												</ul>
											</td>
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
		<!-- /Main Wrapper -->

		<!--add popup -->
		<div class="modal fade" id="add-sales-new">
			<div class="modal-dialog add-centered">
				<div class="modal-content">
					<div class="page-wrapper p-0 m-0">
						<div class="content p-0">
							<div class="modal-header border-0 custom-modal-header">
								<div class="page-title">
									<h4> Add Sales</h4>
								</div>
								<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="card">
								<div class="card-body">
									<form action="sales-list.php">
										<div class="row">
											<div class="col-lg-4 col-sm-6 col-12">
												<div class="input-blocks">
													<label>Customer Name</label>
													<div class="row">
														<div class="col-lg-10 col-sm-10 col-10">
															<select class="select">
																<option>Choose</option>
																<option>Customer Name</option>
															</select>
														</div>
														<div class="col-lg-2 col-sm-2 col-2 ps-0">
															<div class="add-icon">
																<a href="#" class="choose-add"><i data-feather="plus-circle" class="plus"></i></a>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="col-lg-4 col-sm-6 col-12">
												<div class="input-blocks">
													<label>Date</label>
													<div class="input-groupicon calender-input">
														<i data-feather="calendar" class="info-img"></i>
														<input type="text" class="datetimepicker" placeholder="Choose">
													</div>
												</div>
											</div>
											<div class="col-lg-4 col-sm-6 col-12">
												<div class="input-blocks">
													<label>Supplier</label>
													<select class="select">
														<option>Choose</option>
														<option value="Unilever Philippines">Unilever Philippines</option>
														<option value="Procter & Gamble Philippines">Procter & Gamble Philippines</option>
														<option value="Nestlé Philippines">Nestlé Philippines</option>
														<option value="PMFTC Inc.">PMFTC Inc.</option>
														<option value="Mondelez Philippines">Mondelez Philippines</option>
														<option value="Coca-Cola Beverages Philippines">Coca-Cola Beverages Philippines</option>
														<option value="San Miguel Corporation">San Miguel Corporation</option>
														<option value="Philippine Spring Water Resources, Inc.">Philippine Spring Water Resources, Inc.</option>
														<option value="Alaska Milk Corporation">Alaska Milk Corporation</option>
														<option value="Del Monte Philippines">Del Monte Philippines</option>
														<option value="URC (Universal Robina Corporation)">URC (Universal Robina Corporation)</option>
														<option value="Colgate-Palmolive Philippines">Colgate-Palmolive Philippines</option>
														<option value="Johnson & Johnson Philippines">Johnson & Johnson Philippines</option>
														<option value="Wyeth Nutrition Philippines">Wyeth Nutrition Philippines</option>
														<option value="Jollibee Foods Corporation Suppliers">Jollibee Foods Corporation Suppliers</option>
														<option value="La Tondeña Distillers">La Tondeña Distillers</option>
														<option value="Pilmico Foods Corporation">Pilmico Foods Corporation</option>
													</select>
												</div>
											</div>
											<div class="col-lg-12 col-sm-6 col-12">
												<div class="input-blocks">
													<label>Product Name</label>
													<div class="input-groupicon select-code">
														<input type="text" placeholder="Please type product code and select">
														<div class="addonset">
															<img src="assets/img/icons/qrcode-scan.svg" alt="img">
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="table-responsive no-pagination">
											<table class="table  datanew">
												<thead>
													<tr>
														<th>Product</th>
														<th>Qty</th>
														<th>Purchase Price(₱)</th>
														<th>Discount(₱)</th>
														<th>Tax(%)</th>
														<th>Tax Amount(₱)</th>
														<th>Unit Cost(₱)</th>
														<th>Total Cost(%)</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td></td>
														<td></td>
														<td></td>
														<td></td>
														<td></td>
														<td></td>
														<td></td>
														<td></td>
													</tr>
												</tbody>
											</table>
										</div>
			
										<div class="row">
											<div class="col-lg-6 ms-auto">
												<div class="total-order w-100 max-widthauto m-auto mb-4">
													<ul>
														<li>
															<h4>Order Tax</h4>
															<h5>₱ 0.00</h5>
														</li>
														<li>
															<h4>Discount</h4>
															<h5>₱ 0.00</h5>
														</li>
														<li>
															<h4>Shipping</h4>
															<h5>₱ 0.00</h5>
														</li>
														<li>
															<h4>Grand Total</h4>
															<h5>₱ 0.00</h5>
														</li>
													</ul>
												</div>
											</div>
										</div>
										
										<div class="row">
											<div class="col-lg-3 col-sm-6 col-12">
												<div class="input-blocks">
													<label>Order Tax</label>
													<div class="input-groupicon select-code">
														<input type="text" value="0" class="p-2">
													</div>
													
												</div>
											</div>
											<div class="col-lg-3 col-sm-6 col-12">
												<div class="input-blocks">
													<label>Discount</label>
													<div class="input-groupicon select-code">
														<input type="text" value="0" class="p-2">
													</div>
												</div>
											</div>
											<div class="col-lg-3 col-sm-6 col-12">
												<div class="input-blocks">
													<label>Shipping</label>
													<div class="input-groupicon select-code">
														<input type="text" value="0" class="p-2">
													</div>
												</div>
											</div>
											<div class="col-lg-3 col-sm-6 col-12">
												<div class="input-blocks mb-5">
													<label>Status</label>
													<select class="select">
														<option>Choose</option>
														<option>Completed</option>
														<option>Inprogress</option>
													</select>
												</div>
											</div>
											<div class="col-lg-12 text-end">
												<button type="button"  class="btn btn-cancel add-cancel me-3" data-bs-dismiss="modal">Cancel</button>
												<button type="submit" class="btn btn-submit add-sale">Submit</button>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /add popup -->

		<!-- details popup -->
		<div class="modal fade" id="sales-details-new">
			<div class="modal-dialog sales-details-modal">
				<div class="modal-content">
					<div class="page-wrapper details-blk">
						<div class="content p-0">
							<div class="page-header p-4 mb-0">
								<div class="add-item d-flex">
									<div class="page-title modal-datail">
										<h4>Sales Detail : SL0101</h4>
									</div>
									<div class="page-btn">
										<a href="#" class="btn btn-added"><i data-feather="plus-circle" class="me-2"></i> Add New Sales</a>
									</div>
								</div>
								<ul class="table-top-head">
									<li>
										<a data-bs-toggle="tooltip" data-bs-placement="top" title="Pdf"><i data-feather="edit" class="action-edit sales-action"></i></a>
									</li>
									<li>
										<a data-bs-toggle="tooltip" data-bs-placement="top" title="Pdf"><img src="assets/img/icons/pdf.svg" alt="img"></a>
									</li>
									<li>
										<a data-bs-toggle="tooltip" data-bs-placement="top" title="Excel"><img src="assets/img/icons/excel.svg" alt="img"></a>
									</li>
									<li>
										<a data-bs-toggle="tooltip" data-bs-placement="top" title="Print"><i data-feather="printer" class="feather-rotate-ccw"></i></a>
									</li>
								</ul>
							</div>
							
							<div class="card">
								<div class="card-body">
									<form action="sales-list.php">
										<div class="invoice-box table-height" style="max-width: 1600px;width:100%;overflow: auto;padding: 0;font-size: 14px;line-height: 24px;color: #555;">
											<div class="sales-details-items d-flex">
												<div class="details-item">
													<h6>Customer Info</h6>
													<p>walk-in-customer<br>
														walk-in-customer@example.com<br>
														123456780<br>
														Brgy. Langgam , Mt. Beatitude
													</p>
												</div>
												<div class="details-item">
													<h6>Company Info</h6>
													<p>L & S Store<br>
														djwap14@gmail.com<br>
														+69 969-196-3942<br>
														A68 F-Benito Ave. Brgy. Langgam, LSPL
													</p>
												</div>
												<div class="details-item">
													<h6>Invoice Info</h6>
													<p>Reference<br>
														Payment Status<br>
														Status
													</p>
												</div>
												<div class="details-item">
													<h5><span>SL0101</span>Paid<br> Completed</h5>
												</div>
											</div>
											<h5 class="order-text">Order Summary</h5>
											<div class="table-responsive no-pagination">
												<table class="table  datanew">
													<thead>
														<tr>
															<th>Product</th>
															<th>Qty</th>
															<th>Purchase Price(₱)</th>
															<th>Discount(₱)</th>
															<th>Tax(%)</th>
															<th>Tax Amount(₱)</th>
															<th>Unit Cost(₱)</th>
															<th>Total Cost(%)</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td>
																<div class="productimgname">
																	<a href="javascript:void(0);" class="product-img stock-img">
																		<img src="assets/img/products/4800016644801.jpg" alt="product">
																	</a>
																	<a href="javascript:void(0);">JACK N JILL<br>PIATTOS CHEESE 40G</a>
																</div>												
															</td>
															<td>
																<div class="product-quantity">
																	<span class="quantity-btn">+<i data-feather="plus-circle" class="plus-circle"></i></span>
																	<input type="text" class="quntity-input" value="2">
																	<span class="quantity-btn"><i data-feather="minus-circle" class="feather-search"></i></span>
																</div>
															</td>
															<td>0</td>
															<td>0</td>
															<td>
																0.00
															</td>
															<td>0.00</td>
															<td>0.00</td>
															<td>0</td>
														</tr>
														<tr>
															<td>
																<div class="productimgname">
																	<a href="javascript:void(0);" class="product-img stock-img">
																		<img src="assets/img/products/4800611546760.jpg" alt="product">
																	</a>
																	<a href="javascript:void(0);">COBRA ENERGY DRINK <br> ORIGINAL 350ML</a>
																</div>												
															</td>
															<td>
																<div class="product-quantity">
																	<span class="quantity-btn">+<i data-feather="plus-circle" class="plus-circle"></i></span>
																	<input type="text" class="quntity-input" value="2">
																	<span class="quantity-btn"><i data-feather="minus-circle" class="feather-search"></i></span>
																</div>
															</td>
															<td>0</td>
															<td>0</td>
															<td>
																0.00
															</td>
															<td>0.00</td>
															<td>0.00</td>
															<td>0</td>
														</tr>
														<tr>
															<td>
																<div class="productimgname">
																	<a href="javascript:void(0);" class="product-img stock-img">
																		<img src="assets/img/products/8996001410226.jpg" alt="product">
																	</a>
																	<a href="javascript:void(0);">KOPIKO BLACK3IN1 <br> HANGER 30GX10S</a>
																</div>												
															</td>
															<td>
																<div class="product-quantity">
																	<span class="quantity-btn">+<i data-feather="plus-circle" class="plus-circle"></i></span>
																	<input type="text" class="quntity-input" value="2">
																	<span class="quantity-btn"><i data-feather="minus-circle" class="feather-search"></i></span>
																</div>
															</td>
															<td>0</td>
															<td>0</td>
															<td>
																0.00
															</td>
															<td>0.00</td>
															<td>0.00</td>
															<td>0</td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
										
										<div class="row">
											
											<div class="row">
												<div class="col-lg-6 ms-auto">
													<div class="total-order w-100 max-widthauto m-auto mb-4">
														<ul>
															<li>
																<h4>Order Tax</h4>
																<h5>₱ 0.00</h5>
															</li>
															<li>
																<h4>Discount</h4>
																<h5>₱ 0.00</h5>
															</li>
															<li>
																<h4>Grand Total</h4>
																<h5>₱ 0.00</h5>
															</li>
															<li>
																<h4>Paid</h4>
																<h5>₱ 0.00</h5>
															</li>
															<li>
																<h4>Due</h4>
																<h5>₱ 0.00</h5>
															</li>
														</ul>
													</div>
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /details popup -->

		<!-- edit popup -->
		<div class="modal fade" id="edit-sales-new">
			<div class="modal-dialog edit-sales-modal">
				<div class="modal-content">
					<div class="page-wrapper p-0 m-0">
						<div class="content p-0">
							<div class="page-header p-4 mb-0">
								<div class="add-item new-sale-items d-flex">
									<div class="page-title">
										<h4>Edit Sales</h4>
									</div>
									<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
							</div>
							<div class="card">
								<div class="card-body">
									<form action="sales-list.php">
										<div class="row">
											<div class="col-lg-4 col-sm-6 col-12">
												<div class="input-blocks">
													<label>Customer</label>
													<div class="row">
														<div class="col-lg-10 col-sm-10 col-10">
															<select class="select">
																<option>Juan Dela Cruz</option>
																<option>Name</option>
															</select>
														</div>
														<div class="col-lg-2 col-sm-2 col-2 ps-0">
															<div class="add-icon">
																<a href="#" class="choose-add"><i data-feather="plus-circle" class="plus"></i></a>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="col-lg-4 col-sm-6 col-12">
												<div class="input-blocks">
													<label>Purchase Date</label>
													<div class="input-groupicon calender-input">
														<i data-feather="calendar" class="info-img"></i>
														<input type="text" class="datetimepicker" placeholder="19 jan 2023">
													</div>
												</div>
											</div>
											<div class="col-lg-4 col-sm-6 col-12">
												<div class="input-blocks">
													<label>Supplier</label>
													<select class="select">
														<option>Supplier Name</option>
														<option value="Unilever Philippines">Unilever Philippines</option>
														<option value="Procter & Gamble Philippines">Procter & Gamble Philippines</option>
														<option value="Nestlé Philippines">Nestlé Philippines</option>
														<option value="PMFTC Inc.">PMFTC Inc.</option>
														<option value="Mondelez Philippines">Mondelez Philippines</option>
														<option value="Coca-Cola Beverages Philippines">Coca-Cola Beverages Philippines</option>
														<option value="San Miguel Corporation">San Miguel Corporation</option>
														<option value="Philippine Spring Water Resources, Inc.">Philippine Spring Water Resources, Inc.</option>
														<option value="Alaska Milk Corporation">Alaska Milk Corporation</option>
														<option value="Del Monte Philippines">Del Monte Philippines</option>
														<option value="URC (Universal Robina Corporation)">URC (Universal Robina Corporation)</option>
														<option value="Colgate-Palmolive Philippines">Colgate-Palmolive Philippines</option>
														<option value="Johnson & Johnson Philippines">Johnson & Johnson Philippines</option>
														<option value="Wyeth Nutrition Philippines">Wyeth Nutrition Philippines</option>
														<option value="Jollibee Foods Corporation Suppliers">Jollibee Foods Corporation Suppliers</option>
														<option value="La Tondeña Distillers">La Tondeña Distillers</option>
														<option value="Pilmico Foods Corporation">Pilmico Foods Corporation</option>
													</select>
												</div>
											</div>
											<div class="col-lg-12 col-sm-6 col-12">
												<div class="input-blocks">
													<label>Product Name</label>
													<div class="input-groupicon select-code">
														<input type="text" placeholder="Please type product code and select">
														<div class="addonset">
															<img src="assets/img/icons/scanners.svg" alt="img">
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="table-responsive no-pagination">
											<table class="table  datanew">
												<thead>
													<tr>
														<th>Product</th>
														<th>Qty</th>
														<th>Purchase Price(₱)</th>
														<th>Discount(₱)</th>
														<th>Tax(%)</th>
														<th>Tax Amount(₱)</th>
														<th>Unit Cost(₱)</th>
														<th>Total Cost(₱)</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>
															<div class="productimgname">
																<a href="javascript:void(0);" class="product-img stock-img">
																	<img src="assets/img/products/4800016644801.jpg" alt="product">
																</a>
																<a href="javascript:void(0);">JACK N JILL PIATTOS<br>CHEESE 40G</a>
															</div>												
														</td>
														<td>
															<div class="product-quantity">
																<span class="quantity-btn">+<i data-feather="plus-circle" class="plus-circle"></i></span>
																<input type="text" class="quntity-input" value="2">
																<span class="quantity-btn"><i data-feather="minus-circle" class="feather-search"></i></span>
															</div>
														</td>
														<td>0</td>
														<td>0</td>
														<td>
															0.00
														</td>
														<td>0.00</td>
														<td>0.00</td>
														<td>0</td>
													</tr>
													<tr>
														<td>
															<div class="productimgname">
																<a href="javascript:void(0);" class="product-img stock-img">
																	<img src="assets/img/products/4800611546760.jpg" alt="product">
																</a>
																<a href="javascript:void(0);">COBRA ENERGY DRINK <br> ORIGINAL 350ML</a>
															</div>												
														</td>
														<td>
															<div class="product-quantity">
																<span class="quantity-btn">+<i data-feather="plus-circle" class="plus-circle"></i></span>
																<input type="text" class="quntity-input" value="2">
																<span class="quantity-btn"><i data-feather="minus-circle" class="feather-search"></i></span>
															</div>
														</td>
														<td>0</td>
														<td>0</td>
														<td>
															0.00
														</td>
														<td>0.00</td>
														<td>0.00</td>
														<td>0</td>
													</tr>
													<tr>
														<td>
															<div class="productimgname">
																<a href="javascript:void(0);" class="product-img stock-img">
																	<img src="assets/img/products/8996001410226.jpg" alt="product">
																</a>
																<a href="javascript:void(0);">KOPIKO BLACK3IN1 <br> HANGER 30GX10S</a>
															</div>												
														</td>
														<td>
															<div class="product-quantity">
																<span class="quantity-btn">+<i data-feather="plus-circle" class="plus-circle"></i></span>
																<input type="text" class="quntity-input" value="2">
																<span class="quantity-btn"><i data-feather="minus-circle" class="feather-search"></i></span>
															</div>
														</td>
														<td>0</td>
														<td>0</td>
														<td>
															0.00
														</td>
														<td>0.00</td>
														<td>0.00</td>
														<td>0</td>
													</tr>
												</tbody>
											</table>
										</div>

										<div class="row">
											<div class="col-lg-6 ms-auto">
												<div class="total-order w-100 max-widthauto m-auto mb-4">
													<ul>
														<li>
															<h4>Order Tax</h4>
															<h5>₱0.00</h5>
														</li>
														<li>
															<h4>Discount</h4>
															<h5>₱0.00</h5>
														</li>
														<li>
															<h4>Shipping</h4>
															<h5>₱0.00</h5>
														</li>
														<li>
															<h4>Grand Total</h4>
															<h5>₱0.00</h5>
														</li>
													</ul>
												</div>
											</div>
										</div>
										
										<div class="row">
											<div class="col-lg-3 col-sm-6 col-12">
												<div class="input-blocks">
													<label>Order Tax</label>
													<div class="input-groupicon select-code">
														<input type="text" placeholder="0">
													</div>
													
												</div>
											</div>
											<div class="col-lg-3 col-sm-6 col-12">
												<div class="input-blocks">
													<label>Discount</label>
													<div class="input-groupicon select-code">
														<input type="text" placeholder="0">
													</div>
												</div>
											</div>
											<div class="col-lg-3 col-sm-6 col-12">
												<div class="input-blocks">
													<label>Shipping</label>
													<div class="input-groupicon select-code">
														<input type="text" placeholder="0">
													</div>
												</div>
											</div>
											<div class="col-lg-3 col-sm-6 col-12">
												<div class="input-blocks mb-5">
													<label>Status</label>
													<select class="select">
														<option>Choose</option>
														<option>Completed</option>
														<option>In-progress</option>
													</select>
												</div>
											</div>
											<div class="col-lg-12">
												<div class="input-blocks">
													<label>Notes</label>
													<textarea class="form-control"></textarea>
												</div>
											</div>
											<div class="col-lg-12 text-end">
												<button type="button"  class="btn btn-cancel add-cancel me-3" data-bs-dismiss="modal">Cancel</button>
												<button type="submit" class="btn btn-submit add-sale">Submit</button>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /edit popup -->

		<!-- show payment Modal -->
		<div class="modal fade" id="showpayment" tabindex="-1" aria-labelledby="showpayment" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered stock-adjust-modal">
				<div class="modal-content">
					<div class="page-wrapper-new p-0">
						<div class="content">
							<div class="modal-header border-0 custom-modal-header">
								<div class="page-title">
									<h4>Show Payments</h4>
								</div>
								<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body custom-modal-body">
								<div class="row">
									<div class="col-lg-12">
										<div class="modal-body-table total-orders">
											<div class="table-responsive">
												<table class="table  datanew">
													<thead>
														<tr>
															<th>Date</th>
															<th>Reference</th>
															<th>Amount</th>
															<th>Paid By</th>
															<th class="no-sort">Action</th>
															
														</tr>
													</thead>
													<tbody>
														<tr>
															<td>5 Oct 2024</td>
															<td>INV/SL0101</td>
															<td>0.00</td>
															<td>Cash</td>
															<td class="action-table-data">
																<div class="edit-delete-action">
																	<a class="me-3 p-2" href="javascript:void(0);">
																		<i data-feather="printer" class="feather-rotate-ccw"></i>
																	</a>
																	<a class="me-3 p-2" href="#" data-bs-toggle="modal" data-bs-target="#editpayment">
																		<i data-feather="edit" class="feather-edit"></i>
																	</a>
																	<a class="confirm-text p-2" href="javascript:void(0);">
																		<i data-feather="trash-2" class="feather-trash-2"></i>
																	</a>
																</div>
																
															</td>
														</tr>
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
		<!-- show payment Modal -->

		<!-- Create payment Modal -->
		<div class="modal fade" id="createpayment" tabindex="-1" aria-labelledby="createpayment" aria-hidden="true">
			<div class="modal-dialog modal-lg modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header border-0 custom-modal-header">
						<div class="page-title">
							<h4>Create Payments</h4>
						</div>
						<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body custom-modal-body">
						<form action="sales-list.php">
							<div class="row">
								<div class="col-lg-6">
									<div class="input-blocks">
										<label> Date</label>
										<div class="input-groupicon calender-input">
											<i data-feather="calendar" class="info-img"></i>
											<input type="text" class="datetimepicker" placeholder="Choose Date" >
										</div>
									</div>
								</div>
								<div class="col-lg-6 col-sm-12 col-12">
									<div class="input-blocks">
										<label>Reference</label>
										<input type="text" class="form-control">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-4 col-sm-12 col-12">
									<div class="input-blocks">
										<label>Received Amount</label>
										<div class="input-groupicon calender-input">
											<i data-feather="dollar-sign" class="info-img"></i>
											<input type="text" >
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-sm-12 col-12">
									<div class="input-blocks">
										<label>Paying Amount</label>
										<div class="input-groupicon calender-input">
											<i data-feather="dollar-sign" class="info-img"></i>
											<input type="text" >
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-sm-12 col-12">
									<div class="input-blocks">
										<label>Payment type</label>
										<select class="select">
											<option>Choose</option>
											<option>Online</option>
											<option>Cash</option>
										</select>
									</div>
								</div>
								<div class="col-lg-12">
									<div class="input-blocks">
										<label>Description</label>
										<textarea class="form-control"></textarea>
										<p>Maximum 60 Characters</p>
									</div>
								</div>
							</div>
							<div class="col-lg-12">
								<div class="modal-footer-btn">
									<button type="button" class="btn btn-cancel me-2" data-bs-dismiss="modal">Cancel</button>
									<button type="submit" class="btn btn-submit">Submit</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- Create payment Modal -->

		<!-- edit payment Modal -->
		<div class="modal fade" id="editpayment" tabindex="-1" aria-labelledby="editpayment" aria-hidden="true">
			<div class="modal-dialog modal-lg modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header border-0 custom-modal-header">
						<div class="page-title">
							<h4>Edit Payments</h4>
						</div>
						<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body custom-modal-body">
						<form action="sales-list.php">
							<div class="row">
								<div class="col-lg-6">
									<div class="input-blocks">
										<label>19 Jan 2023</label>
										<div class="input-groupicon calender-input">
											<i data-feather="calendar" class="info-img"></i>
											<input type="text" class="datetimepicker form-control" placeholder="Select Date" >
										</div>
									</div>
								</div>
								<div class="col-lg-6 col-sm-12 col-12">
									<div class="input-blocks">
										<label>Reference</label>
										<input type="text" value="INV/SL0101">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-4 col-sm-12 col-12">
									<div class="input-blocks">
										<label>Received Amount</label>
										<div class="input-groupicon calender-input">
											<i data-feather="dollar-sign" class="info-img"></i>
											<input type="text"  value="1500" >
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-sm-12 col-12">
									<div class="input-blocks">
										<label>Paying Amount</label>
										<div class="input-groupicon calender-input">
											<i data-feather="dollar-sign" class="info-img"></i>
											<input type="text"  value="1500">
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-sm-12 col-12">
									<div class="input-blocks">
										<label>Payment type</label>
										<select class="select">
											<option>Cash</option>
											<option>Online</option>
											<option>Inprogress</option>
										</select>
									</div>
								</div>
								<div class="col-lg-12">
									<div class="input-blocks summer-description-box transfer">
										<label>Description</label>
										<textarea class="form-control"></textarea>
									</div>
									<p>Maximum 60 Characters</p>
								</div>
							</div>
							<div class="col-lg-12">
								<div class="modal-footer-btn mb-3 me-3">
									<button type="button" class="btn btn-cancel me-2" data-bs-dismiss="modal">Cancel</button>
									<button type="submit" class="btn btn-submit">Save Changes</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- edit payment Modal -->
		<?php include 'layouts/customizer.php'; ?>

		<?php include 'layouts/vendor-scripts.php'; ?>
	
    </body>
</html>