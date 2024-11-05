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
								<h4>Supplier List</h4>
								<h6>Manage Your Supplier</h6>
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
							<a href="#" class="btn btn-added" data-bs-toggle="modal" data-bs-target="#add-units"><i data-feather="plus-circle" class="me-2"></i>Add New Supplier</a>
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
													<option>Choose Supplier Name</option>
													<option>Dazzle Shoes</option>
													<option>A-Z Store</option>
												</select>
											</div>
										</div>
										<div class="col-lg-3 col-sm-6 col-12">
											<div class="input-blocks">
												<i data-feather="globe" class="info-img"></i>
												<select class="select">
													<option>Choose Country</option>
													<option>Mexico</option>
													<option>Italy</option>
												</select>
											</div>
										</div>
										<div class="col-lg-6 col-sm-6 col-12">
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
											<th>Supplier Name</th>
											<th>Code</th>
											<th>E-mail</th>
											<th>Phone</th>
											<th>Address</th>
											<th class="no-sort">Action</th>
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
											<td>
												<div class="productimgname">
													<a href="javascript:void(0);" class="product-img supplier-img">
														<img src="assets/img/supplier/pmftc.png" alt="product">
													</a>
													<div>
														<a href="javascript:void(0);" class="ms-2">PMFTC Inc.</a>
													</div>
													
												</div>
											</td>
											<td>201</td>
											<td>Inquiries.PMFTC@pmi.com</td>
											<td>+63 (2) 8 816 5680</td>
											<td>The Finance Centre, 26th Street Corner 9th Avenue,<br>Bonifacio Global City (BGC), Taguig City</td>
											<td class="action-table-data">
												<div class="edit-delete-action">
													<a class="me-2 p-2 mb-0" href="javascript:void(0);">
														<i data-feather="eye" class="action-eye"></i>
													</a>
													<a class="me-2 p-2 mb-0" data-bs-toggle="modal" data-bs-target="#edit-units">
														<i data-feather="edit" class="feather-edit"></i>
													</a>
													<a class="me-2 confirm-text p-2 mb-0" href="javascript:void(0);">
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
											<td>
												<div class="productimgname">
													<a href="javascript:void(0);" class="product-img supplier-img">
														<img src="assets/img/supplier/unilever.png" alt="product">
													</a>
													<div>
														<a href="javascript:void(0);" class="ms-2">Unilever</a>
													</div>
													
												</div>
											</td>
											<td>202</td>
											<td>communications.philippines@unilever.com</td>
											<td>+63 (2) 588 8800</td>
											<td>28th Street corner 9th Avenue, Bonifacio Global City,<br>Taguig, Metro Manila, Philippines</td>
											<td class="action-table-data">
												<div class="edit-delete-action">
													<a class="me-2 p-2 mb-0" href="javascript:void(0);">
														<i data-feather="eye" class="action-eye"></i>
													</a>
													<a class="me-2 p-2 mb-0" data-bs-toggle="modal" data-bs-target="#edit-units">
														<i data-feather="edit" class="feather-edit"></i>
													</a>
													<a class="me-2 confirm-text p-2 mb-0" href="javascript:void(0);">
														<i data-feather="trash-2" class="feather-trash-2"></i>
													</a>
												</div>
											</td>
										</tr>
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

		<!-- Add Supplier -->
			<div class="modal fade" id="add-units">
				<div class="modal-dialog modal-dialog-centered custom-modal-two">
					<div class="modal-content">
						<div class="page-wrapper-new p-0">
							<div class="content">
								<div class="modal-header border-0 custom-modal-header">
									<div class="page-title">
										<h4>Add Supplier</h4>
									</div>
									<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body custom-modal-body">
									<form action="suppliers.php">
										<div class="row">
											<div class="col-lg-12">
												<div class="new-employee-field">
													<span>Avatar</span>
													<div class="profile-pic-upload mb-2">
														<div class="profile-pic">
															<span><i data-feather="plus-circle" class="plus-down-add"></i> Profile Photo</span>
														</div>
														<div class="input-blocks mb-0">
															<div class="image-upload mb-0">
																<input type="file">
																<div class="image-uploads">
																	<h4>Change Image</h4>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="col-lg-4">
												<div class="input-blocks">
													<label>Supplier Name</label>
													<input type="text" class="form-control">
												</div>
											</div>
											<div class="col-lg-4">
												<div class="input-blocks">
													<label>Email</label>
													<input type="email" class="form-control">
												</div>
											</div>
											<div class="col-lg-4">
												<div class="input-blocks">
													<label>Phone</label>
													<input type="text" class="form-control">
												</div>
											</div>
											<div class="col-lg-12">
												<div class="input-blocks">
													<label>Address</label>
													<input type="text" class="form-control">
												</div>
											</div>
											<div class="col-lg-6 col-sm-10 col-10">
												<div class="input-blocks">
													<label>City</label>
													<select class="select">
														<option>Choose</option>
														<option>Varrel</option>
													</select>
												</div>
											</div>
											<div class="col-lg-6 col-sm-10 col-10">
												<div class="input-blocks">
													<label>Country</label>
													<select class="select">
														<option>Choose</option>
														<option>Germany</option>
														<option>Mexico</option>
													</select>
												</div>
											</div>
											
											<div class="col-md-12">
												<div class="mb-0 input-blocks">
													<label class="form-label">Descriptions</label>
													<textarea class="form-control mb-1"></textarea>
													<p>Maximum 600 Characters</p>
												</div>	
											</div>
										</div>
										
										<div class="modal-footer-btn">
											<button type="button" class="btn btn-cancel me-2" data-bs-dismiss="modal">Cancel</button>
											<button type="submit" class="btn btn-submit">Submit</button>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /Add Supplier -->

		<!-- Edit Supplier -->
		<div class="modal fade" id="edit-units">
			<div class="modal-dialog modal-dialog-centered custom-modal-two">
				<div class="modal-content">
					<div class="page-wrapper-new p-0">
						<div class="content">
							<div class="modal-header border-0 custom-modal-header">
								<div class="page-title">
									<h4>Edit Supplier</h4>
								</div>
								<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body custom-modal-body">
								<form action="suppliers.php">
									<div class="row">
										<div class="col-lg-12">
											<div class="new-employee-field">
												<span>Avatar</span>
												<div class="profile-pic-upload edit-pic">
													<div class="profile-pic">
														<span><img src="assets/img/supplier/edit-supplier.jpg" alt=""></span>
														<div class="close-img">
															<i data-feather="x" class="info-img"></i>
														</div>
													</div>
													<div class="input-blocks mb-0">
														<div class="image-upload mb-0">
															<input type="file">
															<div class="image-uploads">
																<h4>Change Image</h4>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-lg-4">
											<div class="input-blocks">
												<label>Supplier Name</label>
												<input type="text" placeholder="Apex Computers">
											</div>
										</div>
										<div class="col-lg-4">
											<div class="input-blocks">
												<label>Email</label>
												<input type="email" placeholder="apexcomputers@example.com">
											</div>
										</div>
										<div class="col-lg-4">
											<div class="input-blocks">
												<label>Phone</label>
												<input type="text" placeholder="+12163547758 ">
											</div>
										</div>
										<div class="col-lg-12">
											<div class="input-blocks">
												<label>Address</label>
												<input type="text" placeholder="Budapester Strasse 2027259 ">
											</div>
										</div>
										<div class="col-lg-6 col-sm-10 col-10">
											<div class="input-blocks">
												<label>City</label>
												<select class="select">
													<option>Varrel</option>
												</select>
											</div>
										</div>
										<div class="col-lg-6 col-sm-10 col-10">
											<div class="input-blocks">
												<label>Country</label>
												<select class="select">
													<option>Germany</option>
													<option>France</option>
													<option>Mexico</option>
												</select>
											</div>
										</div>
										
										<div class="mb-0 input-blocks">
											<label class="form-label">Descriptions</label>
											<textarea class="form-control mb-1"></textarea>
											<p>Maximum 600 Characters</p>
										</div>	
									</div>
									
									<div class="modal-footer-btn">
										<button type="button" class="btn btn-cancel me-2" data-bs-dismiss="modal">Cancel</button>
										<button type="submit" class="btn btn-submit">Submit</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /Edit Supplier -->

		<?php include 'layouts/customizer.php'; ?>

		<?php include 'layouts/vendor-scripts.php'; ?>
	</body>
</html>