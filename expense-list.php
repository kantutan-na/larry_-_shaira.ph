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
								<h4>Expense List</h4>
								<h6>Manage Your Expenses</h6>
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
							<a href="#" class="btn btn-added" data-bs-toggle="modal" data-bs-target="#add-units"><i data-feather="plus-circle" class="me-2"></i> Add New Expense</a>
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
										<option>11 09 23</option>
										<option>20 09 23</option>
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
													<option>Macbook pro</option>
													<option>Orange</option>
												</select>
											</div>
										</div>
										<div class="col-lg-2 col-sm-6 col-12">
											<div class="input-blocks">
												<i data-feather="stop-circle" class="info-img"></i>
												<select class="select">
													<option>Choose Status</option>
													<option>Computers</option>
													<option>Fruits</option>
												</select>
											</div>
										</div>
										<div class="col-lg-2 col-sm-6 col-12">
											<div class="input-blocks">
												<i data-feather="calendar" class="info-img"></i>
												<div class="input-groupicon">
													<input type="text" class="datetimepicker" placeholder="From Date - To Date" >
												</div>
											</div>
										</div>
										<div class="col-lg-2 col-sm-6 col-12">
											<div class="input-blocks">
												<i data-feather="file-text" class="info-img"></i>
												<div class="input-groupicon">
													<input type="text" class="datetimepicker" placeholder="Enter Reference" >
												</div>
											</div>
										</div>
										<div class="col-lg-4 col-sm-6 col-12">
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
											<th>Category name</th>
											<th>Reference</th>
											<th>Date</th>
											<th>Status</th>
											<th>Amount</th>
											<th>Description</th>
											<th class="no-sort">Action</th>
										</tr>
									</thead>
									<tbody class="Expense-list-blk">
										<tr >
											<td>
												<label class="checkboxs">
													<input type="checkbox">
													<span class="checkmarks"></span>
												</label>
											</td>
											<td>Inventory Purchases</td>
											<td>INV001</td>
											<td>05 Jan 2024</td>
											<td><span class="badge badge-linesuccess">Active</span></td>
											<td>₱15,000</td>
											<td>Stock Refill: Soft Drinks</td>
											<td class="action-table-data">
												<div class="edit-delete-action">
													<a class="me-2 p-2 mb-0" href="javascript:void(0);">
														<i data-feather="eye" class="action-eye"></i>
													</a>
													<a class="me-2 p-2 mb-0" data-bs-toggle="modal" data-bs-target="#edit-units">
														<i data-feather="edit" class="feather-edit"></i>
													</a>
													<a class="me-3 confirm-text p-2 mb-0" href="javascript:void(0);">
														<i data-feather="trash-2" class="feather-trash-2"></i>
													</a>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<label class="checkboxs">
													<input type="checkbox">
													<span class="checkmarks"></span>
												</label>
											</td>
											<td>Transportation</td>
											<td>TRN002</td>
											<td>12 Jan 2024</td>
											<td><span class="badge badge-linesuccess">Active</span></td>
											<td>₱2,500</td>
											<td>Delivery to Store</td>
											<td class="action-table-data">
												<div class="edit-delete-action">
													<a class="me-2 p-2 mb-0" href="javascript:void(0);">
														<i data-feather="eye" class="action-eye"></i>
													</a>
													<a class="me-2 p-2 mb-0" data-bs-toggle="modal" data-bs-target="#edit-units">
														<i data-feather="edit" class="feather-edit"></i>
													</a>
													<a class="me-3 confirm-text p-2 mb-0" href="javascript:void(0);">
														<i data-feather="trash-2" class="feather-trash-2"></i>
													</a>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<label class="checkboxs">
													<input type="checkbox">
													<span class="checkmarks"></span>
												</label>
											</td>
											<td>Utility Bills</td>
											<td>UTL004</td>
											<td>22 Jan 2024</td>
											<td><span class="badge badge-linesuccess">Active</span></td>
											<td>₱1,200</td>
											<td>Electricity Bill</td>
											<td class="action-table-data">
												<div class="edit-delete-action">
													<a class="me-2 p-2 mb-0" href="javascript:void(0);">
														<i data-feather="eye" class="action-eye"></i>
													</a>
													<a class="me-2 p-2 mb-0" data-bs-toggle="modal" data-bs-target="#edit-units">
														<i data-feather="edit" class="feather-edit"></i>
													</a>
													<a class="me-3 confirm-text p-2 mb-0" href="javascript:void(0);">
														<i data-feather="trash-2" class="feather-trash-2"></i>
													</a>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<label class="checkboxs">
													<input type="checkbox">
													<span class="checkmarks"></span>
												</label>
											</td>
											<td>Rent</td>
											<td>RNT005</td>
											<td>01 Feb 2024</td>
											<td><span class="badge badge-linedanger">Inactive</span></td>
											<td>₱8,000</td>
											<td>Store Rent: February</td>
											<td class="action-table-data">
												<div class="edit-delete-action">
													<a class="me-2 p-2 mb-0" href="javascript:void(0);">
														<i data-feather="eye" class="action-eye"></i>
													</a>
													<a class="me-2 p-2 mb-0" data-bs-toggle="modal" data-bs-target="#edit-units">
														<i data-feather="edit" class="feather-edit"></i>
													</a>
													<a class="me-3 confirm-text p-2 mb-0" href="javascript:void(0);">
														<i data-feather="trash-2" class="feather-trash-2"></i>
													</a>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<label class="checkboxs">
													<input type="checkbox">
													<span class="checkmarks"></span>
												</label>
											</td>
											<td>Miscellaneous Supplies</td>
											<td>MSC006</td>
											<td>08 Feb 2024</td>
											<td><span class="badge badge-linedanger">Inactive</span></td>
											<td>₱450</td>
											<td>Cleaning Supplies</td>
											<td class="action-table-data">
												<div class="edit-delete-action">
													<a class="me-2 p-2 mb-0" href="javascript:void(0);">
														<i data-feather="eye" class="action-eye"></i>
													</a>
													<a class="me-2 p-2 mb-0" data-bs-toggle="modal" data-bs-target="#edit-units">
														<i data-feather="edit" class="feather-edit"></i>
													</a>
													<a class="me-3 confirm-text p-2 mb-0" href="javascript:void(0);">
														<i data-feather="trash-2" class="feather-trash-2"></i>
													</a>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<label class="checkboxs">
													<input type="checkbox">
													<span class="checkmarks"></span>
												</label>
											</td>
											<td>Repairs and Maintenance</td>
											<td>REP007</td>
											<td>15 Feb 2024</td>
											<td><span class="badge badge-linesuccess">Active</span></td>
											<td>₱1,500</td>
											<td>Shelf Repair</td>
											<td class="action-table-data">
												<div class="edit-delete-action">
													<a class="me-2 p-2 mb-0" href="javascript:void(0);">
														<i data-feather="eye" class="action-eye"></i>
													</a>
													<a class="me-2 p-2 mb-0" data-bs-toggle="modal" data-bs-target="#edit-units">
														<i data-feather="edit" class="feather-edit"></i>
													</a>
													<a class="me-3 confirm-text p-2 mb-0" href="javascript:void(0);">
														<i data-feather="trash-2" class="feather-trash-2"></i>
													</a>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<label class="checkboxs">
													<input type="checkbox">
													<span class="checkmarks"></span>
												</label>
											</td>
											<td>Marketing and Promotion</td>
											<td>MKT008</td>
											<td>25 Feb 2024</td>
											<td><span class="badge badge-linedanger">Inactive</span></td>
											<td>₱3,000</td>
											<td>Store Signage Ads</td>
											<td class="action-table-data">
												<div class="edit-delete-action">
													<a class="me-2 p-2 mb-0" href="javascript:void(0);">
														<i data-feather="eye" class="action-eye"></i>
													</a>
													<a class="me-2 p-2 mb-0" data-bs-toggle="modal" data-bs-target="#edit-units">
														<i data-feather="edit" class="feather-edit"></i>
													</a>
													<a class="me-3 confirm-text p-2 mb-0" href="javascript:void(0);">
														<i data-feather="trash-2" class="feather-trash-2"></i>
													</a>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<label class="checkboxs">
													<input type="checkbox">
													<span class="checkmarks"></span>
												</label>
											</td>
											<td>Packaging Materials</td>
											<td>PKG009</td>
											<td>05 Mar 2024</td>
											<td><span class="badge badge-linesuccess">Active</span></td>
											<td>₱800</td>
											<td>Packaging for Delivery</td>
											<td class="action-table-data">
												<div class="edit-delete-action">
													<a class="me-2 p-2 mb-0" href="javascript:void(0);">
														<i data-feather="eye" class="action-eye"></i>
													</a>
													<a class="me-2 p-2 mb-0" data-bs-toggle="modal" data-bs-target="#edit-units">
														<i data-feather="edit" class="feather-edit"></i>
													</a>
													<a class="me-3 confirm-text p-2 mb-0" href="javascript:void(0);">
														<i data-feather="trash-2" class="feather-trash-2"></i>
													</a>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<label class="checkboxs">
													<input type="checkbox">
													<span class="checkmarks"></span>
												</label>
											</td>
											<td>Taxes and Permits</td>
											<td>TAX010</td>
											<td>15 Mar 2024</td>
											<td><span class="badge badge-linedanger">Inactive</span></td>
											<td>₱2,000</td>
											<td>Business Permits</td>
											<td class="action-table-data">
												<div class="edit-delete-action">
													<a class="me-2 p-2 mb-0" href="javascript:void(0);">
														<i data-feather="eye" class="action-eye"></i>
													</a>
													<a class="me-2 p-2 mb-0" data-bs-toggle="modal" data-bs-target="#edit-units">
														<i data-feather="edit" class="feather-edit"></i>
													</a>
													<a class="me-3 confirm-text p-2 mb-0" href="javascript:void(0);">
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
					<!-- /product list -->
				</div>
			</div>
			<!-- Add Expense -->
			<div class="modal fade" id="add-units">
				<div class="modal-dialog modal-dialog-centered custom-modal-two">
					<div class="modal-content">
						<div class="page-wrapper-new p-0">
							<div class="content">
								<div class="modal-header border-0 custom-modal-header">
									<div class="page-title">
										<h4>Add Expense</h4>
									</div>
									<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body custom-modal-body">
									<div class="row">
										<div class="col-lg-6">
											<div class="mb-3">
												<label class="form-label">Expense Category</label>
												<select class="select">
													<option>Choose</option>
													<option>Foods & Snacks</option>
													<option>Employee Benefits</option>
												</select>
											</div>
										</div>
										<div class="col-lg-6">
											<div class="input-blocks date-group">
												<i data-feather="calendar" class="info-img"></i>
												<div class="input-groupicon">
													<input type="text" class="datetimepicker" placeholder="Choose Date" >
												</div>
											</div>
										</div>
										<div class="col-lg-6">
											<div class="mb-3">
												<label class="form-label">Amount</label>
												<input type="text" class="form-control" placeholder="$">
											</div>
										</div>
										<div class="col-lg-6">
											<div class="mb-3">
												<label class="form-label">Reference</label>
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="col-lg-12">
											<div class="mb-3">
												<label class="form-label">Expense For</label>
												<input type="text" class="form-control">
												<span class="unlimited-text">0 for Unlimited</span>
											</div>
											
										</div>								
										<!-- Editor -->
										<div class="col-md-12">
											<div class="edit-add card">
												<div class="edit-add">
													<label class="form-label">Description</label>
												</div>
												<div class="card-body-list input-blocks mb-0">
													<textarea class="form-control"></textarea>
												</div>
												<p>Maximum 600 Characters</p>
											</div>
										</div>
										<!-- /Editor -->
									</div>							
									<div class="modal-footer-btn">
										<a href="javascript:void(0);" class="btn btn-cancel me-2" data-bs-dismiss="modal">Cancel</a>
										<a href="expense-list.php" class="btn btn-submit">Submit</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /Add Expense -->

    </div>
<!-- end main Wrapper-->
<!-- Edit Expense -->
<div class="modal fade" id="edit-units">
			<div class="modal-dialog modal-dialog-centered custom-modal-two">
				<div class="modal-content">
					<div class="page-wrapper-new p-0">
						<div class="content">
							<div class="modal-header border-0 custom-modal-header">
								<div class="page-title">
									<h4>Edit Expense</h4>
								</div>
								<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body custom-modal-body">
								<form action="expense-list.php">
									<div class="row">
										<div class="col-lg-6">
											<div class="mb-3">
												<label class="form-label">Expense Category</label>
												<select class="select">
													<option>Employee Benefits</option>
													<option>Foods & Snacks</option>
													<option>Entertainment</option>
												</select>
											</div>
										</div>
										<div class="col-lg-6">
											<div class="input-blocks date-group">
												<i data-feather="calendar" class="info-img"></i>
												<div class="input-groupicon">
													<input type="text" class="datetimepicker ps-5" placeholder="19 Jan 2023" >
												</div>
											</div>
										</div>
										<div class="col-lg-6">
											<div class="mb-3">
												<label class="form-label">Amount</label>
												<input type="text" class="form-control" value="$550.00">
											</div>
										</div>
										<div class="col-lg-6">
											<div class="mb-3">
												<label class="form-label">Reference</label>
												<input type="text" class="form-control" value="55544">
											</div>
										</div>
										<div class="col-lg-12">
											<div class="mb-3 input-blocks">
												<label class="form-label">Expense For</label>
												<input type="text" class="form-control">
												<span class="unlimited-text">0 for Unlimited</span>
											</div>
											
										</div>								
										<!-- Editor -->
										<div class="col-md-12">
											<div class="edit-add card">
												<div class="edit-add">
													<label class="form-label">Description</label>
												</div>
												<div class="card-body-list input-blocks mb-0">
													<textarea class="form-control">Employee Vehicle</textarea>
												</div>
												<p>Maximum 600 Characters</p>
											</div>
										</div>
										<!-- /Editor -->
									</div>
									<div class="modal-footer-btn">
										<button type="button" class="btn btn-cancel me-2" data-bs-dismiss="modal">Cancel</button>
										<button type="submit" class="btn btn-submit">Save Changes</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /Edit Expense -->
<?php include 'layouts/customizer.php'; ?>
<!-- JAVASCRIPT -->
<?php include 'layouts/vendor-scripts.php'; ?>
</body>
</html>